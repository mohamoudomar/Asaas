<?php
include 'config.php';

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':sector'		=>	$_POST["sector"]
		);

		$query = "
		INSERT INTO operation 
		(sector) VALUES (:sector)
		";

		$statement = $con->prepare($query);

		$statement->execute($data);

		echo 'done';
	}

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT sector, COUNT(ID) AS Total 
		FROM operation
		GROUP BY sector
		";

		$result = $con->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'sector'		=>	$row["sector"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>









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
                <?php include 'topbar.php';?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">



                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="reportarrest.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- operations card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Operations</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">     <?php   include 'config.php';
$query = "SELECT COUNT(*) FROM operation";
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        while ($row = mysqli_fetch_array($result)) {
                            echo "$row[0]";
                          }

                                     ?> Operations
                                     </div>
                                    
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- petrol card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Patrols</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">     <?php   include 'config.php';
$query = "SELECT COUNT(*) FROM patrol";
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        while ($row = mysqli_fetch_array($result)) {
                            echo "$row[0]";
                          }
                                     ?> Patrols
                                     </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- incident card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Incidents
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">     <?php   include 'config.php';
$query = "SELECT COUNT(*) FROM incident";
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        while ($row = mysqli_fetch_array($result)) {
                            echo "$row[0]";
                          } 

                                     ?> Incidents
                                     </div>
                                       </div>
                                        </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- casualties card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Casualties</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">     <?php   include 'config.php';
$query = "SELECT COUNT(*) FROM casualties";
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        while ($row = mysqli_fetch_array($result)) {
                            echo "$row[0]";
                          }
                                     ?> Cases
                                     </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 class="h3 mb-10 text-gray-800 primary success-primary" style="text-align: center;">Charts</h1>
<br>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                       

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                  <!--  <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Incident 
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Operations
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Patrol
                                        </span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            
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
    <?php include'modal.php';?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>


<script>
 $(document).ready(function(){

$('#Add').click(function(){

    var sector = $('input[name=programming_language]:checked').val();

    $.ajax({
        url:"data.php",
        method:"POST",
        data:{action:'insert', sector:sector},
        beforeSend:function()
        {
            $('#sAdd').attr('disabled', 'disabled');
        },
        success:function(data)
        {
            $('#Add').attr('disabled', false);

            $('#programming_language_1').prop('checked', 'checked');

            $('#programming_language_2').prop('checked', false);

            $('#programming_language_3').prop('checked', false);

            alert("Your Feedback has been send...");

        
        }
    })

});

makechart();

function makechart()
{
    $.ajax({
        url:"data.php",
        method:"POST",
        data:{action:'fetch'},
        dataType:"JSON",
        success:function(data)
        {
            var sector = [];
            var total = [];
            var color = [];

            for(var count = 0; count < data.length; count++)
            {
                sector.push(data[count].sector);
                total.push(data[count].total);
                color.push(data[count].color);
            }

            var chart_data = {
                labels:sector,
                datasets:[
                    {
                        label:'Number of Operations',
                        backgroundColor:color,
                        color:'#fff',
                        data:total
                    }
                ]
            };

            var options = {
                responsive:true,
                scales:{
                    yAxes:[{
                        ticks:{
                            min:0
                        }
                    }]
                }
            };

            var group_chart1 = $('#pie_chart');

            var graph1 = new Chart(group_chart1, {
                type:"pie",
                data:chart_data
            });

            var group_chart2 = $('#doughnut_chart');

            var graph2 = new Chart(group_chart2, {
                type:"doughnut",
                data:chart_data
            });

            var group_chart3 = $('#bar_chart');

            var graph3 = new Chart(group_chart3, {
                type:'bar',
                data:chart_data,
                options:options
            });
        }
    })
}

});

</script>

</body>
</html>