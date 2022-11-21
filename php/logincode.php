//BACKEND FOR LOGIN
<?php
session_start();
include('dbcon.php');

//LOGIN FOR ADMIN
if(isset($_POST['login_now_btn']))
{
    if(!empty(trim($_POST['email'])) && !empty(trim(md5($_POST['password']))))
    {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, md5($_POST['password'])); 

        $login_query = "SELECT * FROM register WHERE email='$email' AND password='$password' LIMIT 1";
        $login_query_run = mysqli_query($con, $login_query);

        if(mysqli_num_rows($login_query_run) > 0)
        {
            $row = mysqli_fetch_array($login_query_run);


            session_start();
            if($row['verify_status'] == "1")
            {
                $_SESSION['authenticated'] = TRUE;
                $_SESSION['auth_user'] = [
                    'id'    => $row['id'],
                    'fname' => $row['fname'],
                    'lname' => $row['lname'],
                    'email' => $row['email'],
                ];
            }
            else
            {
                $_SESSION['status'] = "Please Verify your Email Address to Login";
                header("Location: login.php");
                exit(0);
            }
        

            if($row['usertype'] == "Admin")
            {
                $_SESSION['authenticated'] = TRUE;
                $_SESSION['auth_user'] = [
                    'id'    => $row['id'],
                    'fname' => $row['fname'],
                    'lname' => $row['lname'],
                    'email' => $row['email'],
                ];
                $_SESSION['status'] = "You are Logged In Successfully.";
                header("Location: superadmin-home.php");
                exit(0);
            }
                    else if($row['usertype'] == "Support Staff")
                    {
                        $_SESSION['authenticated'] = TRUE;
                        $_SESSION['auth_user'] = [
                            'id'    => $row['id'],
                            'fname' => $row['fname'],
                            'lname' => $row['lname'],
                            'email' => $row['email'],
                        ];
                        $_SESSION['username'] = 
                        $_SESSION['status'] = "You are Logged In Successfully.";
                        header("Location: personnel-dashboard.php");
                        exit(0);
                    }


                    else if($row['usertype'] == "Academic Official")
                    {
                        $_SESSION['authenticated'] = TRUE;
                        $_SESSION['auth_user'] = [
                            'id'    => $row['id'],
                            'fname' => $row['fname'],
                            'lname' => $row['lname'],
                            'email' => $row['email'],
                        ];
                        $_SESSION['username'] = 
                        $_SESSION['status'] = "You are Logged In Successfully.";
                        header("Location: personnel-dashboard.php");
                        exit(0);
                    }

                    else if($row['usertype'] == "Teaching Academic Staff")
                    {
                        $_SESSION['authenticated'] = TRUE;
                        $_SESSION['auth_user'] = [
                            'id'    => $row['id'],
                            'fname' => $row['fname'],
                            'lname' => $row['lname'],
                            'email' => $row['email'],
                        ];
                        $_SESSION['username'] = 
                        $_SESSION['status'] = "You are Logged In Successfully.";
                        header("Location: personnel-dashboard.php");
                        exit(0);
                    }


                    else if($row['usertype'] == "User")
                    {
                        $_SESSION['authenticated'] = TRUE;
                        $_SESSION['auth_user'] = [
                            'id'    => $row['id'],
                            'fname' => $row['fname'],
                            'lname' => $row['lname'],
                            'email' => $row['email'],
                        ];
                        $_SESSION['username'] = 
                        $_SESSION['status'] = "You are Logged In Successfully.";
                        header("Location: user-home2.php");
                        exit(0);
                    }
                    else
                    {
                        $_SESSION['status'] = "Please Verify your Email Address to Login";
                        header("Location: login.php");
                        exit(0);
                    }
        }
        else 
        {
            $_SESSION['status'] = "Invalid Email or Password";
            header("Location: login.php");
            exit(0);
        }

    }
    else 
    {
        $_SESSION['status'] = "All fields are Mandatory";
        header("Location: login.php");
    }
    


    
}

?>