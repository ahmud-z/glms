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

    $results = $db->query("SELECT * FROM users where id = ?", [$_SESSION['current_user_id']])->fetch();

    return $results;
}

function getCurrentUserId() {
    return $_SESSION['current_user_id'];
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

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime();
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function random_color() {
    $r = mt_rand(20, 127);   // R 0 and 127 (darker)
    $g = mt_rand(100, 255); // G 127 and 255 (brighter)
    $b = mt_rand(120, 255); // B 127 and 255 (brighter)
    
    return sprintf('#%02X%02X%02X', $r, $g, $b);
}
