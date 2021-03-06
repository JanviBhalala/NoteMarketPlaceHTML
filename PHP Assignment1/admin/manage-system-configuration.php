<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage System Configuration</title>
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


    <!-- Manage System Configuration -->
    <section id="manage-system-configuration">
        <div class="container">
            <form id="manage-system-configuration-form" class="contact-form" method="post">


                <div class="table-heading animated slideInDown pt-4 ">
                    <h2>Manage System Configuration</h2>
                </div>
                <div class="row contact-wrap">
                    <div class="status alert alert-success" style="display: none"></div>

                    <div class="col-md-7 col-sm-12 col-xs-12 animated slideInLeft">
                        <div class="form-group">
                            <label class="required">Support Email Address</label>
                            <input type="text" name="suppoet-email" class="form-control" required="required " placeholder="Enter your first name">
                        </div>
                        <div class="form-group">
                            <label class="required">Support Phone Number</label>
                            <input type="text" name="support-p-number" class="form-control" required="required " placeholder="Enter phone number">
                        </div>
                        <div class="form-group">
                            <label class="required">Email Address(es)(for various events system will send otification to these users)</label>
                            <input type="email" name="email" class="form-control" required="required" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <label class="required">Facebook URL</label>
                            <input type="url" name="facebook-url" class="form-control" required="required" placeholder="Enter facebook url">
                        </div>
                        <div class="form-group">
                            <label class="required">Twitter URL</label>
                            <input type="url" name="twitter-url" class="form-control" required="required" placeholder="Enter twitter url">
                        </div>
                        <div class="form-group">
                            <label class="required">Linkedin URL</label>
                            <input type="url" name="linkedin-url" class="form-control" required="required" placeholder="Enter linkedin url">
                        </div>
                        <div class="form-group">
                            <label>Default image for notes(if seller do not upload)</label>

                            <input type="file" name="avatar" class="form-control input-img" accept="image/png, image/jpeg">
                            <label class="file-label">Upload a picture</label>
                        </div>
                        <div class="form-group">
                            <label>Default profile picture(if seller do not upload)</label>

                            <input type="file" name="avatar" class="form-control input-img" accept="image/png, image/jpeg">

                            <label class="file-label">Upload a picture</label>
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
