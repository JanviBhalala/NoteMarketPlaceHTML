<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include "process/connection.php";
    ob_start();
	$c=0;
	if(!empty( $_REQUEST['id'] )){
		$user=$_GET['id'];
		$query="SELECT users.user_id,users.fname,users.lname,users.email,users.phone FROM users WHERE role_id IN(2,3) AND user_id='$user'";
    	$result=mysqli_query($conn, $query);
		if($result && mysqli_num_rows($result)==1){
			$c=1;
			$r= mysqli_fetch_assoc($result);
		}
	}
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Administrator</title>
	
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.png">
    
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
			<form id="admin-add-administrator-form" class="contact-form" method="post" action="process/addAdmin.php">
				<div class="table-heading animated fadeInDown pt-4">
					<h2>Add Administrator</h2>
				</div>
				<?php
                        if( !empty( $_REQUEST['msg1'] ) )
                            {
                                echo sprintf( '<br/><p class="error">%s</p>', $_REQUEST['msg1'] );
                            }
                        ?>
				<div class="row contact-wrap">
					<div class="status alert alert-success" style="display: none"></div>

					<div class=" col-xs-12 col-sm-12 col-md-6 animated slideInLeft">
						<div class="form-group">
							<label class="required">First Name</label>
							<input type="text" name="fname" class="form-control" <?php if($c==1){
							?>value="<?php echo $r['fname']; ?>" <?php } ?> required="required " placeholder="Enter your first name">
						</div>
						<div class="form-group">
							<label class="required">Last Name</label>
							<input type="text" name="lname" class="form-control" <?php if($c==1){
							?>value="<?php echo $r['lname']; ?>" <?php } ?> required="required " placeholder="Enter your last name">
						</div>
						<div class="form-group">
							<label class="required">Email</label>
							<input type="email" name="email" class="form-control" <?php if($c==1){
							?>value="<?php echo $r['email']; ?>" <?php } ?> required="required" placeholder="Enter your email address">
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
								<input type="number" name="phone-number" <?php if($c==1){
							?>value="<?php echo $r['phone']; ?>" <?php } ?> class="form-phone-number col-md-auto" required="required" placeholder="Enter your email address">
							</div>
						</div>
						<button type="submit" class="small-btn" <?php if($c==1){ ?>value="<?php echo $r['user_id']; ?>" <?php }else{ ?>value="0" <?php } ?> name="add-admin">Submit</button>
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
	
		<!-- Validation-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>


	<!-- Custome JS -->
	<script src="js/script.js"></script>


</body>

</html>
