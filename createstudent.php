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
$sql = "CREATE TABLE student (
usn VARCHAR(10) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
branch VARCHAR(20) NOT NULL,
sem INT NOT NULL,
section VARCHAR(10) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Mydetail created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
