<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Notes</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

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
        <?php 
            include "process/connection.php";
            ob_start();
        ?>

        <!--Add Notes -->
        <section id="top_banner">
            <div class="banner">
                <div class="inner text-center animated fadeInDown">
                    <h2>Add Notes</h2>
                </div>
            </div>
        </section>

        <!--Add Notes Form -->
        <section id="add-notes-form">
            <form id="add-notes-form" class="contact-form" name="contact-form" method="post" action="process/addNotes.php" enctype="multipart/form-data">

                <div class="container">
                    <?php
                        if( !empty( $_REQUEST['msg'] ) )
                            {
                                echo sprintf( '<p>%s</p>', $_REQUEST['msg'] );
                            }
                        ?>
                    <!--Bsic Note Detail -->
                    <div class="section-heading animated fadeInDown ">
                        <h2>Basic Note Details </h2>
                    </div>
                    <div class="row contact-wrap">
                        <div class="status alert alert-success" style="display: none"></div>
                        <div class="col-sm-12 col-md-6 col-xs-12 wow slideInLeft " data-wow-duration="1.2s">
                            <div class="form-group">
                                <label class="required">Title</label>
                                <input type="text" name="note-title" class="form-control" required="required " placeholder="Enter your notes title">
                            </div>
                            <div class="form-group">
                                <label>Display Picture</label>
                                <input type="file" name="display_pic" class="form-control input-img" accept="image/png, image/jpeg">
                                <label class="file-label">Upload a picture</label>
                            </div>


                            <div class="form-group">
                                <label>Type</label>
                                <div class="styled-select form-control">
                                    <select name="note_type" id="note-type" class="form-control">
                                        <?php 
                                            $query="SELECT * FROM type";
                                            $result=mysqli_query($conn, $query);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value="<?php echo $row['type_id'];?>"><?php echo $row['type'];?></option><?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xs-12 wow slideInRight " data-wow-duration="1.2s">
                            <div class="form-group">
                                <label class="required">Category</label>
                                <div class="styled-select form-control">
                                    <select name="note-category" id="select-note-type" class="form-control" required>
                                        <?php 
                                            $query="SELECT * FROM category";
                                            $result=mysqli_query($conn, $query);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value="<?php echo $row['category_id'];?>"><?php echo $row['name'];?></option><?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="required">Upload Notes</label>

                                <input type="file" name="upload_notes" class="form-control input-img1" accept=".pdf" title=" " required="required" style="height:100px;"/>
                                <label class="file-label">Upload your notes</label>

                            </div>
                            <div class="form-group">
                                <label>Number of Pages</label>
                                <input type="text" name="number_of_pages" class="form-control" placeholder="Enter number of note pages">
                            </div>



                        </div>
                        <div class="col-md-12  wow slideInUp " data-wow-duration="1.2s">
                            <div class="form-group">
                                <label class="required">Description</label>
                                <textarea name="comments" id="category-description" required="required" class="form-control" rows="8" placeholder="Enter your description"></textarea>
                            </div>
                        </div>
                    </div>

                    <!--Institution Information -->
                    <div class="section-heading wow fadeInDown">
                        <h2>Institution Information</h2>
                    </div>
                    <div class="row contact-wrap">
                        <div class="status alert alert-success" style="display: none"></div>
                        <div class="col-sm-12 col-md-6 col-xs-12  wow slideInLeft " data-wow-duration="1.2s">
                            <div class="form-group">
                                <label>Country</label>
                                <div class="styled-select form-control">
                                    <select name="country" id="institution-country" class="form-control">
                                         <?php 
                                            $query="SELECT * FROM country";
                                            $result=mysqli_query($conn, $query);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option><?php
                                            }
                                        ?>
                                    </select>
                                </div>

                            </div>


                        </div>
                        <div class="col-sm-12 col-md-6 col-xs-12  wow slideInRight " data-wow-duration="1.2s">
                            <div class="form-group">
                                <label>Institution Name</label>
                                <input type="text" name="institution" class="form-control"  placeholder="Enter your institution name">
                            </div>


                        </div>
                    </div>


                    <!--Course Detail -->
                    <div class="section-heading wow fadeInDown">
                        <h2>Course Detail</h2>
                    </div>
                    <div class="row contact-wrap">

                        <div class="col-sm-12 col-md-6 col-xs-12  wow slideInLeft " data-wow-duration="1.2s">
                            <div class="form-group">
                                <label>Course Name</label>
                                <input type="text" name="course_name" class="form-control" placeholder="Enter your course name">
                            </div>
                            <div class="form-group">
                                <label>Professor / Lecturer</label>
                                <input type="text" name="professor_name" class="form-control" placeholder="Enter your professor name">
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6 col-xs-12  wow slideInRight " data-wow-duration="1.2s">
                            <div class="form-group">
                                <label>Course Code</label>
                                <input type="text" name="course_code" class="form-control" placeholder="Enter your course code">
                            </div>

                        </div>


                    </div>

                    <!--Selling Information -->
                    <div class="section-heading wow fadeInDown">
                        <h2>Selling Information</h2>
                    </div>
                    <div class="row contact-wrap">

                        <div class="col-sm-12 col-md-6 col-xs-12  wow slideInLeft " data-wow-duration="1.2s">
                            <div class="form-group radio-btn">
                                <label class="required">Sell For</label><br>
                                <input type="radio" id="sell-free" class="radio" name="sell_type" value="0">
                                <label for="free">Free</label>
                                <input type="radio" id="paied" class="radio" name="sell_type" value="1">
                                <label for="sell-paied">Paied</label>
                            </div>
                            <div class="form-group">
                                <label class="required">Sell Price</label>
                                <input type="text" name="price" class="form-control" required="required " placeholder="Enter your price">
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-xs-12  wow slideInRight " data-wow-duration="1.2s">
                            <div class="form-group">
                                <label>Note Preview</label>
                                <input type="file" class="form-control input-img" name="note_preview" accept=".pdf">
                                <label class="file-label">Upload a file</label>
                            </div>
                        </div>

                        <div class="col-md-12  wow slideInUp " data-wow-duration="1.2s">
                            <button class="small-btn" name="save_note">Save</button><button name="publish_note" class="small-btn ml-3">Publish</button>
                        </div>

                    </div>
                </div>

            </form>
        </section>
    </div>


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
