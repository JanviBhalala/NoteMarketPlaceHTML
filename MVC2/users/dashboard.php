<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php include "process/connection.php";
   ob_start();
    $user=$_SESSION["user_id"];
    $query1="SELECT title,note.created_date,status.status,category.name,price,note.is_paid,note.status_id FROM note  JOIN category ON note.category_id=category.category_id JOIN status ON note.status_id = status.status_id WHERE user_id = '$user' AND note.status_id IN(1,2,3) ORDER BY note.created_date DESC";
   
    $query2="SELECT title,note.created_date,status.status,category.name,price,note.is_paid,note.status_id FROM note JOIN category ON note.category_id=category.category_id JOIN status ON note.status_id = status.status_id WHERE ( user_id = '$user' AND note.status_id = '3' ) ORDER BY note.created_date DESC";
    $result1=mysqli_query($conn, $query1);
    $result2=mysqli_query($conn, $query2);
    
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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

        <!-- Dashboard -->
        <section id="dashboard">
            <div class="container">

                <!-- Heading -->
                <div class=" search-tab row d-flex pt-5">
                    <div class="col-md-auto  col-sm-12  align-self-center animated fadeInLeft">
                        <h2>Dashboard</h2>
                    </div>
                    <div class="col-md-auto col-sm-12 ml-auto  animated fadeInRight">

                        <a href="add-notes.php">
                            <button class="add-btn">Add Notes</button>
                        </a>

                    </div>
                </div>

                <!-- Data Tab -->
                <div class=" data-range">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-xs-12  animated fadeInLeft">
                            <div class="row card1">
                                <div class="col-md-4 col-xs-4 col-sm-4 cell-1 card-body pt-4 ">
                                    <div class="">
                                        <img src="img/Search/my-earning.png" class="pl-4">
                                        <p class="card-text pl-4">My Earning</p>
                                    </div>
                                </div>
                                <div class="col-md-8  col-xs-8 col-sm-8 ">
                                    <div class="row">
                                        <div class="col-md-6  col-xs-6 col-sm-6 cell " onclick="window.location.href = 'my-sold-notes.php';">
                                            <div>
                                                <p class="card-text text-center">100</p>
                                                <p class="value-content text-center">Number of Notes Sold</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6  col-xs-6 col-sm-6 cell ">
                                            <p class="card-text text-center">$10,00,000</p>
                                            <p class="value-content text-center">Money Earned</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="card2 row">
                                <div class="col-md-4 ">
                                    <div class="card animated flipInY " onclick="window.location.href = 'my-downloads.php';">
                                        <div class="card-body">
                                            <p class="card-text text-center">32</p>
                                            <p class="value-content text-center">My Downloads</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 ">
                                    <div class="card" onclick="window.location.href = 'my-rejected-notes.php';">
                                        <div class="card-body animated flipInY">
                                            <p class="card-text text-center">12</p>
                                            <p class="value-content text-center">My Rejected Notes</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4   ">
                                    <div class="card animated flipInY" onclick="window.location.href = 'buyer-request.php';">
                                        <div class="card-body">
                                            <p class="card-text text-center">102</p>
                                            <p class="value-content text-center">Buyes Requests</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- table -->
                <section id="table-container1">

                    <!-- Search tab 1 -->
                    <div class=" search-tab row d-flex">
                        <div class="col-md-auto  col-sm-12  align-self-center animated fadeInLeft">
                            <h4>In Progress Notes</h4>
                        </div>
                        <div class="col-md-auto col-sm-12 ml-auto  animated fadeInRight">
                            <form action="dashboard.php" method="post">
                                <div class="form-group ">
                                    <span class=" search-me">
                                        <img class=" field-icon-search" src="img/icons/search-icon.png">
                                        <input type="text" name="search_progress" id="searchMeTable1" class=" search-me form-search" placeholder="Search" />
                                    </span>
                                    <button class="search-btn" name="btn-progress-note">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Table1 -->
                    <div class="table-responsive  animated fadeInUp">
                        <?php if($result1 && mysqli_num_rows($result1) != 0){ ?>
                        <table class="table  my-tables paginated1">
                            <thead>
                                <tr>
                                    <td class="align-middle">Added date</td>
                                    <td class="align-middle">Title</td>
                                    <td class="align-middle">Category</td>
                                    <td class="align-middle">Status</td>
                                    <td class="align-middle text-center">Actions</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row=mysqli_fetch_assoc($result1)){ ?>
                                <tr>
                                    <td><?php 
                                          $time=strtotime($row['created_date']);
                                          $t=date("d-m-Y", $time);                                   
                                          echo $t; 
                                        ?>
                                    </td>
                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <?php if($row['status_id'] == 1){ ?>
                                    <td>Draft</td>
                                    <td class="text-center"><a href="add-notes.php"><img src="img/icons/edit.png" class="pr-2"></a><img src="img/icons/delete.png"></td>
                                    <?php }
                                        if($row['status_id'] == 3){
                                    ?>
                                    <td>Submitted</td>
                                    <td class="text-center"><a href="notes-detail.php"><img src="img/pre-login/eye.png"></a></td>
                                    <?php } ?>
                                    <?php 
                                        if($row['status_id'] == 2){
                                    ?>
                                    <td>In Prograss</td>
                                    <td class="text-center"><a href="notes-detail.php"><img src="img/pre-login/eye.png"></a></td>
                                    <?php } ?>


                                </tr>
                                <?php }?>
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


                <section id="table-container2">
                    <!-- Search tab 1 -->
                    <div class=" search-tab row d-flex">
                        <div class="col-md-auto  col-sm-12  align-self-center  wow fadeInLeft">
                            <h4>Published Notes</h4>
                        </div>
                        <div class="col-md-auto col-sm-12 ml-auto  wow fadeInRight">
                            <form>
                                <div class="form-group ">
                                    <span class=" search-me">
                                        <img class=" field-icon-search" src="img/icons/search-icon.png">
                                        <input type="text" name="full-name" id="searchMeTable2" class=" search-me form-search" placeholder="Search" />
                                    </span>
                                    <button class="search-btn">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- table 2 -->
                    <div class="table-responsive  wow fadeInUp">
                        <?php if($result2 && mysqli_num_rows($result1) != 0){ ?>
                        <table id="dashbord1" class="table  my-tables paginated2">
                            <thead>
                                <tr>
                                    <td class="align-middle">Added date</td>
                                    <td class="align-middle">Title</td>
                                    <td class="align-middle">Category</td>
                                    <td class="align-middle">Sell Type</td>
                                    <td class="align-middle">Price</td>
                                    <td class="align-middle text-center">Actions</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row1=mysqli_fetch_assoc($result2)){ 
                                if($row1['status_id']==3){?>
                                <tr>
                                    <td><?php 
                                         $time=strtotime($row1['created_date']);
                                          $t=date("d-m-Y", $time);                                   
                                          echo $t;  ?>
                                    </td>
                                    <td><?php echo $row1['title']; ?></td>
                                    <td><?php echo $row1['name']; ?></td>
                                    <?php if($row1['is_paid'] == 1){ ?>
                                    <td><?php echo "Paid"?></td>
                                    <?php }
                                        if($row1['is_paid'] == 0){
                                    ?>
                                    <td><?php echo "Free"?></td>
                                    <?php } ?>
                                    <td>$<?php echo $row1['price']; ?></td>
                                    <td class="text-center"><a href="notes-detail.php"><img src="img/pre-login/eye.png"></a></td>

                                </tr>
                                <?php }} ?>
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
