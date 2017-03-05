<?php
require "init.php";

$username = $_POST["login_name"];
$userpass = $_POST["login_pass"];
if($userpass==null||$userpass==null)
{
	echo "Username & Password required";
	return;
}

$sql_query = "select Name, type from user_details where username like '$username' and password like '$userpass';";

$result = mysqli_query($con,$sql_query);

if(mysqli_num_rows($result)>0)
{
	$row = mysqli_fetch_assoc($result);
	$type = $row["type"];
	$name = $row["Name"];
	echo "Login Successful.. Welcome ". $name . " ".$type;
}
else
{
	echo "Error Occurred";
}

?>