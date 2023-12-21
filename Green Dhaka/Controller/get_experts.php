<?php
// Assuming you have a database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "greendhaka";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name FROM experts";
$result = $conn->query($sql);

$experts = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $experts[] = $row;
    }
}

$conn->close();

echo json_encode($experts);
?>
