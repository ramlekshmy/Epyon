<?php
require "../config/config.php"; 

// username and password sent from form 
$user_name = mysqli_escape_string($conn,$_POST['username']);
$pass_word = mysqli_escape_string($conn,$_POST['password']); 
$sql = "SELECT user_id, user_type FROM epyon_user WHERE user_name = '$user_name' and user_password = '$pass_word'";
if($result=mysqli_query($conn,$sql))
{
  if($result->num_rows > 0)
  {
    if($row=mysqli_fetch_assoc($result))
    {
      if($row['user_type'] == 1)
      {
        session_start();
        $_SESSION['logged_in'] = $row['user_id'];
        $_SESSION['logged_in_type'] = $row['user_type'];
        header("location: ../pages/phCheckOutView.php");  
      }
      if($row['user_type'] == 0)
      {
        session_start();
        $_SESSION['logged_in'] = $row['user_id'];
        $_SESSION['logged_in_type'] = $row['user_type'];
        header("location: ../pages/rdDashboard.php");  
      }
    }
    else
    {
      echo "Data missing in table: epyon_user";
    }
  }
  else
  {
    //TODO: Create alert
   $error = "Please check your username or password";
   echo $error;
 }
}
?>