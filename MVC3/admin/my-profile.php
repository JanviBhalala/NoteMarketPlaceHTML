<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include "process/connection.php";
    ob_start();
	$c=0;
		$user=$_SESSION["user_id"];
		$query="SELECT users.user_id,users.fname,users.lname,users.email,users.phone_code,users.phone,user_profile.email2,user_profile.profile_pic FROM users JOIN user_profile ON users.user_id=user_profile.user_id WHERE role_id IN(2,3) AND user_profile.user_id='$user'";
    	$result=mysqli_query($conn, $query);
		if($result && mysqli_num_rows($result)==1){
			$c=1;
			$r= mysqli_fetch_assoc($result);
		}
	
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Profile</title>
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

	<!-- My Profile -->
	<section id="my-profile">
		<div class="container">
			<form id="my-profile-form" class="contact-form" method="post" action="process/addProfile.php" enctype="multipart/form-data">

				<div class="table-heading animated fadeInDown pt-4">
					<h2>My Profile</h2>
				</div>
				<?php
                        if( !empty( $_REQUEST['msg'] ) )
                            {
                                echo sprintf( '<br/><p>%s</p>', $_REQUEST['msg'] );
                            }
                        ?>
				<div class="row contact-wrap">
					<div class="status alert alert-success" style="display: none"></div>

					<div class="col-md-6 col-sm-12 col-xs-12 animated slideInLeft">
						<div class="form-group">
							<label class="required">First Name</label>
							<input type="text" name="fname" <?php if($c==1){
							?>value="<?php echo $r['fname']; ?>" <?php } ?> class="form-control" required="required " placeholder="Enter your first name">
						</div>
						<div class="form-group">
							<label class="required">Last Name</label>
							<input type="text" name="lname" <?php if($c==1){
							?>value="<?php echo $r['lname']; ?>" <?php } ?> class="form-control" required="required " placeholder="Enter your last name">
						</div>
						<div class="form-group">
							<label class="required">Email</label>
							<input type="email" name="email" <?php if($c==1){
							?>value="<?php echo $r['email']; ?>" <?php } ?> class="form-control" required="required" placeholder="Enter your email address">
						</div>
						<div class="form-group">
							<label class="required">Seconary Email</label>
							<input type="email" name="email2" <?php if($c==1){
							?>value="<?php echo $r['email2']; ?>" <?php } ?> class="form-control" required="required" placeholder="Enter your email address">
						</div>
						<div class="form-group">
							<label class="required">Phone Number</label>
							<div class="row">
								<div class="styled-select form-control phone">
									<select name="phone" id="phone-code" class="form-control ">
										<?php if($c==1){
							?><option value=" <?php echo $r['email2']; ?>"><?php echo $r['phone_code'];  ?></option><?php } ?>
										<option value="+91">+91</option>
										<option value="+90">+90</option>
										<option value="other">Other</option>
									</select>
								</div>
								<input type="number" name="phone-number" <?php if($c==1){
							?>value="<?php echo $r['phone']; ?>" <?php } ?> class="form-phone-number col-md-auto" required="required" placeholder="Enter your email address">
							</div>
						</div>
						<div class="form-group">
							<label class="required">Profile Picture</label>
							<input type="file" name="profile_pic" class="form-control input-img">
							<label class="file-label">Upload a picture</label>
						</div>
						<button class="small-btn" name="add_profile" type="submit" value="1">Submit</button>
					</div>

				</div>
			</form>
		</div>
	</section>
	<!-- My Profile Ends-->

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
