<?php
require "../config/config.php"; 

// username and password sent from form 
$user_name = mysqli_escape_string($conn,$_POST['username']);
$pass_word = mysqli_escape_string($conn,$_POST['password']); 
$sql = "SELECT user_id, user_type FROM epyon_user WHERE user_name = '$user_name' and user_password = '$pass_word'";
if($row=mysqli_fetch_assoc(mysqli_query($conn,$sql)))
{
  if($row['user_type'] == 1)
  {
    session_start();
    $_SESSION['logged_in'] = $row['user_id'];
    header("location:../pages/phCheckOutView.php");  
  }
  if($row['user_type'] == 0)
  {
    session_start();
    $_SESSION['logged_in'] = $row['user_id'];
    header("location:../pages/researcherHome.php");  
  }
}
else
{
  //TODO: Create alert
 $error = "Please check your username or password";
 echo $error;
}
?>