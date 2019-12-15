<?php
require_once "model/db.php";
if (!isset($_SESSION['user_id']) || !isset($_REQUEST['id'])) {
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
            .login-form form {
                text-align: center;
            }
            .abc button {
                padding: 7px;
                cursor: pointer;
                -webkit-transition: 0.4s;
                transition: 0.4s;
                background-color: 
                    transparent;
                border: 1px solid
                    black;
                width: 40%;
                margin: 5px 0px;
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
                            <i class="fa fa-clock-o"></i> Mon-Fri 09.00 - 17.00
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

            $sqlqry = "SELECT COUNT(p_id) as p_count FROM passenger WHERE status=1 AND trip_id=" . $_REQUEST['id'];
            $result2 = mysqli_query($con, $sqlqry);
            $res2 = mysqli_fetch_array($result2);
            ?>



            <!--__________________________________________________________________________________________________________________________________-->



            <!--== Page Title Area Start ==-->
            <section id="page-title-area" class="section-padding overlay">
                <div class="container">
                    <div class="row">
                        <!-- Page Title Start -->
                        <div class="col-lg-12">
                            <div class="section-title  text-center">
                                <h2>Ride with CarGo</h2>
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
$qry = "SELECT passenger.p_id, registration.first_name, registration.last_name, registration.email, registration.mobile, trip.source, trip.destination, trip.datee, trip.timee, passenger.status, vehicle.vehicle_name, vehicle.passengers_no  FROM passenger INNER JOIN trip ON trip.trip_id = passenger.trip_id INNER JOIN ride ON ride.ride_id = passenger.ride_id INNER JOIN registration ON  ride.user_id = registration.user_id INNER JOIN vehicle ON vehicle.vehicle_id = trip.vehicle_id WHERE passenger.trip_id=" . $_REQUEST['id'] . " AND trip.user_id=" . $_SESSION['user_id'] . " order by passenger.p_id ASC";
// echo $qry;
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
                                    <h3>View Requests</h3>

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
                                                            echo ucwords($res['first_name'] . ' ' . $res['last_name']);
                                                            ?>
                                                                    <i class="fa fa-long-arrow-right"></i>
                                                                </a>
                                                            </li> 

                                                            <div id="myModal<?= $i ?>" class="xsmodal" style="display:none;">
                                                                <form id="frmRequest" name="frmRequest" method="post">
                                                                    <!-- Modal content -->
                                                                    <div class="xsmodal-content">
                                                                        <span class="xsclose" onclick="javascript:hideModal(<?= $i ?>);">&times;</span>
                                                                        <br>

                                                                        <div class="driver_details" style="display: inline-block; text-align: center">
                                                                            <img style="margin-left: 30px" src="assets/img/img_avatar_1.png" width="150px" height="150px">
                                                                        </div>

                                                                        <h4 style="margin: 20px 0px 5px 0px;
                                                                            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell,
                                                                            'Open Sans', 'Helvetica Neue', sans-serif;">
        <?php echo ucwords($res['first_name'] . ' ' . $res['last_name']); ?></h4>
                                                                        <h6 style="color: gray;"><?php echo $res['mobile']; ?><h6>
                                                                                <h6 style="color: gray;"><?php echo $res['email']; ?></h6>

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

                                                                                    <div class="abc">
                                                                                        <input type="hidden" name="hdn_p_id" id="hdn_p_id" value="<?php echo $res['p_id']; ?>" >
                                                                                            <?php
                                                                                            if ($res['status'] == 0) {
                                                                                                     if($res['passengers_no']>$res2['p_count']){
                                                                                                ?>
                                                                                            <button type="submit" id="btn_request" name="btn_request">Approve</button>
                                                                                            <?php  }  ?>
                                                                                            <button type="submit" id="btn_reject" name="btn_reject" style="margin: 0px 0px 0px 15px;">Reject</button>
                                                                                            <?php
                                                                                        } else if ($res['status'] == 1) {
                                                                                            ?>
                                                                                            <div class="alert alert-success" role="alert">
                                                                                                Request Accepted
                                                                                            </div>
                                                                                            <?php
                                                                                        } else if ($res['status'] == 2) {
                                                                                            ?>
                                                                                            <div class="alert alert-danger" role="alert">
                                                                                                Request Rejected
                                                                                            </div>                                                                                                                                                                              
                                                                                        <?php } ?>
                                                                                    </div>
                                                                                </div>                                
                                                                                </div>

                                                                                </form>
                                                                                </div>


    <?php }
    ?>

                                                                            </ul>        
    <?php
} else {
    ?>
                                                                            <div class="alert alert-warning" role="alert">
                                                                                No requests available
                                                                            <?php //echo date('M d, Y', strtotime($res['datee']));  from  $res['source']  to $res['destination']  ?>
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
                                                                                                    function showModal(i) {
                                                                                                        $("#myModal" + i).show();
                                                                                                    }
                                                                                                    function hideModal(i) {
                                                                                                        $("#myModal" + i).hide();
                                                                                                    }
                                                                        </script>
                                                                        </body>
                                                                        </html>
                                                                        <!--________________________________________________________________________________________________________________________________-->
                                                                        <!--________________________________________________________________________________________________________________________________-->

<?php
if (isset($_REQUEST['btn_request'])) {
    $p_id = $_REQUEST['hdn_p_id'];


    $qry = "UPDATE passenger SET status=1 WHERE p_id=" . $p_id;
    mysqli_query($con, $qry);
    $ins = mysqli_affected_rows($con);
    if ($ins > 0) {
        echo "<script>alert('Request Approved Successfully')</script>";
        echo "<meta http-equiv=refresh content=\"0; URL=" . $_SERVER['REQUEST_URI'] . "\">";
    } else {
        echo "<script>alert('Something went wrong. Please try again later')</script>";
    }
}
if (isset($_REQUEST['btn_reject'])) {
    $p_id = $_REQUEST['hdn_p_id'];
    $qry = "UPDATE passenger SET status=2 WHERE p_id=" . $p_id;
    mysqli_query($con, $qry);
    $ins = mysqli_affected_rows($con);
    if ($ins > 0) {
        echo "<script>alert('Request Rejected')</script>";
        echo "<meta http-equiv=refresh content=\"0; URL=" . $_SERVER['REQUEST_URI'] . "\">";
    } else {
        echo "<script>alert('Something went wrong. Please try again later')</script>";
    }
}
?>