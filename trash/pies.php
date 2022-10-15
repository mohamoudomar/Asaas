<?php 

$username = "root";
$password = "";
$database = "goud";

try {
  $pdo = new PDO("mysql:host=localhost;database=$database", $username, $password);
  // Set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
  die("ERROR: Could not connect. " . $e->getMessage());
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiple charts</title>

    <style>
        .chartBox{
            width: 300px;
        }
    </style>
</head>

<body>

<?php
include 'config.php';
// Attempt select query execution 
try{
$sql = "SELECT * FROM goud.operation";
$result = $pdo->query($sql);
if($result->rowCount() > 0 ){
    $sector = array();
    while($row = $result->fetch()) {
        $sector[] = $row["sector"];       
}

unset ($result) ;
} else {
echo "No records matching your query were found.";

}
 }catch(PDOException $e){
die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
unset ($pdo);


?>

<div class="chartBox">
  <canvas id="myChart"></canvas>
</div>

<div class="chartBox">
  <canvas id="LineChart"></canvas>
</div>

<div class="chartBox">
  <canvas id="PieChart"></canvas>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>

//set up
const sector=<?php echo json_encode($sector);?>

const data={
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: sector,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    

};
// bar chart
// config

const config={
    type: 'bar',
    data,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }

};

// render initial block
const MyChart= new Chart(
    document.getElementById('myChart'),
    config
);

//Line chart
// config line

const configLine={
    type: 'line',
    data,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }

};

// render line chart
const LineChart= new Chart(
    document.getElementById('LineChart'),
    configLine
);

// pie chart

const datapie={
    labels: ['Casaan', 'Buluug', 'Huruud', 'Akhtar', 'Basali', 'Liimi'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    

};


// config pie

const configPie={
    type: 'pie',
    data: datapie,
    options: {}

};

// render pie chart
const PieChart= new Chart(
    document.getElementById('PieChart'),
    configPie
);





</script>

    
</body>
</html>