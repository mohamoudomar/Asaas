<?php   
include 'config.php';
if (isset($_POST['Add'])) {
    $sector = $_POST['sector'];
    $date = $_POST['date'];
    $type = $_POST['type'];
    $involved = $_POST['involved'];
    $des = $_POST['des'];
    $location = $_POST['location'];
    $casualties = $_POST['casualties'];
    $actions= $_POST['actions'];
    $entities = $_POST['entities'];
    //$evidence = $_POST['evidence'];

$Location = "Data/";


$evidence = $_FILES['evidence']['name'];
$tmp_name = $_FILES['evidence']['tmp_name'];


if (move_uploaded_file($tmp_name, $Location.$evidence)) {
 $sql = mysqli_query($con,"INSERT INTO `incident` (`ID`, `sector`, `date`, `type`, `involved`, `des`, `location`, `casualties`, `actions`, `entities`, `evidence`) VALUES (NULL, '$sector', '$date', '$type', '$involved', '$des','$location','$casualties','$actions','$entities','$evidence');");
 if ($sql) {
      
      echo "<script>alert('incident is succesfully recorded')</script>";
      header('location:Viewincident.php');
  } 
  else{
    echo mysqli_error($con);
    echo "<script>alert('incident is not succesfully recorded')</scrip>";
    } 
  }

}



 ?>

<?php 
include 'header.php' ;
?> 