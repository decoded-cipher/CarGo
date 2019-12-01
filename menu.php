   
 
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
                                    <li><a href="#">OVERVIEW</a></li>
                                    <li <?php echo ($_SERVER['REQUEST_URI']=='/CarGo/drive.php') ? 'class="active"' : ''; ?>><a href="drive.php" >TO DRIVE</a></li>
                                    <li <?php echo ($_SERVER['REQUEST_URI']=='/CarGo/ride.php') ? 'class="active"' : ''; ?>><a href="ride.php">FOR RIDE</a></li>
                                    <li><a href="notification.php">NOTIFICATION</a></li>
                                   
                                    <li><a href="logout.php">Log OUT</a></li>
    
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