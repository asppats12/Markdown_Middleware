<?php

require "init.php";


$sale_result = mysqli_query($con,"SELECT * FROM sales_details;");


while($sale_row = mysqli_fetch_assoc($sale_result))
{
	$sale_output[]=$sale_row;
	$username = $sale_row["username"];
	$shop_result = mysqli_query($con,"SELECT * FROM shop_details WHERE username like '$username';");
	$shop_row = mysqli_fetch_assoc($shop_result);
	$shop_output[]=$shop_row;
	
}


echo json_encode(array("Sales"=>$sale_output,"Shop"=>$shop_output));


?>