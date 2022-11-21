<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/superadmin-home.css">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/f7f6ac6a49.js" crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home | ISCOTS Super Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Manage Department | I-SCoTS</title>
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
	<script src="../js/sidenav.js"></script>
	<!--sidebar end-->

<!-- CONTENT AREA -->
<div class="content">
	<div class = "titleBar">
		<h1>Quick Access</h1>
	</div>
	 <!--Bottom Cards-->
	<div class="row row-cols-1 row-cols-md-3 mb-5">
		<div class="col mb-3">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
				  <h5 class="card-title"><i class="fa-solid fa-user-group"></i> Account</h5>
				  <p class="card-text text-muted">Manage all accounts. Add, delete, update, and more!</p>
				  <a href="superadmin-manageaccounts.php" class="card-link">Manage Accounts</a>
				</div>
			</div>
		</div>

		<div class="col mb-3">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title"><i class="fa-solid fa-sitemap"></i> User Roles</h5>
					<p class="card-text text-muted">Manage user types and roles for better access for all users.</p>
					<a href="superadmin-manageUserRoles.php" class="card-link">Manage User Roles</a>
				</div>
			</div>
		</div>

		<div class="col mb-3">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title"><i class="fa-solid fa-users"></i> Services</h5>
					<p class="card-text text-muted">Manage services according to the services offered by the institution.</p>
					<a href="superadmin-manageServices.php" class="card-link">Manage Services</a>
				</div>
			</div>
		</div>

		<div class="col">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title"><i class="fa-solid fa-circle-question"></i> FAQs</h5>
					<p class="card-text text-muted">Add Frequently Asked Questions and update the existing ones!</p>
					<a href="superadmin-manageFAQs.php" class="card-link">Manage FAQs</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--CONTENT AREA END-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
