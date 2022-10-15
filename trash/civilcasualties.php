<?php   
include 'config.php';

if (isset($_POST['Add'])) {
    $sector = $_POST['sector'];
    $date = $_POST['date'];
    $name = $_POST['name'];
    $des = $_POST['des'];
    $severity = $_POST['severity'];
    $reason = $_POST['reason'];
    $location = $_POST['location'];
    $actions= $_POST['actions'];
    $entities = $_POST['entities'];
    //$evidence = $_POST['evidence'];

$Location = "Data/";


$evidence = $_FILES['evidence']['name'];
$tmp_name = $_FILES['evidence']['tmp_name'];


if (move_uploaded_file($tmp_name, $Location.$evidence)) {
 $sql = mysqli_query($con,"INSERT INTO `civilcasualties` (`ID`, `sector`, `date`, `name`, `des`, `severity`, `reason`, `location`, `actions`, `entities`, `evidence`) VALUES (NULL, '$sector', '$date', '$name', '$des', '$severity','$reason','$location','$actions','$entities','$evidence');");
 if ($sql) {
      
      echo "<script>alert('casualties are succesfully recorded')</script>";
  } 
  else{
    echo mysqli_error($con);
    echo "<script>alert('casualties are not succesfully recorded')</scrip>";
    } 
  }

}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Asaas - casualties report</title>
    

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
 
    

</head>

<body id="page-top">
     

    <!-- Page Wrapper -->
    <div  id="wrapper">

        <!-- Sidebar -->
       <?php    include 'Navbar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

      <!-- Topbar -->
     <?php include 'topbar.php';?>
    <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div style="height: 50px;" style="align-items: center;"></div>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-10 text-gray-800 alert alert-primary" style="text-align: center;">CASUALTIES REPORT</h1><br>
                     <div class="row">
                         <div class="col-md-8" style="margin-left: 20%;box-shadow:grey;">
                            <div class="text  text-success panel-heading">
                                <h1 style="text-align: center;">Add New Casualties Here</h1>
                            </div>
                            <div class="panel-body">
                                <form method="POST" class="form-horizontal" enctype='multipart/form-data'>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Sector</label>
                                         <div class="col-md-10">
                                             <input type="text" name="sector" class="form-control">
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Date</label>
                                         <div class="col-md-10">
                                             <input type="date" name="date" class="form-control">
                                         </div>
                                    </div>


                                <div class="form-group">
                                        <label class="control-label col-md-4">Name</label>
                                         <div class="col-md-10">
                                             <input type="text" name="name" class="form-control" >
                                         </div>
                                </div>

                                <div class="form-group">
                                        <label class="control-label col-md-4">Casualties Description</label>
                                         <div class="col-md-10">
                                             <input type="text" name="des" class="form-control" >
                                         </div>
                                    </div>

                                

                                <div class="form-group">
                                    <label class="control-label col-md-4">Severity Of The Injury</label>
                                     <div class="col-md-10">
                                         <select name="severity" class="form-control">
                                             <option style="color: red">Select Severity Of The Injury </option>
                                             <option>MINOR =WALKING WOUNDED</option>
                                             <option>DELAYED=NON- LIFE THREATING </option>
                                             <option>INTERMEDIATE= LIFE THREATING</option>
                                             <option> MORGUE=PULSELESS, NON-BREATHING</option>   
                                         </select>
                                     </div>
                                </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-4">Reason Of Injury</label>
                                         <div class="col-md-10">
                                             <input type="text" name="reason" class="form-control" >
                                         </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2">Location</label>
                                         <div class="col-md-10">
                                             <input type="text" name="location" class="form-control">
                                         </div>
                                </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-10">Actions Taken</label>
                                         <div class="col-md-10">
                                             <input type="text" name="actions" class="form-control">
                                         </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-10">Which Other Entities Were Informed</label>
                                         <div class="col-md-10">
                                             <input type="text" name="entities" class="form-control">
                                         </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Evidence</label>
                                         <div class="col-md-10">
                                             <input type="file" name="evidence" class="form-control">
                                         </div>
                                    </div> <br>
                                    <div class="form-group">
                                         <div class="col-md-10">
                                             <button name="Add" class="btn btn-md btn-success col-md-12">Add Casualty</button>
                                         </div>
                                    </div>
                                </form>
                            </div>
                          </div>
                     </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Asaas</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!-- End of Logout Modal-->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>