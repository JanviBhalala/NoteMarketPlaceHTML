<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/boostrap/bootstrap.min.css">

	<!-- DataTables CSS  -->
	<link rel="stylesheet" href="css/datatables/bootstrap.css">

	<!-- Animate CSS  -->
	<link rel="stylesheet" href="css/animate/animate.min.css">

	<!-- Custom CSS  -->
	<link rel="stylesheet" href="css/datatables/dataTables.bootstrap4.min.css">



	<!-- Custom CSS  -->
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<div id="Admin-dashboard">
		<!-- Header -->
		<?php  include "includes/header.php" ?>
		<!-- Header Ends -->

		<!-- Dashboard -->
		<section>
			<div class="container ">
				<h2 class="animated fadeInDown pt-4">
					Dashboard
				</h2>
				<div class="admin-dashboard-tabs">
					<div class="row">

						<div class="col-md-4 animated flipInY" onclick="window.location.href = 'notes-under-review.php';">
							<div class="item-container text-center">
								<h4>20</h4>
								<p>Number of Notes in Review for Publish</p>
							</div>

						</div>


						<div class="col-md-4 animated flipInY" onclick="window.location.href = 'downloaded-notes.php';">
							<div class="item-container  text-center">
								<h4>103</h4>
								<p>Number of New NotesDownloaded<br> (Last 7 days)</p>
							</div>

						</div>

						<div class="col-md-4 animated flipInY" onclick="window.location.href = 'members.php';">

							<div class="item-container text-center">
								<h4>223</h4>
								<p>Number of New Registrations(Last 7 Days)</p>
							</div>

						</div>
					</div>
				</div>
				<!-- Search Tab -->
				<div class=" search-tab row d-flex">
					<div class="col-md-auto  col-sm-12 animated slideInLeft align-self-center">
						<h4>Published Notes</h4>
					</div>
					<div class="col-md-auto col-sm-12 ml-auto  animated slideInRight align-self-center">
						<form>
							<div class="form-group d-flex">
								<span class=" search-me">
									<img class=" field-icon-search" src="img/icons/search-icon.png">
									<input type="text" name="searchBytxt" class="searchMeInTabletxt search-me form-search" placeholder="Search" />
								</span>
								<button class="search-btn">Search</button>
								<div class="styled-select1 form-select mb-0 mt-0 ml-2">
									<select name="MONTH(note.published_date)" id="seller" class=" searchMeInTable form-search mb-0 ">
										<option value="">Search Month</option>
										<option value="1">Jan</option>
										<option value="2">FEB</option>
										<option value="3">March</option>
										<option value="4">April</option>
										<option value="5">May</option>
										<option value="6">June</option>
										<option value="7">July</option>
										<option value="8">August</option>
										<option value="9">Sep</option>
										<option value="10">Oct</option>
										<option value="11">Nov</option>
										<option value="12">Dec</option>
									</select>
								</div>
							</div>

						</form>
					</div>
				</div>
				<!-- table -->
				<section class="table-container-row5" id="admin-dashboard-table">
					<div class="table-responsive  animated slideInUp load-item-here">
					</div>
				</section>

			</div>

		</section>
		<!-- Dashboard Ends -->

		<!--  Modal Remark-->
		<div id="modal1" role="dialog" aria-modal="true" aria-labelledby="add-remark-header" class="">
			<button class="close-btn1 modal_close_btn mt-0" aria-label="close" title="Close">x</button>
			<div id="remark-form-container">
				<h3 id="add-remark-header" class="pl-4">Unpublish Book</h3>
				<form id="remark-form">

					<div class="p-0">
						<!-- <label>Rating</label>-->


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
