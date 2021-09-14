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


                <div class="sb2-2">
                      <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">

                                    <h4>Payout Details</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                </div>
                                <div class="tab-inn">
                                    <form>
                                       
                                        <div class="row">
                                            <div class="form-group col-md-6 col-sm-12">
                                                <label> Payout Status</label>
                                                <select id="mystate" class="selectdesign">
                                                    <option value="">--Select Payout Status--</option>
                                                     <option value="">Payout Pending</option>
                                                      <option value="">Payout Completed</option>

                                                </select>
                                                </div>
                                             <div class="form-group col-md-6 col-sm-12">
                                                <label> Designation</label>
                                                <select id="mystate" class="selectdesign">
                                                    <option value="">--Select Designation--</option>
                                                     <option value="">Travel Agent</option>
                                                                <option value="">Customer</option>

                                                </select>
                                                </div>

                                                 <div class="form-group col-md-6 col-sm-12">
                                                <label>Customer & ID</label>
                                                <select id="mystate" class="selectdesign">
                                                    <option value="">-- Select Name--</option>
                                                     <option value="">Savio CUS1008</option>
                                                      <option value="">Upasana CU6781</option>
                                                      

                                                </select>
                                                </div>
                                              <div class="form-group col-md-6 col-sm-12">
                                                <label>Level</label>
                                                <select id="mystate" class="selectdesign">
                                                    <option value="">Level 0 </option>
                                                     <option value="">Level 1</option>
                                                      <option value="">Level 2</option>
                                                      

                                                </select>
                                                </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
                </div> 
                <br>                    
                <div class="row">
                    
                    <!-- Listings -->
                    <div class="col-lg-12 col-md-12">
                        <div class="dashboard-list-box">
                            <h4 class="gray">Payout</h4>
                            <div class="table-box">
                            <table class="basic-table booking-table">
                                <thead>
                                    <tr>
                                         <th scope="col">Level</th>
                                         <th scope="col">ID & Name</th>
                                            <th scope="col">Phone No.</th>
                                            <th scope="col">Booking ID</th>
                                            <th scope="col">Package Amount</th>
                                            <th scope="col">Package Name</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">View</th>
                                            <th scope="col">Payment Status</th>


                                    </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                                    <td>Level 1</td>
                                                    <td>CUS098765 savio</td>
                                                    <td>9876543210</td>
                                                    <td>1234567</td>
                                                    <td>Goa Package</td>
                                                    <td>20,000/-</td>
                                                    <td>100/-</td>
                                                     <td>
                                                        <a href="viewpayout.php"><button class="button gray " type="button" id="" >
                                                View
                                                </button></a>
                                                    </td>
                                                    <td>Successful</td>

                                                </tr>

                                                    <tr>
                                                    <td>Level 1</td>
                                                    <td>CUS098765 savio</td>
                                                    <td>9876543210</td>
                                                    <td>1234567</td>
                                                    <td>Goa Package</td>
                                                    <td>20,000/-</td>
                                                    <td>100/-</td>
                                                     <td>
                                                        <a href="viewpayout.php"><button class="button gray " type="button" id="" >
                                                View
                                                </button></a>
                                                    </td>
                                                    <td>Successful</td>

                                                </tr>
                                                 <tr>
                                                    <td>Level 1</td>
                                                    <td>CUS098765 savio</td>
                                                    <td>9876543210</td>
                                                    <td>1234567</td>
                                                    <td>Goa Package</td>
                                                    <td>20,000/-</td>
                                                    <td>100/-</td>
                                                     <td>
                                                        <a href="viewpayout.php"><button class="button gray " type="button" id="" >
                                                View
                                                </button></a>
                                                    </td>
                                                    <td>Successful</td>

                                                </tr>
                                                 <tr>
                                                    <td>Level 1</td>
                                                    <td>CUS098765 savio</td>
                                                    <td>9876543210</td>
                                                    <td>1234567</td>
                                                    <td>Goa Package</td>
                                                    <td>20,000/-</td>
                                                    <td>100/-</td>
                                                     <td>
                                                        <a href="viewpayout.php"><button class="button gray " type="button" id="" >
                                                View
                                                </button></a>
                                                    </td>
                                                    <td>Successful</td>

                                                </tr>
                                  
                                    
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