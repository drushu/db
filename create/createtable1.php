 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="Aero";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE student (
usn VARCHAR(30) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
age INT(30) NOT NULL,
gender VARCHAR(30) NOT NULL,
status VARCHAR(20) NOT NULL,
session VARCHAR(20) NOT NULL,
date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Mydetail created successfully";
} else {

    echo "Error creating table: " . $conn->error;
}
