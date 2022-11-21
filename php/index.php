<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSCOTS - Home Page</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/user-newrequest.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;500;800&family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/f7f6ac6a49.js" crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
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
            <a class="nav-link active text-white" aria-current="page" href="login.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="user-faqspage.php">FAQs</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link waves-effect waves-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-circle-user"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="login.php">Login</a>
              </ul>
            </li>
        </ul>
      </div>
    </div>
  </nav>



    <div class="header-container">
        <h1>WELCOME TO ISCOTS!</h1>
        <p>The IPEA Student Concerns Ticketing System or ISCOTS assists students in IPEA in managing the student body’s academic concerns and inquiries.</p>
    </div>
    
    <div id="rectangle"></div>

    <div class="subheader-container">
        <h1>How can we help?</h1>
        <p>If you have any academic concerns and inquiries, you can create a new service request. If your concerns are not fully solved, you may request to reopen your previous ticket.</p>
        <div class="btn-group">
          <a href="login.php" class="hero-btn">CREATE NEW SERVICE REQUEST</a>
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