<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expertId = $_POST["expertId"];
    $date = $_POST["date"];

    // Assuming you have a database connection
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "greendhaka";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO appointments (expert_id, appointment_date) VALUES ('$expertId', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "Appointment requested successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request!";
}
?>
