
<?php
//BACKEND FOR REGISTER

session_start();
include('dbcon.php');

if(isset($_POST['adminregister_btn'])) 
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);     
    $confpassword = md5($_POST['confpassword']);
    $verify_token = md5(rand());
    $usertype = $_POST['usertype'];
    $verify_status = $_POST['verify_status'];

    //Email exists or not
    $check_email_query = "SELECT email FROM register WHERE email='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0) 
    {
        $_SESSION['status'] = "Email already exists!";
        header("Location: superadmin-manageaccounts-addnew.php");
    }
    else 
    {
        //Insert user / Register user
        $query = "INSERT INTO register (fname, lname, email, password, confpassword, verify_token, usertype, verify_status) VALUES ('$fname', '$lname', '$email','$password', '$confpassword', '$verify_token', '$usertype', '$verify_status')";
        $query_run = mysqli_query($con, $query);
    }
        if($query_run)
        {
            $_SESSION['status'] = "Successfully Created an Admin";
            header("Location: superadmin-manageaccounts.php");
        }
        else
        {
            $_SESSION['status'] = "Registration failed!";
            header("Location: superadmin-manageaccounts-addnew.php");
        }
}


//edit

if(isset($_POST['save_btn']))
{
    $id = $_POST['edit_id'];
    $fname = $_POST['edit_fname'];
    $lname = $_POST['edit_lname'];
    $usertype = $_POST['edit_usertype'];

    $query = "UPDATE register SET fname='$fname', lname='$lname', usertype='$usertype' WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data is UPDATED";
        header('Location: superadmin-manageaccounts.php');
    }
    else 
    {
        $_SESSION['status'] = "Your data is NOT UPDATED";
        header('Location: superadmin-manageaccounts.php');
    }
}



//delete
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Staff is DELETED";
        header('Location: superadmin-manageaccounts.php');
    }
    else 
    {
        $_SESSION['status'] = "Staff is NOT DELETED";
        header('Location: superadmin-manageaccounts.php');
    }
}

?>