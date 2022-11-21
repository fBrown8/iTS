<?php
session_start();
print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<!--Font Awesome-->
		<script
			src="https://kit.fontawesome.com/f7f6ac6a49.js"
			crossorigin="anonymous"
		></script>
		<link rel="stylesheet" href="../css/login.css" />
		<style>
			body {
				background-image: url("../img/login-background.jpg");
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
			}
		</style>
		<!--Ayaw pumasok sa css ko ewan ko kung baket HAHAHA-->
		<title>Login | I-SCoTS</title>
	</head>
	<body>
		<div class="main">
			<div class="content">
				<img src="../img/black.png" alt="I-SCoTS logo" />
				<div class="login">
					<h3>Log In</h3>
					<hr />
					<form action="logincode.php" method="POST">
						<div class="form-group">
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


							<div class="input-block">
								<label for="email">Email</label>
								<input
									type="text"
									name="email"
									id="email"
									placeholder="Enter Email"
								/>
							</div>
							<div class="input-block">
								<label for="password">Password</label>
								<input
									type="password"
									name="password"
									id="password"
									placeholder="Enter Password"
								/>
								<a id="forgotPW" href="../php/forgotpass-form.php" target=""
									>Forgot Password?</a
								>
							</div>
						</div>
						<br />
						<br />
						<div class="btn-group">
							<button type="submit" name= "login_now_btn" id="login">Login</button>
						</div>
						<div class="no-acc">
							<p>
								Don't have an account? Register
								<a
									href="../php/register.php"
									style="color: #1e88e5; text-decoration: none"
									>here</a
								>
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
