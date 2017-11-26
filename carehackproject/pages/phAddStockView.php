<?php
    require "../controller/session.php";
    if($_SESSION['logged_in_type'] == 0) {
      header("location:rdDashboard.php");
    }
    require "../config/config.php";
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
            <a href="#billing-section" >
                <img class="navbar-img" src="../images/logo.png" width="60px" height="60px" alt="App Logo">
                <h2 class="navbar-heading">ep<span class="am-color">Y</span>on</span></h2>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right navbar-ul">
                <li><a class="navbar-user" href="#billing-section"><i class="glyphicon glyphicon-user"></i> Hai User</a></li>
                <li><a href="phCheckOutView.php"><i class="glyphicon glyphicon-shopping-cart"></i> Check Out</a></li>
                <li class="active"><a href="#billing-section"><i class="glyphicon glyphicon-plus"></i> Add Stock</a></li>
                <li><a href="../controller/logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
              </ul>
          </div>
        </div>
      </nav>

      <div class="content-section" id="billing-section">
          <h4>Add Medicine</h4>
          <hr class="line">
            <form method="post" class="form-group row" action="../controller/addStock.php">
                <div class="col-md-4 col-lg-5 col-xs-4 col-sm-4">
                    <label>Medicine Name :  </label>
                    <select id="medicinename" name="medicine_name" class="form-control form-display">
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
                </div>
                <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">
                    <label>Quantity :  </label>
                    <input type="number" name="medicine_count" class="form-control form-display" min="0" max="1000"/>
                </div>
                <div class="col-md-3 col-lg-2 col-xs-3 col-sm-3">
                    <label>Price :  </label>
                    <input type="number" id="price" name="medicine_price" class="form-control form-display" min="0" max="20" />
                </div>
                <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2">
                    <button type="submit" class="btn btn-primary form-button"><i class="glyphicon glyphicon-ok"></i>   Add</button>
                </div>
          </form>
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
        });

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
       <script>
        TweenMax.from('#company_logo',0.8,{x:-50,opacity:0})
        TweenMax.from('#billing-section',0.8,{y:100,opacity:0})
       </script> 
  </body>
</html>