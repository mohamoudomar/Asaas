<?php   
include 'config.php';

if (isset($_POST['Register'])) {
    

$fullName = $_POST['fullName'];
$Gender  = $_POST['Gender'];
$Address = $_POST['Address'];
$Phone = $_POST['Phone'];
$Date = $_POST['Date'];


$Location = "Data/";


$NationalID = $_FILES['NationalID']['name'];
$tmp_name = $_FILES['NationalID']['tmp_name'];


if (move_uploaded_file($tmp_name, $Location.$NationalID)) {
    
 $sql = mysqli_query($con,"INSERT INTO `customer` (`ID`, `fullName`, `Gender`, `Address`, `Phone`, `Date`, `NationalID`) VALUES (NULL, '$fullName', '$Gender', '$Address', '$Phone', '$Date','$NationalID');"); 

 if ($sql) {
      
      echo "<script>alert('Customer was successfully Regsiter')</script>";
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

    <title>Goud Admin Portal</title>

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
    <div id="wrapper">

        <!-- Sidebar -->
       <?php    include 'Navbar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               

                <!-- Begin Page Content -->
                <div class="container-fluid">
                   <div style="height: 20px;"></div>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800 alert alert-primary">
                    <i class="fas fa-fw fa-user"></i>Customer Information</h1>

                    <div class="col-md-10">
                        <div class="text text-success panel-heading">
                            <h4>Add new Customer</h4>
                        </div>
                        <div class="panel-body">
                            <form method="POST" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="control-label col-md-2">fullName</label>
                                     <div class="col-md-10">
                                         <input type="text" name="fullName" class="form-control">
                                     </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Address</label>
                                     <div class="col-md-10">
                                         <input type="text" name="Address" class="form-control">
                                     </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Gender</label>
                                     <div class="col-md-10">
                                         <select name="Gender" class="form-control">
                                             <option style="color: red">Select Gender</option>
                                             <option>Male</option>
                                             <option>Female</option>
                                         </select>
                                     </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Phone</label>
                                     <div class="col-md-10">
                                         <input type="text" name="Phone" class="form-control" style="height: calc(7.5em + 7.75rem + 7px);">
                                     </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">National-ID</label>
                                     <div class="col-md-10">
                                         <input type="file" name="NationalID" class="form-control">
                                     </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Date</label>
                                     <div class="col-md-10">
                                         <input type="date" name="Date" class="form-control">
                                     </div>
                                </div>
                                <div class="form-group">
                                    
                                     <div class="col-md-10">
                                         <button name="Register" class="btn btn-md btn-success col-md-12">Register</button>
                                     </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div>
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>