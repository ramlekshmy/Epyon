<?php
require "../config/config.php";   
	$locId = $_POST['locId'];
    $result=mysqli_query($conn,"select ep1.medicine_id, sum(ep1.count) as count, m1.medicine_name from `medicine` m1 JOIN `epyon_purchase` ep1 where ep1.user_id IN(select u1.user_id from `epyon_user` u1 where u1.user_location='$locId') GROUP by ep1.medicine_id");
    $trun=mysqli_query($conn,"TRUNCATE table med_by_loc");
    $i = 0;
    while($row = mysqli_fetch_assoc($result)) {
    	print_r($row);
    	$med_id = $row['medicine_id'];
    	$res = mysqli_query($conn, "select medicine_name from `medicine` where medicine_id='$med_id'");
    	if($name = mysqli_fetch_assoc($res)) {
    		$n = $name['medicine_name'];
    		$count = $row['count'];
    		$sq = mysqli_query($conn, "INSERT INTO `med_by_loc` (medicine_id, med_name, count) values('$med_id', '$n', '$count')");
    	}
    	

    }
                  
?>