<?php

function dd($value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    
    die();
}

function urlIs(string $path) : bool {
    return $_SERVER['REQUEST_URI'] == $path;
}

function redirect($location)
{
    header("Location: $location");
}

function redirectWithError($location, $message = '')
{
    header("Location: $location?error=$message");
}

function redirectWithSuccess($location, $message = '')
{
    header("Location: $location?success=$message");
}

function getCurrentUser()
{
    $db = new Database();

    $results = $db->query("SELECT * FROM users where id = ?", [$_SESSION['current_user_id']]);

    return $results[0];
}

function generateUniqueCode($length = 6) {
    // Define the characters to be used in the code
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $uniqueCode = '';

    // Loop to create the code of the specified length
    for ($i = 0; $i < $length; $i++) {
        $uniqueCode .= $characters[rand(0, $charactersLength - 1)];
    }

    return strtoupper($uniqueCode);
}