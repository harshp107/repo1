<?php
$server="localhost";
$db="mysite";
$user="root";
$pass="";
$conn=mysqli_connect($server,$user,$pass,$db);
if($conn)
{
echo "db is connected";}
else
	echo "not connected";
	
?>