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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];

    if (!empty($message)) {
        $username = $_SESSION['email'];

        $stmt = $mysqli->prepare("INSERT INTO messages (username, message) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $message);
        $stmt->execute();
        $stmt->close();

        
        $result = $mysqli->query("SELECT * FROM messages ORDER BY timestamp DESC LIMIT 1");
        $data = $result->fetch_assoc();
        $result->close();

        echo json_encode($data);
    }
}

$mysqli->close();
?>
