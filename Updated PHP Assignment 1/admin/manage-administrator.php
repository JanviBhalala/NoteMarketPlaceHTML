<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Administrator</title>
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
    
    <!-- Manage Administrator -->
    <section id="manage-administrator">
        <div class="container">
            <!-- Heading -->
            <div class="table-heading  animated fadeInDown pt-4">
                <h2>Manage Administrator</h2>
            </div>
            <!-- Search Tab -->
            <div class=" search-tab row ">
                <div class="col-md-auto  col-sm-12  animated slideInLeft">
                    <a href="admin-add-administrator.php"> <button class="add-btn">Add Administrator</button></a>
                </div>
                <div class="col-md-auto col-sm-12 ml-auto  animated slideInRight">
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
            <section class="table-container-row5 manage-table" id="manage-administrator-table">
                <div class="table-responsive animated slideInUp">
                    <table id="dashbord1" class="table  my-tables ">
                        <thead>
                            <tr>
                                <td class="align-middle">Sr No.</td>
                                <td class="align-middle">First Name</td>
                                <td class="align-middle">Last Name</td>
                                <td class="align-middle">Email</td>
                                <td class="align-middle">Phone No.</td>
                                <td class="align-middle">Date Added</td>
                                <td class="align-middle">Active</td>
                                <td class="align-middle">Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Khyati</td>
                                <td>Patel</td>
                                <td>khyatipatel@gmail.com</td>
                                <td>9898867854</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Rahul</td>
                                <td>Shah</td>
                                <td>rahulshah@gmail.com</td>
                                <td>9798867004</td>
                                <td>07-10-2020, 10:10</td>
                                <td>No</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Suman</td>
                                <td>Trivedi</td>
                                <td>sumantrivedi@gmail.com</td>
                                <td>9567432576</td>
                                <td>10-10-2020, 10:10</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Raj</td>
                                <td>Malhotra</td>
                                <td>sumantrivedi@gmail.com</td>
                                <td>9098098767</td>
                                <td>10-10-2020, 10:10</td>
                                <td>No</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Niya</td>
                                <td>Patel</td>
                                <td>niyapatel@gmail.com</td>
                                <td>8976986756</td>
                                <td>10-10-2020, 10:10</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Suman</td>
                                <td>Trivedi</td>
                                <td>sumantrivedi@gmail.com</td>
                                <td>9567432576</td>
                                <td>10-10-2020, 10:10</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Niya</td>
                                <td>Patel</td>
                                <td>niyapatel@gmail.com</td>
                                <td>8976986756</td>
                                <td>10-10-2020, 10:10</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Raj</td>
                                <td>Malhotra</td>
                                <td>sumantrivedi@gmail.com</td>
                                <td>9098098767</td>
                                <td>10-10-2020, 10:10</td>
                                <td>No</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Rahul</td>
                                <td>Shah</td>
                                <td>rahulshah@gmail.com</td>
                                <td>9798867004</td>
                                <td>07-10-2020, 10:10</td>
                                <td>No</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Khyati</td>
                                <td>Patel</td>
                                <td>khyatipatel@gmail.com</td>
                                <td>9898867854</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Raj</td>
                                <td>Malhotra</td>
                                <td>sumantrivedi@gmail.com</td>
                                <td>9098098767</td>
                                <td>10-10-2020, 10:10</td>
                                <td>No</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Suman</td>
                                <td>Trivedi</td>
                                <td>sumantrivedi@gmail.com</td>
                                <td>9567432576</td>
                                <td>10-10-2020, 10:10</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Niya</td>
                                <td>Patel</td>
                                <td>niyapatel@gmail.com</td>
                                <td>8976986756</td>
                                <td>10-10-2020, 10:10</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Khyati</td>
                                <td>Patel</td>
                                <td>khyatipatel@gmail.com</td>
                                <td>9898867854</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Rahul</td>
                                <td>Shah</td>
                                <td>rahulshah@gmail.com</td>
                                <td>9798867004</td>
                                <td>07-10-2020, 10:10</td>
                                <td>No</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Suman</td>
                                <td>Trivedi</td>
                                <td>sumantrivedi@gmail.com</td>
                                <td>9567432576</td>
                                <td>10-10-2020, 10:10</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Raj</td>
                                <td>Malhotra</td>
                                <td>sumantrivedi@gmail.com</td>
                                <td>9098098767</td>
                                <td>10-10-2020, 10:10</td>
                                <td>No</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Niya</td>
                                <td>Patel</td>
                                <td>niyapatel@gmail.com</td>
                                <td>8976986756</td>
                                <td>10-10-2020, 10:10</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Suman</td>
                                <td>Trivedi</td>
                                <td>sumantrivedi@gmail.com</td>
                                <td>9567432576</td>
                                <td>10-10-2020, 10:10</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Niya</td>
                                <td>Patel</td>
                                <td>niyapatel@gmail.com</td>
                                <td>8976986756</td>
                                <td>10-10-2020, 10:10</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Raj</td>
                                <td>Malhotra</td>
                                <td>sumantrivedi@gmail.com</td>
                                <td>9098098767</td>
                                <td>10-10-2020, 10:10</td>
                                <td>No</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Rahul</td>
                                <td>Shah</td>
                                <td>rahulshah@gmail.com</td>
                                <td>9798867004</td>
                                <td>07-10-2020, 10:10</td>
                                <td>No</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Khyati</td>
                                <td>Patel</td>
                                <td>khyatipatel@gmail.com</td>
                                <td>9898867854</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Raj</td>
                                <td>Malhotra</td>
                                <td>sumantrivedi@gmail.com</td>
                                <td>9098098767</td>
                                <td>10-10-2020, 10:10</td>
                                <td>No</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Suman</td>
                                <td>Trivedi</td>
                                <td>sumantrivedi@gmail.com</td>
                                <td>9567432576</td>
                                <td>10-10-2020, 10:10</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>
                                    <26></26>
                                </td>
                                <td>Niya</td>
                                <td>Patel</td>
                                <td>niyapatel@gmail.com</td>
                                <td>8976986756</td>
                                <td>10-10-2020, 10:10</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
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
    <!-- Manage Administrator -->
    
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
