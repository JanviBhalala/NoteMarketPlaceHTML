<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include "process/connection.php";
    ob_start();
    $user=$_SESSION["user_id"];
    
   $query="SELECT user_id,fname ,lname,email,created_date FROM users WHERE is_email_verfied=1 AND role_id=1 AND is_active=1 ORDER BY users.created_date DESC";
    $result=mysqli_query($conn, $query);
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Members</title>
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
	<div id="members">
		<!-- Header -->
		<?php  include "includes/header.php"; ?>
		<!-- Header Ends -->

		<!-- Member -->
		<section>
			<div class="container">
				<!-- Search Tab -->
				<div class=" search-tab row pt-4">
					<div class="col-md-auto  col-sm-12 animated slideInLeft">
						<h2>Members</h2>
					</div>
					<div class="col-md-auto col-sm-12 ml-auto animated slideInRight">
						<form>
							<div class="form-group ">
								<span class=" search-me">
									<img class=" field-icon-search" src="img/icons/search-icon.png">
									<input type="text" name="full-name" class="searchMeTable search-me form-search" placeholder="Search" />
								</span>
								<button class="search-btn">Search</button>
							</div>
						</form>
					</div>
				</div>
				<!-- table -->
				<section class="table-container-row5" id="member-table">
					<div class="table-responsive animated slideInUp">
						<?php if($result && mysqli_num_rows($result) != 0){ ?>
						<table class="table  my-tables paginated">
							<thead class="extra-small-head">

								<tr>
									<td class="align-middle text-center">Sr No.</td>
									<td class="align-middle">First Name</td>
									<td class="align-middle">Last Name</td>
									<td class="align-middle">Email</td>
									<td class="align-middle">Goining Date</td>
									<td class="align-middle text-center">Under Review Notes</td>
									<td class="align-middle text-center">Published Notes</td>
									<td class="align-middle text-center">Downloaded Notes</td>
									<td class="align-middle text-center">Total Expenses</td>
									<td class="align-middle text-center">Total Earnings</td>
									<td></td>

								</tr>
							</thead>
							<tbody>
								<?php $i=1;  while($row=mysqli_fetch_assoc($result)){ 
								$user_id=$row['user_id'];
	
								$review="SELECT COUNT(note.status_id) AS reviews FROM note WHERE note.status_id=2 AND user_id='$user_id'";
								$published="SELECT COUNT(note.status_id) AS published FROM note WHERE note.status_id=3 AND user_id='$user_id'";
								$selling="SELECT SUM(order_note.purchase_price) AS earning FROM order_note WHERE seller_id='$user_id'";
								$expense="SELECT SUM(order_note.purchase_price) AS expanse FROM order_note WHERE user_id='$user_id'";
								
								
								$result_published=mysqli_query($conn, $published);
								$result_selling=mysqli_query($conn, $selling);
								$result_expense=mysqli_query($conn, $expense);
								
								if(mysqli_query($conn, $review)){
									$result_review=mysqli_query($conn, $review);
									$review=mysqli_fetch_assoc($result_review);
								}
								if(mysqli_query($conn, $selling)){
									$result_selling=mysqli_query($conn, $selling);
									$selling=mysqli_fetch_assoc($result_selling);
									if(empty($selling['earning'])){
										$selling['earning']=0;
									}
								}
								if(mysqli_query($conn, $published)){
									$result_published=mysqli_query($conn, $published);
									$published=mysqli_fetch_assoc($result_published);
								}
								if(mysqli_query($conn, $expense)){
									$result_expense=mysqli_query($conn, $expense);
									$expense=mysqli_fetch_assoc($result_expense);
									if(empty($expense['expanse'])){
										$expense['expanse']=0;
									}
								}
							?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['fname']; ?></td>
									<td><?php echo $row['lname']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td>
										<?php 
                                         $time=strtotime($row['created_date']);
                                          $t=date("d-m-Y, H:i:s", $time);                                   
                                          echo $t;  ?></td>

									<td onclick="window.location.href = 'notes-under-review.php?id=<?php echo $row['user_id']; ?>';"><?php echo $review['reviews']; ?></td>
									<td onclick="window.location.href = 'published-notes.php?id=<?php echo $row['user_id']; ?>';"><?php echo $published['published']; ?></td>
									<td onclick="window.location.href = 'downloaded-notes.php?id=<?php echo $row['user_id']; ?>';"><?php echo $selling['earning']; ?></td>
									<td>$<?php echo $selling['earning']; ?></td>
									<td class="text-center">$<?php echo $expense['expanse']; ?></td>
									<td>
										<div class="dropdown pull-right align-middle">
											<a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
											<ul class="dropdown-menu dropdown-menu-left pull-right">
												<li class="dropdown-item"><a href="member-detail.php?user_id=<?php echo $user_id; ?>">View More Details</a></li>
												<li class="dropdown-item deactivate_member" id="<?php echo $row['user_id']; ?>"><a href="#">Deactivate</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<?php $i++; }?>

							</tbody>
						</table>
						<?php } else{?>
						<h5 class="text-center mt-3">No Record Found</h5>
						<?php } ?>
					</div>
				</section>

			</div>

		</section>
		<!-- Member Ends -->


		<!--  Modal Remark-->
		<div id="modal1" role="dialog" aria-modal="true" aria-labelledby="add-remark-header" class="">
			<button class="close-btn1 modal_close_btn mt-0" aria-label="close" title="Close">x</button>
			<div id="remark-form-container">
				<h3 id="add-remark-header" class="pl-4">Deactivate Member</h3>

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

		<!-- Footer -->
		<?php  include "includes/footer.php" ?>
		<!-- Footer Ends -->
	</div>

	<!-- JQuery -->
	<script src="js/jquery.min.js"></script>

	<!-- Popper -->
	<script src="js/popper.min.js"></script>


	<!-- Bootstrap JS -->
	<script src="js/bootstrap/bootstrap.min.js"></script>


	<!-- Wow JS -->
	<script src="js/Wow/wow.min.js"></script>

	<!-- Custome JS -->
	<script src="js/script.js"></script>

</body>

</html>
