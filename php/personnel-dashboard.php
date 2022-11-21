<?php
session_start();
print_r($_SESSION);
?>


<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/personnel-dashboard.css">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/f7f6ac6a49.js" crossorigin="anonymous"></script>
    <!--Chart.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-stacked100@1.0.0"></script>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Dashboard | Personnel</title>
</head>
<body>
	<input type="checkbox" id="check" checked="false">
	<!--header area start-->
	<header>
		<label for = "check">
			<i class="fas fa-bars" id="menuBtn"></i>
		</label>
		<div class ="leftArea">
			<img src="../img/white.png" alt="iscots logo">
		</div>
	</header>
	<div class="block">
		<br>
	</div>
	<!--header area end-->
	<!--sidebar start-->
	<nav class = "sideBar">
		<a href="personnel-dashboard.php" class="dboard"><i class="fa-solid fa-chart-line"></i><span>Dashboard</span></a>
		<span class="label">SYSTEM</span>
		<a href="personnel-tickets.php" class="ticket"><i class="fa-solid fa-ticket"></i><span>Tickets</span></a>
        <a href="personnel-settings.php" class="settings"><i class="fa-solid fa-gear"></i><span>Settings</span></a>
		<a href="logout.php" class = "logout"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
	</nav>
	<script src="/js/sidenav.js"></script>
	<!--sidebar end-->

<!-- CONTENT AREA -->
<div class="content">
    <div class="notif-panel"> <!--Sa notification dapat may limit kung ilan yung dadating tas pag sumobra na sa number na yon,
                                    madedelete automatic yung notif-->
            <h5>Notifications</h5>

            <div class="card" id="notification-message"> <!--Dito nakalagay yung notification message-->
                <div class="card-body">
                  <p class="card-text">You have been assigned to <span><b>[ticket number and subject]</b></span> by <span><b>[agent name]</b></span></p>
                </div>
                <div class="card-footer bg-transparent text-muted">2022-05-13 12:30:41</div> <!--dapat real time and date-->
            </div>

            <div class="card" id="notification-message"> <!--Dito nakalagay yung notification message-->
                <div class="card-body">
                  <p class="card-text">You have assigned <span><b>[ticket number and subject]</b></span> to <span><b>[agent name]</b></span></p>
                </div>
                <div class="card-footer bg-transparent text-muted">2022-05-13 12:30:41</div> <!--dapat real time and date-->
            </div>

            <div class="card" id="notification-message"> <!--Dito nakalagay yung notification message-->
                <div class="card-body">
                  <p class="card-text">You have resolved <span><b>[ticket number and subject]</b></span></p>
                </div>
                <div class="card-footer bg-transparent text-muted">2022-05-13 12:30:41</div> <!--dapat real time and date-->
            </div>
        </div>
    
        <div class = "dashboard">
            <h1>Dashboard</h1>
    
                <div class="ticket-counts">
                    <span>TICKET COUNTS</span>
                        <!--CARDS-->
                        <div class="circles">
                            <div class="ticket-count" style="border-color: #B48834;">
                                <span id="num-of-tix" style="color: #B48834;">10</span>
                                <br>
                                <span id="ticket-category">All</span>
                            </div>
    
                            <div class="ticket-count" style="border-color: #0FA958;">
                                <span id="num-of-tix" style="color: #0FA958;">3</span>
                                <br>
                                <span id="ticket-category">Unassigned</span>
                            </div>
    
                            <div class="ticket-count" style="border-color: #FF9500;">
                                <span id="num-of-tix" style="color: #FF9500;">2</span>
                                <br>
                                <span id="ticket-category">Processing</span>
                            </div>
    
                            <div class="ticket-count" style="border-color: #7B61FF;">
                                <span id="num-of-tix" style="color: #7B61FF;">2</span>
                                <br>
                                <span id="ticket-category">Reopened</span>
                            </div>
    
                            <div class="ticket-count" style="border-color: #565656;">
                                <span id="num-of-tix" style="color: #565656;">1</span>
                                <br>
                                <span id="ticket-category">Resolved</span>
                            </div>
    
                            <div class="ticket-count" style="border-color: #EA4335;">
                                <span id="num-of-tix" style="color: #EA4335;">3</span>
                                <br>
                                <span id="ticket-category">Dismissed</span>
                            </div>
    
                            <div class="ticket-count" style="border-color: #993399;">
                                <span id="num-of-tix" style="color: #993399;">2</span>
                                <br>
                                <span id="ticket-category">Overdue</span>
                            </div>
    
                        </div>
                        
        
                </div>
    
                <div class="ticket-stats">
                    <span>TICKET STATISTICS</span>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="perweek-tab" data-bs-toggle="tab" data-bs-target="#per-week" type="button" role="tab" aria-controls="home" aria-selected="true">All Tickets</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="percategory-tab" data-bs-toggle="tab" data-bs-target="#per-category" type="button" role="tab" aria-controls="profile" aria-selected="false">Tickets per Service</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="perservice-tab" data-bs-toggle="tab" data-bs-target="#per-service" type="button" role="tab" aria-controls="profile" aria-selected="false">Tickets per Service in a Week</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="sla-tab" data-bs-toggle="tab" data-bs-target="#sla" type="button" role="tab" aria-controls="profile" aria-selected="false">SLA per Priority Level</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="slaService-tab" data-bs-toggle="tab" data-bs-target="#slaService" type="button" role="tab" aria-controls="profile" aria-selected="false">SLA per Service</button>
                        </li>
                    </ul>
    
                    <div class="tab-content" id="ticketTabContent">
                        <!--TOTAL NUMBER OF TICKETS PER WEEK-->
                        <div class="tab-pane fade show active" id="per-week" role="tabpanel" aria-labelledby="perweek-tab">
                            <div class="graphs" id="tix-stat">
                                <canvas id="ticketChart"></canvas>
                            </div>
                        </div>
                        <!--TOTAL NUMBER OF TICKETS PER SERVICE IN A WEEK-->
                        <div class="tab-pane fade" id="per-service" role="tabpanel" aria-labelledby="perservice-tab">
                            <div class="graphs" id="tix-stat">
                                <canvas id="perserviceChart"></canvas>
                            </div>
                        </div>
                        <!--TOTAL NUMBER OF TICKETS PER SERVICE-->
                        <div class="tab-pane fade" id="per-category" role="tabpanel" aria-labelledby="percategory-tab">
                            <div class="graphs" id="tix-stat">
                                <canvas id="percategoryChart"></canvas>
                            </div>
                        </div>
                        <!--PIE CHARTS SLA PER CATEGORY LEVEL-->
                        <div class="tab-pane fade" id="sla" role="tabpanel" aria-labelledby="sla-tab">
                            <div class="graphs" id="tix-stat">
                                <div class="slaPie">
                                    <canvas id="slaHighPrioChart"></canvas>
                                </div>
    
                                <div class="slaPie">
                                    <canvas id="slaMedPrioChart"></canvas>
                                </div>
    
                                <div class="slaPie">
                                    <canvas id="slaLowPrioChart"></canvas>
                                </div>   
                            </div>
                        </div>
                        <!--SLA PER SERVICE-->
                        <div class="tab-pane fade" id="slaService" role="tabpanel" aria-labelledby="slaService-tab">
                            <div class="graphs" id="tix-stat">
                                <canvas id="slaservice"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
    
                
                <div class="bottom-data">
                    
                    <div class="cards" id="avg">
                        <span>AVERAGE TICKET RESOLUTION TIME</span>
                        <h3 id="average-resol-time">###</h3>
                    </div>
                    
                    <div class="cards" id="sts">
                        <span>USER SATISFACTION</span>
                        <div class="graphs" id="tix-stat">
                            <canvas id="usChart"></canvas>
                        </div>
                    </div>
                </div>
        </div>



</div>
<!--CONTENT AREA END-->
<script src="../js/personnel-graphs.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
