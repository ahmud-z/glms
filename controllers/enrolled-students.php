<?php 

include 'classes/Database.php';

$db = new Database();

$enrolledStudents = $db->query("SELECT users.name, users.email FROM class_students INNER JOIN users ON users.id = class_students.user_id WHERE class_students.class_id = ?;", [$_GET['class_id']])
    ->fetchAll();


require 'views/enrolled-students.view.php';