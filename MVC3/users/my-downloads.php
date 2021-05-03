<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include "process/connection.php";
    ob_start();
    $user=$_SESSION["user_id"];
    
    $query="SELECT order_id,note_id,users.email,category.name,note_title,is_paid,purchase_price,is_allowed_to_download,is_attachment_downloaded,download_time FROM order_note JOIN users ON order_note.user_id = users.user_id JOIN category ON order_note.note_category = category.category_id WHERE order_note.user_id = '$user' AND order_note.is_active=1 ORDER BY order_note.created_date DESC";
    $result=mysqli_query($conn, $query);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Downloads</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.png">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/boostrap/bootstrap.min.css">

    <!-- DataTable CSS  -->
    <link rel="stylesheet" href="css/datatables/bootstrap.css">

    <!-- Animation CSS  -->
    <link rel="stylesheet" href="css/animate/animate.min.css">

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/datatables/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="we-wrapper">

        <!-- Header -->
        <?php include "includes/header.php"; ?>
        <!-- Header Ends -->

        <!-- My Downloads -->
        <section id="my-downloads">
            <div class="container">

                <!-- Search Tab-->
                <div class=" search-tab row d-flex pt-5">
                    <div class="col-md-auto  col-sm-12 align-self-center animated fadeInLeft">
                        <h2>My Downloads</h2>
                    </div>
                    <div class="col-md-auto col-sm-12 ml-auto  animated fadeInRight ">
                        <form>
                            <div class="form-group ">
                                <span class=" search-me">
                                    <img class=" field-icon-search" src="img/icons/search-icon.png">
                                    <input type="text" name="full-name" class=" search-me form-search searchMeTable" placeholder="Search" />
                                </span>
                                <button class="search-btn">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- table -->
                <section class="table-container-row10" id="my-downloads-table">
                    <div class="table-responsive wow slideInUp">
                        <?php if($result && mysqli_num_rows($result) != 0){ ?>
                        <table class="table  my-tables paginated">
                            <thead>
                                <tr>
                                    <td class="align-middle text-center">Sr No.</td>
                                    <td class="align-middle">Note Title</td>
                                    <td class="align-middle">Category</td>
                                    <td class="align-middle">Buyer</td>
                                    <td class="align-middle">Sell Type</td>
                                    <td class="align-middle">Price</td>
                                    <td class="align-middle text-center">Downloaded Date/Time</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;  while($row=mysqli_fetch_assoc($result)){ ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td onclick="window.location.href = 'notes-detail.php?note_id=<?php echo $row['note_id'];?>';"><?php echo $row['note_title']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td>
                                    <?php if($row['is_paid']){
										echo "Paid";
									}else{
										echo "Free";
									} ?>
									</td>
                                    <td>$<?php echo $row['purchase_price']; ?></td>
                                    <td class="text-center">
                                        <?php 
                                         $time=strtotime($row['download_time']);
                                          $t=date("d M Y, H:i:s", $time);                                   
                                          echo $t;  ?>
                                    </td>
                                    <td class="d-block"><a href="notes-detail.php?note_id=<?php echo $row['note_id'];?>"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a <?php if($row['is_allowed_to_download']){ ?> href="process/download.php?note_id=<?php echo $row['note_id']; ?>"<?php } else{ ?> href="" <?php } ?>>Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" id="<?php echo $row['order_id']; ?>" class="review-btn-add">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#" id="<?php echo $row['order_id']; ?>" class="remark-btn-add">Report as Inappropriate</a></li>
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
                    <div class="pagination-container  ">
                        <nav>
                            <ul class="pagination-wrapper col-md-12 text-center">
                            </ul>
                        </nav>
                    </div>
                </section>

            </div>

        </section>

        <!--  Modal Review-->
        <div id="modal" role="dialog" aria-modal="true" aria-labelledby="add-review-header" class="">
            <button class="close-btn modal_close_btn mt-0" aria-label="close" title="Close">x</button>
            <div id="review-form-container">
                <h3 id="add-review-header" class="pl-4">Add Review</h3>
                <form id="review-form" action="process/addReview.php" method="post">

                    <div class="p-0">
                        <!-- <label>Rating</label>-->
                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5" class="starRate">
                            <label for="star5" title="5 stars">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" class="starRate">
                            <label for="star4" title="4 stars">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" class="starRate">
                            <label for="star3" title="3 stars">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" class="starRate">
                            <label for="star2" title="2 stars">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" class="starRate">
                            <label for="star1" title="1 star">1 star</label>
                            <input type="hidden" name="rateMe" value="" class="starRate" id="rate1">
                            <input type="hidden" name="order_id" value="" class="noteReviewId">
                        </div>
                    </div>

                    <div class="mt-3">
                        <label for="reviewComments">Comments</label>
                        <textarea name="reviewComments" id="reviewComments" cols="20" rows="5" required class="form-control"></textarea>
                    </div>
                    <div class="btn-small">
                        <button type="submit" id="submit-review-btn" class="small-btn mb-0">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-overlay"></div>

        <!--  Modal Remark-->
        <div id="modal1" role="dialog" aria-modal="true" aria-labelledby="add-remark-header" class="">
            <button class="close-btn1 modal_close_btn mt-0" aria-label="close" title="Close">x</button>
            <div id="remark-form-container">
                <h3 id="add-remark-header" class="pl-4">Add Remark</h3>
                <form id="remark-form" action="process/addRemark.php" method="post">

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
                        <button type="submit" id="submit-remark-btn" class="small-btn mb-0">Report an issue</button>
                        <button id="submit-remark-btn" class="small-btn mb-0">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-overlay"></div>


        <!-- Footer -->
        <?php include "includes/footer.php"; ?>
        <!-- Footer Ends -->

    </div>

    <!-- JQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>


    <!-- JQuery -->
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>

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

    <!-- Custome JS -->
    <script src="js/search.js"></script>

    <!-- Custome JS -->
    <script src="js/modal.js"></script>

</body>

</html>
