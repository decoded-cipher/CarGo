<?php
require_once "model/db.php";
if (!isset($_SESSION['user_id'])) {
    if (!headers_sent()) {
        header('location:login.php');
    } else {
        echo '<script>location.href="login.php"</script>';
    }
}
?>
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



        <style>

            .table-post{
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;                   
            }

            .table-post li {
                background-color: transparent;
                border: 1px solid;   
                color: gray;
                font-size: 17px;
                font-weight: 450;
                letter-spacing: 1.3px;
                margin-bottom: 15px;
                padding: 15px;
                position: relative;
            }

            .table-post a {
                color: gray;
            }

            .table-post li:last-child {
                margin-bottom: 20px;
            }

            .table-post li:first-child {
                margin-top: 40px;
            }

            .table-post li i {
                background-color: transparent;
                color: gray;
                float: right;
                font-size: 18px;
                height: 30px;
                line-height: 30px;
                padding-left: 2px;
                position: absolute;
                right: 15px;
                text-align: center;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                -webkit-transition: all 0.4s ease 0s;
                transition: all 0.4s ease 0s;
                width: 30px;
            }

            .table-post li:hover i {
                color: #000;
            }

            .table-post a:hover {
                color: #000;
            }
            .btn-view {
    color: #fff !important;
    margin-top: 10px;
}  
        </style>
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
                            <i class="fa fa-clock-o"></i> 24*7
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


            <?php
            include_once 'menu.php';
            ?>



            <!--__________________________________________________________________________________________________________________________________-->



            <!--== Page Title Area Start ==-->
            <section id="page-title-area" class="section-padding overlay">
                <div class="container">
                    <div class="row">
                        <!-- Page Title Start -->
                        <div class="col-lg-12">
                            <div class="section-title  text-center">
                                <h2>Drive with CarGo</h2>
                                <span class="title-line"><i class="fa fa-car"></i></span>
                                <p>Fill-up and experience the pleasure of Shared Trips</p>
                            </div>
                        </div>
                        <!-- Page Title End -->
                    </div>
                </div>
            </section>
            <!--== Page Title Area End ==-->

            <?php
            $qry = "SELECT * FROM trip INNER JOIN vehicle ON trip.vehicle_id = vehicle.vehicle_id WHERE trip.user_id =" . $_SESSION['user_id'] . " order by trip.trip_id desc";
            $result = mysqli_query($con, $qry);
            $count = mysqli_num_rows($result);
            ?>


            <!--== Login Page Content Start ==-->
            <section id="lgoin-page-wrap" class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-8 m-auto">
                            <div class="xlogin-page-content">
                                <div class="login-form">
                                    <h3>Drives List</h3>

                                    <div class="col-md-12">

                                        <div class="single-footer-widget">
                                            <div class="widget-body">
                                                <?php
                                                if ($count > 0) {
                                                    $i = 0;
                                                    ?>
                                                    <ul class="table-post">
                                                        <?php
                                                        while ($res = mysqli_fetch_array($result)) {
                                                            $i++;
                                                            ?>

                                                            <li>
                                                                <a href="#" onclick="javascript:showModal(<?= $i ?>);">
                                                                    <?php
                                                                    echo date('M d, Y h:i A', strtotime($res['datee'] . ' ' . $res['timee']));
                                                                    ?>
                                                                    <i class="fa fa-long-arrow-right"></i>
                                                                </a>
                                                            </li> 

                                                            <div id="myModal<?= $i ?>" class="xsmodal" style="display:none;">

                                                                <!-- Modal content -->
                                                                <div class="xsmodal-content">
                                                                    <span class="xsclose" onclick="javascript:hideModal(<?= $i ?>);">&times;</span>
                                                                    <br>

                                                                    <div class="driver_details" style="display: inline-block; text-align: center">
                                                                        <img style="margin-left: 30px" src="assets/img/img_avatar_1.png" width="150px" height="150px">
                                                                    </div>
                                                               
                                                                    <div class="route">
                                                                                <div class="from">
                                                                                    <p>Source: <?php echo $res['source']; ?></p>
                                                                                </div>
                                                                                <div class="from">
                                                                                    <p>Destination: <?php echo $res['destination']; ?></p>
                                                                                </div>
                                                                         <div class="from">
                                                                                    <p>Vehicle: <?php echo $res['vehicle_name']; ?></p>
                                                                                </div>
                                                                                <div class="time">
                                                                                    <h6 style="color: gray;">Time: <?php 
                                                                    echo date('M d, Y h:i A', strtotime($res['datee'] . ' ' . $res['timee']));
                                                                    ?></h6>
                                                                                </div>
                                                                        
                                                                              <div class="abc" >
                                                                            <a href="view_requests?id=<?= $res['trip_id'] ?>" target="_blank" class="btn btn-sm btn-info btn-view">
                                                                                <i class="fa fa-eye"></i> 
                                                                                View Requests                                                                  
                                                                            </a>
                                                                        </div>
                                                                        
                                                                        
                                                                            </div>                                
                                                                            </div>
                                                                            </div>


                                                                            <?php }
                                                                        ?>

                                                                        </ul>        
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <div class="alert alert-warning" role="alert">
                                                                            No Drives Created..
                                                                        </div>
                                                                    <?php } ?>
                                                                    </div>
                                                                    </div>

                                                                    </div>

                                                                    </div>
                                                                    </div>		
                                                                    </div>
                                                                    </div>
                                                                    </div>
                                                                    </section>
                                                                    <!--== Login Page Content End ==-->







                                                                    <!--________________________________________________________________________________________________________________________________-->




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
                                                                    <script>
                                                                        function showModal(i){
                                                                            $("#myModal"+i).show();
                                                                        }
                                                                        function hideModal(i){
                                                                            $("#myModal"+i).hide();
                                                                        }
                                                                        </script>
                                                                    </body>

                                                                    </html>


                                                                    <!--________________________________________________________________________________________________________________________________-->
                                                                    <!--________________________________________________________________________________________________________________________________-->




