<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/boostrap/bootstrap.min.css">


    <!-- Animation CSS  -->
    <link rel="stylesheet" href="css/animate/animate.min.css">

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="we-wrapper">

        <!-- Header -->
        <?php include "includes/header.php"; ?>
        <!-- Header Ends -->
        <?php 
            include "process/connection.php";
            ob_start();
        ?>

        <!-- User Profile -->
        <section id="top_banner">
            <div class="banner">
                <div class="inner text-center animated fadeInDown">
                    <h2>User Profile</h2>
                </div>
            </div>
        </section>

        <!-- User Profile Form-->

        <section>
            <div class="container">
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="process/addProfile.php" enctype="multipart/form-data">

                    <!-- Basic Profile-->
                    <div class="section-heading animated fadeInDown">
                        <h2>Basic Profile Details </h2>
                    </div>
                    <div class="row contact-wrap">
                        <div class="status alert alert-success" style="display: none"></div>
                        <div class="col-md-6 col-sm-12 col-xs-12 animated slideInLeft">

                            <div class="form-group">
                                <label class="required">First Name</label>
                                <input type="text" name="first_name" class="form-control" required="required " placeholder="Enter your first name">
                            </div>

                            <div class="form-group">
                                <label class="required">Email</label>
                                <input type="email" name="email" class="form-control" required="required" placeholder="Enter your email address">
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <div class="styled-select form-control">
                                    <select name="gender" id="user-gender" class="form-control">
                                        <option value="0">Other</option>
                                        <option value="2">Male</option>
                                        <option value="1">Female</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Profile Picture</label>
                                <input type="file" class="form-control input-img" name="profile" accept="image/png, image/jpeg">
                            </div>

                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12 animated slideInRight">

                            <div class="form-group">
                                <label class="required">Last Name</label>
                                <input type="text" name="last-name" class="form-control" required="required" placeholder="Enter your last name">
                            </div>

                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <input type="date" name="date-of-birth" class="form-control" placeholder="Enter date of birth">
                            </div>

                            <div class="form-group">
                                <label class="required">Phone Number</label>
                                <div class="row">
                                    <div class="styled-select form-control phone">
                                        <select name="phone" id="phone-code" class="form-control ">
                                            <option value="+91">+91</option>
                                            <option value="+90">+90</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <input type="number" name="phone-number" class="form-phone-number col-md-auto" placeholder="Enter your email address">
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Address Detaild-->
                    <div class="section-heading wow fadeInDown">
                        <h2>Address Detail</h2>
                    </div>
                    <div class="row contact-wrap">
                        <div class="status alert alert-success" style="display: none"></div>
                        <div class="col-md-6 col-sm-12 col-xs-12 wow slideInLeft">

                            <div class="form-group">
                                <label class="required">Address Line 1</label>
                                <input type="text" name="address-line-1" class="form-control" required="required " placeholder="Enter your address name">
                            </div>

                            <div class="form-group">
                                <label class="required">City</label>
                                <input type="text" name="city" class="form-control" required="required " placeholder="Enter your city ">
                            </div>

                            <div class="form-group">
                                <label class="required">ZipCode</label>
                                <input type="text" name="zipcode" class="form-control" required="required " placeholder="Enter your zipcode ">
                            </div>

                        </div>
                        <div class=" col-md-6 col-sm-12 col-xs-12 wow slideInRight">

                            <div class="form-group">
                                <label class="required">Address Line 2</label>
                                <input type="text" name="address-line-2" class="form-control" required="required " placeholder="Enter your address">
                            </div>

                            <div class="form-group">
                                <label class="required">State</label>
                                <input type="text" name="state" class="form-control" required="required " placeholder="Enter your state ">
                            </div>

                            <div class="form-group">
                                <label class="required">Country</label>
                                <div class="styled-select form-control">
                                    <select name="country" id="user-country" class="form-control">
                                        <?php 
                                            $query="SELECT * FROM country";
                                            $result=mysqli_query($conn, $query);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                        <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option><?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- University and College Info-->
                    <div class="section-heading wow fadeInDown">
                        <h2>University and College Information</h2>
                    </div>
                    <div class="row contact-wrap">

                        <div class="col-md-6 col-sm-12 col-xs-12 wow slideInLeft">
                            <div class="form-group">
                                <label class="required">University</label>
                                <input type="text" name="university" class="form-control" required="required " placeholder="Enter your university">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12 wow slideInRight">
                            <div class="form-group">
                                <label class="required">College</label>
                                <input type="text" name="college" class="form-control" required="required " placeholder="Enter your college">
                            </div>
                        </div>

                        <div class="col-md-12"> <button class="small-btn" name="profile_submit_btn">Submit</button></div>
                    </div>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <?php include "includes/footer.php"; ?>
        <!-- Footer Ends -->

    </div>
    <!-- JQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>


    <!-- Wow JS -->
    <script src="js/Wow/wow.min.js"></script>

    <!-- Custome JS -->
    <script src="js/script.js"></script>


</body>

</html>
