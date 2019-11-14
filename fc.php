<html>
<head>
<title>Display</title>
 <style type="text/css">
 body{
	background-image:url("new.jpg");
	background-size: cover;}
	h1 {color:black;}
		h1 {background-color:orange;}
		h1 {text-align:center;}
		
		h3 > a {color:green;
				font-size:15px;}
		</style>
</head>

<body>
<form action="insert.html" method="post">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "training";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "Select * from faculty";
$result = $conn->query($sql);
   echo "<table border='2' bordercolor='black' width='100%'>
<tr>
<th>Faculty Id</th>
<th>Name</th>
<th>Gender</th>
<th>Salary</th>
<th>Experience</th>
</tr></center>";
while($row = mysqli_fetch_array($result))
{
echo "<tr> <td>" . $row['fid'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['salary'] . "</td>";
echo "<td>" . $row['experience'] . "</td>";

"</tr> ";
};
echo "</table>";
?>
</body>
</html>