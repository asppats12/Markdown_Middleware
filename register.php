<?php

require "init.php";

$name = $_POST["name"];
$username = $_POST["username"];
$userpass = $_POST["password"];
$user_type = $_POST["user_type"];

$sql_query = "insert into user_details values('$username','$name','$userpass','$user_type');";

if(mysqli_query($con,$sql_query))
{
	echo "User Registration Successful";
}
else
{
	echo "Error Occurred";
}


?>