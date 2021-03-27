<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<?php 
    include "process/connection.php";
    ob_start();
    $user=$_SESSION["user_id"];
    
    $query="SELECT note_id,users.email,category.name,note_title,is_paid,purchase_price,is_attachment_downloaded,download_time FROM order_note JOIN users ON order_note.user_id = users.user_id JOIN category ON order_note.note_category = category.category_id WHERE seller_id = '$user' ORDER BY download_time DESC";
    $result=mysqli_query($conn, $query);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Sold Notes</title>
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
    <style>


    </style>
    <div class="we-wrapper">

        <!-- Header -->
        <?php include "includes/header.php"; ?>
        <!-- Header Ends -->

        <!-- My Sold Notes -->
        <section id="my-sold-notes">
            <div class="container">

                <!-- Search Tab -->
                <div class=" search-tab row d-flex pt-5">
                    <div class="col-md-auto  col-sm-12 align-self-center  animated fadeInLeft">
                        <h2>My sold Notes</h2>
                    </div>
                    <div class="col-md-auto col-sm-12 ml-auto   ">
                        <form>
                            <div class="form-group ">
                                <span class=" search-me">
                                    <img class=" field-icon-search" src="img/icons/search-icon.png">
                                    <input type="text" name="full-name" id="" class=" search-me form-search tbl-searchbox searchMeTable" placeholder="Search" />
                                </span>
                                <button class="search-btn table_serach_btn">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- table -->
                <section class="table-container-row10" id="my-sold-notes-table">
                    <div class="table-responsive  animated slideInUp">
                        <table class="table  my-tables paginated" id="myTable1">
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
                                    <?php if($row['is_paid'] == 1){ ?>
                                    <td><?php echo "Paid"?></td>
                                    <?php }
                                        if($row['is_paid'] == 0){
                                    ?>
                                    <td><?php echo "Free"?></td>
                                    <?php } ?>
                                    <td>$<?php echo $row['purchase_price']; ?></td>
                                    <td class="text-center">
                                        <?php 
                                         $time=strtotime($row['download_time']);
                                          $t=date("d M Y, H:i:s", $time);                                   
                                          echo $t;  ?>
                                    </td>
                                    <td class="d-block"><a href="notes-detail.php?note_id=<?php echo $row['note_id'];?>"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="process/download.php?note_id=<?php echo $row['note_id']; ?>">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>

                                </tr>

                                <?php $i++; }?>
                            </tbody>
                        </table>
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

        <!-- Footer -->
        <?php include "includes/footer.php"; ?>
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

    <!-- Validation-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

    <!-- Custome JS -->
    <script src="js/script.js"></script>

    <!-- Custome JS -->
    <script src="js/search.js"></script>


</body>

</html>
