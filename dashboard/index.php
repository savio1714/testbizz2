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

    <title>Dashboard | Bizzmirth Holidays</title>
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="../images/logo1.png"> -->
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

                    <!-- Item -->
                    <div class="col-lg-3 col-md-6 col-xs-6">
                        <div class="dashboard-stat color-1">
                            <div class="dashboard-stat-content"><h4>0</h4> <span>Total Activities</span></div>
                            <div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
                            <div class="dashboard-stat-item"><p>Check your total activities</p></div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col-lg-3 col-md-6 col-xs-6">
                        <div class="dashboard-stat color-2">
                            <div class="dashboard-stat-content"><h4>0</h4> <span>Total Bookings</span></div>
                            <div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
                            <div class="dashboard-stat-item"><p>Check your total bookings</p></div>
                        </div>
                    </div>


                    <!-- Item -->
                    <div class="col-lg-3 col-md-6 col-xs-6">
                        <div class="dashboard-stat color-3">
                            <div class="dashboard-stat-content"><h4>0</h4> <span>Total Reviews</span></div>
                            <div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
                            <div class="dashboard-stat-item"><p>Check your reviews</p></div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-xs-6">
                        <div class="dashboard-stat color-4">
                            <div class="dashboard-stat-content"><h4>0</h4> <span>Total Offers</span></div>
                            <div class="dashboard-stat-icon"><i class="im im-icon-Heart"></i></div>
                            <div class="dashboard-stat-item"><p>Your offers</p></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 traffic">
                        <div class="dashboard-list-box">
                            <h4 class="gray">Recent Bookings</h4>
                            <div class="table-box">
                                <table class="basic-table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Booking ID</th>
                                            <th>Destination</th>
                                            <th>No of Tickets</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="6"> No Booking...</td>
                                           <!--  <td class="t-id">C001</td>
                                            <td>Dubai</td>
                                            <td>5</td>
                                            <td>$300.00</td>
                                            <td><a href="#" class="button">View</a></td> -->
                                        </tr>
                                        <!-- <tr>
                                            <td>01/01/2017</td>
                                            <td class="t-id">C081</td>
                                            <td>Grece - Zakynthos</td>
                                            <td>5</td>
                                            <td>$300.00</td>
                                            <td><a href="#" class="button">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>01/01/2017</td>
                                            <td class="t-id">C001</td>
                                            <td>Bulgary - Sunny Beach</td>
                                            <td>5</td>
                                            <td>$300.00</td>
                                            <td><a href="#" class="button">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>01/01/2017</td>
                                            <td class="t-id">C001</td>
                                            <td>France - Paris</td>
                                            <td>5</td>
                                            <td>$300.00</td>
                                            <td><a href="#" class="button">View</a></td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row">      
                    <!-- Recent Activity -->
                    <div class="col-lg-12 col-md-12 col-xs-12 traffic">
                        <div class="dashboard-list-box with-icons margin-top-20">
                            <h4 class="gray">Recent Activities</h4>
                            <ul>

                                 <?php
                                                require '../connect.php';
                                                $stmt = $conn->prepare("SELECT * FROM logs where (from_whom='".$_SESSION['user_type_id_value']."' and register_by='".$_SESSION['user_type_id_value']."') and reference_no='".$_SESSION['user_id']."' and status='1' order by  register_date desc limit 8");
                                                $stmt->execute();
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {

                                                        $title=$row['title'];
                                                        $message2=$row['message'];
                                                        $ref_no =$row['reference_no'];

                                                        $ld= new DateTime($row['register_date']);
                                                        $latestDate= $ld->format('d M, Y'); 
                                                        

                                                        
                                                        
                                                        echo '
                                                         <li>
                                                            <i class="list-box-icon sl sl-icon-clock"></i>
                                                            '.$latestDate. '<h5>'.$message2.'</h5>
                                                        </li>



                                                        ';

                                                    }
                                                      
                                                } 
                                                    else{
                                                        echo ' <li>
                                                                    <i class="list-box-icon sl sl-icon-clock"></i>
                                                                    No Recent Activity
                                                                    
                                                                </li>';
                                                    }
                                        ?>
                                <!-- <li>
                                    <i class="list-box-icon sl sl-icon-clock"></i> Your listing <strong><a href="#">Hotel Govendor</a></strong> has been approved!
                                    <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                                </li> -->

                                

                            </ul>
                        </div>
                    </div>
                </div>
                <?php 

                if($_SESSION['user_type_id_value'] =='2'){

                    require '../connect.php';
                    echo '<div class="row"> 
                        <div class="col-lg-12 col-md-12 col-xs-12 traffic">
                        <div class="dashboard-list-box margin-top-20 user-list">
                        <h4 class="gray">Referral Customer</h4>
                        <ul>';

                    $stmt4 = $conn->prepare("SELECT * FROM customer where user_type='2' and  customer_reference_no='".$_SESSION['user_id']."' and status='1' order by level");
                                                $stmt4->execute();

                                                    // set the resulting array to associative
                                                $stmt4->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt4->rowCount()>0){
                                                    foreach (($stmt4->fetchAll()) as $key4 => $row4) {
                                                        $profile_pic=$row4['profile_pic'];
                                                        $firstname=$row4['firstname'];
                                                        $lastname=$row4['lastname'];
                                                        $cust_id=$row4['cust_id'];
                                                    
                                                                echo'<li>
                                                                    <div class="user-list-item">
                                                                        <div class="user-list-image">
                                                                            <img src="../uploading/'.$profile_pic.'" alt="">
                                                                        </div>
                                                                        <div class="user-list-content">
                                                                            <h4>'.$firstname.' '.$lastname.'</h4>
                                                                            <span>Customer</span>
                                                                        </div>
                                                                        <div class="user-btns">
                                                                            <a href="view_referral_customer_details?dsfctiddfs='.$cust_id.'" class="button">View</a>';
                                                                            // <a href="#" class="button">Edit</a>
                                                                        echo '</div>
                                                                    </div>
                                                                </li>';
                                                            }
                                                            
                                                }else{
                                                    echo'<li>
                                                           <div class="user-list-item">
                                                                No Referral Customer
                                                            </div>
                                                        </li>';

                                                }
                        echo'   
                                    </ul>
                                </div>
                            </div>
                                                           
                        </div>';
                    }

                ?>
                
                
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
    <script src="../js/plugin.js"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="../js/chart.js"></script>
    <script src="../js/dashboard-custom.js"></script>
    <script src="../js/jpanelmenu.min.js"></script>
    <script src="../js/counterup.min.js"></script>
    <script type="text/javascript" src="../logout/logout.js"></script>
</body>
</html>