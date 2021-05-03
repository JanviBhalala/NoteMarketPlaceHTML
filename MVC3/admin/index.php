<!DOCTYPE html>
<html lang="en">
<?php include "../users/process/loginBack.php"; ?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	
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
	
	<div id="login_page" class="custome-form">
		<div class="form-page animated fadeInUp">
			<div class="wrapper-form">
				<div class="align-middle">

					<div class="text-center white-logo ">
						<img src="img/pre-login/top-logo.png">
					</div>
					<div class="form ">


						<div class="form-header text-center">
							<h3>Login</h3>
							<p>Enter your email address and password to login.</p>


						</div>


						<form class="form-field" id="login-form" action="index.php" method="post" name="login_form">
							<div class="form-group mb-4">
								<label>Email</label>
								<input type="email" name="email" class="form-control mb-0" id="email" aria-describedby="emailHelp" placeholder="Enter your email address">
								<!-- <div id="email_error">hi</div>-->
							</div>

							<div class="form-group mb-4">
								<label class="col-md-6" class="label-pass">Password</label><label class=" col-md-6 text-right label-forgot-pass" onclick="window.location.href = 'forgot-password.php';">Forgot Password?</label>
								<input type="password" name="pass" class="form-control password-toggle  mb-1" id="password" placeholder="Enter your password">
								<img src="img/pre-login/eye.png" class=" field-icon toggle-password pt-4">
								<div id="password_error"></div>
							</div>

							<div class=" form-group row ">
								<input type="checkbox" value="lsRememberMe" id="rememberMe" class="col-md-1 text-left  "> <label class="col-md-9" id="label-rememberMe" for="rememberMe">Remember me</label>

							</div>
							<button type="submit" class="mt-4" name="login-btn" id="login_submit">login</button>
							<p class="message text-center">Don't have an account? <a href="signup.php">Sign Up</a></p>
							<?php if($msg != ""){
                        ?>
							<p class="dispay-error text-center mt-3"><?php echo $msg; ?></p>
							<?php
                        }
                        ?>
						</form>

					</div>
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
