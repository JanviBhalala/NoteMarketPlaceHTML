<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include "process/connection.php";
    ob_start();
    
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.png">
    
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

                                <span class=" search-me">
                                    <img class=" field-icon-search" src="img/icons/search-icon.png">
                                    <input type="text" placeholder="Search.." name="searchBytxt" class="form-control searchMeInTabletxt">
                                </span>

                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4 option1">
                            <div class="form-group">
                                <div class="styled-select form-control animated flipInY">
                                    <select name="note_type_id " id="" class="form-control searchMeInTable">
                                        <option value="">Select type</option>
                                        <?php 
                                            $query="SELECT * FROM type WHERE is_active=1";
                                            $result=mysqli_query($conn, $query);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                        <option value="<?php echo $row['type_id'];?>"><?php echo $row['type'];?></option><?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4  option2">
                            <div class="form-group">
                                <div class="styled-select form-control animated flipInY">
                                    <select name="category_id" id="" class="form-control searchMeInTable">
                                        <option value="">Select category</option>
                                        <?php 
                                            $query="SELECT * FROM category  WHERE is_active=1";
                                            $result=mysqli_query($conn, $query);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                        <option value="<?php echo $row['category_id'];?>"><?php echo $row['name'];?></option><?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4 option3">
                            <div class="form-group">
                                <div class="styled-select form-control animated flipInY">
                                    <select name="university" id="" class="form-control searchMeInTable">
                                        <option value="">Select university</option>
                                        <?php 
                                            $query="SELECT DISTINCT university FROM note  WHERE is_active=1";
                                            $result=mysqli_query($conn, $query);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                        <option value="<?php echo $row['university'];?>"><?php echo $row['university'];?></option><?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4 option4">
                            <div class="form-group">
                                <div class="styled-select form-control animated flipInY">
                                    <select name="cource" id="" class="form-control searchMeInTable">
                                        <option value="">Select course</option>
                                        <?php 
                                            $query="SELECT DISTINCT cource FROM note";
                                            $result=mysqli_query($conn, $query);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                        <option value="<?php echo $row['cource'];?>"><?php echo $row['cource'];?></option><?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4 option5">
                            <div class="form-group">
                                <div class="styled-select form-control animated flipInY">
                                    <select name="country" id="" class="form-control searchMeInTable">
                                        <option value="">Select country</option>
                                        <?php 
                                            $query="SELECT country_id,name FROM country  WHERE is_active=1";
                                            $result=mysqli_query($conn, $query);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                        <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option><?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4 option6">
                            <div class="form-group">
                                <div class="styled-select form-control animated flipInY">
                                    <select name="rating" id="" class="form-control searchMeInTable">
                                        <option value="">Select rating</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
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
                    <div id="load-item-here">
                        <!--<div class="row">
                        <h4 class="col-md-12 animated fadeInLeft">Total 9 notes</h4>
                    </div>
                    <div class="row" id="search-item">-->
                        <!-- --------------Item starts---------------->

                        <!-- --------------Item Ends---------------->


                        <!-- </div>-->
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

    <!-- Validation-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

    <!-- Custome JS -->
    <script src="js/script.js"></script>


</body>

</html>
