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
	<title>Notes Under Review</title>
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
	<div id="notes-under-review">
		<!-- Header -->
		<?php  include "includes/header.php" ?>
		<!-- Header Ends -->

		<!-- Notes Under Review -->
		<section>
			<div class="container">
				<!-- Heading -->
				<div class="table-heading animated fadeInDown">
					<h2>Notes Under Review</h2>
				</div>
				<label>Seller</label>
				<!-- Search Tab -->
				<div class=" search-tab row ">
					<div class="col-md-auto  col-sm-12 animated slideInLeft">
						<form>
							<div class="form-group">

								<div class="styled-select1 form-select">
									<select name="gender" id="seller" class="form-control searchMeInTable">
										<option value="">Select Seller</option>
										<?php 
                                            $query="SELECT DISTINCT fname FROM users JOIN note ON users.user_id=note.user_id WHERE note.status_id=4";
                                            $result=mysqli_query($conn, $query);
                                            while($row=mysqli_fetch_assoc($result)){?>
										<option value="<?php echo $row['fname'];?>"><?php echo $row['fname'];?></option><?php
                                            }
                                        ?>
									</select>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-auto col-sm-12 ml-auto animated slideInRight">
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
				<section class="table-container-row5" id="note-under-review-table">
					<div class="table-responsive animated slideInUp load-item-here">
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

		<div id="approveNote">

			<!--  Modal Approve-->
			<div id="modal1" role="dialog" aria-modal="true" aria-labelledby="add-remark-header" class="">
				<button class="close-btn1 modal_close_btn mt-0" aria-label="close" title="Close">x</button>
				<div id="remark-form-container">
					<h3 id="add-remark-header" class="pl-4 headingHere">Activate Member</h3>

					<h5 id="add-review-header">Please press yes to continue.</h5>
					<br />
					<form id="remark-form">

						<div class="p-0">
							<!-- <label>Rating</label>-->


							<!--<input type="hidden"  name="rateMe" value=""  class="starRate" >-->
							<input type="hidden" name="order_id" value="" class="noteRemarkId">

						</div>

						<div class="btn-small">
							<button type="submit" id="submit-remark-btn" class="small-btn mb-0">Yes</button>
							<button id="cencle-remark-btn" class="small-btn mb-0">Cancel</button>
						</div>
					</form>
				</div>
			</div>
			<div class="modal-overlay"></div>
		</div>
		<div id="rejectNote">

			<!--  Modal Reject-->
			<div id="modal1" role="dialog" aria-modal="true" aria-labelledby="add-remark-header" class="">
				<button class="close-btn1 modal_close_btn mt-0" aria-label="close" title="Close">x</button>
				<div id="remark-form-container">
					<h3 id="add-remark-header" class="pl-4">Unpublish Book</h3>
					<form id="remark-form">

						<div class="p-0">

							<!--<input type="hidden"  name="rateMe" value=""  class="starRate" >-->
							<input type="hidden" name="order_id" value="" class="noteRemarkId">

						</div>

						<div class="mt-3">
							<label for="remarkComments" class="required">Remark</label>
							<textarea name="remarks" id="remarkComments" cols="20" rows="5" required class="form-control"></textarea>
						</div>
						<div class="btn-small">
							<button type="submit" id="submit-remark-btn" class="small-btn mb-0">Unpublish</button>
							<button id="cencle-remark-btn" class="small-btn mb-0">Cancel</button>
						</div>
					</form>
				</div>
			</div>
			<div class="modal-overlay"></div>
		</div>

		<!-- Footer -->
		<?php  include "includes/footer.php" ?>
		<!-- Footer Ends -->
	</div>

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

	<!-- Custome JS -->
	<script src="js/script.js"></script>

</body>

</html>
