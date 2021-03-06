<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes Under Review</title>
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

    <!-- Notes Under Review -->
    <section id="notes-under-review">
        <div class="container">
            <!-- Heading -->
            <div class="table-heading animated fadeInDown">
                <h2>Notes Under Review</h2>
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
            <section class="table-container-row5" id="note-under-review-table">
                <div class="table-responsive animated slideInUp">
                    <table class="table  my-tables">
                        <thead class="small-head">
                            <tr>
                                <td class="align-middle">Sr No.</td>
                                <td class="align-middle">Note Title</td>
                                <td class="align-middle">Category</td>
                                <td class="align-middle">Seller</td>
                                <td class="align-middle">Date Added</td>
                                <td class="align-middle">Status</td>
                                <td class="align-middle text-center">Action</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Software Engineer</td>
                                <td>IT</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>InReview</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Submitted for Review</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>InReview</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>InReview</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>InReview</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Submitted for Review</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>InReview</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>InReview</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Submitted for Review</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                <td>History</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>InReview</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>InReview</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>InReview</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Submitted for Review</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                <td>History</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>InReview</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Software Engineer</td>
                                <td>IT</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>InReview</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Submitted for Review</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                <td>History</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>InReview</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>InReview</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>InReview</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Submitted for Review</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Software Engineer</td>
                                <td>IT</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>InReview</td>
                                <td class="text-center row">72</td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>Submitted for Review</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                <td>History</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>InReview</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td>Khyati Patel <img src="img/pre-login/eye.png" class="float-right" onclick="window.location.href = 'member-detail.php';"></td>
                                <td>09-10-2020, 10:40</td>
                                <td>InReview</td>
                                <td class="text-center row"><button class="btn-green btn-table"> Approved</button><button class="btn-red btn-table" data-toggle="modal" data-target="#ramark-modal"> Reject</button><button class="btn-table btn-gray">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
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

    <!-- Modal -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex">
                    <div class="modal fade align-self-center pr-0" id="ramark-modal">
                        <div class="modal-dialog">
                            <div class="modal-header float-right">

                                <button type="button" class="btn-modal" data-dismiss="modal" aria-label="Close">
                                    <img src="img/icons/close.png" class="float-right">

                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="content mt-3">
                                    <h3>Human Body - Science</h3>
                                    <form>
                                        <div class="form-group">
                                            <label class="required">Remarks</label>
                                            <textarea name="comments" id="message" required="required" class="form-control" rows="5" placeholder="Write remarks"></textarea>
                                            <div class="float-right"><button class="popup-btn btn-red t">Reject</button><button class="popup-btn btn-gray ">Cancel</button></div>

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
    <!-- Notes Under Review Ends-->

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
