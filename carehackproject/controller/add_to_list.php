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
			
           $name = $_POST['name']; 
           $quantity = $_POST['quantity']; 
        $resultName=mysqli_query($conn,"SELECT user_id from epyon_user where user_id='$username'");
        if($rowName=mysqli_fetch_assoc($resultName))
        {
        	$userid=$rowName['user_id'];
        }

          $resultId=mysqli_query($conn,"SELECT medicine_id from medicine where medicine_name='$name'");
          if($rowId=mysqli_fetch_assoc($resultId))
          {
          		$id=$rowId['medicine_id'];
          }
          else
        {
        	echo "error";
        }
          $resultPrice=mysqli_query($conn,"SELECT unit_price from medicine where medicine_name='$name'");
          if($rowPrice=mysqli_fetch_assoc($resultPrice))
          {
          		$price=$rowPrice['unit_price'];
          }
          	(float)$total=(float)$price*(int)$quantity;
          
          $result_temp=mysqli_query($conn,"SELECT * from addList where med_name='$name'");
         
          if($result_temp->num_rows>0)
          {
          			
          		$resultList=mysqli_query($conn,"UPDATE addList set quantity=quantity+$quantity,total=total+$total where med_name='$name'");
          		}
          else
          {
          	
          	 $resultList=mysqli_query($conn,"INSERT into addList(med_name,quantity,unit_price,med_id,uid,total) values('$name','$quantity','$price','$id','$userid','$total') ");
          }
        
         $resultFetch=mysqli_query($conn,"SELECT * from addList");

         if($resultFetch)
         {	$i=1;
         	?>
         		 <table class="table table-hover">
                <thead>
                  <th>Sl#</th>
                  <th>Med. Name</th>
                  <th>Quantity</th>
                  <th>Unit Price</th>
                  <th>Total</th>
                  <th>Action</th>
                </thead>
                <tbody>

                <?php
                $sum=0;
         	while($rowFetch=mysqli_fetch_assoc($resultFetch))
         	{	
         		$sum=$sum+$rowFetch['total'];
         		?>
         	
                  <tr>
                    <td><?php echo $i++;?></td>
                    <td id="mname" ><?php echo $rowFetch['med_name'];?></td>
                    <td><?php echo $rowFetch['quantity'];?></td>
                    <td><?php echo $rowFetch['unit_price'];?></td>
                    <td><?php echo $rowFetch['total'];?></td>
                   
                    <td><i id="del" onclick="call_del('<?php echo $rowFetch['med_name'];  ?>')" class="glyphicon glyphicon-remove red-color pointer"></i></td>
                  </tr>
                  
               
            <?php
         	}
         	echo "<h2 class='pull-right right-margin'>Total Amount:   <span>".round($sum,2)."</span></h2>";
         	?>
         	 </tbody>
            </table>
            <?php
         }

        



?>
