<?php
session_start();
include('dbcon.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function send_password_reset($get_name, $get_email, $token)

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
        $mail->addAddress($get_email);     
       
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
								<h1>Hi welcome to I-SCOTS!</h1>
								<p>
									We have received a request to reset the password for your
									I-SCoTS account. No changes have been
									made to your account yet.
								</p>
								<p>You can reset your password by clicking the link below:</p>

								<div class="reset-pwbtn" style="text-align: center">
                                <a href = "http://localhost/capstone/php/reset-pw.php?token='.$token.'&email='.$get_email.'">Reset your password</a>

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


if(isset($_POST['password_reset_link']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT email FROM register WHERE email = '$email' LIMIT 1";
    $check_email_run = mysqli_query($con, $check_email);

    if(mysqli_num_rows($check_email_run) > 0)
    {
        $row = mysqli_fetch_array($check_email_run);
        $get_fname = $row['fname'];
        $get_email = $row['email'];

        $update_token = "UPDATE register SET verify_token ='$token' WHERE email = '$get_email' LIMIT 1";
        $update_token_run = mysqli_query($con, $update_token);

        if($update_token_run)
        {
            send_password_reset($get_fname, $get_email, $token);
            header("Location: reset-checkemail.php");
            exit(0);

        }
        else
        {
            $_SESSION['status'] = "Something went wrong. #1";
            header("Location: forgotpass-form");
            exit(0);
        }

    }
    else 
    {
        $_SESSION['status'] = "No Email found!";
        header("Location: forgotpass-form");
        exit(0);
    }
}


//RESET PASSWORD

if(isset($_POST['password_update']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, md5($_POST['password']));
    $confpassword = mysqli_real_escape_string($con, md5($_POST['confpassword']));
    
    $token = mysqli_real_escape_string($con, $_POST['password_token']);

    if(!empty($token))
    {
        if(!empty($email) && !empty(md5($password)) && !empty(md5($confpassword)))
        {
            //Checking token is valid or not
            $check_token = "SELECT verify_token FROM register WHERE verify_token='$token' LIMIT 1";
            $check_token_run = mysqli_query($con, $check_token);

            if(mysqli_num_rows($check_token_run) > 0)
            {
                if($password == $confpassword)
                {
                    $update_password = "UPDATE register SET password='$password' WHERE verify_token='$token' LIMIT 1";
                    $update_password_run = mysqli_query($con, $update_password);

                    //EMAIL RECLICKED
                    if($update_password_run)
                    {
                        $new_token = md5(rand());
                        $update_to_new_token = "UPDATE register SET verify_token='$new_token' WHERE verify_token='$token' LIMIT 1";
                        $update_to_new_token_run = mysqli_query($con, $update_to_new_token);


                        $_SESSION['status'] = "New Password Successfully Updated!";
                        header("Location: forgot-success.php");
                        exit(0); 
                    }
                    else
                    {
                        $_SESSION['status'] = "Did not update password. Something went wrong!";
                        header("Location: reset-pw.php?token=$token&email=$email");
                        exit(0); 
                    }
                }
                else
                {
                    $_SESSION['status'] = "Password and Confirm Password does not Match!";
                    header("Location: reset-pw.php?token=$token&email=$email");
                    exit(0); 
                }
            }
            else
            {
                $_SESSION['status'] = "Invalid Token!";
                header("Location: reset-pw.php?token=$token&email=$email");
                exit(0); 
            }
        }
        else
        {
            $_SESSION['status'] = "All fields are needed!";
            header("Location: reset-pw.php?token=$token&email=$email");
            exit(0); 
        }

    }
    else
    {
        $_SESSION['status'] = "No token available!";
        header("Location: reset-pw.php");
        exit(0);
    }
}




?>