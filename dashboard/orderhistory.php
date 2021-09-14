<?php
session_start();
if(!isset($_SESSION['username2']) || !isset($_SESSION['user_type_id_value']) || !isset($_SESSION['user_id']) ){
    echo '<script>location.href = "../login";</script>';
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Trips | Bizzmirth Holidays</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../images/fav.ico">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="../font/flaticon.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="../css/plugin.css" rel="stylesheet" type="text/css">
    <!--Dashboard CSS-->
    <link href="../css/dashboard.css" rel="stylesheet" type="text/css">
    <link href="../css/icons.css" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard">

            <!-- Responsive Navigation Trigger -->
            <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>  
            
            <?php include 'header.php';?>

            <?php include 'sidebar.php';?>

            <div class="dashboard-content">

                                                
                <div class="row">
                    
                    <!-- Listings -->
                    <div class="col-lg-12 col-md-12">
                        <div class="dashboard-list-box">
                            <h4 class="gray">Order History</h4>
                            <div class="table-box">
                            <table class="basic-table booking-table">
                                <thead>
                                    <tr>
                                         <th scope="col">Order ID</th>
                                         <th scope="col">Cutomer ID</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Package Amount</th>
                                            <th scope="col">Package Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">View</th>


                                    </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                                     <td>12345678</td>
                                                    <td>CUS123D</td>
                                                    <td>Savio</td>
                                                    <td>09/09/2018</td>
                                                    <td>20,000/-</td>
                                                    <td>Coorg Package</td>
                                                  <td>Successful</td>
                                                    <td>
                                                        <a href="vieworderhistory.php"><button class="button gray " type="button" id="" >
                                                View
                                                </button></a>
                                                    </td></tr>

                                                    <tr>
                                                     <td>12345678</td>
                                                    <td>CUS123D</td>
                                                    <td>Savio</td>
                                                    <td>09/09/2018</td>
                                                    <td>20,000/-</td>
                                                    <td>Coorg Package</td>
                                                  <td>Successful</td>
                                                    <td>
                                                        <a href="vieworderhistory.php"><button class="button gray " type="button" id="" >
                                                View
                                                </button></a>
                                                    </td> </tr>
                                                    <tr>
                                                     <td>12345678</td>
                                                    <td>CUS123D</td>
                                                    <td>Savio</td>
                                                    <td>09/09/2018</td>
                                                    <td>20,000/-</td>
                                                    <td>Coorg Package</td>
                                                  <td>Successful</td>
                                                    <td>
                                                        <a href="vieworderhistory.php"><button class="button gray " type="button" id="" >
                                                View
                                                </button></a>
                                                    </td> </tr>
                                  
                                    
                                   <!--  <tr>
                                        <td>01/01/2017</td>
                                        <td>U.A.E. - Dubai</td>
                                        <td>$300.00</td>
                                        <td class="textright">
                                            <div class="dropdown">
                                                <button class="button gray dropdown-toggle" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="">
                                                    <a class="dropdown-item" href="#">Send Email</a>
                                                    <a class="dropdown-item" href="#">Print PDF</a>
                                                    <a class="dropdown-item del" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                                   
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="pagination-container">
                            <nav class="pagination">
                                <ul>
                                    <li><a href="#" class="current-page">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>                          
                    </div>
                </div>
            </div>


            <!-- Content / End -->
            <!-- Copyrights -->
            <div class="copyrights">
                <p>2021  <i class="fa fa-copyright" aria-hidden="true"></i> Bizzmirth <a href="#" target="_blank"></a></p>
            </div>
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->


    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts* -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/plugin.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/dashboard-custom.js"></script>
    <script src="../js/jpanelmenu.min.js"></script>
    <script src="../js/counterup.min.js"></script>
    <script type="text/javascript" src="../logout/logout.js"></script>
</body>
</html>