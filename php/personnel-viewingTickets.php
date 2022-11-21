<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/personnel-viewingTickets.css">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/f7f6ac6a49.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Personnel - Viewing Ticket | I-SCoTS</title>
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

	<!--sidebar start-->
	<nav class = "sideBar">
		<a href="personnel-dashboard.php" class="dboard"><i class="fa-solid fa-chart-line"></i><span>Dashboard</span></a>
		<span class="label">SYSTEM</span>
		<a href="personnel-tickets.php" class="ticket"><i class="fa-solid fa-ticket"></i><span>Tickets</span></a>
    <a href="personnel-settings.php" class="settings"><i class="fa-solid fa-gear"></i><span>Settings</span></a>
		<a href="logout.php" class = "logout"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
	</nav>
	<script src="../js/sidenav.js"></script>
	<!--sidebar end-->

<!--CONTENT-->
<div class="service-request-form">
    <div class="form-content">
        <div class="header">
            <div class="title">
              <h2>Viewing Ticket No. XXX</h2>
            </div>
          </div>
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
            <label for="department">Department</label>
            <select class = "options" id="department">
              <option>Athletics</option>
              <option>Service Physical Education</option>
            </select>
          </div>

          <div class="form-group">
            <label for="Category">Service Category</label>
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
        
        <section class="date"> <!--Magrereflect dito kung anong date and oras narequest and naresolve yung ticket-->
                <p style="font-weight: bold;">Date Requested: <span id="date-and-time">2022 - 05 - 10 17:40:24</span></p>
        </section> <!--Di ko pa alam pano ibababa tong isa-->
        <br>

        <!-- ASSIGN ROLE AND PERSONNEL & SET PRIORITY LEVEL SECTION -->
        <section>
            <div class="form-group">
              <label for="department">Assign Role</label>
              <select class = "options" id="department">
                <option value="" disabled selected>Select Role</option>
                <option>Teaching Academic Staff</option>
                <option>Academic Official</option>
                <option>Support Staff</option>
              </select>
            </div>
  
            <div class="form-group">
              <label for="Category" >Assign Personnel</label>
              <select class = "options" id="category">
                <option value="" disabled selected>Select Personnel</option>
                <option>francis.abello.ipea@ust.edu.ph</option>
                <option>ed.sheeran.ipea@ust.edu.ph</option>
              </select>
            </div>
            <br>
          </section>

          <section>
            <div class="form-group">
                <label for="department">Priority Level</label>
                <select class = "options" id="department">
                  <option value="" disabled selected>Select Priority Level</option>
                  <option>High</option>
                  <option>Medium</option>
                  <option>Low</option>
                </select>
              </div>
          </section>

          <section id="notify-requester">
            <input type="checkbox" name="notify" id="notify">
            <label for="notify"><span>Notify requester about the changes.</span></label>
          </section>

          <section>
            <div class="input-block description">
              <label for="remarks">Remarks:</label>
              <textarea name="remarks" id="remarks" cols="108" rows="5"></textarea>
            </div>
            <br>
          </section>
          

        <div class="btn-grp">
          <button id="reject-ticket" onclick="">REJECT REQUEST</button>
          <button id="submit-ticket" onclick="">SUBMIT AS TICKET</button>
        </div>
      </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script src="/js/pw-strength-indicator.js"></script>
<script src="/js/pw-validation.js"></script>
</body>
</html>