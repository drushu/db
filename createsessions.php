 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="training";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE sessions (
session INT PRIMARY KEY,
date DATE NOT NULL,
from_time TIME NOT NULL,
to_time TIME NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Mydetail created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
