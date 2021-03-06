<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member Detail</title>
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
    <!-- Member Detail -->
    <section id="member-detail">
        <div class="container">
            <div class="table-heading animated fadeInDown pt-4">
                <h2>
                    Member Detail
                </h2>
            </div>

            <div class="member-detail-tabs">
                <div class="row">
                    <div class="col-md-auto col-sm-12 profile animated slideInLeft" id="member-img">
                        <img src="img/member/member.png">
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12 column1 animated slideInRight" class="member-info">
                        <div class="row ">

                            <div class="col-md-auto col-sm-auto col-col-xs-auto ">

                                <table>
                                    <tr>
                                        <td class=" member-name">First Name:</td>
                                        <td class="member-value">Rechard</td>
                                    </tr>
                                    <tr>
                                        <td class=" member-name">Last Name:</td>
                                        <td class="member-value">Brown</td>
                                    </tr>
                                    <tr>
                                        <td class=" member-name">Email:</td>
                                        <td class="member-value">rechard@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td class=" member-name">DOB:</td>
                                        <td class="member-value">19-12-1987</td>
                                    </tr>
                                    <tr>
                                        <td class=" member-name">Phone Number:</td>
                                        <td class="member-value">8976545676</td>
                                    </tr>
                                    <tr>
                                        <td class=" member-name">College/University:</td>
                                        <td class="member-value">University of California</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12 animated slideInRight">
                        <div class="row ">


                            <div class="col-md-auto col-sm-auto col-col-xs-auto">

                                <table>
                                    <tr>
                                        <td class=" member-name">Address1:</td>
                                        <td class="member-value">144-Diamond heights</td>
                                    </tr>
                                    <tr>
                                        <td class=" member-name">Address2:</td>
                                        <td class="member-value">Star colony</td>
                                    </tr>
                                    <tr>
                                        <td class=" member-name">City:</td>
                                        <td class="member-value">New York</td>
                                    </tr>
                                    <tr>
                                        <td class=" member-name">State:</td>
                                        <td class="member-value">New York State</td>
                                    </tr>
                                    <tr>
                                        <td class=" member-name">Country:</td>
                                        <td class="member-value">United State</td>
                                    </tr>
                                    <tr>
                                        <td class=" member-name">Zip Code:</td>
                                        <td class="member-value">110D4-05</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <hr>
                    </div>
                </div>

                <div class=" search-tab d-flex">
                    <div class="col-md-4 col-sm-12 align-self-center animated slideInUp">
                        <h4 class="">Notes</h4>
                    </div>
                </div>
                <!-- table -->
                <section class="table-container-row5" id="member-detail-table">
                    <div class="table-responsive animated slideInUp">
                        <table class="table  my-tables ">
                            <thead class="small-head">
                                <tr>
                                    <td class="align-middle">Sr No.</td>
                                    <td class="align-middle">Note Title</td>
                                    <td class="align-middle">Category</td>
                                    <td class="align-middle ">Status</td>
                                    <td class="align-middle text-center">Downloaded Notes</td>
                                    <td class="align-middle text-center">Total Earnings</td>
                                    <td class="align-middle">Date Added</td>
                                    <td class="align-middle text-center">Published Date</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Software Engineer</td>
                                    <td>IT</td>
                                    <td>Published</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Human Body</td>
                                    <td>IT</td>
                                    <td>InREview</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Accountant</td>
                                    <td>Account</td>
                                    <td>InReview</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>NA</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Software Engineer</td>
                                    <td>IT</td>
                                    <td>Published</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Human Body</td>
                                    <td>IT</td>
                                    <td>Science</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Accountant</td>
                                    <td>Account</td>
                                    <td>InReview</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>NA</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Software Engineer</td>
                                    <td>IT</td>
                                    <td>Published</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Human Body</td>
                                    <td>IT</td>
                                    <td>Science</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Accountant</td>
                                    <td>Account</td>
                                    <td>InReview</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>NA</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Software Engineer</td>
                                    <td>IT</td>
                                    <td>Published</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Human Body</td>
                                    <td>IT</td>
                                    <td>Science</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Accountant</td>
                                    <td>Account</td>
                                    <td>InReview</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>NA</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Software Engineer</td>
                                    <td>IT</td>
                                    <td>Published</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Human Body</td>
                                    <td>IT</td>
                                    <td>Science</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Accountant</td>
                                    <td>Account</td>
                                    <td>InReview</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>NA</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Software Engineer</td>
                                    <td>IT</td>
                                    <td>Published</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Human Body</td>
                                    <td>IT</td>
                                    <td>Science</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Accountant</td>
                                    <td>Account</td>
                                    <td>InReview</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>NA</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Software Engineer</td>
                                    <td>IT</td>
                                    <td>Published</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Human Body</td>
                                    <td>IT</td>
                                    <td>Science</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td onclick="window.location.href = 'notes-detail.html';">Accountant</td>
                                    <td>Account</td>
                                    <td>InReview</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">$51</td>
                                    <td>09-10-2020, 10:40</td>
                                    <td>NA</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Notes</a></li>
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
        </div>

    </section>
    <!-- Member Detail Ends -->

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
