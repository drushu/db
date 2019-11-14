<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "training";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}
$session = $_POST['session'];
$date = $_POST['date'];
$from_time = $_POST['from_time'];
$to_time= $_POST['to_time'];

$sql = "INSERT INTO sessions(session,date,from_time,to_time) VALUES ('$session','$date','$from_time','$to_time')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 