<?php
require "../config/config.php";

session_start();
$user_id=$_SESSION['logged_in'];
$medicine_name_temp=$_POST['medicine_name'];
$sql_fetch_id="SELECT medicine_id from medicine where medicine_name='$medicine_name_temp'";

$result_fetch_id=mysqli_query($conn,$sql_fetch_id);
if($row_fetch_id=mysqli_fetch_assoc($result_fetch_id))
{
	$medicineid=$row_fetch_id['medicine_id'];
	$sql_price="SELECT price from medicine_stock where  user_id='$user_id' and medicine_id='$medicineid'";
	$result_price=mysqli_query($conn,$sql_price);

	if($row_price=mysqli_fetch_assoc($result_price))
	{
		echo $row_price['price'];
	}	
	else
	{
		echo 0.0;
	}
}
else
{
	echo "No medicine id"	;
}
			
?>