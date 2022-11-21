<?php
include('authentication.php');
print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Settings | iSCOTS</title>
    <link rel="stylesheet" href="../css/user-settings.css">
    <link rel="stylesheet" href="../css/superadmin-settings.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/f7f6ac6a49.js" crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
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
            <a class="nav-link text-white" href="faqs-page.html">FAQs</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link waves-effect waves-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-circle-user"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="user-mytickets.php">My Tickets</a>
                <a class="dropdown-item" href="user-settings.php">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php">Log out</a>
              </ul>
            </li>
        </ul>
      </div>
    </div>
  </nav>

      <!-- Account Settings -->

      <div class="container-content">
        <div class="title">Account Settings</div>
        <hr>

          <H3>PERSONAL SETTINGS</H3>
            <div class="user-details">
                <div class="input-box">
                    <span class="details">First Name</span>
                    <input type="text" placeholder="First Name" value="<?php echo $_SESSION['auth_user']['fname'] ?>" readonly required>
                </div>

                <div class="input-box">
                    <span class="details">Last Name</span>
                    <input type="text" placeholder="Last Name" value="<?php echo $_SESSION['auth_user']['lname'] ?>" readonly required>
                </div>

                <div class="input-box">
                    <span class="details" id="username">Email</span>
                    <input type="text" placeholder="Email" value="<?php echo $_SESSION['auth_user']['email'] ?>" readonly required>
                </div>
            </div>

<br>
         
        <form action="userPassword_Code.php" method="POST">
          <H3>CHANGE PASSWORD</H3>
          <div class="change-password">

          <input type="hidden" name="id" value="<?php echo $_SESSION['auth_user']['id'] ?>">

            <div class="input-box">
                <span class="details">Current Password<span style="color: red;">*</span></span>
                <input type="password" name="oldPass" placeholder="Enter Current Password" required>
            </div>

            <!-- CONFIRM NEW PASSWORD -->
          
            <div class="input-box">
              <label for="confirm-newpw">Confirm New Password <span style="color: red;">*</span></label>
                <input type="password" name="newPass" id="confirm-newpw" placeholder="Repeat New Password" required>
            </div>

            <!-- <span class="match-pass" id = "message" style="text-align: center;"></span> -->

            <!-- ENTER NEW PASSWORD -->
            <div class="new">
              <div class="input-box">
                <label for="password">Enter New Password<span style="color: red;">*</span></label>
                  <input type="password" onkeyup="trigger()" name="confirmPass" id="password" placeholder="Enter New Password" required>
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


            </div> 

            <div class="reset-pwbtn" style="text-align: center;">
              <button type="submit" name="save_btn" onclick="validatePassword()" id="reset-btn">Save Changes</button>
            </div>

          </div>
        </form>
      </div>

      <!-- Footer -->

      <footer>
        <div class="footer-content">
          <img src="../img/ust_footer.png" alt="facebook logo">
          <p class="credits">ISCOTS: IPEA Student Concerns Ticketing System. 2022.</p>
        </div>
      </footer>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src = "../js/pw-strength-indicator.js"></script>
    <script src = "../js/pw-validation.js"></script>

</body>
</html>