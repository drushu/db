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


$fid=$_POST["fid"];
$name=$_POST["name"];
$gender=$_POST["gender"];
$salary=$_POST["salary"];
$experience=$_POST["experience"];



$sql = "INSERT INTO faculty(fid,name,gender,salary,experience) VALUES('".$fid."','".$name."','".$gender."','".$salary."','".$experience"'.)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 




