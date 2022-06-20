<?php include("config.php"); ?>

<!doctype html>
<html lang="zxx">
    
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/aos.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/remixicon.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/fancybox.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/navbar.css">
        <link rel="stylesheet" href="assets/css/footer.css">
		<link rel="stylesheet" href="assets/css/responsive.css">
        
		
		<title>Giga Soft Limited</title>

        <link rel="icon" type="image/png" href="assets/images/favicon.png">
    </head>

    <body>

    <script type="text/javascript">
    	document.addEventListener("contextmenu",function(body){
    		body.preventDefault();
    	})
    </script>

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Header Area -->
        <header class="main-header-area">
            <!-- Start Navbar Area -->
            <div class="navbar-area">
                <div class="main-responsive-nav">
                    <div class="container">
                        <div class="main-responsive-menu">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="assets/images/logo.png" alt="image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-navbar">
                    <div class="container-fluid">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="index.php">
                                <img src="assets/images/logo.png" alt="image">
                            </a>

                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link active">
                                            Home 
                                        </a>
                                    </li>


                                     <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Company 
                                            <i class="ri-arrow-down-s-line"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="about.php" class="nav-link">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="team.php" class="nav-link">Team Member</a>
                                            </li>
                                          
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                         <a href="services.php" class="nav-link">
                                            Service
                                             <i class="ri-arrow-down-s-line"></i>
                                        </a>

                                         <ul class="dropdown-menu">
                                        <?php 
                                                $Select = "SELECT * FROM service ORDER BY sid DESC";
                                                $query = mysqli_query($conn,$Select); 
                                                $i=1;
                                                foreach ($query as $rows) {?>
                                                    
                                                 <li class="nav-item">
                                                    <a href="services-details.php?sid=<?php echo $rows['sid']; ?>" class="nav-link"><?php echo $rows['title']; ?></a>
                                                 </li>

                                        <?php $i++; } ?> 
                                        </ul>
                                    </li>


                                    <li class="nav-item">
                                        <a href="courses.php" class="nav-link">
                                            Courses
                                             <i class="ri-arrow-down-s-line"></i>
                                        </a>

                                         <ul class="dropdown-menu">
                                        <?php 
                                                $Select = "SELECT * FROM course ORDER BY sid DESC";
                                                $query = mysqli_query($conn,$Select); 
                                                $i=1;
                                                foreach ($query as $rows) {?>
                                                    
                                                 <li class="nav-item">
                                                    <a href="courses_details.php?sid=<?php echo $rows['sid']; ?>" class="nav-link"><?php echo $rows['c_name']; ?></a>
                                                 </li>

                                        <?php $i++; } ?> 
                                        </ul>
                                    </li>


                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Products 
                                            <i class="ri-arrow-down-s-line"></i>
                                        </a>

                                        <ul class="dropdown-menu">

                                         <?php 
                                            $Select = "SELECT * FROM product ORDER BY sid DESC";
                                            $query = mysqli_query($conn,$Select); 
                                            $i=1;
                                            foreach ($query as $rows) {?>

                                            <li class="nav-item">
                                                <a href="" class="nav-link"><?php echo $rows['name']; ?></a>
                                            </li>

                                            <?php $i++; } ?> 
                                           <!--  <li class="nav-item">
                                                <a href="services-style-2.html" class="nav-link">Services Style Two</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="services-details.html" class="nav-link">Services Details</a>
                                            </li> -->
                                        </ul>
                                    </li>

                                
        
                                    <li class="nav-item">
                                        <a href="contact.php" class="nav-link">Contact</a>
                                    </li>
                                </ul>

                                <div class="others-options d-flex align-items-center">
                                    <div class="option-item">
                                        <i class="search-btn ri-search-line"></i>
                                        <i class="close-btn ri-close-line"></i>
                                        <div class="search-overlay search-popup">
                                            <div class='search-box'>
                                                <form class="search-form">
                                                    <input class="search-input" placeholder="Search..." type="text">
    
                                                    <button class="search-button" type="submit">
                                                        <i class="ri-search-line"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="option-item">
                                        <div class="side-menu-btn">
                                            <i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="others-option-for-responsive">
                    <div class="container">
                        <div class="dot-menu">
                            <div class="inner">
                                <div class="circle circle-one"></div>
                                <div class="circle circle-two"></div>
                                <div class="circle circle-three"></div>
                            </div>
                        </div>
                        
                        <div class="container">
                            <div class="option-inner">
                                <div class="others-options d-flex align-items-center">
                                    <div class="option-item">
                                        <i class="search-btn ri-search-line"></i>
                                        <i class="close-btn ri-close-line"></i>
                                        <div class="search-overlay search-popup">
                                            <div class='search-box'>
                                                <form class="search-form">
                                                    <input class="search-input" placeholder="Search..." type="text">
    
                                                    <button class="search-button" type="submit">
                                                        <i class="ri-search-line"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="option-item">
                                        <div class="side-menu-btn">
                                            <i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar Area -->
        </header>
        <!-- End Header Area -->

        <!-- Sidebar Modal -->
        <div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>

                    <div class="modal-body">
                        <a href="index.html">
                            <img src="assets/images/black-logo.png" alt="logo">
                        </a>
                        <div class="sidebar-content">
                            <h3>Fast IT is the best software company of Bangladesh.</h3>
                           

                            <div class="sidebar-btn">
                                <a href="tel:+880 1722754100" class="default-btn">Let’s Talk</a>
                            </div>
                        </div>
                        <div class="sidebar-contact-info">
                            <h3>Contact Information</h3>

                            <ul class="info-list">
                                <li><i class="ri-phone-fill"></i> <a href="tel:+880 1722754100">+880 1722754100</a></li>
                                
                                <li><i class="ri-mail-line"></i> <a href="gmail.com">info@fastitbd.com</span></a></li>

                                <li><i class="ri-map-pin-line"></i> 203, 204 Road: 35, Block- Ta, Section-06, Mirpur, Dhaka-1216</li>
                            </ul>
                        </div>
                        <ul class="sidebar-social-list">
                            <li><a href="https://www.facebook.com/gigasoftbd" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                            <li><a href="https://twitter.com/gigasoftbd" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                            <li><a href="#" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                            <li><a href="#" target="_blank"><i class="ri-instagram-fill"></i></a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidebar Modal -->