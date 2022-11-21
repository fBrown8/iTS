<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/verify-success.css" />
		<!--Font Awesome-->
		<script
			src="https://kit.fontawesome.com/7764cb18cb.js"
			crossorigin="anonymous"
		></script>
		<style>
			body {
				background-image: url("/img/login-background.jpg");
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
			}
		</style>
		<!--Ayaw pumasok sa css ko ewan ko kung baket HAHAHA-->
		<title>Verification Success | I-SCoTS</title>
	</head>
	<body>
		<div class="main">
			<div class="content">
				<img src="../img/black.png" alt="I-SCoTS logo" />
				<div class="verify">
					<i class="fa-light fa-circle-envelope"></i>
					<h3>You have successfully changed your password</h3>
					<p class="proceed">You may now proceed to log in.</p>
					<div class="btn-group">
						<button
							type="submit"
							name="login"
							id="login"
							onclick="location.href = '../php/login.php'"
						>
							Log in
						</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
