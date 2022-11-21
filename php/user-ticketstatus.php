<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user-ticketstatus.css">
    <script src="js/ticketstatus.js" defer></script> <!--might change-->
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
        <img src="img/white.png" class="logo" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">FAQs</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link waves-effect waves-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-solid fa-circle-user"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="user-my-reservations.html">My Tickets</a>
                    <a class="dropdown-item" href="#">Settings</a>
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
<div class="user-satisfaction-survey"> <!--this will only appear once the ticket has been resolved-->
    <!--Will place the code for the modal of user satisfaction survey here-->
</div>

<div class="header">
    <div class="title">
        <h2>View Ticket Status</h2>
    </div>
    <div class="button">
        <button id="return" onclick="">Return to my tickets</button>
    </div>
</div>

<div class="tixstat">
    <!--PROGRESS BAR-->
    <div class="progressbar">
        <div class="bar" id="bar"></div>

            <div class="progress-step progress-step-active" data-title="Ticket Created"></div>
            <div class="progress-step" data-title="Request Confirmed"></div>
            <div class="progress-step" data-title="Ticket Forwarded"></div>
            <div class="progress-step" data-title="Solution In Progress"></div>
            <div class="progress-step" data-title="Complete"></div>
    </div>
</div>

<div class="status-details">
    <h4>Ticket No. <span id="ticketnum">XXX</span></h4>
    <br>

    <table class="app-list" id = "table">
        <thead>
          <tr>
            <th id="status-date">DATE</th>
            <th id="status-activity">ACTIVITY</th>
            <th id="status-assigned">ASSIGNED TO</th>
          </tr>
        </thead>
        <tbody>

          <tr id="process">
            <td id="date-and-time">2022-05-10 17:43:12</td>
            <td id="status-info">Ticket Resolved <br>
                <span id="comment">Your ticket has been resolved. 
                                    If you encounter the same problem again, 
                                    you may request to reopen your ticket.</span>
            </td>
            <td id="assigned-agent">Support Staff</td>
          </tr>

          <tr id="process">
            <td id="date-and-time">2022-05-10 17:43:12</td>
            <td id="status-info"> <br>
                <span id="comment">Please check your email</span>
            </td>
            <td id="assigned-agent">Support Staff</td>
          </tr>

          <tr id="process">
            <td id="date-and-time">2022-05-10 17:43:12</td>
            <td id="status-info">Forwarded <br>
                <span id="comment">Your ticket has been forwarded to the support staff</span>
            </td>
            <td id="assigned-agent">IPEA Admin</td>
          </tr>

          <tr id="process">
            <td id="date-and-time">2022-05-10 17:43:12</td>
            <td id="status-info">Service request confirmed <br>
                <span id="comment"> </span>
            </td>
            <td id="assigned-agent">IPEA Admin</td>
          </tr>

          <tr id="process">
            <td id="date-and-time">2022-05-10 17:43:12</td>
            <td id="status-info">Service request created <br>
                <span id="comment"> </span>
            </td>
            <td id="assigned-agent"></td>
          </tr>
          
        </tbody>
      </table>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#satisfaction-survey">
  Satisfaction Survey Modal (Remove this pag di na kelangan)
</button>
<!-- Modal -->
<div class="modal fade" id="satisfaction-survey" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ticket No. <span id="ticket-num">XXX</span> has been resolved!</h5>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Continue</button>
      </div>
    </div>
  </div>
</div>

<!--FOOTER-->
<footer>
  <div class="footer-content">
    <img src="img/ust_footer.png" alt="facebook logo">
    <p class="credits">ISCOTS: IPEA Student Concerns Ticketing System. 2022.</p>
  </div>
</footer>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>