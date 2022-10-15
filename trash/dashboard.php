<?php           
include 'config.php';

if (isset($_POST['Add'])) {
    

$carName = $_POST['carName'];
$Model = $_POST['Model'];
$PlateNo = $_POST['PlateNo'];
$Color = $_POST['Color'];
$Date = $_POST['Date'];

$sql = mysqli_query($con,"INSERT INTO `cars`(`CarName`, `Model`, `CarPlate`, `Color`, `Date`) VALUES ('$carName','$Model','$PlateNo','$Color','$Date')");
if ($sql) {
echo '<script>alert("This is updated!");
window.location:blank.php;
</script>';
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

    <title>Asaas</title>

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

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div style="height: 50px;"></div>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 alert alert-primary" >Car Information</h1>
                     <div class="row">
                         <div class="col-md-8" style="margin-left: 20%;box-shadow:grey;">
                            <div class="text  text-success panel-heading">
                                <h1>Add New Car</h1>
                            </div>
                            <div class="panel-body">
                                <form method="POST" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-md-2">carName</label>
                                         <div class="col-md-10">
                                             <input type="text" name="carName" class="form-control">
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Model</label>
                                         <div class="col-md-10">
                                             <input type="text" name="Model" class="form-control">
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">PlateNo#</label>
                                         <div class="col-md-10">
                                             <input type="text" name="PlateNo" class="form-control">
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Color</label>
                                         <div class="col-md-10">
                                             <input type="text" name="Color" class="form-control">
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
                                             <button name="Add" class="btn btn-md btn-success col-md-12">Add</button>
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