<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/boostrap/bootstrap.min.css">


    <!-- Animation CSS  -->
    <link rel="stylesheet" href="css/animate/animate.min.css">

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="we-wrapper">
      
       <!-- Header -->
        <?php include "includes/header.php"; ?>
        <!-- Header Ends -->

        <!-- Search Page -->

        <div id="search">
            <!-- Banner -->
            <section id="top_banner">
                <div class="banner ">
                    <div class="inner text-center animated fadeInDown">
                        <h2>Search Notes</h2>
                    </div>
                </div>
            </section>
            <!-- title-->
            <div class="container">
                <div class="row section-heading">
                    <h3 class="col-md-12 animated fadeInLeft">Search and Filter notes</h3>
                </div>
            </div>
            <!--Search Bar -->

            <section id="search-section">
                <div class="container">

                    <div class="row">

                        <div class="col-md-12">
                            <div class="search-container">
                                <form>
                                    <span class=" search-me">
                                        <img class=" field-icon-search" src="img/icons/search-icon.png">
                                        <input type="text" placeholder="Search.." name="search" class="form-control ">
                                    </span>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4 option1">
                            <div class="form-group">
                                <div class="styled-select form-control animated flipInY">
                                    <select name="gender" id="user-gender" class="form-control">
                                        <option value="male">Select type</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4  option2">
                            <div class="form-group">
                                <div class="styled-select form-control animated flipInY">
                                    <select name="gender" id="user-gender" class="form-control">
                                        <option value="male">Select category</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4 option3">
                            <div class="form-group">
                                <div class="styled-select form-control animated flipInY">
                                    <select name="gender" id="user-gender" class="form-control">
                                        <option value="male">Select university</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4 option4">
                            <div class="form-group">
                                <div class="styled-select form-control animated flipInY">
                                    <select name="gender" id="user-gender" class="form-control">
                                        <option value="male">Select course</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4 option5">
                            <div class="form-group">
                                <div class="styled-select form-control animated flipInY">
                                    <select name="gender" id="user-gender" class="form-control">
                                        <option value="male">Select country</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4 option6">
                            <div class="form-group">
                                <div class="styled-select form-control animated flipInY">
                                    <select name="gender" id="user-gender" class="form-control">
                                        <option value="male">Select rating</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </section>

            <!-- Note Listing -->

            <section id="note-listing">
                <div class="container">
                    <div class="row">
                        <h4 class="col-md-12 animated fadeInLeft">Total 18 notes</h4>
                    </div>
                    <div class="row" id="search-item">
                        <!-- --------------Item 1---------------->
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" onclick="window.location.href = 'notes-detail.php';">
                            <div class="item">
                                <img src="img/Search/1.jpg">
                                <div class="desc">
                                    <h4>Computer Operating System - Final Exam Book With Paper Solution</h4>
                                    <table>
                                        <tr>
                                            <td><img src="img/Search/university.png" class="img-responsive my-icon"></td>
                                            <td> University of California</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/pages.png" class="img-responsive my-icon"></td>
                                            <td> 250 pages</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/date.png" class="img-responsive my-icon"></td>
                                            <td> Thu, Nov 26 2020</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/flag.png" class="img-responsive my-icon"></td>
                                            <td> 5 users markes this note as inappropriate</td>
                                        </tr>
                                    </table>
                                    <p> <img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star-white.png" class="img-responsive star"> 100 Reviews</p>
                                </div>
                            </div>

                        </div>
                        <!-- --------------Item 2---------------->
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" onclick="window.location.href = 'notes-detail.php';">
                            <div class="item">
                                <img src="img/Search/2.jpg">
                                <div class="desc">
                                    <h4>Computer Science Illuminted - Seventh Edition</h4>
                                    <table>
                                        <tr>
                                            <td><img src="img/Search/university.png" class="img-responsive my-icon"></td>
                                            <td> University of California</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/pages.png" class="img-responsive my-icon"></td>
                                            <td> 300pages</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/date.png" class="img-responsive my-icon"></td>
                                            <td> Thu, Nov 26 2020</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/flag.png" class="img-responsive my-icon"></td>
                                            <td> 5 users markes this note as inappropriate</td>
                                        </tr>
                                    </table>
                                    <p> <img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star-white.png" class="img-responsive star"> 100 Reviews</p>
                                </div>
                            </div>

                        </div>
                        <!-- --------------Item 3---------------->
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" onclick="window.location.href = 'notes-detail.php';">
                            <div class="item">
                                <img src="img/Search/3.jpg">
                                <div class="desc">
                                    <h4>Basic Computer Engineering Tech India Publication Series</h4>
                                    <table>
                                        <tr>
                                            <td><img src="img/Search/university.png" class="img-responsive my-icon"></td>
                                            <td> University of California</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/pages.png" class="img-responsive my-icon"></td>
                                            <td> 233 pages</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/date.png" class="img-responsive my-icon"></td>
                                            <td> Thu, Nov 26 2020</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/flag.png" class="img-responsive my-icon"></td>
                                            <td> 4 users markes this note as inappropriate</td>
                                        </tr>
                                    </table>
                                    <p> <img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star-white.png" class="img-responsive star"><img src="img/icons/star-white.png" class="img-responsive star"> 100 Reviews</p>
                                </div>
                            </div>

                        </div>
                        <!-- --------------Item 4---------------->
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" onclick="window.location.href = 'notes-detail.php';">
                            <div class="item">
                                <img src="img/Search/4.jpg">
                                <div class="desc">
                                    <h4>Computer Science Illuminted - Seventh Edition</h4>
                                    <table>
                                        <tr>
                                            <td><img src="img/Search/university.png" class="img-responsive my-icon"></td>
                                            <td> University of California</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/pages.png" class="img-responsive my-icon"></td>
                                            <td> 204 pages</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/date.png" class="img-responsive my-icon"></td>
                                            <td> Thu, Nov 26 2020</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/flag.png" class="img-responsive my-icon"></td>
                                            <td> 5 users markes this note as inappropriate</td>
                                        </tr>
                                    </table>
                                    <p> <img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"> 100 Reviews</p>
                                </div>
                            </div>

                        </div>
                        <!-- --------------Item 5---------------->
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" onclick="window.location.href = 'notes-detail.php';">
                            <div class="item">
                                <img src="img/Search/5.jpg">
                                <div class="desc">
                                    <h4>The Principles of Computer Hardware - Oxford</h4>
                                    <table>
                                        <tr>
                                            <td><img src="img/Search/university.png" class="img-responsive my-icon"></td>
                                            <td> University of California</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/pages.png" class="img-responsive my-icon"></td>
                                            <td> 204 pages</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/date.png" class="img-responsive my-icon"></td>
                                            <td> Thu, Nov 26 2020</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/flag.png" class="img-responsive my-icon"></td>
                                            <td> 5 users markes this note as inappropriate</td>
                                        </tr>
                                    </table>
                                    <p> <img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star-white.png" class="img-responsive star"> 100 Reviews</p>
                                </div>
                            </div>

                        </div>
                        <!-- --------------Item 6---------------->
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" onclick="window.location.href = 'notes-detail.php';">
                            <div class="item">
                                <img src="img/Search/6.jpg">
                                <div class="desc">
                                    <h4>Computer Operating System - Final Exam Book With Paper Solution</h4>
                                    <table>
                                        <tr>
                                            <td><img src="img/Search/university.png" class="img-responsive my-icon"></td>
                                            <td> University of California</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/pages.png" class="img-responsive my-icon"></td>
                                            <td> 204 pages</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/date.png" class="img-responsive my-icon"></td>
                                            <td> Thu, Nov 26 2020</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/flag.png" class="img-responsive my-icon"></td>
                                            <td> 5 users markes this note as inappropriate</td>
                                        </tr>
                                    </table>
                                    <p> <img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star-white.png" class="img-responsive star"> 100 Reviews</p>
                                </div>
                            </div>

                        </div>
                        <!-- --------------Item 7---------------->
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" onclick="window.location.href = 'notes-detail.php';">
                            <div class="item">
                                <img src="img/Search/1.jpg">
                                <div class="desc">
                                    <h4>Computer Operating System - Final Exam Book With Paper Solution</h4>
                                    <table>
                                        <tr>
                                            <td><img src="img/Search/university.png" class="img-responsive my-icon"></td>
                                            <td> University of California</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/pages.png" class="img-responsive my-icon"></td>
                                            <td> 204 pages</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/date.png" class="img-responsive my-icon"></td>
                                            <td> Thu, Nov 26 2020</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/flag.png" class="img-responsive my-icon"></td>
                                            <td> 5 users markes this note as inappropriate</td>
                                        </tr>
                                    </table>
                                    <p> <img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star-white.png" class="img-responsive star"> 100 Reviews</p>
                                </div>
                            </div>

                        </div>
                        <!-- --------------Item 7---------------->
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" onclick="window.location.href = 'notes-detail.php';">
                            <div class="item">
                                <img src="img/Search/2.jpg">
                                <div class="desc">
                                    <h4>Computer Operating System - Final Exam Book With Paper Solution</h4>
                                    <table>
                                        <tr>
                                            <td><img src="img/Search/university.png" class="img-responsive my-icon"></td>
                                            <td> University of California</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/pages.png" class="img-responsive my-icon"></td>
                                            <td> 204 pages</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/date.png" class="img-responsive my-icon"></td>
                                            <td> Thu, Nov 26 2020</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/flag.png" class="img-responsive my-icon"></td>
                                            <td> 5 users markes this note as inappropriate</td>
                                        </tr>
                                    </table>
                                    <p> <img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star-white.png" class="img-responsive star"><img src="img/icons/star-white.png" class="img-responsive star"><img src="img/icons/star-white.png" class="img-responsive star"> 100 Reviews</p>
                                </div>
                            </div>

                        </div>
                        <!-- --------------Item 9---------------->
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" onclick="window.location.href = 'notes-detail.php';">
                            <div class="item">
                                <img src="img/Search/3.jpg">
                                <div class="desc">
                                    <h4>Basic Computer Engineering Tech India Publication Series</h4>
                                    <table>
                                        <tr>
                                            <td><img src="img/Search/university.png" class="img-responsive my-icon"></td>
                                            <td> University of California</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/pages.png" class="img-responsive my-icon"></td>
                                            <td> 204 pages</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/date.png" class="img-responsive my-icon"></td>
                                            <td> Thu, Nov 26 2020</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/flag.png" class="img-responsive my-icon"></td>
                                            <td> 5 users markes this note as inappropriate</td>
                                        </tr>
                                    </table>
                                    <p> <img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star.png" class="img-responsive star"><img src="img/icons/star-white.png" class="img-responsive star"> 100 Reviews</p>
                                </div>
                            </div>

                        </div>

                    </div>
 <div class="pagination-container  ">
                        <nav>
                            <ul class="pagination-wrapper col-md-12 text-center">
                            <li>&lt;
                            </li>
                                <li class="active">1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                                <li>5</li>
                                <li>&gt;</li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </section>
        </div>

        <!-- Footer -->
        <footer class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="">
                            <span class="float-left">Copyright &copy;Tatvasoft All rights Reserved</span>
                            <span class="float-right">
                                <a href="#" class="pl-2 pr-2 pt-1 pt-1 rounded-circle"><img src="img/icons/facebook.png" class="img-responsive"></a>
                                <a href="#" class="rounded-circle"><img src="img/icons/twitter.png" class="img-responsive"></a>
                                <a href="#" class="pb-1 pt-1 rounded-circle"><img src="img/icons/linkedin.png" class="img-responsive"></a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>

        </footer>
        <!-- Footer Ends -->
    </div>
    <!-- JQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>


    <!-- Wow JS -->
    <script src="js/Wow/wow.min.js"></script>

    <!-- Custome JS -->
    <script src="js/script.js"></script>

</body>

</html>
