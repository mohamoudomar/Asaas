<?php   
include 'config.php';
$ID =$_GET['Update'];
include 'restrict.php';

if (isset($_POST['Update'])) {
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
 $sql = mysqli_query($con,"UPDATE `incident` SET ID= '$ID', sector= '$sector', date='$date', type='$type', involved='$involved', des='$des', location='$location', casualties='$casualties', actions='$actions', entities='$entities', evidence='$evidence' WHERE ID = '$ID'");
 $result=mysqli_query($con,$sql);
 if ($result) {
      
      echo "<script>alert('incident is succesfully updated')</script>";
  } 
  else{
    echo mysqli_error($con);
    echo "<script>alert('incident failed to update')</scrip>";
    } 
    
  }

}

 ?>