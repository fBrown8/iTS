<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/personnel-tickets.css">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/f7f6ac6a49.js" crossorigin="anonymous"></script>
    <!--Chart.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tickets | Admin</title>
</head>
<body>
	<input type="checkbox" id="check" checked="false">
	<!--header area start-->
	<header>
		<label for = "check">
			<i class="fas fa-bars" id="menuBtn"></i>
		</label>
		<div class ="leftArea">
			<img src="img/white.png" alt="iscots logo">
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
		<a href="personnel-ticket.php" class="ticket"><i class="fa-solid fa-ticket"></i><span>Tickets</span></a>
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
    
    <div class = "ticket-list">
        <h3>Tickets</h3>
        <hr>

<div class="tabs">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="alltickets-tab" data-bs-toggle="tab" data-bs-target="#all-tickets" type="button" role="tab" aria-controls="home" aria-selected="true">All</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="reopenedtickets-tab" data-bs-toggle="tab" data-bs-target="#reopened-tickets" type="button" role="tab" aria-controls="profile" aria-selected="false">Reopened</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="processingtickets-tab" data-bs-toggle="tab" data-bs-target="#processing-tickets" type="button" role="tab" aria-controls="profile" aria-selected="false">Processing</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="resolvedtickets-tab" data-bs-toggle="tab" data-bs-target="#resolved-tickets" type="button" role="tab" aria-controls="profile" aria-selected="false">Resolved</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="dismissedtickets-tab" data-bs-toggle="tab" data-bs-target="#dismissed-tickets" type="button" role="tab" aria-controls="profile" aria-selected="false">Dismissed</button>
        </li>
  </ul>

  <div class="tab-content" id="ticketTabContent">
        <div class="tab-pane fade show active" id="all-tickets" role="tabpanel" aria-labelledby="alltickets-tab">
            <div class="search">
                <form class="search-app" action="#">
                    <input onkeyup="filter()" id="search" type="text" placeholder="Search..." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <table class="app-list" id = "table"> <!--Table for ALL tickets-->
                <thead>
                  <tr>
                    <th id="ticket-number">TICKET NO.</th>
                    <th id="ticket-subject">SUBJECT</th>
                    <th id="ticket-requester">REQUESTER</th>
                    <th id="ticket-agent">AGENT</th>
                    <th id="ticket-created">DATE CREATED</th>
                    <th id="ticket-priority">PRIORITY LEVEL</th>
                    <th id="ticket-status">STATUS</th>
                  </tr>
                </thead>
                <tbody>
        
                  <tr id="ticket">
                    <td id="ticketnum">XXX</td>
                    <td id="subject">Subject not available on my course site</td>
                    <td id="requester">Juan Dela Cruz</td>
                    <td id="agent">Francis Abello</td>
                    <td id="date-created">2022-05-14</td>
                    <td id="priority-level">High</td>
                    <td id="ticketstat">
                        <button class="status" id="pending" style="background-color: orange;">Processing</button>
                    </td>
                  </tr>
    
                  <tr id="ticket">
                    <td id="ticketnum">XXX</td>
                    <td id="subject">Subject not available on my course site</td>
                    <td id="requester">Juan Dela Cruz</td>
                    <td id="agent">Francis Abello</td>
                    <td id="date-created">2022-05-14</td>
                    <td id="priority-level">Low</td>
                    <td id="ticketstat">
                        <button class="status" id="open" style="background-color: #EA4335;">Dismissed</button>
                    </td>
                  </tr>
    
                  <tr id="ticket">
                    <td id="ticketnum">XXX</td>
                    <td id="subject">Subject not available on my course site</td>
                    <td id="requester">Juan Dela Cruz</td>
                    <td id="agent">Francis Abello</td>
                    <td id="date-created">2022-05-14</td>
                    <td id="priority-level">Low</td>
                    <td id="ticketstat">
                        <button class="status" id="open" style="background-color: #565656;">Resolved</button>
                    </td>
                  </tr>
    
                  <tr id="ticket">
                    <td id="ticketnum">XXX</td>
                    <td id="subject">Subject not available on my course site</td>
                    <td id="requester">Juan Dela Cruz</td>
                    <td id="agent">Francis Abello</td>
                    <td id="date-created">2022-05-14</td>
                    <td id="priority-level">Low</td>
                    <td id="ticketstat">
                        <button class="status" id="open" style="background-color: #7B61FF;">Reopened</button>
                    </td>
                  </tr>
                  
                </tbody>
            </table>
            
        </div>

        <div class="tab-pane fade" id="reopened-tickets" role="tabpanel" aria-labelledby="reopenedtickets-tab">
            <div class="search">
                <form class="search-app" action="#">
                    <input onkeyup="filter()" id="search" type="text" placeholder="Search..." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <table class="app-list" id = "table"> <!--Table for REOPENED tickets-->
                <thead>
                  <tr>
                    <th id="ticket-number">TICKET NO.</th>
                    <th id="ticket-subject">SUBJECT</th>
                    <th id="ticket-requester">REQUESTER</th>
                    <th id="ticket-agent">AGENT</th>
                    <th id="ticket-created">DATE CREATED</th>
                    <th id="ticket-priority">PRIORITY LEVEL</th>
                    <th id="ticket-status">STATUS</th>
                    <th id="action">ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr id="ticket">
                    <td id="ticketnum">XXX</td>
                    <td id="subject">Subject not available on my course site</td>
                    <td id="requester">Juan Dela Cruz</td>
                    <td id="agent">Francis Abello</td>
                    <td id="date-created">2022-05-14</td>
                    <td id="priority-level">Low</td>
                    <td id="ticketstat">
                        <button class="status" id="open" style="background-color: #7B61FF;">Reopened</button>
                    </td>
                    <td id="action-button">
                        <button class="delete-ticket" id="delete-ticket"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                  </tr> 
                </tbody>
            </table>
        </div>

        <div class="tab-pane fade" id="processing-tickets" role="tabpanel" aria-labelledby="processingtickets-tab">
            <div class="search">
                <form class="search-app" action="#">
                    <input onkeyup="filter()" id="search" type="text" placeholder="Search..." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <table class="app-list" id = "table"> <!--Table for PROCESSING tickets-->
                <thead>
                  <tr>
                    <th id="ticket-number">TICKET NO.</th>
                    <th id="ticket-subject">SUBJECT</th>
                    <th id="ticket-requester">REQUESTER</th>
                    <th id="ticket-agent">AGENT</th>
                    <th id="ticket-created">DATE CREATED</th>
                    <th id="ticket-priority">PRIORITY LEVEL</th>
                    <th id="ticket-status">STATUS</th>
                    <th id="action">ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
        
                  <tr id="ticket">
                    <td id="ticketnum">XXX</td>
                    <td id="subject">Subject not available on my course site</td>
                    <td id="requester">Juan Dela Cruz</td>
                    <td id="agent">Francis Abello</td>
                    <td id="date-created">2022-05-14</td>
                    <td id="priority-level">High</td>
                    <td id="ticketstat">
                        <button class="status" id="pending" style="background-color: orange;">Processing</button>
                    </td>
                    <td id="action-button">
                        <button class="delete-ticket" id="delete-ticket"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                  </tr>
                  
                </tbody>
            </table>
        </div>
        
        <div class="tab-pane fade" id="resolved-tickets" role="tabpanel" aria-labelledby="resolvedtickets-tab">
            <div class="search">
                <form class="search-app" action="#">
                    <input onkeyup="filter()" id="search" type="text" placeholder="Search..." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <table class="app-list" id = "table"> <!--Table for RESOLVED tickets-->
                <thead>
                  <tr>
                    <th id="ticket-number">TICKET NO.</th>
                    <th id="ticket-subject">SUBJECT</th>
                    <th id="ticket-requester">REQUESTER</th>
                    <th id="ticket-agent">AGENT</th>
                    <th id="ticket-created">DATE CREATED</th>
                    <th id="ticket-priority">PRIORITY LEVEL</th>
                    <th id="ticket-status">STATUS</th>
                    <th id="action">ACTIONS</th>
                  </tr>
                </thead>
                <tbody>

                  <tr id="ticket">
                    <td id="ticketnum">XXX</td>
                    <td id="subject">Subject not available on my course site</td>
                    <td id="requester">Juan Dela Cruz</td>
                    <td id="agent">Francis Abello</td>
                    <td id="date-created">2022-05-14</td>
                    <td id="priority-level">Low</td>
                    <td id="ticketstat">
                        <button class="status" id="open" style="background-color: #565656;">Resolved</button>
                    </td>
                    <td id="action-button">
                        <button class="delete-ticket" id="delete-ticket"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                  </tr>
                  
                </tbody>
            </table>
        </div>
        
        <div class="tab-pane fade" id="dismissed-tickets" role="tabpanel" aria-labelledby="dismissedtickets-tab">
            <div class="search">
                <form class="search-app" action="#">
                    <input onkeyup="filter()" id="search" type="text" placeholder="Search..." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <table class="app-list" id = "table"> <!--Table for all tickets-->
                <thead>
                  <tr>
                    <th id="ticket-number">TICKET NO.</th>
                    <th id="ticket-subject">SUBJECT</th>
                    <th id="ticket-requester">REQUESTER</th>
                    <th id="ticket-agent">AGENT</th>
                    <th id="ticket-created">DATE CREATED</th>
                    <th id="ticket-priority">PRIORITY LEVEL</th>
                    <th id="ticket-status">STATUS</th>
                    <th id="action">ACTIONS</th>
                  </tr>
                </thead>
                <tbody>

                  <tr id="ticket">
                    <td id="ticketnum">XXX</td>
                    <td id="subject">Subject not available on my course site</td>
                    <td id="requester">Juan Dela Cruz</td>
                    <td id="agent">Francis Abello</td>
                    <td id="date-created">2022-05-14</td>
                    <td id="priority-level">Low</td>
                    <td id="ticketstat">
                        <button class="status" id="open" style="background-color: #EA4335;">Dismissed</button>
                    </td>
                    <td id="action-button">
                        <button class="delete-ticket" id="delete-ticket"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                  </tr>
                  
                </tbody>
            </table>
        </div>

  </div>
</div>



</div>
<!--CONTENT AREA END-->
<script src="../js/graphs.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>