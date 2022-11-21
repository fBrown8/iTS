<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/f7f6ac6a49.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/register.css">
    <style>
        body {
          background-image: url('../img/login-background.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
    </style><!--Ayaw pumasok sa css ko ewan ko kung baket HAHAHA-->
    <title>Register | I-SCoTS</title>
</head>
<body>
    <div class="main">
        <div class="content">
            
            <img src="../img/black.png" alt="I-SCoTS logo">
            <div class="register">
                <h3>Register</h3>
                <hr>
                <form action = "code.php" method = "POST">
                    <div class="form-group">
                        <div class="alert">
                        <?php 
                         if(isset($_SESSION['status']))
                         {
                          ?>
                          <div class="alert alert-danger">
                         <center><?= $_SESSION['status'];?></center>
                         </div>
                          <?php
                         unset($_SESSION['status']);
                       }
                   ?>
                        </div>
                        <section>

                        <input type="hidden" name="usertype" value="User">

                            <div class="input-first-name">
                                <label for="fname">First Name <span style="color: red;">*</span></label>
                                <input type="text" name="fname" id="fname" placeholder="First Name" required>
                            </div>

                            <div class="input-last-name">
                                <label for="lname">Last Name <span style="color: red;">*</span></label>
                                <input type="text" name="lname" id="lname" placeholder="Last Name" required>
                            </div>
                        </section>
                        <div class="input-block">
                            <label for="email">UST Email <span style="color: red;">*</span></label>
                            <input type="email" name="email" id="email" placeholder="UST Email" required>
                        </div>
                        <div class="input-block">
                            <label for="password">Password <span style="color: red;">*</span></label>
                            <input type="password" onkeyup="trigger()" name="password" id="password" placeholder="Password" required>
                        </div>
                        <div class="indicator">
                            <span class = "weak">1</span>
                            <span class = "medium">2</span>
                            <span class = "strong">3</span>
                        </div>
                        <div class="password-status">
                            Password Strength: Weak
                        </div>
                        <div class="input-block">
                            <label for="cpassword">Confirm Password <span style="color: red;">*</span></label>
                            <input type="password" name="confpassword" id="cpassword" placeholder="Confirm Password" required>
                        </div>

                        <div class="terms-and-conditions">
                            <input type="checkbox" id="checkbox" required>
                            <label for="checkbox">I have read and agreed to the <a href="#" style="color: #1e88e5; text-decoration: none;"> terms and conditions</a></label>
                        </div>
                    </div>
                    <!--CAPTCHA HERE-->
                    <br>
                    <br>
                    <div class="btn-group">
                        <button type="submit" name="register_btn" id="register">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>
    <script src="../js/indicator.js"></script>
</body>
</html>
