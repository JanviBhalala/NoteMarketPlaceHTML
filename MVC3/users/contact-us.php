<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.png">
    
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

						
        <!-- Contact Us Banner-->
        <section id="top_banner">
            <div class="banner">
                <div class="inner text-center  animated fadeInDown">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </section>

        <!-- Contact Us Form-->
        <section id="contact-us-form mr-0">
           
            <form id="main-contact-form" class="contact-form mr-0" name="contact-form" method="post" action="process/contactUsBack.php">

                <div class="container">
                   <?php
                        if( !empty( $_REQUEST['msg'] ) )
                            {
                                echo sprintf( '<br/><p class="txt_green">%s</p>', $_REQUEST['msg'] );
                            }
                        ?>
                        <?php
                        if( !empty( $_REQUEST['msg1'] ) )
                            {
                                echo sprintf( '<br/><p class="error">%s</p>', $_REQUEST['msg1'] );
                            }
                        ?>
                    <div class="section-heading  animated slideInUp">
                        <h2 class="pb-1 mb-0">Get in Touch</h2>
                        <p class="mb-3">Let us know how to get back to you</p>
                    </div>

                    <div class="row contact-wrap">
                        <div class="status alert alert-success" style="display: none"></div>

                        <div class="col-sm-12 col-md-6 col-xs-12  animated slideInLeft">
                            <?php
                                $i=0;
                                if(isset($_SESSION["isLogin"]) ){
									if($_SESSION["isLogin"]=="yes"){
                                        $i=1;
                                        $mail=$_SESSION["email"];
                                        $user=$_SESSION["username"];
                                    }}?>
                            <div class="form-group">
                                <label class="required">Full Name</label>
                                <input type="text" name="full-name" class="form-control" required="required " <?php if($i){ ?>value="<?php echo $user; ?>" readonly="readonly" <?php } ?>placeholder="Enter your full name">
                            </div>
                            <div class="form-group">
                                <label class="required">Email</label>
                                <input type="email" name="email" class="form-control" required="required" placeholder="Enter your email address" <?php if($i){ ?>value="<?php echo $mail; ?>" readonly="readonly" <?php } ?>>
                            </div>
                            <div class="form-group">
                                <label class="required">Subject</label>
                                <input type="text" name="subject" class="form-control" required="required" placeholder="Enter your subject">
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6 col-xs-12  animated slideInRight">
                            <div class="form-group">
                                <label class="required">Comments / Questions</label>
                                <textarea name="comments" id="message" required="required" class="form-control" rows="11" placeholder="Comments..."></textarea>
                            </div>

                        </div>
                        <div class="col-md-12"> <button type="submit" class="small-btn" name="query_btn">Submit</button></div>

                    </div>
                </div>



            </form>
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

    <!-- Validation-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>


    <!-- Custome JS -->
    <script src="js/script.js"></script>


</body>

</html>
