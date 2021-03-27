<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include "process/connection.php";
    ob_start();
    $user=$_SESSION["user_id"];
    
    $query="SELECT note_id,title,admin_remark,category.name FROM `note` JOIN category ON note.category_id=category.category_id WHERE note.status_id =4 AND note.user_id='$user' ORDER BY title DESC";
    $result=mysqli_query($conn, $query);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Rejected Notes</title>
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

        <!-- My Requested Notes -->
        <section id="my-requested-notes">
            <div class="container">

                <!-- Search Tab -->
                <div class=" search-tab row d-flex pt-5">
                    <div class="col-md-auto  col-sm-12 align-self-center animated fadeInLeft">
                        <h2>My Rejected Notes</h2>
                    </div>
                    <div class="col-md-auto col-sm-12 ml-auto   animated fadeInRight ">
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
                <section class="table-container-row10" id="my-requested-notes-table">
                    <div class="table-responsive  animated slideInUp">
                        <?php if($result && mysqli_num_rows($result) != 0){ ?>
                        <table class="table  my-tables paginated">
                            <thead>
                                <tr>
                                    <td class="align-middle">Sr No.</td>
                                    <td class="align-middle">Note Title</td>
                                    <td class="align-middle">Category</td>
                                    <td class="align-middle">Remark</td>
                                    <td class="align-middle">Clone</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;  while($row=mysqli_fetch_assoc($result)){ ?>

                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td onclick="window.location.href = 'notes-detail.php?note_id=<?php echo $row['note_id'];?>';"><?php echo $row['title']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['admin_remark']; ?></td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
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
                        <?php } else{?>
                        <h5 class="text-center mt-3">No Record Found</h5>
                        <?php } ?>
                    </div>
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
