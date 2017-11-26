    <head><link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
</head>
<?php
require '../config/config.php';


session_start();
$username=$_SESSION['logged_in'];
			

        date_default_timezone_set('Asia/Kolkata');

    // Then call the date functions
    $date = date('Y-m-d');

$result=mysqli_query($conn,"SELECT * from addList");

while($row=mysqli_fetch_assoc($result))
{
   
    $medid=$row["med_id"];
    $uid=$row["uid"];
    $qua=$row["quantity"];
  $result_insert=mysqli_query($conn,"INSERT into epyon_purchase(medicine_id,user_id,transaction_date,count) values('$medid','$uid','$date',$qua)");
  $result_update=mysqli_query($conn,"UPDATE medicine_stock set count=count-$qua where medicine_id='$medid' and user_id='$uid'  count-$qua");
  $result_trunc=mysqli_query($conn,"TRUNCATE table addList");



}



header("Location:../pages/phCheckOutView.php");


?>
