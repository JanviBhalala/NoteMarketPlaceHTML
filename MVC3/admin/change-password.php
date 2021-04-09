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
						<?php
                        if( !empty( $_REQUEST['msg'] ) )
                            {
                                echo sprintf( '<p class="txt_green">%s</p>', $_REQUEST['msg'] );
                            }
                        ?>
					</div>

					<form class="form-field" method="post" action="process/changePassword.php">


						<div class="form-group">
							<label>Old Password</label>
							<input type="password" class="form-control password-toggle" name="old-password" placeholder="Enter your old password">
							<img src="img/pre-login/eye.png" class=" field-icon toggle-password">
						</div>
						<div class="form-group">
							<label>New Password</label>
							<input type="password" class="form-control password-toggle" name="new-password" placeholder="Enter your new password">
							<img src="img/pre-login/eye.png" class=" field-icon toggle-password">
						</div>
						<div class="form-group">
							<label>Confirm Password</label>
							<input type="password" class="form-control password-toggle" name="confirm-password" placeholder="Enter your confirmed password">
							<img src="img/pre-login/eye.png" class=" field-icon toggle-password">
						</div>


						<button type="submit" name="change-btn">Submit</button>

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
