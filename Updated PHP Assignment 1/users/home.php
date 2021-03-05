<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/boostrap/bootstrap.min.css">


    <!-- Animation CSS  -->
    <link rel="stylesheet" href="css/animate/animate.min.css">

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="home-window" class="pt-0">

    <!-- Header -->
    <?php include "includes/header.php"; ?>
    <!-- Header Ends -->

    <!-- Home -->
    <section id="top_banner-home">
        <div class="banner">
            <div class="container text-lef">
                <div class="row d-block">

                    <div class="  inner d-inline-block align-middle col-md-8 ">
                        <h2 class="animated fadeInDown">Download Free/Paid Notes<br>or Sale your Book</h2>
                        <p class="animated fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic maxime doloremque voluptatem quod quidem id labore laborum.</p>
                        <a href="faq.php"> <button class="btn-sml-trans animated fadeInUp">Learn More</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->
    <div id="about-01">

        <div class="content-box-lg">

            <div class="container">

                <div class="row">
                    <!-- about left size -->
                    <div class="col-md-5 col-sm-5 wow slideInLeft " data-wow-duration="1s">

                        <div id="about-left">
                            <div class="vertical-heading ">
                                <h2>About<br>NoteMarketPlace</h2>
                            </div>
                        </div>
                    </div>

                    <!-- about right size -->
                    <div class="col-md-7 col-sm-7 wow slideInRight " data-wow-duration="1s">
                        <div id="about-right">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet debitis illo aliquam excepturi, sequi doloremque sapiente assumenda suscipit fugiat vel nesciunt dolorem qui, unde blanditiis pariatur ex at. Reprehenderit, voluptatem.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consequatur maxime sunt soluta aliquid temporibus magnam. Non quam ea iusto iure ducimus, eum itaque repellendus minus facilis excepturi.
                            </p>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- about 01 ends -->
    <!-- about 02  -->
    <div id="about-02">

        <div class="content-box-md">

            <div class="container">
                <div class="row">
                    <div class="section-heading col-md-12 text-center wow fadeInDown">
                        <h2>How it Works</h2>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInLeft">
                        <div class="about-item text-center">
                            <img src="img/home/download1.png" class=" img-circle ">

                            <h4>Download Free/Paid Notes</h4>
                            <p>
                                Get Material for your<br> Cource etc.
                            </p>
                            <button class="small-btn" onclick="window.location.href = 'search.php';">Download</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInLeft">
                        <div class="about-item text-center">
                            <img src="img/home/seller.png" class=" img-circle ">

                            <h4>Seller</h4>
                            <p>
                                Upload and Download Cource<br> and Materials etc.
                            </p>
                            <button class="small-btn" onclick="window.location.href = 'dashboard.php';">Sell Book</button>
                        </div>
                    </div>


                </div>
            </div>

        </div>

    </div>
    <!-- about 02 ends -->

    <!-- Customers -->
    <div id="customers">


        <div class="container">
            <div class="row">
                <div class="section-heading col-md-12 text-center  wow fadeInDown">
                    <h2>What Our Customers are Saying</h2>
                </div>
                <div class="col-md-6 customer-item ">
                    <div class="testimonial  wow fadeInDown">


                        <table class="author">
                            <tr class="row">
                                <td class=" wow flipInX">
                                    <img src="img/home/customer-1.png" alt="client" class="img-responsive img-circle">

                                </td>
                                <td>
                                    <div class="author-name-des">
                                        <p class="c-name">Joq Martin</p>
                                        <p class="c-desc">Senior Developer, Infinitum Company</p>
                                    </div>
                                </td>
                            </tr>

                        </table>
                        <p class="customer-description">
                            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, ab iste laboriosam ipsum dicta, quidem dignissimos molestias cupiditate facere sequi vero expedita soluta."
                        </p>
                    </div>
                </div>
                <div class="col-md-6 customer-item ">
                    <div class="testimonial  wow fadeInDown">

                        <table class="author">
                            <tr class="row">
                                <td class=" wow flipInX">
                                    <img src="img/home/customer-2.png" alt="client" class="img-responsive img-circle">

                                </td>
                                <td>
                                    <div class="author-name-des">
                                        <p class="c-name">Jonnie Riley</p>
                                        <p class="c-desc">Employee, Curious Snaks</p>
                                    </div>
                                </td>
                            </tr>

                        </table>
                        <p class="customer-description">
                            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, ab iste dicta, quidem dignissimos molestias cupiditate facere sequi vero expedita soluta."
                        </p>
                    </div>
                </div>
                <div class="col-md-6 customer-item ">
                    <div class="testimonial wow fadeInUp">

                        <table class="author">
                            <tr class="row">
                                <td class=" wow flipInX">
                                    <img src="img/home/customer-3.png" alt="client" class="img-responsive img-circle">

                                </td>
                                <td>
                                    <div class="author-name-des">
                                        <p class="c-name">Amilia Luna</p>
                                        <p class="c-desc">Teacher, Saint Joseph High School</p>
                                    </div>
                                </td>
                            </tr>

                        </table>
                        <p class="customer-description">
                            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, quidem dignissimos molestias vero expedita soluta."
                        </p>
                    </div>
                </div>
                <div class="col-md-6 customer-item ">
                    <div class="testimonial wow fadeInUp">
                        <table class="author">
                            <tr class="row">
                                <td class=" wow flipInX">
                                    <img src="img/home/customer-4.png" alt="client" class="img-responsive img-circle">
                                </td>
                                <td>
                                    <div class="author-name-des">
                                        <p class="c-name">Daniel Cardos</p>
                                        <p class="c-desc">Software Engineer, Infinitum Company</p>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <p class="customer-description">
                            "Lorem ipsum dolor sit amet, adipisicing elit. Quo, ab iste laboriosam quidem dignissimos molestias cupiditate expedita soluta."
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- Customers ends -->

    <!-- Footer -->
    <?php include "includes/footer.php"; ?>
    <!-- Footer Ends -->

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
