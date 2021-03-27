<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Type</title>
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

    <!-- Manage Type -->
    <section id="manage-type">
        <div class="container">
            <!-- Heading -->
            <div class="table-heading animated fadeInDown pt-4">
                <h2>Manage Type</h2>
            </div>
            <!-- Search Tab -->
            <div class=" search-tab row ">
                <div class="col-md-auto  col-sm-12 animated slideInLeft">
                    <a href="admin-add-type.php"> <button class="add-btn">Add Type</button></a>
                </div>
                <div class="col-md-auto col-sm-12 ml-auto animated slideInRight">
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
            <section class="table-container-row5  manage-table" id="manage-type-table">
                <div class="table-responsive animated slideInUp">
                    <table id="dashbord1" class="table  my-tables">
                        <thead>
                            <tr>
                                <td class="align-middle">Sr No.</td>
                                <td class="align-middle">Type</td>
                                <td class="align-middle">Description</td>
                                <td class="align-middle">Date Added</td>
                                <td class="align-middle">Added By</td>
                                <td class="align-middle">Active</td>
                                <td class="align-middle">Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Value1</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Khyati Patel</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Value2</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>08-10-2020, 10:10</td>
                                <td>Rahul Shah</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Value3</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Suman Trivedi</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Value4</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>11-10-2020, 10:10</td>
                                <td>Raj Malhotra</td>
                                <td>No</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Value5</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>13-10-2020, 10:10</td>
                                <td>Niya Patel</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Value6</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>08-10-2020, 10:10</td>
                                <td>Rahul Shah</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Value7</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>13-10-2020, 10:10</td>
                                <td>Niya Patel</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Value8</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Suman Trivedi</td>
                                <td>No</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Value9</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Khyati Patel</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Value10</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>11-10-2020, 10:10</td>
                                <td>Raj Malhotra</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Value11</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>13-10-2020, 10:10</td>
                                <td>Niya Patel</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Value12</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Suman Trivedi</td>
                                <td>No</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Value13</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Khyati Patel</td>
                                <td>No</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Value14</td>
                                <td>Lorem ipsum dolor sit ame.12</td>
                                <td>11-10-2020, 10:10</td>
                                <td>Raj Malhotra</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Value15</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>13-10-2020, 10:10</td>
                                <td>Niya Patel</td>
                                <td>No</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Value16</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>08-10-2020, 10:10</td>
                                <td>Rahul Shah</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Value17</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>11-10-2020, 10:10</td>
                                <td>Raj Malhotra</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Value18</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>13-10-2020, 10:10</td>
                                <td>Niya Patel</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Value19</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>08-10-2020, 10:10</td>
                                <td>Rahul Shah</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Value20</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>13-10-2020, 10:10</td>
                                <td>Niya Patel</td>
                                <td>No</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Value21</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Suman Trivedi</td>
                                <td>Yes</td>
                                <td><img src="img/icons/edit.png" class="img-responsive pr-2"><img src="img/icons/delete.png" class="img-responsive"></td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Value22</td>
                                <td>Lorem ipsum dolor sit ame.</td>
                                <td>09-10-2020, 10:10</td>
                                <td>Khyati Patel</td>
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
    <!-- Manage Type Ends-->
    
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
