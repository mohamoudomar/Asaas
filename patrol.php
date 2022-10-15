<?php   
include 'config.php';
include 'restrict.php';
if (isset($_POST['Add'])) {
    $sector = $_POST['sector'];
    $date = $_POST['date'];
    $edate = $_POST['edate'];
    $commander = $_POST['commander'];
    $escort = $_POST['escort'];
    $type = $_POST['type'];
    $des1 = $_POST['des1'];
    $location = $_POST['location'];
    $casualties = $_POST['casualties'];
    $actions= $_POST['actions'];
    $entities = $_POST['entities'];
    $des = $_POST['des'];
    //$evidence = $_POST['evidence'];

$Location = "Data/";


$evidence = $_FILES['evidence']['name'];
$tmp_name = $_FILES['evidence']['tmp_name'];


if (move_uploaded_file($tmp_name, $Location.$evidence)) {
 $sql = mysqli_query($con,"INSERT INTO `patrol` (`ID`, `sector`, `date`, `edate`, `commander`, `escort`, `type`, `des1`, `location`, `casualties`, `actions`,`entities`,`des`,`evidence`) VALUES (NULL, '$sector', '$date', '$edate', '$commander', '$escort','$type','$des1','$location','$casualties','$actions','$entities','$des','$evidence');");
 if ($sql) {
      
      echo "<script>alert('patrol is succesfully recorded')</script>";
      header('location:Viewpatrol.php');
  
      
      
     
  } 
  else{
    echo mysqli_error($con);
    echo "<script>alert('patrol is not succesfully recorded')</scrip>";
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
                    <h1 class="h3 mb-10 text-gray-800 alert alert-primary" style="text-align: center;">PATROL REPORT</h1><br>
                     <div class="row">
                         <div class="col-md-8" style="margin-left: 20%;box-shadow:grey;">
                            <div class="text  text-success panel-heading">
                                <h1 style="text-align: center;">Add New patrol Here</h1>
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
                                        <label class="control-label col-md-2">Start Date </label>
                                         <div class="col-md-10">
                                             <input type="date" name="date" class="form-control">
                                         </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2">End Date </label>
                                         <div class="col-md-10">
                                             <input type="date" name="edate" class="form-control">
                                         </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-5">State Patrol Commander </label>
                                         <div class="col-md-10">
                                         <textarea type="text" name="commander" class="form-control"  rows ="3" cols="33"></textarea>
                                         </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-5">Any Other Escorts </label>
                                         <div class="col-md-10">
                                         <textarea type="text" name="escort" class="form-control"  rows ="3" cols="33"></textarea>
                                         </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                    <label class="control-label col-md-2">Patrol Type</label>
                                     <div class="col-md-10">
                                         <select name="type" class="form-control">
                                             <option style="color: red">Select Patrol Type </option>
                                             <option>Smuggling Of Goods(Drugs,Alcohol,Illegal Substances)</option>
                                             <option>Smuggling Of Weapons</option>
                                             <option>Human Trafficking</option>
                                             <option>Illegal Fishing</option>
                                             <option>SAR(Search and Rescue)</option>
                                             <option>Maritime Pollution</option>
                                             <option>Anti-Piracy</option>
                                             <option>Speeding Vessel</option>
                                             <option>Port Security</option>
                                             <option>Border Breach</option>
                                             <option>Routine</option>
                                         </select>
                                     </div>
                                </div>
                                

                                    <div class="form-group">
                                        <label class="control-label col-md-5">Explain If Any Incident Occured</label>
                                         <div class="col-md-10">
                                         <textarea type="text" name="des1" class="form-control"  rows ="3" cols="33"></textarea>
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Location</label>
                                         <div class="col-md-10">
                                             <input type="text" name="location" class="form-control">
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Explain If Casualties</label>
                                         <div class="col-md-10">
                                         <textarea type="text" name="casualties" class="form-control"  rows ="3" cols="33"></textarea>
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Actions Taken</label>
                                         <div class="col-md-10">
                                         <textarea type="text" name="actions" class="form-control"  rows ="3" cols="33"></textarea>
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-10">Which Other Entities Were Informed</label>
                                         <div class="col-md-10">
                                         <textarea type="text" name="entities" class="form-control"  rows ="3" cols="33"></textarea>
                                         </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-4">Description</label>
                                         <div class="col-md-10">
                                         <textarea type="text" name="des" class="form-control"  rows ="3" cols="33"></textarea>
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
                                             <button name="Add" class="btn btn-md btn-success col-md-12">Add Patrol</button>
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

    <script>
    document.addEventListener('DOMContentLoaded', function() {
    autosize(document.querySelectorAll('#story'));
     }, false);
    </script>


</body>

</html>