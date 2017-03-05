<?php

require "init.php";


$delete_res = mysqli_query($con,"DELETE FROM sales_details WHERE lastdate < CURDATE();");
if($delete_res === TRUE)
{
	echo "Delete Successful";
}


?>