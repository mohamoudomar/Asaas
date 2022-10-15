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
		INSERT INTO incident 
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
		FROM incident
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
    exit;
}
?>

</head>
<body>

<?php include 'header.php';?>

 <div class="col-xl-5 col-lg-8">
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
                                    <canvas id="pie_chart"></canvas>
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



</body>

</html>


<script>
 $(document).ready(function(){

$('#Add').click(function(){

    var sector = $('input[name=programming_language]:checked').val();

    $.ajax({
       
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

           

        
        }
    })

});

makechart();

function makechart()
{
    $.ajax({
        
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
                        label:'Number of Incidents',
                        backgroundColor:color,
                        color:'#ffff',
                        data:total

                        
                    }
                ]
            };

            var options = {
                responsive:true,
                scales:{
                    yAxes:[{
                        ticks:{
                            min:0,
                           
                        },
                  
                    }]
                }
            
                 
    
             
            };

            var group_chart1 = $('#pie_chart');

            var graph1 = new Chart(group_chart1, {
                type:"pie",
                data:chart_data
            });

           
        }
    })
}

});

</script>

</body>
</html>