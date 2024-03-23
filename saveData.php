<?php
$servername = "localhost";
$username = "user"; 
$password = "1234"; 
$dbname = "sensorData"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$gas = $_GET['gas'];
$heart_rate = $_GET['heart_rate'];
$temperature = $_GET['temperature'];
$humidity = $_GET['humidity'];


$sql = "INSERT INTO SensorData (gas, heart_rate, temperature, humidity)
VALUES ('$gas', '$heart_rate', '$temperature', '$humidity')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
