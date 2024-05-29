<?php

require_once 'classes/Database.php';

$db = new Database();

$teacher_id = 1;

$classes = $db->query("
    SELECT classes.*, users.name as teacher_name FROM classes
    INNER JOIN users ON users.id = classes.teacher_id
    WHERE classes.teacher_id = ?
    ORDER BY name;", [$teacher_id])->fetchAll();

require 'views/teacher-home.view.php';
