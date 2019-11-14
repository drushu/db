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

$usn = $_POST['usn'];
$status = $_POST['status'];
$session = $_POST['session'];
$date= $_POST['date'];

$sql = "INSERT INTO attendance(usn,status,session,date) VALUES ('$usn','$status','$session','$date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 