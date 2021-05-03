<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include "process/connection.php";
    ob_start();
    $note_id=34;
    if( !empty( $_REQUEST['note_id'] ) )
    {
        $note_id=$_REQUEST['note_id'];
    }
                        
    
    $query="SELECT note_id,note.title,note.display_img,note.number_of_pages,note.university,note.published_date, category.name,note.professor,note.cource_code,note.country,note.cource,note.note_preview FROM `note` JOIN category ON note.category_id=category.category_id WHERE note.note_id='$note_id'";
    $result=mysqli_query($conn, $query);
    $row_count=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    
    $id=$row['note_id'];
    $q="SELECT COUNT('user_id') AS remark1 FROM remark WHERE note_id='$id'";
    $r=mysqli_query($conn, $q);
    $remark=mysqli_fetch_assoc($r);
    $q="SELECT CEILING(AVG(review.rating)) as rating FROM review WHERE note_id='$id' GROUP BY note_id";
    $r=mysqli_query($conn, $q);
    if(mysqli_num_rows($r)==0){
        $c=0;
    }
    else{
        $review=mysqli_fetch_assoc($r);
        $c=$review['rating'];
    }
    $q="SELECT COUNT(user_id) AS user FROM review WHERE note_id='$id' GROUP BY note_id";
    $r=mysqli_query($conn, $q);
    if(mysqli_num_rows($r)==0){
        $u=0;
    }
    else{
        $review_count=mysqli_fetch_assoc($r);
        $u=$review_count['user'];
    }
    $output="";
    for($i=1;$i<=$c;$i++){
                $output .=' <img src="img/icons/star.png" class="img-responsive star">';}
            $k=5-$i;
            for($j=0;$j<=$k;$j++){
            $output .='<img src="img/icons/star-white.png" class="img-responsive star">';}
    
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes Detail</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.png">
    
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
                                <?php $img= substr($row['display_img'], 3);?>
                                <div class="col"><img src="<?php echo $img; ?>" class="image-responsive"></div>
                                <div class="col">
                                    <h3><?php echo $row['title']; ?></h3>
                                    <h5><?php echo $row['name']; ?></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate inventore alias non officia quidem est, neque consectetur dolorum quod, repellat, vitae recusandae, error esse corporis illo tenetur laborum quam maxime.</p>

                                    <?php if(isset($_SESSION["isLogin"]) ){
				                            if($_SESSION["isLogin"]=="yes"){ ?>
                                    <button class="add-btn" id="btn-download-note1" onclick=" window.location.href = 'process/downloadNote.php?note_id=<?php echo $id; ?>';">Download/$15</button>
                                    <?php }} else{ ?>
                                    <button class="add-btn" id="btn-download-note1" onclick=" window.location.href = 'login.php';">Download/$15</button>

                                    <?php } ?>
                                    <?php
                                        if( !empty( $_REQUEST['msg'] ) )
                                            {
                                                echo sprintf( '<p>%s</p>', $_REQUEST['msg'] );
                                            }
                                        ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 column2 col-sm-12  animated slideInRight">
                            <p><span>Institution:</span><span class="float-right"><?php echo $row['university']; ?></span></p>
                            <p><span>Country:</span><span class="float-right"><?php echo $row['country']; ?></span></p>
                            <p><span>Course Name:</span><span class="float-right"><?php echo $row['cource']; ?></span></p>
                            <p><span>Course Code:</span><span class="float-right"><?php echo $row['cource_code']; ?></span></p>
                            <p><span>Professor:</span><span class="float-right"><?php echo $row['professor']; ?></span></p>
                            <p><span>Number of Pages:</span><span class="float-right"><?php echo $row['number_of_pages']; ?></span></p>
                            <?php $time=strtotime($row['published_date']);
                                          $t=date("F d Y", $time);  ?>
                            <p><span>Approved Date:</span><span class="float-right"><?php echo $t; ?></span></p>
                            <p><span>Rating:</span><span class="float-right stars"><?php echo $output. ' '.$u; ?> Reviews</span></p>
                            <p><?php echo $remark['remark1']; ?> Users marked this note as inappropriate</p>
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
                        <?php $note_preview= substr($row['note_preview'], 3);?>
                        <object data="<?php echo $note_preview; ?>" alt="Note Preview" type="application/pdf" width="300" height="200">
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
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="modal fade align-self-center" id="modal2">
                            <div class="modal-dialog">
                                <div class="modal-header float-right" id="add-remark-header">
                                    <button class="close-btn1 modal_close_btn mt-0" aria-label="close" title="Close">x</button>
                                </div>
                                <div class="modal-body" id="remark-form">
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
        <!--  Modal Remark-->

        <div class="modal-overlay"></div>


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

    <!-- Wow JS -->
    <script src="js/Wow/wow.min.js"></script>

    <!-- Validation-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

    <!-- Custome JS -->
    <script src="js/script.js"></script>

</body>

</html>
