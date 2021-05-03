<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include "process/connection.php";
    ob_start();
    $user=$_SESSION["user_id"];
    
   $query="SELECT country_id, name, country_code, country.created_date, country.created_by,country.is_active,users.fname, users.lname FROM country JOIN users ON country.created_by=users.user_id WHERE country.is_active=1 ORDER BY country.created_date DESC";
    $result=mysqli_query($conn, $query);
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage Country</title>
	
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

	<!-- Manage Country -->
	<section id="manage-country">
		<div class="container">
			<!-- Heading -->
			<div class="table-heading animated fadeInDown pt-4">
				<h2>Manage Country</h2>
			</div>
			<!-- Search Tab -->
			<div class=" search-tab row ">
				<div class="col-md-auto  col-sm-12 animated slideInLeft">
					<a href="admin-add-country.php"> <button class="add-btn">Add Country</button></a>
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
			<section class="table-container-row5  manage-table" id="manage-country-table">
				<div class="table-responsive animated slideInUp">
					<?php if($result && mysqli_num_rows($result) != 0){ ?>
					<table id="dashbord1" class="table  my-tables paginated">
						<thead>
							<tr>
								<td class="align-middle">Sr No.</td>
								<td class="align-middle">Country Name</td>
								<td class="align-middle">Country Code</td>
								<td class="align-middle">Date Added</td>
								<td class="align-middle">Added By</td>
								<td class="align-middle">Active</td>
								<td class="align-middle">Actions</td>
							</tr>
						</thead>
						<tbody>
							<?php $i=1;  while($row=mysqli_fetch_assoc($result)){ ?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['country_code']; ?></td>
								<td><?php 
                                         $time=strtotime($row['created_date']);
                                          $t=date("d-m-Y, H:i:s", $time);                                   
                                          echo $t;  ?></td>
								<td><?php echo $row['fname'].' '. $row['lname']; ?></td>
								<td>
									<?php if($row['is_active']==1){
											  echo "Yes";
										  }else{
											 echo "No"; 
										  }?></td>
								<td><img src="img/icons/edit.png" onclick="window.location.href = 'admin-add-country.php?id=<?php echo $row['country_id']; ?>';" class="img-responsive pr-2"><img src="img/icons/delete.png" onclick="window.location.href = 'process/deleteCountry.php?id=<?php echo $row['country_id']; ?>';" class="img-responsive"></td>
							</tr>
							<?php $i++; }?>
						</tbody>
					</table>
					<?php } else{?>
					<h5 class="text-center mt-3">No Record Found</h5>
					<?php } ?>
				</div>
				<!--<div class="pagination-container  ">
                    <nav>
                        <ul class="pagination-wrapper col-md-12 text-center">
                        </ul>
                    </nav>
                </div>-->
			</section>

		</div>

	</section>
	<!-- Manage CountryEnds -->

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
