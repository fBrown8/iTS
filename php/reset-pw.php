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
    <link rel="stylesheet" href="../css/reset-pw.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;500;800&family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    
    <title>Reset Password - I-SCoTS</title>
</head>
<body>
    <div class="main">
        <div class="content">
            <img src="../img/black.png" alt="I-SCoTS logo">
            <div class="reset-pw">
                
                 

                <header>Reset Password</header>
                <hr>
                <form action="password-reset-code.php" method="POST">
                <?php 
                         if(isset($_SESSION['status']))
                         {
                          ?>
                         <div class="alert alert-primary">
                         <center><?= $_SESSION['status'];?></center>
                         </div>
                          <?php
                         unset($_SESSION['status']);
                       }
                   ?>
            	

                    <input type="hidden" name="password_token" value="<?php if(isset($_GET['token'])){echo $_GET['token'];} ?>">


                    <div class="form-group">

                        <div class="input-block">
                            <label for="email">Email Address<span style="color: red;">*</span></label>
                            <input type="text" onkeyup="trigger()" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>" id="email" placeholder="Enter Email" required>
                        </div>

                        <div class="input-block">
                            <label for="password">Enter New Password<span style="color: red;">*</span></label>
                            <input type="password" onkeyup="trigger()" name="password" id="password" placeholder="Enter New Password" required>
                        </div>

                        <div class="indicator">
                            <span class = "weak">1</span>
                            <span class = "medium">2</span>
                            <span class = "strong">3</span>
                        </div>

                        <div class="password-strength">
                            Password Strength: Weak
                        </div>

                        <div class="input-block">
                            <label for="confirm-newpw">Confirm New Password <span style="color: red;">*</span></label>
                            <input type="password" name="confpassword" id="confirm-newpw" placeholder="Confirm New Password" required>
                        </div>

                        <div class="match-pass" id = "message" style="text-align: center;"></div>

                        <br>
                        <br>

                        <div class="reset-pwbtn" style="text-align: center;">
                            <button type="submit" name = "password_update" onclick="validatePassword()" id="reset-btn">Reset Password</button>
                        </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Scripts  -->
    <script src = "/js/pw-strength-indicator.js"></script>
    <script src = "/js/pw-validation.js"></script>
    
</body>
</html>

