<?php

require_once 'include/functions.php';
require_once 'classes/Database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();

    $users = $db->query("SELECT * FROM users WHERE email = ?;", [ $_POST['email'] ])->fetchAll(PDO::FETCH_ASSOC);

    if (count($users) === 0) {
        redirectWithError("/login", "Credentials didnt match.");
    }

    $user = $users[0];

    if ($_POST['email'] == $user['email'] && md5($_POST['password']) == $user['password']) {
        $_SESSION['is_logged_in'] = true;
        $_SESSION['current_user_id'] = $user['id'];

        redirect('/');
    }
}

require 'views/login.view.php';