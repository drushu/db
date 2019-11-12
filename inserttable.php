<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Aero";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$usn = $_POST['usn'];
$name = $_POST['name'];
$age = $_POST['age'];
$session = $_POST['session'];
$date = $_POST['date'];
$status=$_POST['status'];
$gender = $_POST['gender'];




$sql = "INSERT INTO student(usn,name,age,gender,status,session,date) VALUES ('$usn','$name','$age','$gender','$status','$session','$date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 