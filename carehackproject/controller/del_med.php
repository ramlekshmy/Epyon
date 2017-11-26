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
			
           $name = $_GET['med_name']; 
         
      $resultDel=mysqli_query($conn,"DELETE from addList where med_name='$name'");
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
         	while($rowFetch=mysqli_fetch_assoc($resultFetch))
         	{
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
         	?>
         	 </tbody>
            </table>
            <?php
         }

        



?>
