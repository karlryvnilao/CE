<?php

// Get the JSON data from the AJAX request
$data = json_decode($_POST['data'], true);

// Extract data
$task_id = $data['task_id'];
$exmneFName = $data['exmneFName'];
$answer = $data['answer'];

// Insert data into the database (replace with your actual database logic)
// Example using PDO
$host = "localhost";
$user = "root";
$pass = "";
$db = "cee_db";

try {
    $conn = new PDO("mysql:host={$host};dbname={$db};", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Your SQL query to insert data
    $sql = "INSERT INTO usertask_tbl (task_id, exmne_fullname, usertask_answer) VALUES (:task_id, :exmneFName, :answer)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':task_id', $task_id);
    $stmt->bindParam(':exmneFName', $exmneFName);
    $stmt->bindParam(':answer', $answer);
    $stmt->execute();

    echo "Data inserted successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>