<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$usn = $_POST['usn'];
$name = $_POST['name'];
$branch = $_POST['branch'];
$sem= $_POST['sem'];
$section = $_POST['section'];
$address=$_POST['address'];




$sql = "INSERT INTO student(usn,name,branch,sem,section,address) VALUES ('$usn','$name','$branch','$sem','$section','$address')";

if ($conn->query($sql) === TRUE) {
    echo "New student record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 