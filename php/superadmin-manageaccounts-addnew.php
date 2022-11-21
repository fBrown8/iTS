<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/superadmin-manageaccounts-addnew.css">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/f7f6ac6a49.js" crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Add Account | ISCOTS Super Admin</title>
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
	<script src="js/sidenav.js"></script>
	<!--sidebar end-->

<!-- CONTENT AREA -->
<div class="content">
	<div class = "titleBar">
		<h2>Add New Account</h2>
	</div>
	<div class="form-content">
        <p><span style="color: red;">*</span> indicates required fields</p>
        <br>
        <form action="addnewAccounts_Code.php" method="POST">
        <h6>Personal Details</h6>
          <section class="autofill"> <!--Autofill 'tong section na to ha-->
            <div class="input-block">
              <label for="fname">First Name<span style="color: red;">*</span></label>
              <input id="fname" type="text" value="" name="fname" required>
            </div>
          
            <div class="input-block">
              <label for="lname">Last Name<span style="color: red;">*</span></label>
              <input id="lname" type="text" value="" name="lname" required>
            </div>
  
            <div class="input-block">
              <label for="email">Email<span style="color: red;">*</span></label>
              <input id="email" type="text" value="" name="email" required>
            </div>
            
            <input type="hidden" name="password" value="admin1234">
            <input type="hidden" name="confpassword" value="admin1234">
            <input type="hidden" name="verify_status" value="1">
            <input type="hidden" name="verify_token" value="">

            <br>
          </section>

                  <?php
                    include('dbcon.php');
                    $query = "SELECT * FROM superadmin_userroles";
                    $result1 = mysqli_query($con, $query);
                  ?>

        <h6>System Roles</h6>
          <section>
            <div class="form-group">
              <label for="roles" style="margin-left: 5px;">Roles<span style="color: red;">*</span></label>
              <select class = "options" name="usertype" value="<?php echo $row['usertype'] ?>" id="roles" required>
                
              <?php while($row1 = mysqli_fetch_array($result1)):; ?>
                <option><?php echo $row1[1];?> </option>
              <?php endwhile; ?>

              </select>
            </div>

            <br>
          </section>

            </div>

            <br>
          </section>
  
          <div class="btn-grp">
            <button type="button" id="cancel-btn">Cancel</button>
            <button type="submit" id="saveChanges-btn" name ="adminregister_btn" onclick="">Save Changes</button>
          </div>
        </form>
      </div>
</div>
<!--CONTENT AREA END-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
