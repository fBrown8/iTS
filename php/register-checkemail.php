<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/register-checkemail.css" />
		<!--Font Awesome-->
		<script
			src="https://kit.fontawesome.com/7764cb18cb.js"
			crossorigin="anonymous"
		></script>
		<style>
			body {
				background-image: url("../img/login-background.jpg");
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
			}
		</style>
		<!--Ayaw pumasok sa css ko ewan ko kung baket HAHAHA-->
		<title>Account Verification | I-SCoTS</title>
	</head>
	<body>
		<div class="main">
			<div class="content">
				<img src="../img/black.png" alt="I-SCoTS logo" />
				<div class="verify">
					<i class="fa-light fa-circle-envelope"></i>
					<h3>Verify your account</h3>
					<p class="email-sent">
						We sent an email link to complete your registration
					</p>
					<br />
					<p class="no-email">Didn't receive an email?</p>
					<div class="btn-group">
						<button type="submit" name= "resend-code.php" id="resend-email" href="#">
							Resend Email
						</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
