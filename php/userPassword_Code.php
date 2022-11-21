<?php
session_start();
include('dbcon.php');

if(isset($_POST['save_btn']))
        {
        $id = $_POST['id'];
        $oldPass= md5($_POST['oldPass']);
        $newPass= md5($_POST['newPass']);
        $confirmPass= md5($_POST['confirmPass']);
        
        $sql = mysqli_query($con,"SELECT password FROM register where password='$oldPass'");
        $num = mysqli_fetch_array($sql);

        if($num>0){

        $con = mysqli_query($con,"UPDATE register SET password='$newPass' WHERE id='$id'");
        $_SESSION['success']="Password Changed Successfully";
        header("Location: user-settings.php");
        }

        else{
        $_SESSION['status']="Old Password not match";
        header("Location: user-settings.php");
        }
        }
       
        
?>