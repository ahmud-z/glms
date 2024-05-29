<?php

require_once 'classes/Database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user_id = $_SESSION['current_user_id'];
    $class_id = $_POST['class_id'];
    $content = $_POST['content'];
    $created_at = date('Y-m-d h:i:s');

    $db = new Database();

    $db->query("INSERT INTO class_posts (user_id,class_id,content,created_at) VALUES (?, ?, ?, ?);", [
        $user_id, $class_id, $content, $created_at
    ]);

    $class_post_id = $db->lastInsertId();

    foreach ($_FILES['files']['tmp_name'] as $index => $tmp_location) {
        if(empty($tmp_location)) {
            continue;
        }

        $path = 'uploads/' . $_FILES['files']['name'][$index];

        move_uploaded_file($tmp_location, $path);
        
        $db->query("INSERT INTO class_post_attachments (class_post_id, path) VALUES (?, ?);", [
            $class_post_id, $path
        ]);
    }

    redirect("/class-details?id={$class_id}");
}
