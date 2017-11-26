<?php
    require "../controller/session.php";
    if($_SESSION['logged_in_type'] == 0) {
      header("location:rdDashboard.php");
    }
    require "../config/config.php";

$sql="SELECT * from medicine";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>epYon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon" sizes="32x32">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
    <script>
            $(document).ready(function() {
                var selector = '.nav li';
                $(selector).on('click', function(){
                    $(selector).removeClass('active');
                    $(this).addClass('active');
                });
            });
    </script>
  </head>
  <body style="height:100%">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid" id="company_logo">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a href="#top" >
                <img class="navbar-img" src="../images/logo.png" width="60px" height="60px" alt="App Logo">
                <h2 class="navbar-heading">ep<span class="am-color">Y</span>on</span></h2>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right navbar-ul">
                <li><a class="navbar-user" href="#top"><i class="glyphicon glyphicon-user"></i> Hai User</a></li>
                <li class="active"><a href="#top"><i class="glyphicon glyphicon-shopping-cart"></i> Check Out</a></li>
                <li><a href="phAddStockView.php"><i class="glyphicon glyphicon-plus"></i> Add Stock</a></li>
                <li><a href="../controller/logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
              </ul>
          </div>
        </div>
      </nav>

      <div class="content-section" id="billing-section">
          <h4>Checkout</h4>
          <hr class="line">
            <div class="form-group row">
              <div class="col-md-5 col-lg-5 col-xs-5 col-sm-5">
                <label>Medicine Name :  </label>
                <select id="medicineName" name="medicineName" class="form-control form-display" >
                  <option></option>
                  <?php
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
              </div>
              <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
                <label>Quantity :  </label>
                <input type="number"  name="count" id="quantity" class="form-control form-display" min="0" max="20">
              </div>
              <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">
                <button  id="add_list" class="btn btn-primary form-button"><i class="glyphicon glyphicon-ok"></i>   Add</button>
              </div>
            </div>
      </div>
      
      <div class="content-section" id="summary-section">
          <h4>Billing Summary</h4>
          <div class="table-responsive table-overflow" id="tableList">
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
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td ></td>
                  </tr>
                </tbody>
            </table>
           
      </div>
       <div class="row">
              <div class="col-md-9 col-lg-9 col-xs-9 col-sm-9"></div>
              <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">
                <form method="post" action="../controller/insertandprint.php">
                  <button  class="btn btn-primary form-button"><i class="glyphicon glyphicon-ok"></i>   Print Bill</button>
                </form>
              </div>
            </div>
        </div>
    <footer id="footer">
    	<div class="footer-text">
        <span class="footer-span pull-right">Healthcare Solution from Y-Nots &copy; 2018</span>
      </div>
    </footer>

    <script>
        $(document).ready(function() {
         var docHeight = $(window).height();
         var footerHeight = $('#footer').height();
         var footerTop = $('#footer').position().top + footerHeight;

         if (footerTop < docHeight) {
          $('#footer').css('margin-top', (docHeight - footerTop) + 'px');
         }




         $('#add_list').on('click',function(){
            var name=$('#medicineName').val();
            var quantity=$('#quantity').val();
            if(name=="  "||quantity=="")
            {
              alert("please fill all details");
            }
            else
            {
            $.ajax({
              type:'post',
              url:'../controller/add_to_list.php',
              data:{"name":name,
              "quantity":quantity},
              success:function(res){
                  document.getElementById("tableList").innerHTML=res;
              }
            });
          }
         });

             
             $('#del').on('click',function(){
               alert("good");
                  alert("hello");
           var mid=$('#mid').val();
           alert(mid);
           
            $.ajax({
              type:'post',
              url:'',
              data:{"name":name,
              "quantity":quantity},
              success:function(res){
                  document.getElementById("tableList").innerHTML=res;
              }
            });
         });
        });
       </script>
       <script>
         

         function call_del(x)
         {
          var b=x;
        
           var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("tableList").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../controller/del_med.php?med_name="+x, true);
  xhttp.send();
         }
  //          function print_pdf()
  //        {
          
        
  //          var xhttp = new XMLHttpRequest();
  // xhttp.onreadystatechange = function() {
  //   if (this.readyState == 4 && this.status == 200) {
  //   // document.getElementById("tableList").innerHTML = this.responseText;
  //   }
  // };
  // xhttp.open("GET", "../controller/insertandprint.php?med_", true);
  // xhttp.send();
  //        }
       </script>
       <script>
        TweenMax.from('#company_logo',0.8,{x:-50,opacity:0})
        TweenMax.from('#billing-section',0.8,{y:100,opacity:0})
        TweenMax.from('#summary-section',0.8,{y:100,opacity:0})
       </script> 
  </body>
</html>