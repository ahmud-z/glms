<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'classes/Database.php';

    $user_id = $_SESSION['current_user_id'];

    $code = $_POST['code'];

    $db = new Database();

    $class = $db->query("SELECT * FROM classes WHERE code = ?;", [
        $code
    ])->fetch();

    if (empty($class)) {
        redirectWithError('/join-class', 'No class found with this code.');
    }

    $class_id = $class['id'];

    $db->query("INSERT INTO class_students (class_id, user_id) VALUES (?, ?);", [
        $class_id, $user_id
    ]);

    redirect("/class-details?id={$class_id}");
}

require 'views/join-class.view.php';
