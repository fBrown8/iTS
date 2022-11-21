<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/superadmin-editFAQs.css">
    <link rel="stylesheet" href="../css/admin-header&sideNav.css">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/f7f6ac6a49.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Super Admin - Edit Service | I-SCoTS</title>
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
	<script src="../js/sidenav.js"></script>
	<!--sidebar end-->

<!-- CONTENT AREA -->

<div class="header">
    <div class="title">
        <h2>Manage Frequently Asked Questions</h2>
    </div>
</div>

            <?php
                include('dbcon.php');
                if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM superadmin_faqs WHERE id = '$id'";
                $query_run = mysqli_query($con, $query);
                
                foreach ($query_run as $row) 
                {
            ?>

<div class="edit-container">
    <br>
    <h2>Edit Frequently Asked Questions</h2>
    <h3>Question:</h3>
    
    <form action="addnewFaqs_Code.php" method="POST">
    <input type="hidden" class="input-field"  name="edit_id" value="<?php echo $row['id'] ?>" required>

    <div class="input-box"> 
        <input type="text" name="questions" id="service-new" value="">
    </div>

    <br>

    <h3>Description:</h3>
      <div class="input-box">
          <textarea id="description" name="answers" rows="5" cols="108" value=""></textarea>
    </div>
  
      <div class="save-btn" style="text-align: center;">
          <button type="submit" id="saveChanges-btn" name="save_btn">Save Changes</button>
          <button type="submit" id="cancel-btn">Cancel</button>
    </div>

    <?php
                }

                
            }
            ?>

    </form>
</div>

  <!-- Footer -->
<!--CONTENT AREA END-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>