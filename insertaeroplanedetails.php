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


$fid=$_POST["fid"];
$name=$_POST["name"];
$gender=$_POST["gender"];
$salary=$_POST["salary"];
$experience=$_POST["experience"];



$sql = "INSERT INTO faculty(fid,experience,name,gender,salary) 
VALUES('".$fid."','".$experience."','".$name."','".$gender."','".$salary."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 




