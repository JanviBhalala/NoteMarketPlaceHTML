<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Change Password</title>
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
    <div id="change-password" class="custome-form">
        <div class="form-page  animated fadeInUp">
            <div class="wrapper-form">
                <div class="text-center white-logo">
                    <img src="img/pre-login/top-logo.png">
                </div>
                <div class="form">


                    <div class="form-header text-center">
                        <h3>Change Password</h3>
                        <p>Enter your new password to change your password</p>
                    </div>

                    <form class="form-field">


                        <div class="form-group">
                            <label class="col-md-6">Old Password</label>
                            <input type="password" class="form-control password-toggle" id="old-password" placeholder="Enter your old password">
                            <img src="img/pre-login/eye.png" class=" field-icon toggle-password">
                        </div>
                        <div class="form-group">
                            <label class="col-md-6">New Password</label>
                            <input type="password" class="form-control password-toggle" id="new-password" placeholder="Enter your new password">
                            <img src="img/pre-login/eye.png" class=" field-icon toggle-password">
                        </div>
                        <div class="form-group">
                            <label class="col-md-6">Confirm Password</label>
                            <input type="password" class="form-control password-toggle" id="confirm-password" placeholder="Enter your confirmed password">
                            <img src="img/pre-login/eye.png" class=" field-icon toggle-password">
                        </div>


                        <button>Submit</button>

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

    <!-- Custome JS -->
    <script src="js/script.js"></script>

</body>

</html>
