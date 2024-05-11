<?php

require_once 'classes/Database.php';

$db = new Database();

if (!isset($_GET['id'])) {
    abort();
}

$class = $db->query("SELECT * FROM classes WHERE id = ?;", [$_GET['id']])->fetch();

$posts = $db->query("
    SELECT class_posts.*, users.name AS user_name 
    FROM class_posts 
    INNER JOIN users ON users.id = class_posts.user_id
    WHERE class_posts.class_id = ?
    ORDER BY class_posts.id DESC;", [$_GET['id']])->fetchAll();

if (empty($class)) {
    abort();
}

require 'views/class-details.view.php';
