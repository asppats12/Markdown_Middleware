<?php

require "init.php";

$username = $_POST["username"];
$shop_name = $_POST["shop_name"];
$shop_address = $_POST["shop_address"];
$shop_city = $_POST["shop_city"];
$shop_state = $_POST["shop_state"];
$shop_pin = $_POST["shop_pin"];
$shop_tele = $_POST["shop_tele"];

$shop_query = "insert into shop_details values('','$username','$shop_name','$shop_address','$shop_city','$shop_state','$shop_pin','$shop_tele');";


if(mysqli_query($con,$shop_query))
{
	echo "Shop Registered";
}
else
{
	echo "Error Occurred";
}


?>