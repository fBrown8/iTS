<?php
include('authentication.php');
print_r($_SESSION);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/superadmin-home.css">
    <link rel="stylesheet" href="../css/superadmin-settings.css">
    <link rel="stylesheet" href="../css/settings-resetpw.css">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/f7f6ac6a49.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Super Admin - Settings | I-SCoTS</title>
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
        <a href="superadmin-home.php" class="dboard"><i class="fa-solid fa-house"></i><span>Home</span></a>
        <span class="label">ADMINISTRATION</span>
        <a href="superadmin-manageaccounts.php" class="faculty"><i class="fa-solid fa-user-group"></i><span>Users</span></a>
        <a href="superadmin-manageUserRoles.php" class="student"><i class="fa-solid fa-sitemap"></i><span>User Roles</span></a>
        <a href="superadmin-manageServices.php" class="questionnaire"><i class="fa-solid fa-users"></i><span>Services</span></a>
        <span class="label">SYSTEM</span>
        <a href="superadmin-department.php" class="department"><i class="fa-solid fa-chalkboard-user"></i><span>Department</span></a>
        <span class="label">SYSTEM</span>
        <a href="superadmin-manageFAQs.php" class="rcord"><i class="fa-solid fa-circle-question"></i><span>FAQs</span></a>
        <a href="superadmin-settings.php" class="settings"><i class="fa-solid fa-gear"></i><span>Settings</span></a>
        <a href="login.php" class = "logout"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
	</nav>
	<script src="js/sidenav.js"></script>
	<!--sidebar end-->

<!-- CONTENT AREA -->


 <!-- Account Settings -->

 
 <div class="container-content">
    <div class="title">Account Settings</div>
    <hr>
    
    <form action="addPassword_Code.php" method= "POST">
      <H3>CHANGE PASSWORD</H3>
      <div class="change-password">

      <input type="hidden" name="id" value="<?php echo $_SESSION['auth_user']['id'] ?>">


        <div class="input-box">
            <span class="details">Current Password<span style="color: red;">*</span></span>
            <input type="password" name="oldPass" placeholder="Enter Current Password" required>
        </div>

         <!-- ENTER NEW PASSWORD -->
         <div class="new">
          <div class="input-box">
            <label for="password">Enter New Password<span style="color: red;">*</span></label>
              <input type="password" name="newPass" onkeyup="trigger()" id="password" placeholder="Enter New Password" required>
          </div>
          
          <div class="indicator">
            <span class = "weak">1</span>
            <span class = "medium">2</span>
            <span class = "strong">3</span>
        </div>

         <div class="password-strength">
            Password Strength: Weak
        </div> 
        </div>

        <!-- CONFIRM NEW PASSWORD -->
      
        <div class="input-box">
          <label for="confirm-newpw">Confirm New Password <span style="color: red;">*</span></label>
            <input type="password" name="confirmPass" id="confirm-newpw" placeholder="Repeat New Password" required>
        </div>

        <!-- <span class="match-pass" id = "message" style="text-align: center;"></span> -->

        </div>

        <div class="reset-pwbtn" style="text-align: center;">
          <button type="submit" name="save_btn" onclick="validatePassword()" id="reset-btn">Save Changes</button>
        </div>

      </div>
    </form>
  </div>

  <!-- Footer -->
<!--CONTENT AREA END-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script src="../js/pw-strength-indicator.js"></script>
<script src="../js/pw-validation.js"></script>
</body>
</html>

