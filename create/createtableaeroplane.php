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
$sql = "CREATE TABLE faculty (
fid VARCHAR(20) PRIMARY KEY,
name VARCHAR(20) NOT NULL,
gender VARCHAR(10) NOT NULL,
salary VARCHAR(30) NOT NULL,
experience VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Mydetail created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
