<style>
.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    width: 250px;
    height: 100vh;
    overflow-y:auto;
    transition: 0.5s;
    z-index: 999;
    
}

::-webkit-scrollbar {
    display: none;
}

.bg-gradient-primary {
     background-color: #4e73df;
    background-image: linear-gradient(180deg,#4e73df 10%,#224abe 100%);
    background-size:cover;
}

</style>
  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion " id="accordionSidebar" >

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Home.php">
                <div class="sidebar-brand-icon">
                   <i><img src='img/coast.png' width="30" height="30" class="d-inline-block align-top" alt=""></i>
                </div>
                
                <div class="sidebar-brand-text mx-1">Asaas</div>
                
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Operations Department
            </div>

            
            <!-- Nav Item - Incidents model
            <li class="nav-item">
                <a class="nav-link" href="Viewincident.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Incidents</span></a>
            </li>-->
            
            <!-- Nav Item - icidnents-arrest -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Incidents Report</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Incidents:</h6>
                        <a class="collapse-item" href="incident.php">Add Incidents</a>
                        <a class="collapse-item" href="Viewincident.php">View Incidents</a>
                        <a class="collapse-item" href="reportincident.php">Print Report</a>
                    </div>
                </div>
            </li> 

            <!-- Nav Item - arrest -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Arrest Report</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Arrests:</h6>
                        <a class="collapse-item" href="arrest.php">Add Arrest</a>
                        <a class="collapse-item" href="Viewarrest.php">View Arrest</a>
                        <a class="collapse-item" href="reportarrest.php">Print Report</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
           

            <!-- Nav Item - Pages patrol-operations -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesss"
                    aria-expanded="true" aria-controls="collapsePagess">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Patrol report</span>
                </a>
                <div id="collapsePagesss" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Patrols:</h6>
                        <a class="collapse-item" href="patrol.php">Add Patrol</a>
                        <a class="collapse-item" href="Viewpatrol.php">View Patrol</a>
                        <a class="collapse-item" href="reportpatrol.php">Print Report</a>
                        
                    </div>
                </div>
            </li>

             <!-- Nav Item -operations -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagessss"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Operations Report</span>
                </a>
                <div id="collapsePagessss" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Operations:</h6>
                        <a class="collapse-item" href="operations.php">Add Operations</a>
                        <a class="collapse-item" href="Viewoperations.php">View Operations</a>
                        <a class="collapse-item" href="reportoperation.php">Print Report</a>
                        
                    </div>
                </div>
            </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

            <!-- Nav Item - Pages casualties-caution -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesssss"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Casualties Report</span>
                </a>
                <div id="collapsePagesssss" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Casualties:</h6>
                        <a class="collapse-item" href="casualties.php">Add Casualties</a>
                        <a class="collapse-item" href="Viewcasualties.php">View Casualties</a>
                        <a class="collapse-item" href="reportcasualties.php">Print Report</a>
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Caution -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesssssss"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Caution Report</span>
                </a>
                <div id="collapsePagesssssss" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Caution:</h6>
                        <a class="collapse-item" href="caution.php">Add new Caution</a>
                        <a class="collapse-item" href="Viewcaution.php">View Caution</a>
                        <a class="collapse-item" href="reportcaution.php">Print Report</a>
                        
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
           
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-print"></i>
                    <span>Reports</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Print and View Reports:</h6>
                        <a class="collapse-item" href="reportincident.php"> Incidents Report</a>
                        <a class="collapse-item" href="reportarrest.php"> Arrest Report</a>
                        <a class="collapse-item" href="reportpatrol.php"> Patrol Report</a>
                        <a class="collapse-item" href="reportoperation.php"> Operations Report</a>
                        <a class="collapse-item" href="reportcasualties.php"> Casualties Report</a>
                        <a class="collapse-item" href="reportcaution.php"> Caution Report</a>
                        
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) 
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> -->

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/coast.png" alt="...">
                <p class="text-center mb-2"><strong>Asaas</strong> Program for the somaliland coast guard</p>
               <!-- <a class="btn btn-success btn-sm" href="https://Somalilandcoastguard.org">our website</a>-->
            </div>

        </ul>
        <!--End of Sidebar -->

        