<?php
extract($_POST);

$res = array("res" => "failed");

$conn = new mysqli("localhost", "root", "", "cee_db");



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_POST['title'];
$description = $_POST['description'];

$targetDir = "../uploads/";
$targetFile = $targetDir . uniqid() . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));


// File upload handling
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        $res = array("res" => "failed", "msg" =>  "File is an image - " . $check["mime"] . ".");
        $uploadOk = 1;
    } else {
        $res == array("res" => "failed", "msg" => "File is not an image.");
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($targetFile)) {
    $res == array("res" => "failed", "msg" => "Sorry, file already exists.");
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $res == array("res" => "failed", "msg" => "Sorry, your file is too large.");
    $uploadOk = 0;
}

// Allow certain file formats
$allowedFormats = ["jpg", "jpeg", "png", "gif", "docx", "pdf", "pptx"];
if (!in_array($imageFileType, $allowedFormats)) {

    $res == array("res" => "failed", "msg" => "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.");
    $uploadOk = 0;
}

// Continue with database insertion if file upload checks pass
if ($uploadOk == 0) {
    $res == array("res" => "failed", "msg" => "Sorry, your file was not uploaded.");
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        $mdltitle = $conn->query("SELECT * FROM module_tbl WHERE title='$title' ");

        if ($mdltitle->num_rows > 0) {
            $res = array("res" => "titleexist", "msg" => $title);
        } else {
            $insMdl = $conn->query("INSERT INTO module_tbl(title, description, file_name) VALUES('$title','$description', '$targetFile')");

            if ($insMdl) {
                $res = array("res" => "success", "msg" => $title);
            } else {
                $res = array("res" => "failed", "msg" => "title=$title targetfile = $targetFile");
            }
        }
    } else {
        $res = array("res" => "failed", "msg" => "Sorry, there was an error uploading your file.");
    }
}

echo json_encode($res);

$conn->close();
?>
