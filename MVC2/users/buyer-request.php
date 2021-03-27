<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php include "process/connection.php";
   ob_start();
    $user=$_SESSION["user_id"];
    $query1="SELECT note.title,category.name,user_profile.email2,user_profile.country_code,user_profile.mobile,note.is_paid,note.price,order_note.download_time FROM `order_note` JOIN note ON order_note.note_id =note.note_id JOIN user_profile ON order_note.user_id=user_profile.user_id JOIN category ON order_note.note_category=category.category_id WHERE seller_id = '$user' ORDER BY order_note.download_time DESC";
    $result1=mysqli_query($conn, $query1);
    
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buyer Request</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/boostrap/bootstrap.min.css">

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/datatables/bootstrap.css">


    <!-- Animation CSS  -->
    <link rel="stylesheet" href="css/animate/animate.min.css">

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/datatables/dataTables.bootstrap4.min.css">




    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="we-wrapper">

        <!-- Header -->
        <?php include "includes/header.php"; ?>
        <!-- Header Ends -->

        <!-- Buyer Request -->
        <section id="buyer-request">
            <div class="container">

                <div class=" search-tab row d-flex pt-5">
                    <div class="col-md-auto  col-sm-12 align-self-center animated fadeInLeft">
                        <h2>Buyer Request</h2>
                    </div>
                    <div class="col-md-auto col-sm-12 ml-auto  animated fadeInRight ">
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

                <section class="table-container-row10 animated slideInUp " id="buyer-request-table">

                    <div class="table-responsive">
                        <?php if($result1 && mysqli_num_rows($result1) != 0){   ?>
                        <table class="table  my-tables myTable paginated" id="myTable">
                            <thead class="small-head">
                                <tr>
                                    <td class="align-middle text-center pr-0">Sr No.</td>
                                    <td class="align-middle pr-0">Note Title</td>
                                    <td class="align-middle pr-0">Category</td>
                                    <td class="align-middle pr-0">Buyer</td>
                                    <td class="align-middle pr-0">Phone No.</td>
                                    <td class="align-middle pr-0">Sell Type</td>
                                    <td class="align-middle pr-0">Price</td>
                                    <td class="align-middle text-center pr-0">Downloaded Date/Time</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; while($row=mysqli_fetch_assoc($result1)){ ?>
                                <tr>
                                    <td class="pr-0"><?php echo $i; ?></td>
                                    <td class="pr-0" onclick="window.location.href = 'notes-detail.php';"><?php echo $row['title']; ?></td>
                                    <td class="pr-0"><?php echo $row['name']; ?></td>
                                    <td class="pr-0"><?php echo $row['email2']; ?></td>
                                    <td class="pr-0"><?php echo $row['country_code'];echo $row['mobile']; ?></td>
                                    <?php if($row['is_paid'] == 1){ ?>
                                    <td class="pr-0"><?php echo "Paid"; ?></td>
                                    <?php }
                                        if($row['is_paid'] == 0){
                                    ?>
                                    <td class="pr-0"><?php echo "Free"; ?></td>
                                    <?php } ?>
                                    <td class="pr-0">$<?php echo $row['price']; ?></td>
                                    <td class="text-center pr-0">

                                        <?php 
                                         $time=strtotime($row['download_time']);
                                          $t=date("Y M d, H:i:s", $time);                                   
                                          echo $t;  ?>
                                    </td>
                                    <td class="d-block"><img class="d-inline-block align-middle mr-0" src="img/pre-login/eye.png" alt="eye">
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="eye"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Yes- I Received</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++; } ?>


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
        <!-- Buyer Request Ends-->
    </div>


    <!-- Footer -->
    <?php include "includes/footer.php"; ?>
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

    <!-- Custome JS -->
    <script src="js/search.js"></script>



</body>

</html>
