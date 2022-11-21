
<?php
//BACKEND FOR New Request
session_start();
include('dbcon.php');

if(isset($_POST['newreq_btn'])) 
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $department = $_POST['department'];    
    $category = $_POST['category'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $token = md5(rand());

    //Email exists or not
    $check_email_query = "SELECT email FROM register WHERE email='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0) 
    {
        $_SESSION['status'] = "Email already exists!";
        header("Location: user-newrequest.php");
    }
    else 
    {
        //Insert user / Register user
        $query = "INSERT INTO user_tickets (fname, lname, email, department, category, subject, description, token) VALUES ('$fname', '$lname', '$email','$department', '$category', '$subject', '$description', '$token')";
        $query_run = mysqli_query($con, $query);
    }
        if($query_run)
        {
            $_SESSION['status'] = "Successfully Created a Ticket";
            header("Location: user-newrequest.php");
        }
        else
        {
            $_SESSION['status'] = "Registration failed!";
            header("Location: user-home2.php");
        }
}

?>