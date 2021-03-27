<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/boostrap/bootstrap.min.css">

    <!-- DataTables CSS  -->
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
    
    <!-- Dashboard -->
    <section id="Admin-dashboard">
        <div class="container ">
            <h2 class="animated fadeInDown pt-4">
                Dashboard
            </h2>
            <div class="admin-dashboard-tabs">
                <div class="row">

                    <div class="col-md-4 animated flipInY" onclick="window.location.href = 'notes-under-review.php';">
                        <div class="item-container text-center">
                            <h4>20</h4>
                            <p>Number of Notes in Review for Publish</p>
                        </div>

                    </div>


                    <div class="col-md-4 animated flipInY" onclick="window.location.href = 'downloaded-notes.php';">
                        <div class="item-container  text-center">
                            <h4>103</h4>
                            <p>Number of New NotesDownloaded<br> (Last 7 days)</p>
                        </div>

                    </div>

                    <div class="col-md-4 animated flipInY" onclick="window.location.href = 'members.php';">

                        <div class="item-container text-center">
                            <h4>223</h4>
                            <p>Number of New Registrations(Last 7 Days)</p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Search Tab -->
            <div class=" search-tab row d-flex">
                <div class="col-md-auto  col-sm-12 animated slideInLeft align-self-center">
                    <h4>Published Notes</h4>
                </div>
                <div class="col-md-auto col-sm-12 ml-auto  animated slideInRight align-self-center">
                    <form>
                        <div class="form-group d-flex">
                            <span class=" search-me">
                                <img class=" field-icon-search" src="img/icons/search-icon.png">
                                <input type="text" name="full-name" class=" search-me form-search" placeholder="Search" />
                            </span>
                            <button class="search-btn">Search</button>
                            <div class="styled-select1 form-select mb-0 mt-0 ml-2">
                                <select name="gender" id="seller" class="form-search mb-0 ">
                                    <option value="">Search Month</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- table -->
            <section class="table-container-row5" id="admin-dashboard-table">
                <div class="table-responsive  animated slideInUp">
                    <table class="table  my-tables ">
                        <thead class="small-head">
                            <tr>
                                <td class="align-middle">Sr No.</td>
                                <td class="align-middle">Note Title</td>
                                <td class="align-middle">Category</td>
                                <td class="align-middle text-center">Attachment size</td>
                                <td class="align-middle">Sell Type</td>
                                <td class="align-middle">Price</td>
                                <td class="align-middle">Seller</td>
                                <td class="align-middle">Date Added</td>
                                <td class="align-middle text-center">Number of downloads</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Software Engineer</td>
                                <td>IT</td>
                                <td class="text-center">10KB</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>

                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td class="text-center">16KB</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td class="text-center">1MB</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">57</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td class="text-center">10KB</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>

                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td class="text-center">30KB</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">98</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td class="text-center">13KB</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td class="text-center">2MB</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>

                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td class="text-center">10KB</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>

                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td class="text-center">12KB</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                <td onclick="window.location.href = 'notes-detail.php';">History</td>
                                <td class="text-center">10KB</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td class="text-center">19KB</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>

                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">86</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td class="text-center">10KB</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>

                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td class="text-center">5KB</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                <td onclick="window.location.href = 'notes-detail.php';">History</td>
                                <td class="text-center">10KB</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">78</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Software Engineer</td>
                                <td>IT</td>
                                <td class="text-center">30KB</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>

                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td class="text-center">10KB</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">86</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                <td onclick="window.location.href = 'notes-detail.php';">History</td>
                                <td class="text-center">11KB</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">89</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td class="text-center">29KB</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>

                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                <td>Computer</td>
                                <td class="text-center">10KB</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>

                                <td class="text-center">45</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td class="text-center">9KB</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Software Engineer</td>
                                <td>IT</td>
                                <td class="text-center">10KB</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>

                                <td class="text-center">72</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                <td>Account</td>
                                <td class="text-center">11KB</td>
                                <td>Paid</td>
                                <td>$51</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">46</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                <td onclick="window.location.href = 'notes-detail.php';">History</td>
                                <td class="text-center">10KB</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>
                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">76</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                <td>Science</td>
                                <td class="text-center">4MB</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Khyati Patel </td>
                                <td>09-10-2020, 10:40</td>

                                <td class="text-center" onclick="window.location.href = 'downloaded-notes.php';">71</td>
                                <td>
                                    <div class="dropdown pull-right align-middle"> <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php">View More Details</a></li>
                                            <li class="dropdown-item"><a href="#">Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pagination-container">
                    <nav>
                        <ul class="pagination-wrapper col-md-12 text-center">
                        </ul>
                    </nav>
                </div>
            </section>

        </div>

    </section>
    <!-- Dashboard Ends -->

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
