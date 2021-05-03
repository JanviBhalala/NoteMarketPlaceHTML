<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include "process/connection.php";
    ob_start();
	$c=0;
	$d=0;
		$query="SELECT COUNT(*) FROM system_configuration";
		$result=mysqli_query($conn, $query);
		if($result && mysqli_num_rows($result)==1){
			$c=1;
			$r= mysqli_fetch_assoc($result);
		}
		$query="SELECT item_key,value FROM system_configuration WHERE id=1;";
		$result=mysqli_query($conn, $query);
		if($result && mysqli_num_rows($result)==1){
			$d=1;
			$r= mysqli_fetch_assoc($result);
			$email=$r['value'];
		}
	
	
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage System Configuration</title>
	
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


	<!-- Manage System Configuration -->
	<section id="manage-system-configuration">
		<div class="container">
			<form id="manage-system-configuration-form" class="contact-form" method="post" action="process/sysConfig.php" enctype="multipart/form-data">


				<div class="table-heading animated slideInDown pt-4 ">
					<h2>Manage System Configuration</h2>
					<?php
                        if( !empty( $_REQUEST['msg'] ) )
                            {
                                echo sprintf( '<br/><p>%s</p>', $_REQUEST['msg'] );
                            }
                        ?>
                        <?php
                        if( !empty( $_REQUEST['msg1'] ) )
                            {
                                echo sprintf( '<br/><p class="error">%s</p>', $_REQUEST['msg1'] );
                            }
                        ?>
				</div>
				<div class="row contact-wrap">
					<div class="status alert alert-success" style="display: none"></div>

					<div class="col-md-7 col-sm-12 col-xs-12 animated slideInLeft">
						<div class="form-group">
							<label class="required">Support Email Address</label>
							<input type="text" name="email" class="form-control" <?php if($c==1 && $d==1){ ?>value="<?php echo $email; ?>" <?php } ?> required="required " placeholder="Enter your first name">
						</div>
						<div class="form-group">
							<label class="required">Support Phone Number</label>
							<input type="text" name="support-phone-number" class="form-control" required="required " placeholder="Enter phone number">
						</div>
						<div class="form-group">
							<label class="required">Email Address(es)(for various events system will send otification to these users)</label>
							<input type="email" name="suppoet-email" class="form-control" required="required" placeholder="Enter email address">
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

							<input type="file" name="default-note" class="form-control input-img" accept="image/png, image/jpeg">
							<label class="file-label">Upload a picture</label>
						</div>
						<div class="form-group">
							<label>Default profile picture(if seller do not upload)</label>

							<input type="file" name="default-profile" class="form-control input-img" accept="image/png, image/jpeg">

							<label class="file-label">Upload a picture</label>
						</div>

						<button class="small-btn" type="submit" <?php if($c==1){ ?>value="1" <?php }else{ ?>value="0" <?php } ?> name="submit-sys-config">Submit</button>
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
