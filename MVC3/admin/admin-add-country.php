<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include "process/connection.php";
    ob_start();
	$c=0;
	if(!empty( $_REQUEST['id'] )){
		$id=$_GET['id'];
		$query="SELECT country_id, name, country_code, created_date, created_by, is_active FROM country WHERE country_id='$id' ";
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
	<title>Add Country</title>
	
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

	<!-- Add Country -->
	<section id="add-country">
		<div class="container">
			<form id="admin-add-country-form" class="contact-form" method="post" action="process/addCountry.php">


				<div class="table-heading animated fadeInDown pt-4">
					<h2>Add Country</h2>
					<?php
                        if( !empty( $_REQUEST['msg1'] ) )
                            {
                                echo sprintf( '<br/><p class="error">%s</p>', $_REQUEST['msg1'] );
                            }
                        ?>
				</div>
				<div class="row contact-wrap">
					<div class="status alert alert-success" style="display: none"></div>

					<div class="col-xs-12 col-sm-12 col-md-6 animated slideInLeft">
						<div class="form-group">
							<label class="required">Country Name</label>
							<input type="text" name="country-name" class="form-control" <?php if($c==1){
							?>value="<?php echo $r['name']; ?>" <?php } ?> required="required " placeholder="Enter country name">
						</div>
						<div class="form-group">
							<label class="required">Country Code</label>
							<input type="text" name="country-code" <?php if($c==1){
							?>value="<?php echo $r['country_code']; ?>" <?php } ?> class="form-control" required="required " placeholder="Enter country code">
						</div>
						<button class="small-btn" <?php if($c==1){ ?>value="<?php echo $r['country_id']; ?>" <?php }else{ ?>value="0" <?php } ?> name="add-country" type="submit">Submit</button>
					</div>

				</div>
			</form>
		</div>
	</section>
	<!-- Add Country Ends-->

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
