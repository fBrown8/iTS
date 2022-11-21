<?php
//BACKEND FOR Service code

session_start();
include('dbcon.php');

if(isset($_POST['adminfaqs_btn'])) 
{
    $questions = $_POST['questions'];
    $answers = $_POST['answers'];

    //Question exists or not
    $check_email_query = "SELECT questions FROM superadmin_faqs WHERE questions='$questions' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0) 
    {
        $_SESSION['status'] = "Question already exists!";
        header("Location: superadmin-manageFAQs.php");
    }
    else 
    {
        //Insert user / Register user
        $query = "INSERT INTO superadmin_faqs (questions, answers) VALUES ('$questions', '$answers')";
        $query_run = mysqli_query($con, $query);
    }
        if($query_run)
        {
            $_SESSION['status'] = "Successfully Created a Service";
            header("Location: superadmin-manageFAQs.php");
        }
        else
        {
            $_SESSION['status'] = "Creation of Service failed!";
            header("Location: superadmin-manageFAQs.php");
        }
    }



//edit
if(isset($_POST['save_btn']))
{
    $id = $_POST['edit_id'];
    $questions = $_POST['questions']; 
    $answers = $_POST['answers']; 

    //Services exists or not
    
    
    $query = "UPDATE superadmin_faqs SET questions='$questions', answers='$answers' WHERE id='$id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Questions has been UPDATED";
        header('Location: superadmin-manageFAQs.php');
    }
    else 
    {
        $_SESSION['status'] = "Failed to UPDATE";
        header('Location: superadmin-manageFAQs.php');
    }
}


//delete
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM superadmin_faqs WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Question is DELETED";
        header('Location: superadmin-manageFAQs.php');
    }
    else 
    {
        $_SESSION['status'] = "Question is NOT DELETED";
        header('Location: superadmin-manageFAQs.php');
    }
}


    ?>

