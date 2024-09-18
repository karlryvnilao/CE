<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    include "conn.php"; // Assuming your database connection file is named "db_connection.php"

    // Escape user inputs for security (No need for escaping with PDO prepared statements)
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare SQL statement
    $sql = "INSERT INTO contact (name, email, subject, message) VALUES (:name, :email, :subject, :message)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':message', $message);

    // Execute query
    if ($stmt->execute()) {
        // Redirect to index.php
        header("Location: index.php");
        exit(); // Make sure to exit after redirecting
    } else {
        echo "Error: " . $sql . "<br>" . $stmt->errorInfo()[2];
    }
}
?>
