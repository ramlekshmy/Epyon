<?php
session_start();
if(isset($_SESSION['logged_in']))

  if($_SESSION['logged_in_type'] == 0) {
     header("location:pages/rdDashboard.php");
    } else if ($_SESSION['logged_in_type'] == 1) {
     header("location:pages/phCheckOutView.php"); 
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>epYon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" sizes="32x32">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    :
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
   </head>
  <body style="height:100%">
        <div class="headerPush"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-8 col-sm-8 col-xs-8" >
              <img class="start-img" id="company_logo" src="images/logo.png" width="100px" height="100px" alt="App Logo">
              <h2 id="company_name" class="start-heading"><a href="#top">ep<span class="am-color">Y</span>on</span></a></h2>
              
            </div>
          </div>
        </div>
        <div class="headerPush"></div>
        <div class="container" id="top">
            <div class="form-border" id="login_form">
              <form method="post" action="controller/login.php" class="form-group form-horizontal login-form" action="#">
                <input type="text" name="username" required="required" class="form-control text-input" placeholder="Username" autofocus>
                <input type="password" name="password" required="required" class="form-control text-input" placeholder="Password">
                <button type="submit" class="btn btn-default btn-primary btn-login">Login</button>
              </form>
            </div>
          
        </div>

    <footer id="footer">
    	<div class="footer-text">
        <span class="footer-span pull-right">Healthcare Solution from Y-Nots &copy; 2018</span>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
         var docHeight = $(window).height();
         var footerHeight = $('#footer').height();
         var footerTop = $('#footer').position().top + footerHeight;

         if (footerTop < docHeight) {
          $('#footer').css('margin-top', (docHeight - footerTop) + 'px');
         }
        });
       </script>
       <script>
        TweenMax.from('#company_name',2,{x:100,opacity:0})
        TweenMax.from('#company_logo',2,{x:-100,opacity:0})
        TweenMax.from('#tagline',2,{x:100,opacity:0, delay:0.5})
        TweenMax.from('#login_form',2,{y:100,opacity:0,delay:1})
       </script> 
  </body>
</html>