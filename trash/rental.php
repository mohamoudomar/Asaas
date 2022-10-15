<?php 

include 'config.php';

if (isset($_POST['Save'])) {

    $customername =$_POST['customername'];
    $car  =$_POST['car'];
    $color  =$_POST['color'];
    $time =$_POST['time'];
    $timeout =$_POST['timeout'];
    $date =$_POST['date'];


$sql= mysqli_query($con, "INSERT INTO `rental` (`customername`, `car`, `color`, `time`, `timeout`, `date`) VALUES ('$customername', '$car', '$color', '$time', '$timeout', '$date')");

if ($sql) {
    echo "<script>alert('rental is successfully Regsitered')</script>";
}
else{
    echo mysqli_error($con);
    echo "<script>alert('rental is not registered')</script>";
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
                <?php include 'topbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                   <div style="height: 20px;"></div>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800 alert alert-primary">
                    <i class="fas fa-fw fa-car"></i>Rental Information</h1>

                    <div class="col-md-10">
                        <div class="text text-success panel-heading">
                            <h4>Add new rental</h4>
                        </div>
                        <div class="panel-body">
                            <form method="POST" class="form-horizontal">

                            <!-- Customer Dropdown start-->
                               <div class="form-group">
                                    <label class="control-label col-md-2">Enter Phone</label>
                                     <div class="col-md-10">
                                         <input type="text" name="Phone" class="form-control">  
                                         <button style="margin-top: 10px;" class="btn btn-md btn-info" name="Search">Search</button>
                                     </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">CustomerName</label>
                                     <div class="col-md-10">
                                       <select name="customername" class="form-control">
                                             <option style="color: red">Select customer</option>
<?php 
                                             
if ( isset($_POST['Search'])) {
   
$Phone =  $_POST['Phone'];


$sq = mysqli_query($con,"SELECT * FROM `customer` WHERE `Phone` like '%$Phone%';");
while ($custName = mysqli_fetch_array($sq)) {
    
$customerName2 = $custName['fullName'];

?>

                                            
                                             <option><?php  echo@$customerName2; ?></option>
                                     
                                             <?php  }} ?>
                                         </select>
                                     </div>
                                </div>

                                <!-- Customername Dropdown ends-->





                                    <!-- Carname Dropdown start-->
                                    <div class="form-group">
                                    <label class="control-label col-md-2">SelectCar</label>
                                     <div class="col-md-10">
                                         <select name="car" class="form-control">
                                             <option style="color: red">Select car name</option>
                                             <?php  
                                             $sql = mysqli_query($con,"SELECT CarName  FROM cars");
                                              while ($res = mysqli_fetch_array($sql)){
                                                 ?>
                                             
                                             <option></option>
                                             <option><?php   echo$res['CarName']; ?></option>
                                             <?php  } ?>
                                         </select>
                                     </div>
                                </div>
                                <!-- Carname Dropdown ends-->




                                <!-- Car calor Dropdown start-->

                                    <div class="form-group">
                                    <label class="control-label col-md-2">SelectCar Color</label>
                                     <div class="col-md-10">
                                         <select name="color" class="form-control">
                                             <option style="color: red">Select car color</option>
                                             <?php  
                                             $sql = mysqli_query($con,"SELECT color  FROM cars");
                                              while ($res = mysqli_fetch_array($sql)){
                                                 ?>
                                             
                                             <option></option>
                                             <option><?php   echo$res['color']; ?></option>
                                             <?php  } ?>
                                         </select>
                                     </div>
                                </div>
                                 
                                 <!-- Car calor Dropdown ends-->
                                
   

                                 <div class="form-group">
                                    <label class="control-label col-md-2">Time in</label>
                                     <div class="col-md-10">
                                         <input type="text" name="time" class="form-control">
                                     </div>
                                </div>

                                 <div class="form-group">
                                    <label class="control-label col-md-2">Time out</label>
                                     <div class="col-md-10">
                                         <input type="text" name="timeout" class="form-control">
                                     </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Date</label>
                                     <div class="col-md-10">
                                         <input type="date" name="date" class="form-control">
                                     </div>
                                </div>
                                <div class="form-group">
                                    
                                     <div class="col-md-10">
                                         <button name="Save" class="btn btn-md btn-success col-md-12">Save</button>
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