<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user-viewticket.css">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/f7f6ac6a49.js" crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>View Ticket | I-SCoTS</title>
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
<div class="service-request-form">
  <div class="header">
    <div class="title">
      <h2>Viewing Ticket No. XXX</h2>
    </div>
    <div class="button">
      <button id="return" onclick="">Return to my tickets</button>
    </div>
  </div>
    
    <div class="form-content">
      <br>
      <form action="#">
        <section> <!--Autofill 'tong section na to ha-->
          <div class="input-block">
            <label for="fname">First Name</label>
            <input id="fname" type="text" value="" name="fname" readonly>
          </div>
        
          <div class="input-block">
            <label for="lname">Last Name</label>
            <input id="lname" type="text" value="" name="lname" readonly>
          </div>

          <div class="input-block">
            <label for="lname">Email</label>
            <input id="email" type="text" value="" name="email" readonly>
          </div>
          <br>
        </section>

        <section>
          <div class="form-group">
            <label for="department" style="margin-left: 5px;">Department</label>
            <select class = "options" id="department">
              <option>Athletics</option>
              <option>Service Physical Education</option>
            </select>
          </div>

          <div class="form-group">
            <label for="Category" style="margin-left: 5px;">Category</label>
            <select class = "options" id="category">
              <option>Student Inquiries</option>
              <option>Student Grievances</option>
              <option>Enrollment Concerns</option>
              <option>Others</option>
            </select>
          </div>
          <br>
        </section>

        <section>
          <div class="input-block subject">
            <label for="subject">Subject</label>
            <input id="subject" type="text" value="" name="subject" readonly>
          </div>
          <br>
        </section>

        <section>
          <div class="input-block description">
            <label for="concern">Description of Concern</label>
            <textarea name="concern" id="concern" cols="108" rows="5" readonly></textarea>
          </div>
          <br>
        </section>

        <section>
            <div class="input-block">
              <label for="notes">Notes for closing</label>
              <input id="notes" type="text" value="" name="notes" readonly>
            </div>
            <br>
        </section>
        
        <section class="date"> <!--Magrereflect dito kung anong date and oras narequest and naresolve yung ticket-->
                <p style="font-weight: bold;">Date Requested: <span id="date-and-time">2022 - 05 - 10 17:40:24</span></p>
                <p style="font-weight: bold;">Date Resolved: <span id="date-and-time">2022 - 05 - 10 17:40:24</span></p>
        </section> <!--Di ko pa alam pano ibababa tong isa-->
        <br>

        <div class="btn-grp">
          <button id="view-ticket-status" onclick="">VIEW TICKET STATUS</button>
          <button id="req-to-reopen" onclick="">REQUEST TO REOPEN TICKET</button>
        </div>
      </form>
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