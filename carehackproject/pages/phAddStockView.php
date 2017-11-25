<?php
require "../config/config.php";

session_start();
if(!$_SESSION['logged_in'])
{
	header("Location:../index.php");
}
//$user_id = $_SESSION['logged_in'];

?>

<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<form method="post" action="../controller/addStock.php">
		Medicine Name
		<select id="medicinename" name="medicine_name">
			<option></option>
			<?php
			    $sql = "SELECT medicine_name from medicine";
				if($result=mysqli_query($conn,$sql))
					{
					while($row=mysqli_fetch_assoc($result))
					{
					?>
						<option><?php echo $row['medicine_name'];?></option>
					<?php
					}
				}
			?>	
		</select>

		Count
		<input type="text" name="medicine_count" />

		Price
		<input type="text" id="price" name="medicine_price"  />
		<button type="submit">Submit</button>
	</form>
</body>
<script>
$(document).ready(function(){
	$('#medicinename').on('change',function()
	{
		var medicine_name=document.getElementById("medicinename").value;
		$.ajax({
			type:"post",
			url:'../controller/getPrice.php',
			data:"medicine_name="+medicine_name,
			success:function(res){
				document.getElementById("price").value=res;
			},
			error:function()
			{
				document.getElementById("price").value="0.0";	
			}
		});
	});
});
</script>
</html>