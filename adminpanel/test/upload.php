<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'];

    // You can perform additional validation and sanitization here

    $data = array('status' => 'success');
    file_put_contents('text.txt', $text);

    echo json_encode($data);
} else {
    $data = array('status' => 'error', 'message' => 'Invalid request method');
    echo json_encode($data);
}
?>
