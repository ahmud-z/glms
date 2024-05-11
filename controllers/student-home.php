<?php

require_once 'classes/Database.php';

$db = new Database();

$student_id = $_SESSION['current_user_id'];

$classes = $db->query("
    SELECT classes.*, users.name as teacher_name FROM classes
    INNER JOIN users ON users.id = classes.teacher_id
    INNER JOIN class_students ON class_students.class_id = classes.id
    WHERE class_students.user_id = ?
    ORDER BY name;", [$student_id])->fetchAll();

require 'views/student-home.view.php';
