<?php
session_start();
header('Content-Type: application/json');

$filename = 'draw.json';

// Initialize the file if it doesn't exist
if (!file_exists($filename)) {
    file_put_contents($filename, json_encode([]));
}

$data = json_decode(file_get_contents($filename), true);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $postData = json_decode(file_get_contents('php://input'), true);
    if (isset($postData['lines'])) {
        $data = array_merge($data, $postData['lines']);
        file_put_contents($filename, json_encode($data));
    } elseif (isset($postData['clear'])) {
        $data = [];
        file_put_contents($filename, json_encode($data));
    }
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode($data);
}
?>
