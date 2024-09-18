<?php
// Include your database connection code here
include('./conn.php'); // Include your actual database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  try {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $bdate = $_POST['bdate'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $year_level = $_POST['year_level'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Perform the database insertion
    $query = "INSERT INTO examinee_tbl (fullname, bdate, gender, course, year_level, email, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$fullname, $bdate, $gender, $course, $year_level, $email, $password]);

    // For demonstration purposes, just echo a success message
    echo 'Examinee added successfully!';
  } catch (PDOException $e) {
    // Handle database errors
    echo 'Error: ' . $e->getMessage();
  }
} else {
  // If the request method is not POST, return an error message
  echo 'Invalid request method!';
}
?>
