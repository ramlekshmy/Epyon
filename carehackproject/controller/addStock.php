<?php
require "../config/config.php";
session_start();

$userid=$_SESSION['logged_in'];
$medicine_name = mysqli_escape_string($conn,$_POST['medicine_name']);
$count = mysqli_escape_string($conn,$_POST['medicine_count']); 
$price = mysqli_escape_string($conn,$_POST['medicine_price']); 

$result=mysqli_query($conn,"SELECT medicine_id from medicine where medicine_name='$medicine_name'");

if($row=mysqli_fetch_assoc($result))
{
 $temp=$row["medicine_id"];

 $result_check=mysqli_query($conn,"SELECT * from medicine_stock where user_id='$userid' and medicine_id='$temp'");
  if($row1=mysqli_fetch_assoc($result_check))
  {
  $result_add=mysqli_query($conn,"UPDATE medicine_stock set count='$count',price='$price' where user_id='$userid' and medicine_id='$temp'");
  }
  else
  {
     $result_add=mysqli_query($conn,"INSERT into medicine_stock(user_id,medicine_id,count,price) values('$userid','$temp','$count','$price')");	
}
}else{
  echo "Cannot find medicine id";
}
if($result_add)
{
  header("Location:../pages/phAddStockView.php");
}
?>