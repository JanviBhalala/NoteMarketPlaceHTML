<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Requested Notes</title>
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
                        <h2>My Requested Notes</h2>
                    </div>
                    <div class="col-md-auto col-sm-12 ml-auto   animated fadeInRight ">
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
                <section class="table-container-row10" id="my-requested-notes-table">
                    <div class="table-responsive  animated slideInUp">
                        <table class="table  my-tables">
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
                                <tr>
                                    <td>1</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Software Department</td>
                                    <td>IT</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                    <td>Computer</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                    <td>Science</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                    <td>Computer</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                    <td>Account</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                    <td>Computer</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                    <td>Science</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                    <td>Computer</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                    <td>Account</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                    <td>History</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                    <td>Science</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                    <td>Computer</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                    <td>Account</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                    <td>History</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Software Department</td>
                                    <td>IT</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                    <td>Account</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                    <td>History</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                    <td>Science</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                    <td>Computer</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                    <td>Account</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Software Department</td>
                                    <td>IT</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                    <td>Account</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                    <td>History</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                    <td>Science</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                    <td>Account</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                    <td>History</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                    <td>Science</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Computer Basic</td>
                                    <td>Computer</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                    <td>Account</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Software Department</td>
                                    <td>IT</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Accountant</td>
                                    <td>Account</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">World war 2</td>
                                    <td>History</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td onclick="window.location.href = 'notes-detail.php';">Human Body</td>
                                    <td>Science</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Clone</td>
                                    <td>
                                        <div class="dropdown pull-right align-middle">
                                            <a class="toggle" href="#" data-toggle="dropdown"><img class="d-inline-block align-middle" src="img/icons/dots.png" alt="dots"></a>
                                            <ul class="dropdown-menu dropdown-menu-left pull-right">
                                                <li class="dropdown-item"><a href="#">Download Note</a></li>
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

    <!-- Custome JS -->
    <script src="js/script.js"></script>

</body>

</html>
