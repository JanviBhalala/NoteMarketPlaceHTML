<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Published Notes</title>
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
    <section id="published-notes">
        <div class="container">
            <!-- Heading -->
            <div class="table-heading animated fadeInDown pt-4">
                <h2>Published Notes</h2>
            </div>
            <label>Seller</label>
            <!-- Search Tab -->
            <div class=" search-tab row ">
                <div class="col-md-auto  col-sm-12 animated slideInLeft">
                    <form>
                        <div class="form-group">

                            <div class="styled-select1 form-select">
                                <select name="gender" id="seller" class="form-control">
                                    <option value="female">Khyati</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </form>
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
            <section class="table-container-row5" id="published-table">
                <div class="table-responsive animated slideInUp">
                    <table class="table  my-tables">
                        <thead class="small-head">
                            <tr>
                                <td class="align-middle">Sr No.</td>
                                <td class="align-middle">Note Title</td>
                                <td class="align-middle">Category</td>
                                <td class="align-middle">Sell Type</td>
                                <td class="align-middle">Price</td>
                                <td class="align-middle">Seller</td>
                                <td class="align-middle">Date Added</td>
                                <td class="align-middle">Approved By</td>
                                <td class="align-middle text-center">Number of downloads</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Software Engineer</td>
                                <td>IT</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Raj Sheth</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Neha Patil</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Raj Sheth</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Raj Sheth</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Nita Patel</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Neha Patil</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Raj Sheth</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Raj Sheth</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Monika Patel</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">40</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                <td>History</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Nita Patel</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Raj Sheth</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Raj Sheth</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">40</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Monika Patel</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">56</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                <td>History</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Nita Patel</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Software Engineer</td>
                                <td>IT</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Raj Sheth</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Monika Patel</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                <td>History</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Nita Patel</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">56</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Raj Sheth</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">45</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Raj Sheth</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Monika Patel</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Software Engineer</td>
                                <td>IT</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Raj Sheth</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Monika Patel</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                <td>History</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Nita Patel</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="pull-right"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Raj Sheth</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="#">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
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
