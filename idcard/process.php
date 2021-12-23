<?php
$servername="localhost";
$username="username";
$password="root";
$dbname="data";
$conn = new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error){
 	die("connnection failed:".$conn->connect_error);
}
echo "connection successfully;";
if (isset($_POST[save])) 
{
	$name = $_POST[name];
	$location = $_POST[location];
	$mysqli->query("INSER INTO data (name,location) VALUES('$name','$location')") or die($mysqli->error);
	# code...
}

?>