<?php
session_start();
    if(!isset($_SESSION['valid'])){
        header('location: login.php');
    }

$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'greendhaka';

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM messages ORDER BY timestamp DESC");
$messages = array();

while ($row = $result->fetch_assoc()) {
    $messages[] = $row;
}

echo json_encode($messages);

$mysqli->close();
?>
