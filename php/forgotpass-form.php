<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!--Font Awesome-->
		<script
			src="https://kit.fontawesome.com/f7f6ac6a49.js"
			crossorigin="anonymous"
		></script>
		<link rel="stylesheet" href="../css/forgotpass-form.css" />
		<style>
			body {
				background-image: url("../img/login-background.jpg");
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
			}
		</style>
		<!--Ayaw pumasok sa css ko ewan ko kung baket HAHAHA-->
		<title>Forgot Password | I-SCoTS</title>
	</head>
	<body>
		<div class="main">
			<div class="content">
				<img src="../img/black.png" alt="I-SCoTS logo" />
				<div class="forgot">
					<h3>Forgot Password</h3>
					<hr />
					<form action="password-reset-code.php" method="POST">
						<div class="form-group">
							<div class="input-block">
								<label for="email">Email</label>
								<input
									type="text"
									name="email"
									id="email"
									placeholder="Enter Email"
								/>
							</div>
						</div>

						<div class="btn-group">
							<button type="submit" name="password_reset_link" id="sendlink">
								Send Password Reset Link
							</button>
						</div>

						<p class="note">
							Note: Please enter an email address associated with your I-SCoTS
							account
						</p>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
