<?php   
include 'config.php';
include 'restrict.php';
$ID =$_GET['Update'];
$sql= "Select * from `incident` where ID=$ID";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$sector = $row['sector'];
$date = $row['date'];
$type = $row['type'];
$involved  = $row['involved'];
$des= $row['des'];
$location=$row['location'];
$casualties=$row['casualties'];
$actions=$row['actions'];
$entities=$row['entities'];
$evidence=$row['evidence'];

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
 $sql = mysqli_query($con,"UPDATE `incident` SET ID='$ID', sector= '$sector', date='$date', type='$type', involved='$involved', des='$des', location='$location', casualties='$casualties', actions='$actions', entities='$entities', evidence='$evidence' WHERE ID = '$ID'");
 if ($sql) {
      
      echo "<script>alert('incident is succesfully updated')</script>";
      header('location:Viewincident.php');
  } 
  else{
    echo mysqli_error($con);
    echo "<script>alert('incident failed to update')</scrip>";
    } 
    
  }

}

 ?>

 
<?php
include 'header.php' ;
?> 
<body id="page-top">
     

    <!-- Page Wrapper -->
    <div class=" "  id="wrapper">

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
                    <h1 class="h3 mb-10 text-gray-800 alert alert-primary" style="text-align: center;">INCIDENTS REPORT</h1><br>
                     <div class="row">
                         <div class="col-md-8" style="margin-left: 20%;box-shadow:grey;">
                            <div class="text  text-success panel-heading">
                                <h1 style="text-align: center;">Edit Incidents Here</h1>
                            </div>
                            <div class="panel-body">

                            
                                <form method="POST" class="form-horizontal" enctype='multipart/form-data'>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Sector</label>
                                         <div class="col-md-10">
                                             <input type="text" name="sector" class="form-control" value="<?php echo $sector;?>">
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Date</label>
                                         <div class="col-md-10">
                                             <input type="date" name="date" class="form-control"value="<?php echo $date;?>" >
                                         </div>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label class="control-label col-md-8">Incident Type</label>
                                     <div class="col-md-10">
                                         <select name="type" class="form-control" value="<?php echo $type;?>" >
                                             <option style="color: red">Select Incident Type </option>
                                             <option>Smuggling Of Goods(Drugs,Alcohol,Illegal Substances)</option>
                                             <option>Smuggling Of Weapons</option>
                                             <option>Human Trafficking</option>
                                             <option>Illegal Fishing</option>
                                             <option>SAR(Search and Rescue)</option>
                                             <option>Maritime Pollution</option>
                                             <option>Piracy</option>
                                             <option>Speeding Vessel</option>
                                             <option>Port Security</option>
                                             <option>Border Breach</option>
                                         </select>
                                     </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-4">Who was involved</label>
                                         <div class="col-md-10">
                                             <input type="text" name="involved" class="form-control" value="<?php echo $involved;?>" >
                                         </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2">Description</label>
                                         <div class="col-md-10">
                                             <input type="text" name="des" class="form-control" value="<?php echo $des;?>" >
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-10">Location / Coordinates</label>
                                         <div class="col-md-10">
                                             <input type="text" name="location" class="form-control"  >
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Explain If Casualties</label>
                                         <div class="col-md-10">
                                             <input type="text" name="casualties" class="form-control" value="<?php echo $casualties;?>">
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-5">Actions Taken</label>
                                         <div class="col-md-10">
                                             <input type="text" name="actions" class="form-control" value="<?php echo $actions;?>">
                                         </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-10">Which Other Entities Were Informed</label>
                                         <div class="col-md-10">
                                             <input type="text" name="entities" class="form-control" value="<?php echo $entities;?>">
                                         </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Evidence</label>
                                         <div class="col-md-10">
                                             <input type="file" name="evidence" class="form-control" value="<?php echo $evidence;?>">
                                         </div>
                                    </div> <br>
                                    <div class="form-group">
                                         <div class="col-md-10">
                                             <button name="Update" class="btn btn-md btn-success col-md-12">Update Incident</button>
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

