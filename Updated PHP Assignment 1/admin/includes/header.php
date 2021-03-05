<!-- Header -->
<section>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top  white-nav-top">
            <div class="container ">
                <!-- Logo -->
                <a class="navbar-brand smooth-scroll" id="nave-menu-logo" href="home.php">
                    <img src="img/logo/colored-logo.png" class="img-responsive" alt="logo">
                </a>
                <div class="d-inline-block d-lg-none ml-md-0 ml-auto py-3" id="mobile-nav-open-btn">&#9776;</div>

                <!-- Main Menu -->
                <div class="collapse navbar-collapse justify-content-end ml-auto align-content-middle">
                    <ul class="nav navbar-nav d-flex ">
                        <li class="nav-item align-self-center"><a class="nav-link active" href="admin-dashboard.php">Dashboard</a></li>
                        <li class="nav-item dropdown align-self-center">
                            <a class="nav-link toggle" href="#" id="navbardrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Notes
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="notes-under-review.php">Notes Unser Review</a>
                                <a class="dropdown-item" href="published-notes.php">Published Notes</a>
                                <a class="dropdown-item" href="downloaded-notes.php">Downloaded Notes</a>
                                <a class="dropdown-item" href="rejected-notes.php">Rejected Notes</a>
                            </div>
                        </li>
                        <li class="nav-item align-self-center"><a class="nav-link" href="members.php">Members</a></li>
                        <li class="nav-item dropdown align-self-center">
                            <a class="nav-link toggle" href="#" id="navbardrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Reports
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="spam-report.php">Spam Report</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown align-self-center">
                            <a class="nav-link toggle" href="#" id="navbardrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Settings
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="manage-system-configuration.php">Manage System Configuration</a>
                                <a class="dropdown-item" href="manage-administrator.php">Manage Administrator</a>
                                <a class="dropdown-item" href="manage-category.php">Manage Category</a>
                                <a class="dropdown-item" href="manage-type.php">Manage Type</a>
                                <a class="dropdown-item" href="manage-country.php">Manage Countries</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown align-self-center">
                            <a class="nav-link toggle" href="#" id="navbardrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/notedetails/reviewer-1.png" alt="client" class="img-responsive img-circle">
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="my-profile.php">Update Profile</a>
                                <a class="dropdown-item" href="change-password.php">Change Password</a>
                                <a class="dropdown-item" href="login.php">Logout</a>
                            </div>
                        </li>
                        

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


                <!-- Mobile Menu -->
                <div id="mobile-nav">
                    <a class=" smooth-scroll" id="mobile-menu-logo" href="home.php">
                        <img src="img/logo/colored-logo.png" alt="logo">
                    </a>
                    <!-- Mobile Menu Close Button -->
                    <span id="mobile-nav-close-btn">&times;</span>

                    <div id="mobile-nav-content">
                        <ul class="">
                            <li class="dropdoen-item"><a class="" href="admin-dashboard.php">Dashboard</a></li>
                            <li class="dropdoen-item">
                                <a class=" toggle" href="#" id="" data-toggle="dropdown">
                                    Notes
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="notes-under-review.php">Notes Unser Review</a></li>
                                    <li><a class="dropdown-item" href="published-notes.php">Published Notes</a></li>
                                    <li><a class="dropdown-item" href="downloaded-notes.php">Downloaded Notes</a></li>
                                    <li><a class="dropdown-item" href="rejected-notes.php">Rejected Notes</a></li>
                                </ul>
                            </li>
                            <li class="dropdoen-item"><a class="" href="members.php">Members</a></li>
                            <li class="dropdoen-item">
                                <a class=" toggle" href="#" id="" data-toggle="dropdown">
                                    Reports
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="spam-report.php">Spam Report</a></li>

                                </ul>
                            </li>
                            <li class="dropdoen-item">
                                <a class=" toggle" href="#" id="" data-toggle="dropdown">
                                    Setting
                                </a>
                                <ul class="dropdown-menu">
                                    <li> <a class="dropdown-item" href="manage-system-configuration.php">Manage System Configuration</a></li>
                                    <li><a class="dropdown-item" href="manage-administrator.php">Manage Administrator</a></li>
                                    <li><a class="dropdown-item" href="manage-category.php">Manage Category</a></li>
                                    <li><a class="dropdown-item" href="manage-type.php">Manage Type</a></li>
                                    <li><a class="dropdown-item" href="manage-country.php">Manage Countries</a></li>
                                </ul>
                            </li>
                            <li class="dropdoen-item">
                                <a class=" toggle" href="#" id="" data-toggle="dropdown">
                                    <img src="img/notedetails/reviewer-1.png" alt="client" class="img-responsive img-circle">
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="my-profile.php">Update Profile</a></li>
                                    <li><a class="dropdown-item" href="change-password.php">Change Password</a></li>
                                    <li><a class="dropdown-item" href="login.php">Logout</a></li>
                                </ul>
                            </li>
                            <li class="dropdoen-item"><a class="" href="login.php"><button class="btn-header-colored">Logout</button></a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </nav>
    </header>
</section>
<!-- Header Ends -->
