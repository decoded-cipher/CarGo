<!DOCTYPE html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--=== Favicon ===-->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

        <title>CarGo - Pooling Services</title>

        <!--=== Bootstrap CSS ===-->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!--=== Slicknav CSS ===-->
        <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
        <!--=== Magnific Popup CSS ===-->
        <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
        <!--=== Owl Carousel CSS ===-->
        <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
        <!--=== Gijgo CSS ===-->
        <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
        <!--=== FontAwesome CSS ===-->
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <!--=== Theme Reset CSS ===-->
        <link href="assets/css/reset.css" rel="stylesheet">
        <!--=== Main Style CSS ===-->
        <link href="style.css" rel="stylesheet">
        <!--=== Responsive CSS ===-->
        <link href="assets/css/responsive.css" rel="stylesheet">

    </head>

    <body class="loader-active">

        <!--== Preloader Area Start ==-->
        <div class="preloader">
            <div class="preloader-spinner">
                <div class="loader-content">
                    <img src="assets/img/preloader.gif" alt="JSOFT">
                </div>
            </div>
        </div>
        <!--== Preloader Area End ==-->



        <!--__________________________________________________________________________________________________________________________________-->



        <!--== Header Area Start ==-->
        <header id="header-area" class="fixed-top">
            <!--== Header Top Start ==-->
            <div id="header-top" class="d-none d-xl-block">
                <div class="container">
                    <div class="row">
                        <!--== Single HeaderTop Start ==-->
                        <div class="col-lg-3 text-left">
                            <i class="fa fa-map-marker"></i> Changanacherry, Kottayam
                        </div>
                        <!--== Single HeaderTop End ==-->

                        <!--== Single HeaderTop Start ==-->
                        <div class="col-lg-3 text-center">
                            <i class="fa fa-mobile"></i> +91 94000 57152
                        </div>
                        <!--== Single HeaderTop End ==-->

                        <!--== Single HeaderTop Start ==-->
                        <div class="col-lg-3 text-center">
                            <i class="fa fa-clock-o"></i>  24*7
                        </div>
                        <!--== Single HeaderTop End ==-->

                        <!--== Social Icons Start ==-->
                        <div class="col-lg-3 text-right">
                            <div class="header-social-icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <!--== Social Icons End ==-->
                    </div>
                </div>
            </div>
            <!--== Header Top End ==-->



            <!--__________________________________________________________________________________________________________________________________-->



            <!--== Header Bottom Start ==-->
            <div id="header-bottom">
                <div class="container">
                    <div class="row">
                        <!--== Logo Start ==-->
                        <div class="col-lg-4">
                            <a href="main.html" class="logo">
                                <img src="assets/img/logo.png" alt="JSOFT">
                            </a>
                        </div>
                        <!--== Logo End ==-->

                        <!--== Main Menu Start ==-->
                        <div class="col-lg-8 d-none d-xl-block">
                            <nav class="mainmenu alignright">
                                <ul>
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="main.html">About</a></li>
                                    <li><a href="main.html">Features</a></li>
                                    <li><a href="main.html">Team</a></li>
                                    <li><a href="main.html">Blog</a></li>
                                    <li><a href="main.html">Contact</a></li>
                                    <li><a href="login.php">Log In</a></li>

                                </ul>
                            </nav>
                        </div>
                        <!--== Main Menu End ==-->
                    </div>
                </div>
            </div>
            <!--== Header Bottom End ==-->
        </header>
        <!--== Header Area End ==-->



        <!--__________________________________________________________________________________________________________________________________-->



        <!--== Page Title Area Start ==-->
        <section id="page-title-area" class="section-padding overlay">
            <div class="container">
                <div class="row">
                    <!-- Page Title Start -->
                    <div class="col-lg-12">
                        <div class="section-title  text-center">
                            <h2>Log in</h2>
                            <span class="title-line"><i class="fa fa-car"></i></span>
                            <p>Enter your credentials to step-in and be a part of CarGo family.</p>
                        </div>
                    </div>
                    <!-- Page Title End -->
                </div>
            </div>
        </section>
        <!--== Page Title Area End ==-->

        <!--== Login Page Content Start ==-->
        <section id="lgoin-page-wrap" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-8 m-auto">
                        <div class="login-page-content">
                            <div class="login-form">
                                <h3>Welcome Back!</h3>

                                <form method="POST" action="" name="login">
                                    <div class="username">
                                        <input type="text" name="username" placeholder="Email or Username">
                                    </div>
                                    <div class="password">
                                        <input type="password" name="passwrd" placeholder="Password">
                                    </div>
                                    <div class="log-btn">
                                        <button type="submit" name="SUBMIT" value="SUBMIT" onClick="return validation();">
                                            <i class="fa fa-sign-in"></i> Log In</button>
                                    </div>
                                </form>

                            </div>

                            <!-- <div class="login-other">
                                    <span class="or">or</span>
                                    <a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Login With Facebook</a>
                                    <a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Login With Google</a>
                            </div> -->

                            <div class="create-ac">
                                <p>Don't have an account? <a href="register.php">Sign Up</a></p>
                            </div>
                            <div class="login-menu">
                                <a href="main.html">About</a>
                                <span>|</span>
                                <a href="main.html">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== Login Page Content End ==-->



        <!--____________________________________________________________________________________________________________________________________-->    



        <!--== Footer Area Start ==-->
        <section id="footer-area">
            <!-- Footer Widget Start -->
            <div class="footer-widget-area">
                <div class="container">
                    <div class="row">
                        <!-- Single Footer Widget Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-footer-widget">
                                <h2>About Us</h2>
                                <div class="widget-body">
                                    <img src="assets/img/logo.png" alt="JSOFT">
                                    <p>CarGo aims to provide users with a quick, simple, secure and cashless way to travel.
                                        Join hands with us and help us achieve a future of shared mobility.</p>

                                    <div class="newsletter-area">
                                        <form action="main.html">
                                            <input type="email" placeholder="Subscribe Our Newsletter">
                                            <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Widget End -->

                        <!-- Single Footer Widget Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-footer-widget">
                                <h2>Recent Posts</h2>
                                <div class="widget-body">
                                    <ul class="recent-post">
                                        <li>
                                            <a href="#">
                                                Hello Changanacherry! 
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                What's new with CarGo
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Thank you Kottayam! 
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                How to earn through CarGo
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Widget End -->

                        <!-- Single Footer Widget Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-footer-widget">
                                <h2>get touch</h2>
                                <div class="widget-body">
                                    <p>Feel free to contact and join your hands with us to help us achieve a future of shared mobility.</p>

                                    <ul class="get-touch">
                                        <li><i class="fa fa-map-marker"></i> Changanacherry, Kottayam</li>
                                        <li><i class="fa fa-mobile"></i> +91 94000 57152</li>
                                        <li><i class="fa fa-envelope"></i> info@cargo.com</li>
                                    </ul>
                                    <a href="https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Show Location</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Widget End -->
                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

            <!-- Footer Bottom Start -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | Designed by <a href="main.html" target="_blank">CarGo</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom End -->
        </section>
        <!--== Footer Area End ==-->

        <!--== Scroll Top Area Start ==-->
        <div class="scroll-top">
            <img src="assets/img/scroll-top.png" alt="JSOFT">
        </div>
        <!--== Scroll Top Area End ==-->

        <!--=======================Javascript============================-->
        <!--=== Jquery Min Js ===-->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <!--=== Jquery Migrate Min Js ===-->
        <script src="assets/js/jquery-migrate.min.js"></script>
        <!--=== Popper Min Js ===-->
        <script src="assets/js/popper.min.js"></script>
        <!--=== Bootstrap Min Js ===-->
        <script src="assets/js/bootstrap.min.js"></script>
        <!--=== Gijgo Min Js ===-->
        <script src="assets/js/plugins/gijgo.js"></script>
        <!--=== Vegas Min Js ===-->
        <script src="assets/js/plugins/vegas.min.js"></script>
        <!--=== Isotope Min Js ===-->
        <script src="assets/js/plugins/isotope.min.js"></script>
        <!--=== Owl Caousel Min Js ===-->
        <script src="assets/js/plugins/owl.carousel.min.js"></script>
        <!--=== Waypoint Min Js ===-->
        <script src="assets/js/plugins/waypoints.min.js"></script>
        <!--=== CounTotop Min Js ===-->
        <script src="assets/js/plugins/counterup.min.js"></script>
        <!--=== YtPlayer Min Js ===-->
        <script src="assets/js/plugins/mb.YTPlayer.js"></script>
        <!--=== Magnific Popup Min Js ===-->
        <script src="assets/js/plugins/magnific-popup.min.js"></script>
        <!--=== Slicknav Min Js ===-->
        <script src="assets/js/plugins/slicknav.min.js"></script>

        <!--=== Mian Js ===-->
        <script src="assets/js/main.js"></script>

    </body>

</html>




<!--____________________________________________________________________________________________________________________________________-->    
<!--____________________________________________________________________________________________________________________________________-->    




<?php
$msg = "";
require_once "model/db.php";

if (isset($_POST['SUBMIT'])) {

    // $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $passwrd = $_POST['passwrd'];
    $qry = "SELECT username, passwrd, user_id, mobile, mobile_verified, first_name, last_name FROM registration WHERE username='" . $username . "' AND passwrd='" . $passwrd . "' LIMIT 1";

    $result = mysqli_query($con, $qry);
    if (mysqli_num_rows($result) == 1) {
        while ($r = mysqli_fetch_array($result)) {
            //   print_r($r);
            //  echo $r['user_id'];
            // $_SESSION['username'] = $r[0];
            $_SESSION['user_id'] = $r['user_id'];
            $_SESSION['mobile'] = $r['mobile'];
            $_SESSION['mobile_verified'] = $r['mobile_verified'];
            $_SESSION['name'] = $r['first_name'].' '.$r['last_name'];
        }
        if (isset($_SESSION['user_id'])) {
            if (!headers_sent()) {
                header('location:drive.php');
            } else {
                echo '<script>location.href="drive.php"</script>';
            }
        }
    }
 else {
        echo "<script>alert('Invalid Username or Password')</script>";
    }
    mysqli_close($con);
}
?>




<!--____________________________________________________________________________________________________________________________________-->    
<!--____________________________________________________________________________________________________________________________________-->




<script type ="text/javascript" language="javascript">
                                    function validation()
                                    {
                                        var username = document.forms["login"]["username"];
                                        var passwrd = document.forms["login"]["passwrd"];

                                        if (username.value == "")
                                        {
                                            window.alert("Please enter your User Name");
                                            username.focus();
                                            return false;
                                        } else if (passwrd.value == "")
                                        {
                                            window.alert("Please enter your Password");
                                            passwrd.focus();
                                            return false;
                                        } else
                                            return true;
                                    }
</script>



<!--____________________________________________________________________________________________________________________________________-->    
<!--____________________________________________________________________________________________________________________________________-->