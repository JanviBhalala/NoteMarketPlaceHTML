<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>
    
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
    <div id="forgot-password" class="custome-form">
        <div class="form-page animated fadeInUp">
            <div class="wrapper-form">
                <div class="text-center white-logo">
                    <img src="img/pre-login/top-logo.png">
                </div>
                <div class="form">

                    <div class="form-header text-center">
                        <h3>Forgot Password?</h3>
                        <p>Enter your email to reset your password</p>
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
                        <!-- <p><//?php echo $msg; ?></p>-->
                    </div>

                    <form class="form-field" action="process/forgotPassBack.php" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="email" name="mail" placeholder="Enter your email addresss" required>
                        </div>
                        <button type="submit" name="forgot-btn">Submit</button>
                    </form>

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
    <script src="js/script.js"></script>

</body>

</html>
