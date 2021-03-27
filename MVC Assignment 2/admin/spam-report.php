<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spam Report</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/boostrap/bootstrap.min.css">

    <!-- DataTable CSS  -->
    <link rel="stylesheet" href="css/datatables/bootstrap.css">
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

    <!-- Spam Report -->
    <section id="spam-report-section">
        <div class="container">
            <!-- Search Tab -->
            <div class=" search-tab row pt-4">
                <div class="col-md-auto  col-sm-12 animated slideInLeft">
                    <h2>Spam Report</h2>
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
            <section class="table-container-row5" id="spam-report">
                <div class="table-responsive animated slideInUp">
                    <table class="table  my-tables">
                        <thead>
                            <tr>
                                <td class="align-middle">Sr No.</td>
                                <td class="align-middle">Reported By</td>
                                <td class="align-middle">Note Title</td>
                                <td class="align-middle">Category</td>
                                <td class="align-middle">Date Edited</td>
                                <td class="align-middle">Remark</td>
                                <td class="align-middle">Actions</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Khyati Patel</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Software Department</td>
                                <td>IT</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Rahul Shah</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sumal Trivedi</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Raj Malhotra</td>
                                <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                <td>History</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Niya Patel</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Sumal Trivedi</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>Niya Patel</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Raj Malhotra</td>
                                <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                <td>History</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Khyati Patel</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Software Department</td>
                                <td>IT</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Rahul Shah</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Sumal Trivedi</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Raj Malhotra</td>
                                <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                <td>History</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Niya Patel</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Sumal Trivedi</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Khyati Patel</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Software Department</td>
                                <td>IT</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>16</td>
                                <td>Niya Patel</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Sumal Trivedi</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Khyati Patel</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Software Department</td>
                                <td>IT</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Raj Malhotra</td>
                                <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                <td>History</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Niya Patel</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td class="text-center"><img src="img/icons/delete.png"></td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
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
    <!-- Spam Report Ends -->
    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="">
                        <span class="float-left">Verson : 1.1.24</span><span class="float-right">Copyright &copy;Tatvasoft All rights Reserved </span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
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
