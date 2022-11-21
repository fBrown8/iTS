
<?php
//BACKEND FOR REGISTER

session_start();
include('dbcon.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function sendemail_verify($fname, $email, $verify_token)
{
    $mail = new PHPMailer(true);                   
        $mail->isSMTP();                                                            
        $mail->SMTPAuth   = true;  
        
        $mail->Host       = 'smtp.gmail.com'; 
        $mail->Username   = 'ipea.iscots@gmail.com';                 
        $mail->Password   = 'wspyhirldaetsbbd';  

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
        $mail->Port       = 465;                                   
    
        //Recipients
        $mail->setFrom('ipea.iscots@gmail.com');
        $mail->addAddress($email);     
       
        //Content
        $mail->isHTML(true);                                
        $mail->Subject = 'Email Verification';

        $email_template    = '<html>
		<head>
			<link
				href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;500;700;800&family=Source+Sans+Pro:wght@700&display=swap"
				rel="stylesheet"
			/>
			<style>
				@import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");
				@import url("https://fonts.googleapis.com/css2?family=Archivo&display=swap");
				@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap");
				/* internal */
				body {
					margin: 0;
					padding: 70px;
					background-color: #f6f9fc;
				}

				table {
					border-spacing: 0;
				}

				td {
					padding: 0;
				}

				.webkit {
					max-width: 600px;
					background-color: #ffffff;
				}

				.wrapper {
					width: 100%;
					table-layout: fixed;
					background-color: #f6f9f9;
					padding-bottom: 40px;
					padding-top: 40px;
				}

				.outer {
					margin: 0 auto;
					width: 100%;
					max-width: 600px;
					border-spacing: 0;
					font-family: "Montserrat", sans-serif;
					color: #4a4a4a;
				}

				.outer hr {
					background: #fdbf15;
					border: 1px solid #fdbf15;
				}

				.outer h1 {
					display: block;
					font-family: "Montserrat", sans-serif;
					font-size: 15px;
					line-height: 18px;
					font-weight: 700;
					position: relative;
					bottom: 3px;
					color: #000000;
				}

				/* Main */
				.main {
					font-family: "Montserrat", sans-serif;
				}

				.main p {
					text-align: justify;
					margin-left: 20px;
					margin-right: 20px;
				}

				.main h1 {
					margin-left: 20px;
					font-size: 1.4em;
				}

				/* Reset Button */

				#reset-btn {
					background-color: #262626;
					font-size: 14.5px;
					color: #fff;
					font-family: "Montserrat", sans-serif;
					font-weight: 400;
					width: 100px;
					padding: 8px 170px;
					margin: 0 auto;
					cursor: pointer;
					justify-content: center;
					align-items: center;
					border: none;
					text-decoration: none;
				}

				/* Media Queries */

				@media screen and (max-width: 600px) {
				}

				@media screen and (max-width: 400px) {
				}
			</style>
		</head>
		<body>
			<center class="wrapper">
				<div class="webkit">
					<table class="outer" align="center">
						<tr>
							<td>
								<table width="100%">
									<tr>
										<td
											style="
												background-color: #ffffff;
												padding: 10px;
												text-align: center;
											"
										>
											<a href="#"
												><img
													src="/img/Institute-of-Physical-Education-and-Athletics.png"
													width="50px"
													;
													height="auto"
													;
													alt=""
											/></a>
											<h1>I-SCOTS: IPEA Student Concerns Ticketing System</h1>
											<hr />
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>

					<table class="main">
						<tr>
							<td>
								<h1>Hi</h1>
								<p>
									We have received a request to reset the password for your
									I-SCoTS account. No changes have been
									made to your account yet.
								</p>
								<p>You can reset your password by clicking the link below:</p>

								<div class="reset-pwbtn" style="text-align: center">
									<a href = "http://localhost/capstone/php/verify-email.php?token='. $verify_token .'">VERIFY YOUR ACCOUNT</a>
								</div>

								<p>
									If you did not request for a password reset, please ignore
									this email.
								</p>
							</td>
						</tr>
					</table>
				</div>
			</center>
		</body>
	</html>
</html>';
        
        $mail->Body = $email_template;
        $mail->send();
        //echo 'Message has been sent.';
    }



if(isset($_POST['register_btn'])) 
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);     
    $confpassword = md5($_POST['confpassword']);
    $verify_token = md5(rand());
    $usertype = $_POST['usertype'];

    //Email exists or not
    $check_email_query = "SELECT email FROM register WHERE email='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0) 
    {
        $_SESSION['status'] = "Email already exists!";
        header("Location: register.php");
    }
    else if($password != $confpassword){
        $_SESSION['status'] = "Passwords do not Match!";
        header("Location: register.php");
    }
    else 
    {
        //Insert user / Register user
        $query = "INSERT INTO register (fname, lname, email, password, confpassword, verify_token, usertype) VALUES ('$fname', '$lname', '$email','$password', '$confpassword', '$verify_token', '$usertype')";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            sendemail_verify("$fname", "$email", "$verify_token");
            $_SESSION['status'] = "Verification sent to your email.";
            header("Location: register-checkemail.php");
        }
        else
        {
            $_SESSION['status'] = "Registration failed!";
            header("Location: register.php");
        }
    }
}

?>