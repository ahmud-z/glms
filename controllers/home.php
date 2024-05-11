<?php

require_once 'classes/Database.php';

if (!isset($_SESSION['is_logged_in'])) {
    redirect('/login');
}

$db = new Database();

$user = $db->query("SELECT * FROM users WHERE id = ?;", [$_SESSION['current_user_id']])->fetch();

if (empty($user)) {
    redirect('/login');
}

if ($user['type'] == 'student') {
    require 'controllers/student-home.php';
} else {
    require 'controllers/teacher-home.php';
}
