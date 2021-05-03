<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    
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

<body style="zoom:60%;">
    <div id="signup" class="custome-form">
        <div class="form-page animated fadeInUp">
            <div class="wrapper-form">
                <div class="text-center white-logo">
                    <img src="img/pre-login/top-logo.png">
                </div>
                <div class="form">

                    <div class="form-header text-center">
                        <h3>Create an Account</h3>
                        <p>Enter your details to signup.</p>
                        <?php
                        if( !empty( $_REQUEST['msg1'] ) )
                            {
                                echo sprintf( '<p class="txt_green" style="color:forestgreen;">%s</p>', $_REQUEST['msg1'] );
                            }
                        ?>
                        <?php
                        if( !empty( $_REQUEST['msg'] ) )
                            {
                                echo sprintf( '<p class="error" style="color:#ff0000;">%s</p>', $_REQUEST['msg'] );
                            }
                        ?>
                    </div>

                    <form class="form-field" method="post" action="process/signUpBack.php" name="signup_form">

                        <div class="form-group mb-4">
                            <label class="required">First Name</label>
                            <input type="text" class="form-control mb-0" id="f-name" name="fname" placeholder="Enter your first name">
                        </div>

                        <div class="form-group mb-4">
                            <label class="required">Last Name</label>
                            <input type="text" class="form-control mb-0" id="l-name" name="lname" placeholder="Enter your last name">
                        </div>

                        <div class="form-group mb-4">
                            <label class="required">Email</label>
                            <input type="email" name="email" class="form-control mb-1 error" id="email" aria-describedby="emailHelp" placeholder="enter your email address">
                        </div>

                        <div class="form-group mb-4">
                            <label class="">Password</label>
                            <input type="password" name="pass" class="form-control password-toggle mb-1" id="password" placeholder="Enter your password">
                            <img src="img/pre-login/eye.png" class=" field-icon toggle-password pt-4">
                        </div>

                        <div class="form-group mb-4">
                            <label class="">Confirm Password</label>
                            <input type="password" name="confirm_pass" class="form-control password-toggle mb-1" id="confirm-password" placeholder="Re-enter your password">
                            <img src="img/pre-login/eye.png" class=" field-icon toggle-password pt-4">
                        </div>
                        <button type="submit" name="sign-up-btn">Sign Up</button>

                    </form>

                    <p class="message text-center">Already have an account? <a href="login.php">Login</a></p>

                </div>
            </div>
        </div>
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
    <script src="js/script.js" ></script>

</body>

</html>
