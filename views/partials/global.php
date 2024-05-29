<?php

require_once 'classes/Database.php';

$db = new Database();

if (isset($_SESSION['current_user_id'])) {
    $auth_user = $db
        ->query("SELECT * FROM users WHERE id = ?;", [$_SESSION["current_user_id"]])
        ->fetch();
}
