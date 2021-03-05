<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg white-nav-top  fixed-top justify-content-between">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand smooth-scroll clickMe" id="nave-menu-logo" href="home.php">
                <img src="img/logo/colored-logo.png" class="img-responsive" alt="logo">
            </a>
            <div class="d-inline-block d-lg-none ml-md-0 ml-auto py-3" id="mobile-nav-open-btn">&#9776;</div>

            <!-- Main Menu -->
            <div class="container d-inline-block navbar-expand-lg ">
                <div class="collapse navbar-collapse justify-content-end ml-auto">
                    <ul class="nav navbar-nav d-flex">
                        <li class="nav-item align-self-center "><a class="nav-link clickMe" href="search.php">Search Note</a></li>
                        
                        <li class="nav-item align-self-center"><a class="nav-link clickMe" href="
                        <?php if(isset($_SESSION["isLogin"]) ){
									if($_SESSION["isLogin"]=="yes"){ ?>
                         dashboard.php
                        <?php }}
                        else{?>
                        login.php
                         <?php } ?>
                         "> Sell Your Notes</a></li>
                        <?php if(isset($_SESSION["isLogin"]) ){
									if($_SESSION["isLogin"]=="yes"){ ?>
                        <li class="nav-item align-self-center "><a class="nav-link clickMe" href="buyer-request.php">Buyer Request</a></li>
                        <?php }} ?>


                        <li class="nav-item align-self-center"><a class="nav-link clickMe" href="faq.php">FAQ</a></li>
                        <li class="nav-item align-self-center"><a class="nav-link clickMe" href="contact-us.php">Contact Us</a></li>

                        <?php if(isset($_SESSION["isLogin"]) ){
									if($_SESSION["isLogin"]=="yes"){ ?>

                        <li class="nav-item dropdown align-self-center ">
                            <a class="nav-link toggle" href="#" id="navbardrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/notedetails/reviewer-1.png" alt="client" class="img-responsive img-circle">
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="user-profile.php">My Profile</a>
                                <a class="dropdown-item" href="my-downloads.php">My Downloads</a>
                                <a class="dropdown-item" href="my-sold-notes.php">My Sold Notes</a>
                                <a class="dropdown-item" href="my-rejected-notes.php">My Rejected Noted</a>
                                <a class="dropdown-item" href="change-password.php">Change Password</a>
                                <a class="dropdown-item" href="process/logoutBack.php">Logout</a>
                            </div>
                        </li>

                        <?php }} ?>


                        <?php 
								if(isset($_SESSION["isLogin"])){
									if($_SESSION["isLogin"]=="yes"){ ?>
                        <li class="nav-item align-self-center "><a class="nav-link" href="process/logoutBack.php"><button class="btn-header-colored">Logout</button></a></li>
                        <?php }else{ ?>
                        <li class="nav-item align-self-center"><a class="nav-link" href="login.php"><button class="btn-header-colored">Login</button></a></li>
                        <?php }
								}else{ ?>
                        <li class="nav-item align-self-center"><a class="nav-link" href="login.php"><button class="btn-header-colored">Login</button></a></li>
                        <?php } ?>


                    </ul>
                </div>
            </div>
            <!-- Mobile Menu -->
            <div id="mobile-nav">
                <a class=" smooth-scroll" id="mobile-menu-logo" href="home.php">
                    <img src="img/logo/colored-logo.png" alt="logo">
                </a>
                <!-- Mobile Menu Close Button -->
                <span id="mobile-nav-close-btn">&times;</span>

                <div id="mobile-nav-content">
                    <ul class="">
                        <li class="dropdoen-item"><a class="" href="search.php">Search Note</a></li>
                        <li class="dropdoen-item"><a class="" href="dashboard.php">Sell Your Notes</a></li>

                        <?php if(isset($_SESSION["isLogin"]) ){
									if($_SESSION["isLogin"]=="yes"){ ?>
                        <li class="dropdoen-item "><a class="" href="buyer-request.php">Buyer Request</a></li>
                        <?php }} ?>


                        <li class="dropdoen-item"><a class="" href="faq.php">FAQ</a></li>
                        <li class="dropdoen-item"><a class="" href="contact-us.php">Contact Us</a></li>

                       <?php if(isset($_SESSION["isLogin"]) ){
									if($_SESSION["isLogin"]=="yes"){ ?>
                         
                        <li class="dropdoen-item ">
                            <a class=" toggle" href="#" id="" data-toggle="dropdown">
                                <img src="img/notedetails/reviewer-1.png" alt="client" class="img-responsive img-circle">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="user-profile.php">My Profile</a></li>
                                <li><a class="dropdown-item" href="my-downloads.php">My Downloads</a></li>
                                <li><a class="dropdown-item" href="my-sold-notes.php">My Sold Notes</a></li>
                                <li><a class="dropdown-item" href="my-rejected-notes.php">My Rejected Noted</a></li>
                                <li><a class="dropdown-item" href="change-password.php">Change Password</a></li>
                                <li><a class="dropdown-item" href="login.php">Logout</a></li>
                            </ul>
                        </li>
                        <?php }} ?>
                       


                        <?php 
								if(isset($_SESSION["isLogin"])){
									if($_SESSION["isLogin"]=="yes"){ ?>
                        <li class="dropdown-item "><a href="process/logoutBack.php"><button class="btn-header-colored">Logout</button></a></li>
                        <?php }else{ ?>
                        <li class="dropdown-item"><a href="login.php"><button class="btn-header-colored">Login</button></a></li>
                        <?php }
								}else{ ?>
                        <li class="dropdown-item "><a href="login.php"><button class="btn-header-colored">Login</button></a></li>
                        <?php } ?>



                    </ul>
                </div>
            </div>

        </div>
    </nav>
</header>
<!-- Header Ends -->
