<?php
   /* require "../controller/session.php";
    require "../config/config.php";*/
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
            <a href="#">
                <img class="navbar-img" src="../images/logo.png" width="60px" height="60px" alt="App Logo">
                <h2 class="navbar-heading">ep<span class="am-color">Y</span>on</span></h2>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right navbar-ul">
                <li><a class="navbar-user" href="#"><i class="glyphicon glyphicon-user"></i> Hai Researcher</a></li>
                <li class="active"><a href="#top"><i class="glyphicon glyphicon-list-alt"></i> Dashboard</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Configure</a></li>
                <li><a href="../controller/logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
              </ul>
          </div>
        </div>
      </nav>

      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          
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
        });
       </script>
       <script>
        TweenMax.from('#company_logo',0.8,{x:-50,opacity:0})
        TweenMax.from('#billing-section',0.8,{y:100,opacity:0})
        TweenMax.from('#summary-section',0.8,{y:100,opacity:0})
       </script> 
  </body>
</html>