<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user-mytickets.css">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/f7f6ac6a49.js" crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ticket Status | I-SCoTS</title>
</head>
<body style="background-color: #f4f4f4;">
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <img src="../img/white.png" class="logo" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="user-home2.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">FAQs</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link waves-effect waves-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-solid fa-circle-user"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="user-mytickets.php">My Tickets</a>
                    <a class="dropdown-item" href="user-settings.php">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.html">Log out</a>
                </ul>
              </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="block">
      <br>
    </div>

<!--CONTENT-->
<div class="header">
    <div class="title">
        <h2>My Tickets</h2>
    </div>
    <div class="button">
        <button id="new" onclick="user-newrquest.php">+ New Ticket</button>
    </div>
</div>

<div class="tickets-list">
  <div class="tabs"> <!--Yung status ng ticket nakadepende kung saan siyang tab nakalagay-->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
          <button class="nav-link active" id="alltickets-tab" data-bs-toggle="tab" data-bs-target="#all-tickets" type="button" role="tab" aria-controls="home" aria-selected="true">All</button>
      </li>
      <li class="nav-item" role="presentation">
          <button class="nav-link" id="processingtickets-tab" data-bs-toggle="tab" data-bs-target="#processing-tickets" type="button" role="tab" aria-controls="profile" aria-selected="false">Processing</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="reopenedtickets-tab" data-bs-toggle="tab" data-bs-target="#reopened-tickets" type="button" role="tab" aria-controls="profile" aria-selected="false">Reopened</button>
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
  
      <br>

      <?php
      $con = mysqli_connect("localhost", "root", "", "ipea");

      $query = "SELECT * FROM usertickets";
      $query_run = mysqli_query($con, $query);
      
      ?>
  
      <table class="app-list" id = "table">
          <thead>
            <tr>
              <th id="ticket-number">TICKET NO.</th>
              <th id="ticket-subject">SUBJECT</th>
              <th id="ticket-created">CREATED AT</th>
              <th id="ticket-status">STATUS</th>
            </tr>
          </thead>

          <?php
            if($query_run)
            {
              while($row = mysqli_fetch_array($query_run))
              {
                ?>
                <tbody>
                <tr id="ticket">
                  <td id="ticketnum"><?php echo $row ['id']; ?></td>
                  <td id="subject"><?php echo $row ['subject']; ?></td>
                  <td id="date-created"><?php echo $row ['created_at']; ?></td>
                  <td id="ticketstat"><?php echo $row ['status']; ?></td>
                </tr>
              </tbody>

              <?php
              }
            }
            else
            {
              echo "No record found!";
            }
        ?>

    
          </tbody>
        </table>
      </div>

      <div class="tab-pane fade show" id="processing-tickets" role="tabpanel" aria-labelledby="processingtickets-tab">
        <div class="search">
          <form class="search-app" action="#">
            <input onkeyup="filter()" id="search" type="text" placeholder="Search..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
  
      <br>


      <?php
      $con = mysqli_connect("localhost", "root", "", "ipea");

      $query = "SELECT * FROM usertickets";
      $query_run = mysqli_query($con, $query);
      
      ?>

      <table class="app-list" id = "table">
          <thead>
            <tr>
              <th id="ticket-number">TICKET NO.</th>
              <th id="ticket-subject">SUBJECT</th>
              <th id="ticket-created">CREATED AT</th>
              <th id="ticket-status">STATUS</th>
            </tr>
          </thead>

          <?php
            if($query_run)
            {
              while($row = mysqli_fetch_array($query_run))
              {
                ?>
                <tbody>
                <tr id="ticket">
                  <td id="ticketnum"><?php echo $row ['id']; ?></td>
                  <td id="subject"><?php echo $row ['subject']; ?></td>
                  <td id="date-created"><?php echo $row ['created_at']; ?></td>
                  <td id="ticketstat"><?php echo $row ['status']; ?></td>
                </tr>
              </tbody>

              <?php
              }
            }
            else
            {
              echo "No record found!";
            }
        ?>

        </table>
      </div>

      <div class="tab-pane fade show" id="reopened-tickets" role="tabpanel" aria-labelledby="reopenedtickets-tab">
        <div class="search">
          <form class="search-app" action="#">
            <input onkeyup="filter()" id="search" type="text" placeholder="Search..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
  
      <br>
  
      <table class="app-list" id = "table">
          <thead>
            <tr>
              <th id="ticket-number">TICKET NO.</th>
              <th id="ticket-subject">SUBJECT</th>
              <th id="ticket-created">CREATED AT</th>
              <th id="ticket-status">STATUS</th>
            </tr>
          </thead>
          <tbody>
  

              <td id="no-ticket" colspan="4">No ticket available</td>

              
          </tbody>
        </table>
      </div>

      <div class="tab-pane fade show" id="resolved-tickets" role="tabpanel" aria-labelledby="resolvedtickets-tab">
        <div class="search">
          <form class="search-app" action="#">
            <input onkeyup="filter()" id="search" type="text" placeholder="Search..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
  
      <br>
  
      <table class="app-list" id = "table">
          <thead>
            <tr>
              <th id="ticket-number">TICKET NO.</th>
              <th id="ticket-subject">SUBJECT</th>
              <th id="ticket-created">CREATED AT</th>
              <th id="ticket-status">STATUS</th>
            </tr>
          </thead>
          <tbody>
  

              <td id="no-ticket" colspan="4">No ticket available</td>

              
          </tbody>
        </table>
      </div>

      <div class="tab-pane fade show" id="dismissed-tickets" role="tabpanel" aria-labelledby="dismissedtickets-tab">
        <div class="search">
          <form class="search-app" action="#">
            <input onkeyup="filter()" id="search" type="text" placeholder="Search..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
  
      <br>
  
      <table class="app-list" id = "table">
          <thead>
            <tr>
              <th id="ticket-number">TICKET NO.</th>
              <th id="ticket-subject">SUBJECT</th>
              <th id="ticket-created">CREATED AT</th>
              <th id="ticket-status">STATUS</th>
            </tr>
          </thead>
          <tbody>

            <tr id="ticket">
              <td id="ticketnum">XXX</td>
              <td id="subject">Password Reset</td>
              <td id="date-created">2022-05-14</td>
              <td id="ticketstat">Dismissed</td>
            </tr>
  
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--
    <div class="search">
        <form class="search-app" action="#">
          <input onkeyup="filter()" id="search" type="text" placeholder="Search..." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <br>

    <table class="app-list" id = "table">
        <thead>
          <tr>
            <th id="ticket-number">TICKET NO.</th>
            <th id="ticket-subject">SUBJECT</th>
            <th id="ticket-created">CREATED AT</th>
            <th id="ticket-status">STATUS</th>
          </tr>
        </thead>
        <tbody>

          <tr id="ticket">
            <td id="ticketnum">XXX</td>
            <td id="subject">Subject not available on my course site</td>
            <td id="date-created">2022-05-14</td>
            <td id="ticketstat">Processing</td>
          </tr>

          <tr id="ticket">
            <td id="ticketnum">XXX</td>
            <td id="subject">Password Reset</td>
            <td id="date-created">2022-05-14</td>
            <td id="ticketstat">Dismissed</td>
          </tr>

          
        </tbody>
      </table>
    -->
</div>
<!--FOOTER-->
<footer>
  <div class="footer-content">
    <img src="../img/ust_footer.png" alt="facebook logo">
    <p class="credits">ISCOTS: IPEA Student Concerns Ticketing System. 2022.</p>
  </div>
</footer>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>