<?php
$servername="localhost";
$username="root";
$password="";
$dbname="int";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("connectionfailed:".$conn->connect_error);
}
else {
	echo "connection successfully";
}
$id=$_GET['id'];

$delete = "DELETE from mobileslider WHERE id='$id'";
$run_update=mysqli_query($conn, $delete);
header("Location: mobilesliderrec.php");

?>