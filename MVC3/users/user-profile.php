<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php
    include "process/connection.php";
    $user_id= $_SESSION["user_id"];
    $i=0;
    
    $q="SELECT COUNT(user_id) FROM user_profile WHERE user_id = '$user_id'";
    $rslt=mysqli_query($conn, $q);
    $r= mysqli_fetch_assoc($rslt);
        
    if($r["COUNT(user_id)"]==1){
        $q="SELECT * FROM user_profile WHERE user_id = '$user_id'";
        $q2="SELECT * FROM users WHERE user_id = '$user_id'";
        $result=mysqli_query($conn, $q);
        $result2=mysqli_query($conn, $q2);
        $row= mysqli_fetch_assoc($result);
        $row2= mysqli_fetch_assoc($result2);
		
        
        if($result && $result2){
            $i=1;
              $uni=$row['university'];
            $college=$row['college'];
            if($row['gender']==2){
                $g="Male";
            }
            else if($row['gender']==1){
                $g="Female";
            }
            else{
                $g="other";
            }
        }
    }
    
    
    
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.png">
    
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

        <!-- User Profile -->
        <section id="top_banner">
            <div class="banner">
                <div class="inner text-center animated fadeInDown">
                    <h2>User Profile</h2>
                </div>

            </div>
        </section>


        <!-- User Profile Form-->

        <section>
            <div class="container">
                <?php
                        if( !empty( $_REQUEST['msg'] ) )
                            {
                                echo sprintf( '<br/><p class="txt_green">%s</p>', $_REQUEST['msg'] );
                            }
                        
                        if( !empty( $_REQUEST['msg1'] ) )
                            {
                                echo sprintf( '<br/><p class="error">%s</p>', $_REQUEST['msg1'] );
                            }
                        ?>
                <form id="main-contact-form" class="contact-form" name="contact-form profile_form" method="post" action="process/addProfile.php" enctype="multipart/form-data">

                    <!-- Basic Profile-->
                    <div class="section-heading animated fadeInDown">
                        <h2>Basic Profile Details </h2>
                    </div>
                    <div class="row contact-wrap">
                        <div class="status alert alert-success" style="display: none"></div>
                        <div class="col-md-6 col-sm-12 col-xs-12 animated slideInLeft">

                            <div class="form-group mb-4">
                                <label class="required">First Name</label>
                                <input type="text" required name="first_name" class="form-control mb-0" <?php if($i==1){ ?>value="<?php echo $row2['fname']; ?>" <?php }?> placeholder="Enter your first name">
                            </div>

                            <div class="form-group mb-4">
                                <label class="required">Email</label>
                                <input type="email" required name="email" class="form-control mb-0" placeholder="Enter your email address" <?php if($i==1){ ?>value="<?php echo $row['email2']; ?>" <?php }?>>
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <div class="styled-select form-control">
                                    <select name="gender" id="user-gender" class="form-control">
                                        <?php if($i==1){ ?>
                                        <option value="<?php echo $row['gender'];?>" selected="selected"><?php echo $g; ?>
                                        </option><?php }?>
                                        <option value="0">Other</option>
                                        <option value="2">Male</option>
                                        <option value="1">Female</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Profile Picture</label>
                                <input type="file" class="form-control input-img" name="profile" accept="image/png, image/jpeg">
                            </div>

                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12 animated slideInRight">

                            <div class="form-group mb-4">
                                <label class="required ">Last Name</label>
                                <input type="text" required name="last_name" class="form-control mb-0" placeholder="Enter your last name" <?php if($i==1){ ?>value="<?php echo $row2['lname']; ?>" <?php }?>>
                            </div>

                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <input type="date" name="date-of-birth" class="form-control" placeholder="Enter date of birth" <?php if($i==1){ ?>value="<?php echo $row['dob']; ?>" <?php }?>>
                            </div>

                            <div class="form-group">
                                <label class="required">Phone Number</label>
                                <div class="row">
                                    <div class="styled-select form-control phone">
                                        <select name="phone" id="phone-code" class="form-control ">
                                            <?php if($i==1){ ?>
                                            <option value="<?php echo $row['country_code'];?>" selected="selected"><?php echo $row['country_code']; ?>
                                            </option><?php }?>
                                            <option value="+91">+91</option>
                                            <option value="+90">+90</option>
                                            <option value="-">Other</option>
                                        </select>
                                    </div>
                                    <input type="number" name="phone-number" class="form-phone-number col-md-auto" placeholder="Enter your email address" <?php if($i==1){ ?>value="<?php echo $row['mobile']; ?>" <?php }?>>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Address Detaild-->
                    <div class="section-heading wow fadeInDown">
                        <h2>Address Detail</h2>
                    </div>
                    <div class="row contact-wrap">
                        <div class="status alert alert-success" style="display: none"></div>
                        <div class="col-md-6 col-sm-12 col-xs-12 wow slideInLeft">

                            <div class="form-group mb-4">
                                <label class="required">Address Line 1</label>
                                <input type="text" required name="address_line_1" class="form-control mb-0" placeholder="Enter your address name" <?php if($i==1){ ?>value="<?php echo $row['address1']; ?>" <?php }?>>
                            </div>

                            <div class="form-group mb-4">
                                <label class="required">City</label>
                                <input type="text" required name="city" class="form-control mb-0" placeholder="Enter your city " <?php if($i==1){ ?>value="<?php echo $row['city']; ?>" <?php }?>>
                            </div>

                            <div class="form-group mb-4">
                                <label class="required">ZipCode</label>
                                <input type="text" required name="zipcode" class="form-control mb-0" placeholder="Enter your zipcode " <?php if($i==1){ ?>value="<?php echo $row['zip_code']; ?>" <?php }?>>
                            </div>

                        </div>
                        <div class=" col-md-6 col-sm-12 col-xs-12 wow slideInRight">

                            <div class="form-group mb-4">
                                <label class="required">Address Line 2</label>
                                <input type="text" required name="address_line_2" class="form-control mb-0" placeholder="Enter your address" <?php if($i==1){ ?>value="<?php echo $row['address2']; ?>" <?php }?>>
                            </div>

                            <div class="form-group mb-4">
                                <label class="required">State</label>
                                <input type="text" name="state" required class="form-control mb-0" placeholder="Enter your state " <?php if($i==1){ ?> value="<?php echo $row['state']; ?>" <?php } ?>>
                            </div>

                            <div class="form-group mb-4">
                                <label class="required">Country</label>
                                <div class="styled-select form-control">
                                    <select name="country" id="user-country" class="form-control mb-0" required>
                                        <?php if($i==1){ ?>
                                        <option value="<?php echo $row['country'];?>" selected="selected"><?php echo $row['country']; ?>
                                        </option><?php }?>
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
                    </div>
                    <!-- University and College Info-->
                    <div class="section-heading wow fadeInDown">
                        <h2>University and College Information</h2>
                    </div>

                    <div class="row contact-wrap">

                        <div class="col-md-6 col-sm-12 col-xs-12 wow slideInLeft">
                            <div class="form-group mb-4">
                                <label class="required">University</label>

                                <input type="text" name="university" required class="form-control mb-0" placeholder="Enter your university " <?php if($i==1){ ?>value="<?php echo $uni; ?>" <?php } ?>>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12 wow slideInRight">
                            <div class="form-group mb-4">

                                <label class="required ">College</label>
                                <input type="text" name="college" class="form-control mb-0" required placeholder="Enter your college" <?php if($i==1){ ?>value="<?php echo $college; ?>" <?php } ?>>
                            </div>
                        </div>

                        <div class="col-md-12"> <button class="small-btn" name="profile_submit_btn">Submit</button></div>
                    </div>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <?php include "includes/footer.php"; ?>
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
