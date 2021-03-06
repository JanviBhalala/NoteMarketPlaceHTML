<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Downloads</title>
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
                                    <input type="text" name="full-name" class=" search-me form-search" placeholder="Search" />
                                </span>
                                <button class="search-btn">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- table -->
                <section class="table-container-row10" id="my-downloads-table">
                    <div class="table-responsive wow slideInUp">
                        <table class="table  my-tables">
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
                                <tr>
                                    <td>1</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Software Department</td>
                                    <td>IT</td>
                                    <td>testing@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$50</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                    <td>Computer</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Himan Body</td>
                                    <td>Science</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                    <td>History</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Accounting</td>
                                    <td>Account</td>
                                    <td>testing@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$150</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Himan Body</td>
                                    <td>Science</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                    <td>History</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Accounting</td>
                                    <td>Account</td>
                                    <td>testing@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$150</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Software Department</td>
                                    <td>IT</td>
                                    <td>testing@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$50</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                    <td>Computer</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Himan Body</td>
                                    <td>Science</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Accounting</td>
                                    <td>Account</td>
                                    <td>testing@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$150</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Himan Body</td>
                                    <td>Science</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Software Department</td>
                                    <td>IT</td>
                                    <td>testing@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$50</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                    <td>History</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Software Department</td>
                                    <td>IT</td>
                                    <td>testing@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$50</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>17</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                    <td>Computer</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Himan Body</td>
                                    <td>Science</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Accounting</td>
                                    <td>Account</td>
                                    <td>testing@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$150</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                    <td>History</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Software Department</td>
                                    <td>IT</td>
                                    <td>testing@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$50</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                    <td>History</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                    <td>History</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Software Department</td>
                                    <td>IT</td>
                                    <td>testing@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$50</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>25</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                    <td>Computer</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Himan Body</td>
                                    <td>Science</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Accounting</td>
                                    <td>Account</td>
                                    <td>testing@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$150</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                    <td>History</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Software Department</td>
                                    <td>IT</td>
                                    <td>testing@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$50</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                    <td>History</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                    <td>History</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                    <td>History</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Software Department</td>
                                    <td>IT</td>
                                    <td>testing@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$50</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>34</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                    <td>Computer</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Himan Body</td>
                                    <td>Science</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Accounting</td>
                                    <td>Account</td>
                                    <td>testing@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$150</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                    <td>History</td>
                                    <td>testing@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Software Department</td>
                                    <td>IT</td>
                                    <td>testing@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$50</td>
                                    <td class="text-center">27 Nov 2020, 10:20:24</td>
                                    <td class="d-block"><a href="notes-detail.php"><img class="d-inline-block align-middle mr-3" src="img/icons/eye.png" alt="eye"></a>
                                        <div class="dropdown d-inline-block pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#review-modal">Add Review/Feedback</a></li>
                                                <li class="dropdown-item"><a href="#">Report as Inappropriate</a></li>
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

        <!--  Modal -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="modal fade align-self-center" id="review-modal">
                            <div class="modal-dialog">
                                <div class="modal-header float-right">

                                    <button type="button" class="btn-modal" data-dismiss="modal" aria-label="Close">
                                        <img src="img/icons/close.png" class="float-right">

                                    </button>
                                </div>
                                <div class="modal-body pr-0">

                                    <div class="content mt-3">
                                        <h3>Add Review</h3>
                                        <form>
                                            <div class="form-group">
                                                <div class="rate">
                                                    <input type="radio" id="star5" name="rate" value="5" />
                                                    <label for="star5" title="text" class="rate5">5 stars</label>
                                                    <input type="radio" id="star4" name="rate" value="4" />
                                                    <label for="star4" title="text" class="rate4">4 stars</label>
                                                    <input type="radio" id="star3" name="rate" value="3" />
                                                    <label for="star3" title="text" class="rate3">3 stars</label>
                                                    <input type="radio" id="star2" name="rate" value="2" />
                                                    <label for="star2" title="text" class="rate2">2 stars</label>
                                                    <input type="radio" id="star1" name="rate" value="1" />
                                                    <label for="star1" title="text" class="rate1">1 star</label>
                                                </div>

                                            </div>
                                            <div class="form-group clear">
                                                <div class="col-md-12">
                                                    <label class="required float-left w-100">Comments</label>
                                                    <textarea name="comments" id="message" required="required" class="form-control" rows="5" placeholder="Comments..."></textarea>
                                                </div>
                                                <button class="popup-btn ml-3">Submit</button>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

    <!-- Custome JS -->
    <script src="js/script.js"></script>

</body>

</html>
