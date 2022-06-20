<?php
    include "inc/db.php";

    session_start();
    if (isset($_SESSION['admin'])) {
        header('location:dashboard.php');
    }



    if (isset($_POST['login'])) {
        
        $email = $_POST['email'];
        $password =md5($_POST['password']);


        $select = "SELECT * FROM admin WHERE email='$email' AND password='$password' ";
        $query = mysqli_query($conn, $select);
        $rows = mysqli_num_rows($query);


        if ($rows>0) {
            $_SESSION['admin']='$email';
            header('location:dashboard.php');
        } else {
            $message = "Please Try Again !";
            $bg = "alert alert-danger";

        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Admin</title>
  
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Login card start -->
                    <form action="" method="POST" class="md-float-material form-material">
                      
                        <div class="auth-box card">


                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                         <div class="text-center">
				                            <img src="files/assets/images/gigalogo.png" alt="logo.png" width="140px;" class="mb-4">
				                        </div>
                                    </div>
                                </div>

                               <div class="form-group form-primary">
                                              
				                    <?php if (isset($message)){ ?>
				                        <div class="alert alert-danger <?php echo $bg; ?>" role="alart">
				                            <?php echo $message; ?>
				                    <?php } ?>
                                	
                                </div>
                                	
                                <div class="form-group form-primary">
                                    <input type="email" name="email" class="form-control" required=""
                                        placeholder="Your Email Address">
                                    <span class="form-bar"></span>
                                </div>


                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" required=""
                                        placeholder="********">
                                    <span class="form-bar"></span>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" name="login"><i
                                                class="icofont icofont-lock"></i> Login </button>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you.</p>
                                        <p class="text-inverse text-left"><a href=""><b class="f-w-600">Back
                                                    to website</b></a></p>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Login card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

    <!-- Required Jquery -->
    <script type="text/javascript" src="files/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="files/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="files/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="files/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="files/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="files/bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="files/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="files/bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript"
        src="files/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript"
        src="files/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="files/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <!--Color Script Common-->
    <script type="text/javascript" src="files/assets/js/common-pages.js"></script>


</body>

</html>