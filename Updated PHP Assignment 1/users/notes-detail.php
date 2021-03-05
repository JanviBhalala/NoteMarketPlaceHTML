<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes Detail</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/boostrap/bootstrap.min.css">

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/datatables/bootstrap.css">

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/datatables/dataTables.bootstrap4.min.css">


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

        <section id="note-detail">
            <div class="container">
                <div class="heading animated fadeInDown pt-5">
                    <h4>
                        Notes Details
                    </h4>
                </div>
                <!-- Notes Detail Section 1-->
                <div id="notes-detail-tab1">
                    <div class="row">

                        <div class="col-md-7 col-sm-12 animated slideInLeft">
                            <div class="row column1">
                                <div class="col"><img src="img/notedetails/first.jpg" class="image-responsive"></div>
                                <div class="col">
                                    <h3>Computer Science</h3>
                                    <h5>Science</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate inventore alias non officia quidem est, neque consectetur dolorum quod, repellat, vitae recusandae, error esse corporis illo tenetur laborum quam maxime.</p>
                                    
                                      <?php if(isset($_SESSION["isLogin"]) ){
				                            if($_SESSION["isLogin"]=="yes"){ ?>
                                            <button class="add-btn" id="btn-download-note" data-toggle="modal" data-target="#thank-you">Download/$15</button>
                                     <?php }} if($_SESSION["isLogin"]==""){ ?>
                                     <button class="add-btn" id="btn-download-note" onclick=" window.location.href = 'login.php';" >Download/$15</button>
                                     
                                     <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 column2 col-sm-12  animated slideInRight">
                            <p><span>Institution:</span><span class="float-right">University of California</span></p>
                            <p><span>Country:</span><span class="float-right">California</span></p>
                            <p><span>Course Name:</span><span class="float-right">Computer Engineering</span></p>
                            <p><span>Course Code:</span><span class="float-right">248706</span></p>
                            <p><span>Professor:</span><span class="float-right">Mr. Rechard Brown</span></p>
                            <p><span>Number of Pages:</span><span class="float-right">277</span></p>
                            <p><span>Approved Date:</span><span class="float-right">Novenber 20 2020</span></p>
                            <p><span>Rating:</span><span class="float-right stars"><img src="img/icons/star.png"><img src="img/icons/star.png"><img src="img/icons/star.png"><img src="img/icons/star-white.png"><img src="img/icons/star-white.png"> 100 Reviews</span></p>
                            <p>5 Users marked this note as inappropriate</p>
                        </div>
                    </div>
                </div>
                <!-- Note Detail Part 2 -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <hr>
                    </div>
                </div>
                <div class="row wow slideInUp" id="notes-detail-tab2">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h4 class="">Notes Preview</h4>
                        <object data="img/sample.pdf" type="application/pdf" width="300" height="200">
                        </object>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h4 class="">Customer Preview</h4>
                        <div class="column2">

                            <div class="row item">
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                    <img src="img/notedetails/reviewer-1.png" alt="client" class="img-responsive img-circle">
                                </div>
                                <div class="col">
                                    <h5>Rechard Brown</h5>
                                    <div class="stars"><img src="img/icons/star.png"><img src="img/icons/star.png"><img src="img/icons/star.png"><img src="img/icons/star-white.png"><img src="img/icons/star-white.png"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora id voluptate perspiciatis eveniet.</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row item">
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                    <img src="img/notedetails/reviewer-2.png" alt="client" class="img-responsive img-circle">
                                </div>
                                <div class="col">
                                    <h5>Rechard Brown</h5>
                                    <div class="stars"><img src="img/icons/star.png"><img src="img/icons/star.png"><img src="img/icons/star-white.png"><img src="img/icons/star-white.png"><img src="img/icons/star-white.png"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora id voluptate perspiciatis eveniet.</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row item">
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                    <img src="img/notedetails/reviewer-3.png" alt="client" class="img-responsive img-circle">
                                </div>
                                <div class="col">
                                    <h5>Rechard Brown</h5>
                                    <div class="stars"><img src="img/icons/star.png"><img src="img/icons/star.png"><img src="img/icons/star.png"><img src="img/icons/star.png"><img src="img/icons/star-white.png"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora id voluptate perspiciatis eveniet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </section>
        <!-- Modal -->
         <?php if(isset($_SESSION["isLogin"]) ){
				if($_SESSION["isLogin"]=="yes"){ ?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="modal fade align-self-center" id="thank-you">
                            <div class="modal-dialog">
                                <div class="modal-header float-right">
                                    <button type="button" class="btn-modal" data-dismiss="modal" aria-label="Close">
                                        <img src="img/icons/close.png" class="float-right">

                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="text-center mt-5"> <img src="img/icons/true.png" class="ml-auto"><br>
                                        <h3 class="mt-2">Thank you for purchansing!</h3>
                                    </div>
                                    <div class="content">
                                        <h5>Dear Smith,</h5>
                                        <p>As this is paid notes - you need to pay to seller Rahil Shah offline, We will send him an email that you want to download this note. He may contact you further for payment process completion.
                                            <p />
                                        <p> In case, you have urgency,<br> Please contact us on +9195377345959.</p>
                                        <p> Once he receives the payment and acknowledge us-selected notes you can see over my downloads tab for download. Have a good day.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php }} ?>

        <!-- Footer -->
        <?php include "includes/footer.php"; ?>
        <!-- Footer Ends -->
    </div>

    <!-- JQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <script src="js/tables/jquery-dataTables.min.js"></script>
    <!-- Bootstraptables JS -->
    <script src="js/tables/dataTables-bootstrap.min.js"></script>

    <!-- Custome JS -->
    <script src="js/script.js"></script>

</body>

</html>
