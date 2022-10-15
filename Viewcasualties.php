<?php
include 'restrict.php';
?>


<?php 
include 'header.php' ;
?> 
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
<?php   include 'Navbar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               <?php include "topbar.php";?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-10 text-gray-800 alert alert-primary" style="text-align: center;">CASUALTIES REPORT</h1>
                   <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>-->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <a href="casualties.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Add Casualties</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        
                                            <th>ID</th>
                                            <th>sector</th>
                                            <th>date</th>
                                            <th>name</th>
                                            <th>civil</th>
                                            <th>Description</th>
                                            <th>severity</th>
                                            <th>reason</th>
                                            <th>location</th>
                                            <th>actions</th>
                                            <th>entities</th>
                                            <th>evidence</th>
                                            <th>action</th>
                                            
                                            
                                            
                                            
                                            
                                            
                                            

                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             
                                            <th>ID</th>
                                            <th>sector</th>
                                            <th>date</th>
                                            <th>name</th>
                                            <th>civil</th>
                                            <th>Description</th>
                                            <th>severity</th>
                                            <th>reason</th>
                                            <th>location</th>
                                            <th>actions</th>
                                            <th>entities</th>
                                            <th>evidence</th>
                                            <th>action</th>
                                            
                                            
                                        </tr>
                                    </tfoot>
                                    <?php   

include 'config.php';
$sql = mysqli_query($con,"SELECT * FROM casualties");
while ($row = mysqli_fetch_array($sql)) {



                                     ?>
                                    <tbody>
                                        <tr>
                                          
                                            <td><?php echo $row['ID']; ?></td>
                                            <td><?php echo $row['sector']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['civil']; ?></td>
                                            <td><?php echo $row['des'];   ?></td>
                                            <td><?php echo $row['severity'] ;?></td>
                                            <td><?php echo $row['reason']; ?></td>
                                            <td><?php echo $row['location'] ;?></td>
                                            <td><?php echo $row['actions'] ;?></td>
                                            <td><?php echo $row['entities'] ;?></td>
                                            <td>
                                            <a href="viewPicturecasualties.php?ID=<?php   echo$row['evidence']; ?>">
                                            <img width="100px;" height="100px" src="Data/<?php   echo$row['evidence']; ?>" >
                                            </a>
                                            </td>
                                            <td>
				                           <!-- Delete button-->
                                           <a  href="deleteCA.php?delete=<?php echo $row['ID']; ?>" name="delete" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                        class="fas fa-trash fa-sm text-white-50"></i></a>
                                            <!-- update button-->
                                             <a href="editcasual.php?update=<?php echo $row['ID']; ?>" name="update"class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                      class="fas fa-pen fa-sm text-white-50"></i></a>
			                                </td>
                                            
                                            
                                           
                                            
                                            

                                        </tr>
                                        
                                    </tbody>
                                    <?php   } ?>
                                </table>
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
    <!-- End Of Logout Modal-->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>