<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Category</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/boostrap/bootstrap.min.css">

    <!-- Animate CSS  -->
    <link rel="stylesheet" href="css/animate/animate.min.css">

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- Header -->
    <?php  include "includes/header.php" ?>
    <!-- Header Ends -->

    <!-- Add Category Form Starts-->
    <section id="add-category">
        <div class="container">
            <form id="admin-add-category-form" class="contact-form" method="post">
                <div class="table-heading animated fadeInDown pt-4">
                    <h2>Add Category</h2>
                </div>

                <div class="row contact-wrap">
                    <div class="status alert alert-success" style="display: none"></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 animated slideInLeft ">
                        <div class="form-group">
                            <label class="required">Category Name</label>
                            <input type="text" name="category-name" class="form-control" required="required " placeholder="Enter category name">
                        </div>

                        <div class="form-group">
                            <label class="required">Description</label>
                            <textarea name="comments" id="category-description" required="required" class="form-control" rows="8" placeholder="Enter your description"></textarea>
                        </div>
                        <button class="small-btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Form Ends -->
    
    <!-- Footer -->
    <?php  include "includes/footer.php" ?>
    <!-- Footer Ends -->
    
    <!-- JQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- Wow JS -->
    <script src="js/Wow/wow.min.js"></script>

    <!-- Custome JS -->
    <script src="js/script.js"></script>


</body>

</html>
