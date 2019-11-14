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
$sql = "Select * from student";
$result = $conn->query($sql);
   echo "<table border='2' bordercolor='black' width='100%'>
<tr>
<th>USN</th>
<th>Name</th>
<th>Branch</th>
<th>Sem</th>
<th>Section</th>
<th>Address</th>
<th></th>
</tr></center>";
while($row = mysqli_fetch_array($result))
{
echo "<tr> <td>" . $row['usn'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['sem'] . "</td>";
echo "<td>" . $row['section'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
"</tr> ";
};
echo "</table>";
?>
</body>
</html>