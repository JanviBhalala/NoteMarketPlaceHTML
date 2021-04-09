<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include "process/connection.php";
    ob_start();
	$c=0;
	if(!empty( $_REQUEST['id'] )){
		$id=$_GET['id'];
		$query="SELECT type_id, type, description, created_date, created_by, is_active FROM type WHERE type_id='$id'";
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

	<!-- Add Type -->
	<section id="add-type">
		<div class="container">
			<form id="admin-add-type-form" class="contact-form" method="post" action="process/addType.php">

				<div class="table-heading animated fadeInDown pt-4">
					<h2>Add Type</h2>
					<?php
                        if( !empty( $_REQUEST['msg'] ) )
                            {
                                echo sprintf( '<br/><p>%s</p>', $_REQUEST['msg'] );
                            }
                        ?>
				</div>
				<div class="row contact-wrap">
					<div class="status alert alert-success" style="display: none"></div>
					<div class="col-xs-12 col-sm-12 col-md-6 animated slideInLeft">
						<div class="form-group">
							<label class="required">Type Name</label>
							<input type="text" name="type-name" <?php if($c==1){
							?>value="<?php echo $r['type']; ?>" <?php } ?> class="form-control" required="required " placeholder="Enter type name">
						</div>

						<div class="form-group">
							<label class="required">Description</label>
							<textarea name="comments" <?php if($c==1){
							?>value="<?php echo $r['description']; ?>" <?php } ?> id="type-description" required="required" class="form-control" rows="8" placeholder="Enter your description"></textarea>
						</div>
						<button class="small-btn" <?php if($c==1){ ?>value="<?php echo $r['type_id']; ?>" <?php }else{ ?>value="0" <?php } ?> name="add-type" value="1">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</section>
	<!-- Add Type Ends-->


	<!-- Footer -->
	<?php  include "includes/footer.php" ?>
	<!-- Footer Ends -->

	<!-- JQuery -->
	<script src="js/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="js/bootstrap/bootstrap.min.js"></script>

	<!-- Custome JS -->
	<script src="js/script.js"></script>


</body>

</html>
