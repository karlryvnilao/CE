<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $data = array('text' => '');

    if (file_exists('text.txt')) {
        $data['text'] = file_get_contents('text.txt');
    }

    echo json_encode($data);
} else {
    $data = array('status' => 'error', 'message' => 'Invalid request method');
    echo json_encode($data);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOX Editor</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <textarea id="editor" rows="10" cols="50"></textarea>
    <button onclick="saveText()">Save</button>
    <button onclick="loadText()">Load</button>

    <script>
        function saveText() {
            var text = $("#editor").val();
            $.ajax({
                type: "POST",
                url: "save.php",
                data: { text: text },
                success: function(response) {
                    alert("Text saved successfully!");
                },
                error: function(error) {
                    console.error("Error saving text: ", error);
                }
            });
        }

        function loadText() {
            $.ajax({
                type: "GET",
                url: "upload.php",
                success: function(response) {
                    $("#editor").val(response.text);
                },
                error: function(error) {
                    console.error("Error loading text: ", error);
                }
            });
        }
    </script>
</body>
</html>
