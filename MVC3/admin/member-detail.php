<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include "process/connection.php";
    ob_start();
    $user=$_SESSION["user_id"];
	$user_id=34;
    if( !empty( $_REQUEST['user_id'] ) )
    {
        $user_id=$_REQUEST['user_id'];
    }
    
   $query="SELECT users.user_id,users.fname,users.lname,users.email,users.is_active,dob,country_code,mobile,profile_pic,address1,address2,city,state,zip_code,country,university,college FROM users JOIN user_profile ON users.user_id=user_profile.user_id WHERE role_id =1 AND users.user_id='$user_id'";
    $result=mysqli_query($conn, $query);
	if($result){
		$row=mysqli_fetch_assoc($result);
		if(!empty($row['profile_pic'])){
	 		$img= substr($row['profile_pic'], 3);
		}
		else{
			$img="../user/3profile.jpg";
		}
	}
	$q="SELECT note.title,note.note_id ,status.status ,category.name,note.published_date,note.created_date FROM note JOIN category ON note.category_id=category.category_id JOIN status ON note.status_id=status.status_id WHERE user_id='$user_id'";
	$r=mysqli_query($conn, $q);
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Member Detail</title>
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
	<!-- Member Detail -->

	<section id="member-detail">
		<div class="container">
			<div class="table-heading animated fadeInDown pt-4">
				<h2>
					Member Detail
				</h2>
			</div>

			<div class="member-detail-tabs">
				<?php if($result && mysqli_num_rows($result)){ ?>
				<div class="row">
					<div class="col-md-auto col-sm-12 profile animated slideInLeft" id="member-img">
						<img src="<?php echo $img; ?>">
					</div>
					<div class="col-md-5 col-sm-12 col-xs-12 column1 animated slideInRight" class="member-info">
						<div class="row ">

							<div class="col-md-auto col-sm-auto col-col-xs-auto ">

								<table>
									<tr>
										<td class=" member-name">First Name:</td>
										<td class="member-value"><?php echo $row['fname']; ?></td>
									</tr>
									<tr>
										<td class=" member-name">Last Name:</td>
										<td class="member-value"><?php echo $row['lname']; ?></td>
									</tr>
									<tr>
										<td class=" member-name">Email:</td>
										<td class="member-value"><?php echo $row['email']; ?></td>
									</tr>
									<tr>
										<td class=" member-name">DOB:</td>
										<td class="member-value">19-12-1987<?php echo $row['dob']; ?></td>
									</tr>
									<tr>
										<td class=" member-name">Phone Number:</td>
										<td class="member-value"><?php echo $row['mobile']; ?></td>
									</tr>
									<tr>
										<td class=" member-name">College/University:</td>
										<td class="member-value"><?php echo $row['college']; ?></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-sm-12 col-xs-12 animated slideInRight">
						<div class="row ">


							<div class="col-md-auto col-sm-auto col-col-xs-auto">

								<table>
									<tr>
										<td class=" member-name">Address1:</td>
										<td class="member-value pl-1"><?php echo $row['address1']; ?></td>
									</tr>
									<tr>
										<td class=" member-name">Address2:</td>
										<td class="member-value pl-1"><?php echo $row['address2']; ?></td>
									</tr>
									<tr>
										<td class=" member-name">City:</td>
										<td class="member-value pl-1"><?php echo $row['city']; ?></td>
									</tr>
									<tr>
										<td class=" member-name">State:</td>
										<td class="member-value pl-1"><?php echo $row['state']; ?></td>
									</tr>
									<tr>
										<td class=" member-name">Country:</td>
										<td class="member-value pl-1"><?php echo $row['country']; ?></td>
									</tr>
									<tr>
										<td class=" member-name">Zip Code:</td>
										<td class="member-value pl-1"><?php echo $row['zip_code']; ?></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<hr>
					</div>
				</div>
				<?php }else{
	echo "Profile is not updated.";
} ?>
				<div class=" search-tab d-flex">
					<div class="col-md-4 col-sm-12 align-self-center animated slideInUp">
						<h4 class="">Notes</h4>

						<input type="text" name="full-name" class="searchMeTable search-me form-search d-none" placeholder="Search" />
					</div>
				</div>
				<!-- table -->
				<section class="table-container-row5" id="member-detail-table">
					<div class="table-responsive animated slideInUp">
						<?php if($r && mysqli_num_rows($r) != 0){ ?>
						<table class="table  my-tables paginated">
							<thead class="small-head">
								<tr>
									<td class="align-middle">Sr No.</td>
									<td class="align-middle">Note Title</td>
									<td class="align-middle">Category</td>
									<td class="align-middle ">Status</td>
									<td class="align-middle text-center">Downloaded Notes</td>
									<td class="align-middle text-center">Total Earnings</td>
									<td class="align-middle">Date Added</td>
									<td class="align-middle text-center">Published Date</td>
									<td></td>
								</tr>
							</thead>
							<tbody>
								<?php $i=1;  while($row=mysqli_fetch_assoc($r)){  
								$id=$row['note_id'];
                               $time=strtotime($row['published_date']);
                				$t=date("d-m-Y, H:i:s", $time);
								$time=strtotime($row['created_date']);
                				$t1=date("d-m-Y, H:i:s", $time);
								$earning="SELECT SUM(purchase_price) AS e FROM `order_note` WHERE is_allowed_to_download=1 AND order_note.seller_id='$user_id' AND note_id='$id'";
								$earning_r=mysqli_query($conn, $earning);
								$e=0;
								if($earning_r){
									$er=mysqli_fetch_assoc($earning_r);
									if(!empty($er['e']))
									$e=$er['e'];
								}
								$download="SELECT COUNT(note_id) AS d FROM `order_note` WHERE is_attachment_downloaded=1 AND order_note.seller_id='$user_id' AND note_id='$id'";
								$earning_r=mysqli_query($conn, $download);
								$d=0;
								if($earning_r){
									$er=mysqli_fetch_assoc($earning_r);
									if(!empty($er['d']))
									$d=$er['d'];
								}
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td onclick="window.location.href = 'notes-detail.php?id=<?php echo $row['note_id']; ?>';"><?php echo $row['title']; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['status']; ?></td>
									<td class="text-center"><?php echo $d; ?></td>
									<td class="text-center">$<?php echo $e; ?></td>
									<td><?php echo $t1; ?></td>
									<td><?php echo $t; ?></td>
									<td>
										<div class="dropdown pull-right align-middle">
											<a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
											<ul class="dropdown-menu dropdown-menu-left pull-right">
												<li class="dropdown-item"><a href="process/download.php?note_id=<?php echo $row['note_id']; ?>">Download Notes</a></li>
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
					<div class="pagination-container">
						<nav>
							<ul class="pagination-wrapper col-md-12 text-center">
							</ul>
						</nav>
					</div>
				</section>

			</div>
		</div>

	</section>
	<!-- Member Detail Ends -->

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

	<!-- Custome JS -->
	<script src="js/script.js"></script>

</body>

</html>
