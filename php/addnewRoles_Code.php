<?php
//BACKEND FOR Service code

session_start();
include('dbcon.php');

if(isset($_POST['adminroles_btn'])) 
{
    $roles = $_POST['roles'];
    

    //Question exists or not
    $check_email_query = "SELECT roles FROM superadmin_userroles WHERE roles='$roles' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0) 
    {
        $_SESSION['status'] = "User Role already exists!";
        header("Location: superadmin-manageUserRoles.php");
    }
    else 
    {
        //Insert user / Register user
        $query = "INSERT INTO superadmin_userroles (roles) VALUES ('$roles')";
        $query_run = mysqli_query($con, $query);
    }
        if($query_run)
        {
            $_SESSION['status'] = "Successfully Created a Role";
            header("Location: superadmin-manageUserRoles.php");
        }
        else
        {
            $_SESSION['status'] = "Creation of Role failed!";
            header("Location: superadmin-manageUserRoles.php");
        }
    }

?>