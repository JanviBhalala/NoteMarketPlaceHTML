<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Members</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/boostrap/bootstrap.min.css">

    <!-- datatable CSS  -->
    <link rel="stylesheet" href="css/datatables/bootstrap.css">

    <!-- DatTable CSS  -->
    <link rel="stylesheet" href="css/datatables/dataTables.bootstrap4.min.css">

    <!-- Animate CSS  -->
    <link rel="stylesheet" href="css/animate/animate.min.css">


    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- Header -->
    <?php  include "includes/header.php" ?>
    <!-- Header Ends -->
    
    <!-- Member -->
    <section id="members">
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
                                <input type="text" name="full-name" class=" search-me form-search" placeholder="Search" />
                            </span>
                            <button class="search-btn">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- table -->
            <section class="table-container-row5" id="member-table">
                <div class="table-responsive animated slideInUp">
                    <table class="table  my-tables ">
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
                            <tr>
                                <td>1</td>
                                <td>khyati</td>
                                <td>Patel</td>
                                <td>khyatipatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>19</td>
                                <td>10</td>
                                <td>22</td>
                                <td>$220</td>
                                <td class="text-center">$117</td>
                                <td>
                                    <div class="dropdown pull-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nehal</td>
                                <td>Patel</td>
                                <td>nehalpatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>17</td>
                                <td>11</td>
                                <td>29</td>
                                <td>$200</td>
                                <td class="text-center">$168</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Raj</td>
                                <td>Patel</td>
                                <td>rajpatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>19</td>
                                <td>10</td>
                                <td>24</td>
                                <td>$160</td>
                                <td class="text-center">$108</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>khyati</td>
                                <td>Patel</td>
                                <td>khyatipatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>19</td>
                                <td>10</td>
                                <td>22</td>
                                <td>$220</td>
                                <td class="text-center">$117</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nehal</td>
                                <td>Patel</td>
                                <td>nehalpatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>17</td>
                                <td>11</td>
                                <td>29</td>
                                <td>$200</td>
                                <td class="text-center">$168</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Raj</td>
                                <td>Patel</td>
                                <td>rajpatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>19</td>
                                <td>10</td>
                                <td>24</td>
                                <td>$160</td>
                                <td class="text-center">$108</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>khyati</td>
                                <td>Patel</td>
                                <td>khyatipatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>19</td>
                                <td>10</td>
                                <td>22</td>
                                <td>$220</td>
                                <td class="text-center">$117</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nehal</td>
                                <td>Patel</td>
                                <td>nehalpatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>17</td>
                                <td>11</td>
                                <td>29</td>
                                <td>$200</td>
                                <td class="text-center">$168</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Raj</td>
                                <td>Patel</td>
                                <td>rajpatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>19</td>
                                <td>10</td>
                                <td>24</td>
                                <td>$160</td>
                                <td class="text-center">$108</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>khyati</td>
                                <td>Patel</td>
                                <td>khyatipatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>19</td>
                                <td>10</td>
                                <td>22</td>
                                <td>$220</td>
                                <td class="text-center">$117</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nehal</td>
                                <td>Patel</td>
                                <td>nehalpatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>17</td>
                                <td>11</td>
                                <td>29</td>
                                <td>$200</td>
                                <td class="text-center">$168</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Raj</td>
                                <td>Patel</td>
                                <td>rajpatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>19</td>
                                <td>10</td>
                                <td>24</td>
                                <td>$160</td>
                                <td class="text-center">$108</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>khyati</td>
                                <td>Patel</td>
                                <td>khyatipatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>19</td>
                                <td>10</td>
                                <td>22</td>
                                <td>$220</td>
                                <td class="text-center">$117</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nehal</td>
                                <td>Patel</td>
                                <td>nehalpatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>17</td>
                                <td>11</td>
                                <td>29</td>
                                <td>$200</td>
                                <td class="text-center">$168</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Raj</td>
                                <td>Patel</td>
                                <td>rajpatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>19</td>
                                <td>10</td>
                                <td>24</td>
                                <td>$160</td>
                                <td class="text-center">$108</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>khyati</td>
                                <td>Patel</td>
                                <td>khyatipatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>19</td>
                                <td>10</td>
                                <td>22</td>
                                <td>$220</td>
                                <td class="text-center">$117</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nehal</td>
                                <td>Patel</td>
                                <td>nehalpatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>17</td>
                                <td>11</td>
                                <td>29</td>
                                <td>$200</td>
                                <td class="text-center">$168</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Raj</td>
                                <td>Patel</td>
                                <td>rajpatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>19</td>
                                <td>10</td>
                                <td>24</td>
                                <td>$160</td>
                                <td class="text-center">$108</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>khyati</td>
                                <td>Patel</td>
                                <td>khyatipatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>19</td>
                                <td>10</td>
                                <td>22</td>
                                <td>$220</td>
                                <td class="text-center">$117</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nehal</td>
                                <td>Patel</td>
                                <td>nehalpatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>17</td>
                                <td>11</td>
                                <td>29</td>
                                <td>$200</td>
                                <td class="text-center">$168</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Raj</td>
                                <td>Patel</td>
                                <td>rajpatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>19</td>
                                <td>10</td>
                                <td>24</td>
                                <td>$160</td>
                                <td class="text-center">$108</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>khyati</td>
                                <td>Patel</td>
                                <td>khyatipatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>19</td>
                                <td>10</td>
                                <td>22</td>
                                <td>$220</td>
                                <td class="text-center">$117</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nehal</td>
                                <td>Patel</td>
                                <td>nehalpatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>17</td>
                                <td>11</td>
                                <td>29</td>
                                <td>$200</td>
                                <td class="text-center">$168</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Raj</td>
                                <td>Patel</td>
                                <td>rajpatel@gmail.com</td>
                                <td>09-10-2020, 10:24</td>
                                <td>19</td>
                                <td>10</td>
                                <td>24</td>
                                <td>$160</td>
                                <td class="text-center">$108</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="member-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Deactivate</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
    <!-- Member Ends -->
    
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
