<?php

include 'classes/Database.php';

$class_id = $_GET['class_id'];
$user_id = getCurrentUserId();

$db = new Database();

$db->execute('DELETE FROM class_students WHERE class_id = ? AND user_id = ?', [$class_id, $user_id]);


redirect('/');