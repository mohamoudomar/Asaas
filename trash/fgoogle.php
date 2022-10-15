<?php
include 'config.php';
$query="SELECT sector, id from operation";
$res=mysqli_query($con,$query);
$ops=array();
while($result=mysqli_fetch_assoc($res)){
    $ops[]="['".
         $result['sector'].
         "',".
         $result['id']."],";

        
         
     
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<title>Google PieCharts</title>
</head>

<body> 


  <div class="row">
     <div class="col-md-12">
        <div id="piechart"></div>
     </div>
 </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"integrity="sha384-KJ302DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"integrity="sha384-JZR6Spejh4U02d8j0t6vLEHfe/JQGiRRSQQxSFFWpilMquVdAyjUar5+76PVCmY1"crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          
          <?php 
          foreach ($ops as $ops){

            echo $ops;
            
          }
          
          ?>
          
        ]);

        var options = {
          title: 'Operations',
          width: 300,
          height: 500,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</body>
</html>