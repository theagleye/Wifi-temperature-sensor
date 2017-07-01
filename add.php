<?php
$temp = $_GET['temp'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thermometer";

// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$val = $_GET['temp'];
$sql = "INSERT INTO temps(temp) VALUES ($val);";

if ($conn->query($sql) === TRUE) {
    echo "Temperature Saved Successfully!";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>