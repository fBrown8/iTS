<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSCOTS - Home Page</title>
    <link rel="stylesheet" href="../css/user-faqspage.css">
    <link rel="stylesheet" href="../css/user-newrequest.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Search Icon -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;500;800&family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/f7f6ac6a49.js" crossorigin="anonymous"></script>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
			<div class="container-fluid">
				<img src="../img/white.png" class="logo" alt="" />
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarNavDropdown"
					aria-controls="navbarNavDropdown"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div
					class="collapse navbar-collapse justify-content-end"
					id="navbarNavDropdown"
				>
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active text-white" aria-current="page" href="user-home2.php"
								>Home</a
							>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="user-faqspage.php">FAQs</a>
						</li>
						<li class="nav-item dropdown">
							<a
								class="nav-link waves-effect waves-light"
								href="#"
								id="navbarDropdownMenuLink"
								role="button"
								data-bs-toggle="dropdown"
								aria-expanded="false"
							>
								<i class="fa-solid fa-circle-user"></i>
							</a>
							<ul
								class="dropdown-menu dropdown-menu-lg-end"
								aria-labelledby="navbarDropdownMenuLink"
							>
								<a class="dropdown-item" href="user-mytickets.php"
									>My Tickets</a
								>
								<a class="dropdown-item" href="user-settings.php">Settings</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="logout.php">Log out</a>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>

    <div class="header-container">
        <h1>FREQUENTLY ASKED QUESTIONS</h1>
        <p>Have questions? We're here to help!</p>

        <!-- Search Box -->
        <div class="search-box">
            <input type="text" placeholder="Search...">
            <!-- <span class="search">
                <i class="uil uil-search search-icon"></i> -->
            </span>
        </div>

    </div>
<br>
    <!-- FAQs Accordion -->

	<?php
				   include('dbcon.php');
				   $query = "SELECT * FROM superadmin_faqs";
				   $query_run = mysqli_query($con, $query);
				   ?>


                    <?php
                    if(mysqli_num_rows($query_run) > 0 )
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                    ?>

    <div class="accordion">
        <div class="accordion-items">
            <button class="accordion-header"><strong><?php echo $row ['questions']; ?></strong><i class="fas fa-angle-down"></i></button>
            <div class="accordion-content"><?php echo $row ['answers']; ?></div>
        </div>

	<?php
                        }
                    }
                    else 
                    {
                        echo "No Record Found";
                    }

                    ?>
    
    <footer>
        <div class="footer-content">
          <img src="../img/ust_footer.png" alt="facebook logo">
          <p class="credits">ISCOTS: IPEA Student Concerns Ticketing System. 2022.</p>
        </div>
      </footer>
      

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>


    <script src="../js/faqs-page.js"></script>

    

</body>
</html>