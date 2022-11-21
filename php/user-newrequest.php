<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user-newrequest.css">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/f7f6ac6a49.js" crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Create New Request | I-SCoTS</title>
</head>
<body style="background-color: #f4f4f4;">
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <img src="../img/white.png" class="logo" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="user-home2.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="user-faqspage.php">FAQs</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link waves-effect waves-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-solid fa-circle-user"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="user-mytickets.php">My Tickets</a>
                    <a class="dropdown-item" href="user-settings.php">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.php">Log out</a>
                </ul>
              </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="block">
      <br>
    </div>

<!--CONTENT-->
<div class="service-request-form">
  <div class="header">
    <div class="title">
      <h2>Create New Service Request</h2>
    </div>
    <div class="button">
      <button id="return" onclick="">Return to my tickets</button>
    </div>
  </div>
    
    <div class="form-content">
      <p><span style="color: red;">*</span> indicates required fields</p>
      <br>

      <form action="user-newrequest-code.php" method="POST">
              <?php 
                         if(isset($_SESSION['status']))
                         {
                          ?>
                         <div class="alert alert-primary">
                         <center><?= $_SESSION['status'];?></center>
                         </div>
                          <?php
                         unset($_SESSION['status']);
                       }
                   ?>

        <section class="autofill"> <!--Autofill 'tong section na to ha-->
          <div class="input-block">
            <label for="fname">First Name<span style="color: red;">*</span></label>
            <input id="fname" type="text" name="fname" value="<?php echo $_SESSION['auth_user']['fname']?>" autofill>
          </div>
        
          <div class="input-block">
            <label for="lname">Last Name<span style="color: red;">*</span></label>
            <input id="lname" type="text" name="lname" value="<?php echo $_SESSION['auth_user']['lname']?>" autofill>
          </div>

          <div class="input-block">
            <label for="email">Email<span style="color: red;">*</span></label>
            <input id="email" type="text" name="email" value="<?php echo $_SESSION['auth_user']['email']?>" autofill>
          </div>
          <br>

        </section>

        <section>
                       
                  <?php
                  //CODE FOR GETTING INSIDE THE DROP DOWN
                    include('dbcon.php');
                    $query = "SELECT * FROM superadmin_department";
                    $result1 = mysqli_query($con, $query);
                  ?>

          <div class="form-group">
            <label for="department" style="margin-left: 5px;">Department<span style="color: red;">*</span></label>
            <select class = "options" id="department" name="department">

                <?php while($row1 = mysqli_fetch_array($result1)):; ?>
                <option><?php echo $row1[1];?> </option>
                <?php endwhile; ?>

            </select>
          </div>

                  <?php
                  //CODE FOR GETTING INSIDE THE DROP DOWN
                    include('dbcon.php');
                    $query = "SELECT * FROM superadmin_services";
                    $result1 = mysqli_query($con, $query);
                  ?>

          <div class="form-group">
            <label for="catergory" style="margin-left: 5px;">Category<span style="color: red;">*</span></label>
            <select class = "options" id="category" name="category">

                <?php while($row1 = mysqli_fetch_array($result1)):; ?>
                <option><?php echo $row1[1];?> </option>
                <?php endwhile; ?>

            </select>
          </div>
          <br>
        </section>

        <section>
          <div class="input-block subject">
            <label for="subject">Subject<span style="color: red;">*</span></label>
            <input id="subject" type="text" value="" name="subject" required>
          </div>
          <br>
        </section>

        <section>
          <div class="input-block description">
            <label for="description">Description of Concern<span style="color: red;">*</span></label>
            <textarea name="description" name="description" id="description" cols="108" rows="5"></textarea>
          </div>
          <br>
        </section>

        <section>
          <div class="upload">
            <label class="form-label" for="fileupload">Upload File</label>
            <input type="file" class="form-control" id="file-upload" />
          </div>
        </section>

        <div class="btn-grp">
          <button type="submit" name="newreq_btn" id="submit" onclick="">Submit</button>
        </div>
      </form>
      
    </div>
</div>

          

<!--FOOTER-->
<footer>
  <div class="footer-content">
    <img src="../img/ust_footer.png" alt="facebook logo">
    <p class="credits">ISCOTS: IPEA Student Concerns Ticketing System. 2022.</p>
  </div>
</footer>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>