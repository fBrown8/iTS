<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/superadmin-manageaccounts.css">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/f7f6ac6a49.js" crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Manage Accounts | ISCOTS Super Admin</title>
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
		<h1>Manage Accounts</h1>
	</div>
	 <!--Tabs-->
    <div class="tabs">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="personnel-tab" data-bs-toggle="tab" data-bs-target="#personnel" type="button" role="tab" aria-controls="home" aria-selected="true">PERSONNEL</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="endusers-tab" data-bs-toggle="tab" data-bs-target="#endusers" type="button" role="tab" aria-controls="profile" aria-selected="false">END USERS</button>
            </li>
      </ul>
      <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="personnel" role="tabpanel" aria-labelledby="personnel-tab">
                <div class="filterbar">
                    <div class="filter">
                        <div class="roles form-group">

                        <?php
                            include('dbcon.php');
                            $query = "SELECT * FROM superadmin_userroles";
                            $result1 = mysqli_query($con, $query);
                        ?>

                            <label for="Roles" style="margin-left: 5px; color: #262626; font-weight: 500;">ROLES: </label>
                            <select class = "options" id="roles">
                              <option>All Roles</option>
                              <?php while($row1 = mysqli_fetch_array($result1)):; ?>
                              <option><?php echo $row1[1];?> </option>
                              <?php endwhile; ?>
                            </select>
                        </div>
    
                        <div class="add-new">
                            <button id="addnewbtn" onclick="window.location.href = 'superadmin-manageaccounts-addnew.php';">+ADD NEW</button></a>
                        </div>
                    </div>
                    
                </div>

                <div class="personnel-list">
                    <div class="top">
                        <div class="numofusers">
                            <h5>Total Personnel (<span>#</span>)</h5>
                        </div>
                        <div class="search">
                            <form class="search-app" action="#">
                                <input onkeyup="filter()" id="search" type="text" placeholder="Search..." name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <?php
                    include('dbcon.php');

                    $query = "SELECT * FROM register";
                    $query_run = mysqli_query($con, $query);
      
                    ?>

                    <table class="app-list" id = "table">
                        <thead>
                          <tr>
                            <th id="ticket-number">NAME</th>
                            <th id="ticket-subject">EMAIL</th>
                            <th id="ticket-created">ROLE</th>
                            <th id="ticket-status">ACTION</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
            if($query_run)
            {
              while($row = mysqli_fetch_array($query_run))
              {
                ?>
                <tbody>
                <tr id="ticket">
                  <td id="ticketnum"><?php echo $row ['fname']; echo "\n"; echo $row ['lname']; ?></td>
                  <td id="subject"><?php echo $row ['email']; ?></td>
                  <td id="date-created"><?php echo $row ['usertype']; ?></td>
                  
                  <form action = "superadmin-manageaccounts-edit.php" method = "POST">
                  <td class="action-buttons">
                                
                                <input type="hidden" name="edit_id" value="<?php echo $row ['id']; ?>">
                                <button class="btn-row-edit"name="edit_btn" id="edit">Edit</span>
                                </form>

                                <form action = "addnewAccounts_Code.php" method = "POST">
                                <input type ="hidden" name="delete_id" value="<?php echo $row ['id']; ?>">
                                <button class="btn-row-delete" name ="delete_btn">Delete</span>
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
                
                          
                        </tbody>
                      </table>
                </div>

            </div>
            <div class="tab-pane fade" id="endusers" role="tabpanel" aria-labelledby="endusers-tab">
                <div class="users-list">
                    <div class="top">
                        <div class="numofusers">
                            <h5>Total Users (<span>#</span>)</h5>
                        </div>
                        <div class="search">
                            <form class="search-app" action="#">
                                <input onkeyup="filter()" id="search" type="text" placeholder="Search..." name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <table class="app-list" id = "table">
                        <thead>
                          <tr>
                            <th id="ticket-number">NAME</th>
                            <th id="ticket-subject">EMAIL</th>
                            <th id="ticket-status">ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                
                          <tr id="user">
                            <td id="username">Cheska Brown</td>
                            <td id="email">cheska.brown.iscots@ust.edu.ph</td>
                            <td class="action-buttons">
                                <button class="btn-row-edit" id="edit">Edit</span>
                                <button class="btn-row-delete">Delete</span>
                            </td>	
                          </tr>

                          <tr id="user">
                            <td id="username">Cheska Brown</td>
                            <td id="email">cheska.brown.iscots@ust.edu.ph</td>
                            <td class="action-buttons">
                                <button class="btn-row-edit" id="edit">Edit</span>
                                <button class="btn-row-delete">Delete</span>
                            </td>	
                          </tr>

                          <tr id="user">
                            <td id="username">Cheska Brown</td>
                            <td id="email">cheska.brown.iscots@ust.edu.ph</td>
                            <td class="action-buttons">
                                <button class="btn-row-edit" id="edit">Edit</span>
                                <button class="btn-row-delete">Delete</span>
                            </td>	
                          </tr>

                          <tr id="user">
                            <td id="username">Cheska Brown</td>
                            <td id="email">cheska.brown.iscots@ust.edu.ph</td>
                            <td class="action-buttons">
                                <button class="btn-row-edit" id="edit">Edit</span>
                                <button class="btn-row-delete">Delete</span>
                            </td>	
                          </tr>

                          <tr id="user">
                            <td id="username">Cheska Brown</td>
                            <td id="email">cheska.brown.iscots@ust.edu.ph</td>
                            <td class="action-buttons">
                                <button class="btn-row-edit" id="edit">Edit</span>
                                <button class="btn-row-delete">Delete</span>
                            </td>	
                          </tr>
                
                          
                        </tbody>
                      </table>
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
