<?php

require_once 'classes/Database.php';

$db = new Database();

if (!isset($_GET['id'])) {
    abort();
}

$class = $db->query("SELECT * FROM classes WHERE id = ?;", [$_GET['id']])->fetch();

if (empty($class)) {
    abort();
}

$results = $db->query("
    SELECT class_posts.*, users.name AS user_name, users.type AS user_type, class_post_attachments.path as attachment_path
    FROM class_posts 
    INNER JOIN users ON users.id = class_posts.user_id
    LEFT JOIN class_post_attachments ON class_post_attachments.class_post_id = class_posts.id
    WHERE class_posts.class_id = ?
    ORDER BY class_posts.id DESC;", [$_GET['id']])->fetchAll();

$posts = [];

foreach ($results as $row) {
    $postId = $row['id'];

    if (!isset($posts[$postId])) {
        $posts[$postId] = [
            'id' => $row['id'],
            'content' => $row['content'],
            'user_id' => $row['user_id'],
            'user_name' => $row['user_name'],
            'user_type' => $row['user_type'],
            'created_at' => $row['created_at'],
            'attachments' => []
        ];
    }

    if (!empty($row['attachment_path'])) {
        $posts[$postId]['attachments'][] = $row['attachment_path'];
    }
}

require 'views/class-details.view.php';
