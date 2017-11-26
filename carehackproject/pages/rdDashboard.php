<?php
    require "../controller/session.php";
    if($_SESSION['logged_in_type'] == 1) {
      header("location:phCheckOutView.php");
    }
    require "../config/config.php";
?> 
<?php
           /* require "../config/config.php";
            $result_check=mysqli_query($conn,"SELECT * from medicine_stock");
            while($row=mysqli_fetch_assoc($result_check))
            {
             $entry .= "['".$row{'count'}."',".$row{'medicine_id'}."],";
            }*/
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
  <body style="height:100%; background-image: none">
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
      <div class="container-fluid">
        <div class="row dashboard-section">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="borderBox">
              <h2 class="borderBoxHeading">Medicine Sales By Location</h2>
              <label class="padding">Location Name :  </label>
              <select id="location" name="location" class="form-control chart-display">
                <?php
                        $sql = "SELECT loc_id, loc_name from location";
                        if($result=mysqli_query($conn,$sql))
                          {
                          while($row=mysqli_fetch_assoc($result))
                          {
                          ?>
                            <option value="<?php echo $row['loc_id']; ?>"> <?php echo $row['loc_name']; ?></option>
                          <?php
                          }
                        }
                      ?>  
                 </select>
              <div id="barchart"></div>
            </div>
            <div class="borderBox">
              <h2 class="borderBoxHeading"></h2>
              <label class="padding">Location Name :  </label>
              <select id="location1" name="location1" class="form-control chart-display">
                <?php
                        $sql = "SELECT loc_id, loc_name from location";
                        if($result=mysqli_query($conn,$sql))
                          {
                          while($row=mysqli_fetch_assoc($result))
                          {
                          ?>
                            <option value="<?php echo $row['loc_id']; ?>"> <?php echo $row['loc_name']; ?></option>
                          <?php
                          }
                        }
                      ?>  
                 </select>
              <div id="piechart"></div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
             <div class="borderBox">
              <h2 class="borderBoxHeading"></h2>
              <label class="padding">Location Name :  </label>
              <select id="location2" name="location2" class="form-control chart-display">
                <?php
                        $sql = "SELECT loc_id, loc_name from location";
                        if($result=mysqli_query($conn,$sql))
                          {
                          while($row=mysqli_fetch_assoc($result))
                          {
                          ?>
                            <option value="<?php echo $row['loc_id']; ?>"> <?php echo $row['loc_name']; ?></option>
                          <?php
                          }
                        }
                      ?>  
                 </select>
              <div id="areachart"></div>
            </div>
             <div class="borderBox">
              <h2 class="borderBoxHeading"></h2>
              <label class="padding">Location Name :  </label>
              <select id="location3" name="location3" class="form-control chart-display">
                <?php
                        $sql = "SELECT loc_id, loc_name from location";
                        if($result=mysqli_query($conn,$sql))
                          {
                          while($row=mysqli_fetch_assoc($result))
                          {
                          ?>
                            <option value="<?php echo $row['loc_id']; ?>"> <?php echo $row['loc_name']; ?></option>
                          <?php
                          }
                        }
                      ?>  
                 </select>
              <div id="columnchart"></div>
            </div>
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
        });
       </script>
       <script>
        TweenMax.from('#company_logo',0.8,{x:-50,opacity:0})
        TweenMax.from('#billing-section',0.8,{y:100,opacity:0})
        TweenMax.from('#summary-section',0.8,{y:100,opacity:0})
       </script> 

           <script type="text/javascript">
               var locId = null;
           $('#location1').on('change', function(){
                 locId = $('#location1').val();
                 $.ajax({
                    url: "../controller/medicineSellByLocation.php",
                    type: "POST",
                    data: {"locId": locId},
                    success: function(res){
                    }
                 });
            });

                google.charts.load("current", {packages:["corechart"]});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                  <?php $result=mysqli_query($conn,"SELECT * from med_by_loc");


                  ?>
                  var data = google.visualization.arrayToDataTable([
                    ['Medicine Names', 'Total Count'],
                    <?php 
                    if($result->num_rows>0)
                    {
                      while($row=mysqli_fetch_assoc($result))
                      {
                        echo "['".$row['med_name']."',".$row['count']."],";
                      }
                    }
                    ?>
                    
                  ]);

                var options = {
                  legend: 'none',
                  pieSliceText: 'label',
                  is3D: 'true',
                  pieStartAngle: 100,
                };

                  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                  chart.draw(data, options);
            }
           </script>
           <script type="text/javascript">
              var locId = null;
           $('#location').on('change', function(){
                 locId = $('#location2').val();
                 $.ajax({
                    url: "../controller/medicineSellByLocation.php",
                    type: "POST",
                    data: {"locId": locId},
                    success: function(res){
                      window.location.reload();
                    }
                 });
            });

                google.charts.load("current", {packages:["corechart"]});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                  <?php $result=mysqli_query($conn,"SELECT * from med_by_loc");


                  ?>
                  var data = google.visualization.arrayToDataTable([
                    ['Medicine Names', 'Total Count'],
                    <?php 
                    if($result->num_rows>0)
                    {
                      while($row=mysqli_fetch_assoc($result))
                      {
                        echo "['".$row['med_name']."',".$row['count']."],";
                      }
                    }
                    ?>
                    
                  ]);

                var options = {
                  legend: 'none',
                  pieSliceText: 'label',
                  pieStartAngle: 100,
                };

                  var chart = new google.visualization.BarChart(document.getElementById('barchart'));
                  chart.draw(data, options);
            }
          </script>
          <script type="text/javascript">
            var locId = null;
           $('#location2').on('change', function(){
                 locId = $('#location2').val();
                 $.ajax({
                    url: "../controller/medicineSellByLocation.php",
                    type: "POST",
                    data: {"locId": locId},
                    success: function(res){
                    }
                 });
            });

                google.charts.load("current", {packages:["corechart"]});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                  <?php $result=mysqli_query($conn,"SELECT * from med_by_loc");


                  ?>
                  var data = google.visualization.arrayToDataTable([
                    ['Medicine Names', 'Total Count'],
                    <?php 
                    if($result->num_rows>0)
                    {
                      while($row=mysqli_fetch_assoc($result))
                      {
                        echo "['".$row['med_name']."',".$row['count']."],";
                      }
                    }
                    ?>
                    
                  ]);

                var options = {
                  legend: 'none',
                  pieSliceText: 'label',
                  pieStartAngle: 100,
                };

                  var chart = new google.visualization.AreaChart(document.getElementById('areachart'));
                  chart.draw(data, options);
            }
            }
          </script>
          <script type="text/javascript">
              google.charts.load('current', {'packages':['bar']});
              google.charts.setOnLoadCallback(drawChart);

              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Year', 'Sales', 'Price', ''],
                  ['2014', 1000, 400, 200],
                  ['2015', 1170, 460, 250],
                  ['2016', 660, 1120, 300],
                  ['2017', 1030, 540, 350]
                ]);

                var options = {
                  chart: {
                    title: 'Medicine Selling Statistics',
                    subtitle: 'Paracetamol, Lisinopril, Prilosec',
                  }
                };

                var chart = new google.charts.Bar(document.getElementById('columnchart'));

                chart.draw(data, google.charts.Bar.convertOptions(options));
              }
         </script>

  </body>
</html>