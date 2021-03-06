<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Administrator</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/boostrap/bootstrap.min.css">

    <!-- Animate CSS  -->
    <link rel="stylesheet" href="css/animate/animate.min.css">

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- Header -->
    <?php  include "includes/header.php" ?>
    <!-- Header Ends -->


    <!-- Add Administrator -->
    <section id="add-administrator">
        <div class="container">
            <form id="admin-add-administrator-form" class="contact-form" method="post">
                <div class="table-heading animated fadeInDown pt-4">
                    <h2>Add Administrator</h2>
                </div>

                <div class="row contact-wrap">
                    <div class="status alert alert-success" style="display: none"></div>

                    <div class=" col-xs-12 col-sm-12 col-md-6 animated slideInLeft">
                        <div class="form-group">
                            <label class="required">First Name</label>
                            <input type="text" name="fname" class="form-control" required="required " placeholder="Enter your first name">
                        </div>
                        <div class="form-group">
                            <label class="required">Last Name</label>
                            <input type="text" name="lname" class="form-control" required="required " placeholder="Enter your last name">
                        </div>
                        <div class="form-group">
                            <label class="required">Email</label>
                            <input type="email" name="email" class="form-control" required="required" placeholder="Enter your email address">
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
                                <input type="number" name="phone-number" class="form-phone-number col-md-auto" required="required" placeholder="Enter your email address">
                            </div>
                        </div>
                        <button class="small-btn">Submit</button>
                    </div>

                </div>

            </form>
        </div>
    </section>

    <!-- Footer -->
    <?php  include "includes/footer.php" ?>
    <!-- Footer Ends -->

    <!-- JQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Wow JS -->
    <script src="js/Wow/wow.min.js"></script>

    <!-- Custome JS -->
    <script src="js/script.js"></script>


</body>

</html>
