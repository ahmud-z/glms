<?php
include_once 'classes/Database.php';

if (isset($_SESSION['is_logged_in'])) {
    redirect('/');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Hash plain text password to md5
    $type = $_POST['type'];

    $results = $db->query("SELECT COUNT(*) as total_found FROM users WHERE email = ?;", [$email])->fetch();

    if ($results['total_found'] == 0) {
        $db->query("INSERT INTO users (name, email, password, type) VALUES (?, ?, ?, ?);", [$name, $email, $password, $type]);

        $_SESSION['is_logged_in'] = true;
        $_SESSION['current_user_id'] = $db->lastInsertId();

        redirect('/');
    } else {
        redirectWithError('/register', 'Already have an account associated with this email.');
    }
}

require 'views/register.view.php';