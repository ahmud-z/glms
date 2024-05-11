<?php

require_once 'classes/Database.php';
require_once 'include/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $teacher_id = 1;
    $code = time(); // Should be auto generated id

    $name = $_POST['name'];
    $section = $_POST['section'];
    $subject = $_POST['subject'];
    $room = $_POST['room'];

    $db = new Database();

    $db->query("INSERT INTO classes (teacher_id, code, name, section, subject, room) VALUES (?, ?, ?, ?, ?, ?);", [
        $teacher_id, $code, $name, $section, $subject, $room
    ]);

    $class_id = $db->lastInsertId();

    redirect("/class-details?id={$class_id}");
}

require 'views/create-class.view.php';
