<?php

include("classes/Database.php");


$db = new Database();

$class_id =  $_GET['id'];
$code = generateUniqueCode();

$db->execute("INSERT INTO whiteboards (class_id, code) VALUES(?, ?);", [$class_id, $code]);

redirect("/whiteboard?code={$code}");