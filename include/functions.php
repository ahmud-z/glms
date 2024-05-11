<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
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
