<?php

require "init.php";

$username = $_POST["username"];
$saletitle = $_POST["saletitle"];
$saledesc = $_POST["saledesc"];
$startdate = $_POST["startdate"];
$lastdate = $_POST["lastdate"];

$shop_query = "insert into sales_details values('','$username','$saletitle','$saledesc','$startdate','$lastdate');";


if(mysqli_query($con,$shop_query))
{
	echo "Sale Submitted";
}
else
{
	echo "Error Occurred";
}


?>