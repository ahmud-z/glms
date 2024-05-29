<?php

require_once 'classes/Database.php';

$user_id = $_SESSION['current_user_id'];
$post_id = $_GET['id'];

$db = new Database();

$post = $db->query("SELECT * FROM class_posts WHERE id = ?;", [
    $post_id
])->fetch();

if (empty($post) || $post['user_id'] != $user_id) {
    abort(404);
}

$db->query("DELETE FROM class_posts WHERE id = ?;", [
    $post_id
]);

$class_id = $post['class_id'];

redirect("/class-details?id={$class_id}");
