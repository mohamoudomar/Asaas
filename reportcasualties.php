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
       <?php    include 'Navbar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php    include 'topbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div style="height: 50px;"></div>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 alert alert-primary" >Reports</h1>
                     <div class="row">
                         <div class="col-md-8" style="margin-left: 20%;box-shadow:grey;">
                            <div class="text  text-success panel-heading">
                                <h1>Get All Casualties Reports</h1>
                            </div>
                            <div class="panel-body">
                                <form method="POST" action="printcasu.php" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Start-Date</label>
                                         <div class="col-md-10">
                                             <input type="date" name="start" class="form-control">
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">End-Date</label>
                                         <div class="col-md-10">
                                             <input type="date" name="end" class="form-control">
                                         </div>
                                    </div>
                                   
                                    <div class="form-group">
                                         <div class="col-md-10">
                                             <button name="Print" class="btn btn-md btn-success col-md-12">Print</button>
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
    
    <!-- Logout Model End-->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>


