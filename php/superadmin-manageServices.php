<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/superadmin-manageServices.css">
    <link rel="stylesheet" href="../css/admin-header&sideNav.css">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/f7f6ac6a49.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Super Admin - Manage Services | I-SCoTS</title>
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
	<script src="/js/sidenav.js"></script>
	<!--sidebar end-->

<!-- CONTENT AREA -->

<div class="header">
    <div class="title">
        <h2>Manage Services</h2>
    </div>
    <div class="button">
        <button id="new" onclick="window.location.href = 'superadmin-addNewServices.php';">+ ADD NEW</button>
    </div>
</div>

<div class="services-list">
    <div class="search">
        <form class="search-app" action="#">
          <input onkeyup="filter()" id="search" type="text" placeholder="Search..." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <br>

                  <?php
                    include('dbcon.php');

                    $query = "SELECT * FROM superadmin_services";
                    $query_run = mysqli_query($con, $query);
      
                    ?>

    <table class="app-list" id = "table">
        <thead>
          <tr>
            <th id="services">SERVICES</th>
            <th id="action-btns" align="center">ACTIONS</th>
          </tr>
        </thead>
        <tbody>

        <?php
            if($query_run)
            {
              while($row = mysqli_fetch_array($query_run))
              {
                ?>
          
          <tr id="service-type">
            <td id="title"><?php echo $row ['services']; ?></td>
            <td valign="bottom" align="center">
            <form action = "superadmin-editService.php" method = "POST">
                <input type="hidden" name="edit_id" value="<?php echo $row ['id']; ?>">
                <button id="btn" name="edit_btn">Edit</button>
                </form>

                <form action = "addnewServices_Code.php" method = "POST">
                <input type="hidden" name="delete_id" value="<?php echo $row ['id']; ?>">
                <button id="btn" name="delete_btn">Delete</button>
              </form>
            </td>
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

      
        <!-- TABLE FOOTER -->
          <tfoot>
            <tr>
              <td id = "page">Showing 1 to 4 of 4 results</td>
              <td valign="bottom" align="right">
                <button id="btn-prev">Previous</button>
              <button id="btn-next">Next</button>
             </td>
            </tr>
          </tfoot>

        </tbody>
      </table>
</div>

  <!-- Footer -->
<!--CONTENT AREA END-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>