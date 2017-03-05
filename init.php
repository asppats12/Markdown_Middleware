<?php 

$db_name = "webapp";
$username = "root";
$userpass = "";
$servername = "localhost";

$con = mysqli_connect($servername,$username,$userpass,$db_name);

if($con)
{
	#echo "Connection Established";
}
else
{
	die("Connection failed");
}

?>