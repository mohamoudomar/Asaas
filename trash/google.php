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
  <title>Google Barcharts</title>
</head>
<body>
<div class="container mt-2">
  <h2>Google Charts Pie Chart</h2>
  <hr>
  <div class="row">
     <div class="col-md-12">
        <div id="barchart"></div>
     </div>
 </div>

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Opening Move', 'Percentage'],
          
          <?php 
          foreach ($ops as $ops){

            echo $ops;
            
          }
          
          ?>
         
          
        ]);

        var options = {
          title: 'Chess opening moves',
          width: 300,
          height: 500,
          legend: { position: 'none' },
          chart: { title: 'Chess opening moves',
                   subtitle: 'popularity by percentage' },
          bars: 'vertical', // Required for Material Bar Charts.
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('barchart'));
        chart.draw(data, options);
      };
    </script>
  
</body>
</html>