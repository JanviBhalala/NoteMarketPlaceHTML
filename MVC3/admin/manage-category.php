<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include "process/connection.php";
    ob_start();
    $user=$_SESSION["user_id"];
    
   $query="SELECT category_id, name, description, category.created_date, category.created_by, category.is_active,users.fname,users.lname FROM category JOIN users ON category.created_by=users.user_id ORDER BY category.created_date DESC";
    $result=mysqli_query($conn, $query);
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage Category</title>
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
	<style>
		/*.table-container-row5 div.pager {
    text-align: center;
    margin: 1em 0;
}

.table-container-row5 div.pager span {
    display: inline-block;
    width: 1.8em;
    height: 1.8em;
    line-height: 1.8;
    text-align: center;
    cursor: pointer;
    background: #fff;

    margin-right: 0.5em;
}

.table-container-row5 div.pager span.active {
    background: #6255a5;
    color: #fff;
    border-radius: 50%;
}*/

	</style>
	<!-- Header -->
	<?php  include "includes/header.php" ?>
	<!-- Header Ends -->
	<!-- Manage Category -->
	<section id="manage-category">
		<div class="container">
			<!-- Heading-->
			<div class="table-heading  animated fadeInDown pt-4">
				<h2>Manage Category</h2>
			</div>
			<!-- Search Tab -->
			<div class=" search-tab row  ">
				<div class="col-md-auto  col-sm-12 animated slideInLeft">
					<a href="admin-add-category.php"> <button class="add-btn">Add Category</button></a>
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
			<section class="table-container-row5  manage-table" id="manage-category-table">
				<div class="table-responsive animated slideInUp">
					<?php if($result && mysqli_num_rows($result) != 0){ ?>
					<table id="dashbord1" class="table  my-tables paginated">
						<thead>
							<tr>
								<td class="align-middle">Sr No.</td>
								<td class="align-middle">Category</td>
								<td class="align-middle">Description</td>
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
								<td><?php echo $row['description']; ?></td>
								<td> <?php 
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
								<td><img src="img/icons/edit.png" onclick="window.location.href = 'admin-add-category.php?id=<?php echo $row['category_id']; ?>';" class="img-responsive pr-2"><img src="img/icons/delete.png" onclick="window.location.href = 'process/deleteCategory.php?id=<?php echo $row['category_id']; ?>';" class="img-responsive"></td>
							</tr>
							<?php $i++; }?>
						</tbody>
					</table>
					<?php } else{?>
					<h5 class="text-center mt-3">No Record Found</h5>
					<?php } ?>
				</div>
				<!-- <div class="pagination-container  ">
                    <nav>
                        <ul class="pagination-wrapper col-md-12 text-center">
                        </ul>
                    </nav>
                </div>-->
			</section>

		</div>

	</section>
	<!-- Manage Category Ends-->

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
	<!--
	
	<script>
	/*=============================================================
|   |   |   |   |   |   Search in table
==============================================================*/
 $(document).ready(function() {
        paginationSearching(".table-container-row5",".searchMeTable",".table-container-row5 table.paginated",5);
    
     
          
            function paginationSearching(container,search,table,count) {
               
                $(search).on("keyup", function() {
                    $(table).trigger('repaginate');
                    
                })
                

                $(table).each(function() {
                    
                    var currentPage = 0;
                    var numPerPage = count;
                    var $table = $(this);
                    var $pager = $('<div class="pager"></div>');
                    var $previous = $('<span class="previous"><</spnan>');
                    var $next = $('<span class="next">></spnan>');
                    

                    $pager.insertAfter($table).find('span.page-number:first').addClass('active');

                    $table.bind('repaginate', function() {
                        $table.find('tbody tr').hide();

                        $filteredRows = $table.find('tbody tr').filter(function(i, tr) {
                            return $(search).val() != "" ? $(tr).find("td").get().map(function(td) {
                                return $(td).text();
                            }).filter(function(td) {
                                return td.indexOf($(search).val()) != -1;
                            }).length > 0 : true;
                        });

                        $filteredRows.slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();

                        var numRows = $filteredRows.length;
                        var numPages = Math.ceil(numRows / numPerPage);

                        $pager.find('.page-number, .previous, .next').remove();
                        for (var page = 0; page < numPages; page++) {
                            var $newPage = $('<span class="page-number"></span>').text(page + 1).bind('click', {
                                newPage: page
                            }, function(event) {
                                currentPage = event.data['newPage'];
                                $table.trigger('repaginate');
                            })
                            if (page == currentPage) {
                                $newPage.addClass('clickable active');
                            } else {
                                $newPage.addClass('clickable');
                            }
                            $newPage.appendTo($pager)
                        }
                        
                        var i=container + " span.page-number:first";
                        var a=container + " span.page-number:last"
                        $previous.insertBefore(i);
                        $next.insertAfter(a);

                        $next.click(function(e) {
                            $previous.addClass('clickable');
                            $pager.find('.active').next('.page-number.clickable').click();
                        });
                        $previous.click(function(e) {
                            $next.addClass('clickable');
                            $pager.find('.active').prev('.page-number.clickable').click();
                        });

                        $next.addClass('clickable');
                        $previous.addClass('clickable');

                        setTimeout(function() {
                            var $active = $pager.find('.page-number.active');
                            if ($active.next('.page-number.clickable').length === 0) {
                                $next.removeClass('clickable');
                            } else if ($active.prev('.page-number.clickable').length === 0) {
                                $previous.removeClass('clickable');
                            }
                        });
                    });
                    $table.trigger('repaginate');
                });
            }


        });
</script>-->

</body>

</html>
