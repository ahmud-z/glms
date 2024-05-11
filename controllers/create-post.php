<?php

require_once 'classes/Database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = 1;
    $class_id = $_POST['class_id'];
    $content = $_POST['content'];
    $created_at = date('Y-m-d h:i:s');

    $db = new Database();

    $db->query("INSERT INTO class_posts (user_id,class_id,content,created_at) VALUES (?, ?, ?, ?);", [
        $user_id, $class_id, $content, $created_at
    ]);

    redirect("/class-details?id={$class_id}");
}
