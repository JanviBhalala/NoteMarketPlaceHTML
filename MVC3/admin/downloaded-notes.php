<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include "process/connection.php";
    ob_start();
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Downloaded Notes</title>
	
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.png">
    
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/boostrap/bootstrap.min.css">

	<!-- DataTable CSS  -->
	<link rel="stylesheet" href="css/datatables/bootstrap.css">

	<!-- Animate CSS  -->
	<link rel="stylesheet" href="css/animate/animate.min.css">

	<!-- Custom CSS  -->
	<link rel="stylesheet" href="css/datatables/dataTables.bootstrap4.min.css">



	<!-- Custom CSS  -->
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<!-- Header -->
	<?php  include "includes/header.php" ?>
	<!-- Header Ends -->

	<!-- Downloaded Notes -->
	<section id="downloaded-notes">
		<div class="container">
			<!-- Heading-->

			<div class="table-heading  animated fadeInDown">
				<h2>Downloaded Notes</h2>
			</div>
			<!-- Search Tab -->
			<div class=" search-tab row ">
				<div class="col-md-auto  col-sm-12  animated slideInLeft">
					<form>
						<table>
							<tr class="form-group ">
								<td>
									<label class="mr-0">Note</label><br>
									<select name="note_title" id="user-gender" class="form-search searchMeInTable">
										<option value="">Select note</option>
										<?php 
                                            $query="SELECT DISTINCT note_title FROM order_note WHERE is_allowed_to_download=1 AND is_attachment_downloaded=1 AND order_note.is_active=1";
                                            $result=mysqli_query($conn, $query);
                                            while($row=mysqli_fetch_assoc($result)){?>
										<option value="<?php echo $row['note_title'];?>"><?php echo $row['note_title'];?></option><?php
                                            }
                                        ?>
									</select>
								</td>
								<td style="width: 133px;">
									<label class="mr-0">Seller</label><br>

									<select name="u.fname" id="user-gender" class="form-search searchMeInTable">
										<option value="">Select Seller</option>
										<?php 
                                            $query="SELECT DISTINCT users.fname FROM order_note JOIN users ON order_note.seller_id=users.user_id WHERE is_allowed_to_download=1 AND is_attachment_downloaded=1 AND order_note.is_active=1";
                                            $result=mysqli_query($conn, $query);
                                            while($row=mysqli_fetch_assoc($result)){?>
										<option value="<?php echo $row['fname'];?>"><?php echo $row['fname'];?></option><?php
                                            }
                                        ?>
									</select>
								</td>
								<td>
									<label class="mr-0">Buyer</label><br>

									<select name="users.fname" id="user-gender" class="form-search searchMeInTable">
										<option value="">Select Buyer</option>
										<?php 
                                            $query="SELECT DISTINCT users.fname FROM order_note JOIN users ON order_note.user_id=users.user_id WHERE is_allowed_to_download=1 AND is_attachment_downloaded=1 AND order_note.is_active=1";
                                            $result=mysqli_query($conn, $query);
                                            while($row=mysqli_fetch_assoc($result)){?>
										<option value="<?php echo $row['fname'];?>"><?php echo $row['fname'];?></option><?php
                                            }
                                        ?>
									</select>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="col-md-auto col-sm-12 ml-auto  animated slideInRight mt-4">
					<form>
						<div class="form-group ">
							<span class=" search-me">
								<img class=" field-icon-search" src="img/icons/search-icon.png">
								<input type="text" name="searchBytxt" class="searchMeInTabletxt search-me form-search" placeholder="Search" />
							</span>
							<button class="search-btn">Search</button>
						</div>
					</form>
				</div>
			</div>
			<!-- table -->
			<section class="table-container-row5" id="downloaded-note-table">
				<div class="table-responsive  animated slideInUp  load-item-here">
				</div>
				<div class="pagination-container  ">
					<nav>
						<ul class="pagination-wrapper col-md-12 text-center">
						</ul>
					</nav>
				</div>
			</section>

		</div>

	</section>
	<!-- Downloaded Notes End -->

	<!-- Footer -->
	<?php  include "includes/footer.php" ?>
	<!-- Footer Ends -->

	<!-- JQuery -->
	<script src="js/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="js/bootstrap/bootstrap.min.js"></script>

	<script src="js/tables/jquery-dataTables.min.js"></script>
	<!-- Bootstraptables JS -->
	<script src="js/tables/dataTables-bootstrap.min.js"></script>

	<!-- Wow JS -->
	<script src="js/Wow/wow.min.js"></script>
		<!-- Validation-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>


	<!-- Custome JS -->
	<script src="js/script.js"></script>

</body>

</html>
