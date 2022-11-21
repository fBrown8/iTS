<?php
//BACKEND FOR Service code

session_start();
include('dbcon.php');

if(isset($_POST['adminservices_btn'])) 
{
    $services = $_POST['services'];

    //Services exists or not
    $check_email_query = "SELECT services FROM superadmin_services WHERE services='$services' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0) 
    {
        $_SESSION['status'] = "Service already exists!";
        header("Location: superadmin-manageServices.php");
    }
    else 
    {
        //Insert user / Register user
        $query = "INSERT INTO superadmin_services (services) VALUES ('$services')";
        $query_run = mysqli_query($con, $query);
    }
        if($query_run)
        {
            $_SESSION['status'] = "Successfully Created a Service";
            header("Location: superadmin-manageServices.php");
        }
        else
        {
            $_SESSION['status'] = "Creation of Service failed!";
            header("Location: superadmin-manageServices.php");
        }
}

//edit

if(isset($_POST['save_btn']))
{
    $id = $_POST['edit_id'];
    $services = $_POST['services']; 

    //Services exists or not
    
    
    $query = "UPDATE superadmin_services SET services='$services' WHERE id='$id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Services has been UPDATED";
        header('Location: superadmin-manageServices.php');
    }
    else 
    {
        $_SESSION['status'] = "Failed to UPDATE";
        header('Location: superadmin-manageServices.php');
    }
}

//delete
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM superadmin_services WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Service is DELETED";
        header('Location: superadmin-manageServices.php');
    }
    else 
    {
        $_SESSION['status'] = "Service is NOT DELETED";
        header('Location: superadmin-manageServices.php');
    }
}

?>