<?php

session_start();
include('dbcon.php');


//ADD NEW DEPARTMENT
if(isset($_POST['admindept_btn'])) 
{
    $department = $_POST['department'];

    //Services exists or not
    $check_email_query = "SELECT department FROM superadmin_department WHERE department='$department' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0) 
    {
        $_SESSION['status'] = "Department already exists!";
        header("Location: superadmin-manageServices.php");
    }
    else 
    {
        //Insert DEPARTMENT 
        $query = "INSERT INTO superadmin_department (department) VALUES ('$department')";
        $query_run = mysqli_query($con, $query);
    }
        if($query_run)
        {
            $_SESSION['status'] = "Successfully Created a Department";
            header("Location: superadmin-department.php");
        }
        else
        {
            $_SESSION['status'] = "Creation of Department failed!";
            header("Location: superadmin-department.php");
        }
}

//edit
if(isset($_POST['save_btn']))
{
    $id = $_POST['edit_id'];
    $department = $_POST['department']; 

    //Services exists or not
    
    
    $query = "UPDATE superadmin_department SET department='$department' WHERE id='$id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Department has been UPDATED";
        header('Location: superadmin-department.php');
    }
    else 
    {
        $_SESSION['status'] = "Failed to UPDATE";
        header('Location: superadmin-department.php');
    }
}

//delete
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM superadmin_department WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Department is DELETED";
        header('Location: superadmin-department.php');
    }
    else 
    {
        $_SESSION['status'] = "Department is NOT DELETED";
        header('Location: superadmin-department.php');
    }
}




?>
