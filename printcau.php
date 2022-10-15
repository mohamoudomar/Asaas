<?php
include 'restrict.php';
?>

<?php 
include 'header.php' ;
?> 

<body id="page-top" onload="window.print();">

<div class="container">
<div class="text  text-success panel-heading">
                                <h1 style="text-align: center; color:#000;">Caution Report</h1>
                            </div>
	<table class="table">
    <tr>    
     <td colspan="10"><img src="img/printl.png" width="900px" height="140px;"></td>
     <div class="text  text-success panel-heading">
                                <h1 style="text-align: center; color:#fd7e14;">Operations Department</h1>
                            </div>
		<tr>
		<!--<td>evidence</td>-->
         <td>sector</td>
         <td>date</td>
         <td>name</td>
         <td>civilian or foregin</td>
         <td>phone</td>
         <td>location</td>
         <td>reason</td>
         <td>description</td>
         <td>entities</td>	
	    </tr>
<?php 	

include 'config.php';

if (isset($_POST['Print'])) {
	
$startDate = $_POST['start'];

$endDate = $_POST['end'];



$sql = mysqli_query($con,"SELECT * FROM caution WHERE DATE BETWEEN '$startDate' AND '$endDate' ");
while($ID = mysqli_fetch_array($sql))
{





 ?>
	    <tr>
		<!--<td><?php     echo$ID['10']; ?></td>-->
		<td><?php     echo$ID['1']; ?></td>
		<td><?php     echo$ID['2']; ?></td>
		<td><?php     echo$ID['3']; ?></td>	
        <td><?php     echo$ID['4']; ?></td>
        <td><?php     echo$ID['5']; ?></td>
        <td><?php     echo$ID['6']; ?></td>
        <td><?php     echo$ID['7']; ?></td>
        <td><?php     echo$ID['8']; ?></td>
        <td><?php     echo$ID['9']; ?></td>
	    </tr>

	    <?php }	} ?>
	</table>
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
</body>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>