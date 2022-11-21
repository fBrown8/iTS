<?php
session_start();
include('dbcon.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

function resend_email_verify($name, $email, $verify_token)
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
        $mail->setFrom('ipea.iscots@gmail.com', $name);
        $mail->addAddress($email);     
       
        //Content
        $mail->isHTML(true);                                
        $mail->Subject = 'Resend Email Verification';

        $email_template    = "
        <h2>You have registered to OFAD-APPSYS</h2>
        <h5>Verify your email address to Login with the given link below.</h5>
        <br></br>
        <a href = 'http://localhost:8080/appsys/php/verify.php?token=$verify_token'>Verify your Email</a>
        ";
        
        $mail->Body = $email_template;
        $mail->send();
        //echo 'Message has been sent.';
}

if(isset($_POST['resend_button']))
{
    if(!empty(trim($_POST['email'])))
    {
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $check_email_query = "SELECT * FROM register WHERE email = '$email' LIMIT 1";
        $check_email_query_run = mysqli_query($conn, $check_email_query);

        if(mysqli_num_rows($check_email_query_run) > 0)
        {
            $row = mysqli_fetch_array($check_email_query_run);
            if($row['verify_status'] == "0")
            {
                $name = $row['name'];
                $email = $row['email'];
                $verify_token = $row['verify_token'];

                resend_email_verify($name, $email, $verify_token);

                $_SESSION['status'] = "Verification Email Link has been sent to your Email Address";
                header("Location: login.php");
                exit(0);
            }
            else
            {
                $_SESSION['status'] = "Email already verified, please Login";
                header("Location: login.php");
                exit(0);
            }
        }
        else 
        {
            $_SESSION['status'] = "Email is not registered. Please register now";
            header("Location: register.php");
            exit(0);
        }
    }
    else 
    {
        $_SESSION['status'] = "Please enter Email Address";
        header("Location: resend-email.php");
        exit(0);
    }
}

?>