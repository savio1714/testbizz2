<?php
session_start();
if(!isset($_SESSION['username2']) || !isset($_SESSION['user_type_id_value']) || !isset($_SESSION['user_id']) ){
    echo '<script>location.href = "../login";</script>';
}


 require '../connect.php';

 $uid=$_SESSION["user_id"];
 $user_type_id= $_SESSION["user_type_id_value"];


    $stmt2 = $conn->prepare("SELECT password FROM login where user_id = '".$uid."' and  user_type_id='".$user_type_id."' ");
    $stmt2->execute();

    $stmt2->setFetchMode(PDO::FETCH_ASSOC);

    if($stmt2->rowCount()>0){
    foreach (($stmt2->fetchAll()) as $key2 => $row2) {
        $password=$row2['password'];
    }
    }                                                      
    else{
                                                            
    }



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Change Password | Bizzmirth Holidays</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/fav.ico">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="../images/logo1.png"> -->
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

        <!-- Dashboard -->
        <div id="dashboard">
            <input  type="hidden" id="uid" value="<?php echo $uid;?>">
            <input  type="hidden" id="utid" value="<?php echo $user_type_id;?>">
            <input  type="hidden" id="pass" value="<?php echo  $password;?>">

            <!-- Responsive Navigation Trigger -->
            <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>  

            <?php include 'header.php';?>

            <?php include 'sidebar.php';?>

            <div class="dashboard-content">

                <!-- <div class="row">
                    
                   
                    <div class="col-lg-12 col-md-12">
                        <div class="dashboard-list-box">
                            <h4 class="gray">Offers</h4>
                            <div class="cp-profile">

                                    <label class="cp">Enter Old Password</label>
                                    <input  type="password" id="oldPassword">

                                    <label class="cp">Enter New Password</label>
                                    <input  type="password" id="newPassword">
 
                                    <label class="cp">Confirm New Password</label>
                                    <input type="password" id="confirmPassword"> 


                                </div>
            
                               <br> <button class="button" id="save">Save Changes</button>
                            
                        </div>
                                                 
                    </div>
                </div> -->

 
                 <!-- Change Password -->
                 <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 ">
                        <div class="dashboard-list-box margin-top-0">
                            <h4 class="gray">Change Password </h4>
                            <div class="dashboard-list-box-static">

                                <!-- Change Password -->
                                <div class="my-profile">
                                    <!-- <input  type="text" id="pass" value="<?php echo  $password;?>"> -->

                                    <label class="cp">Enter Old Password</label>
                                    <input  type="password" id="oldPassword">

                                    <label class="cp">Enter New Password</label>
                                    <input  type="password" id="newPassword">
 
                                    <label class="cp">Confirm New Password</label>
                                    <input type="password" id="confirmPassword"> 
                                </div>

                                <button class="button" id="save">Save Changes</button>

                            </div>
                        </div>
                    </div>
                </div>


            </div>


           <!--  <div class="dashboard-content">

                <div class="cp-profile">

                                    <label> <h3> Change Password </h3> </label>
                                    <label class="cp">Enter Old Password</label>
                                    <input  type="password" id="oldPassword">

                                    <label class="cp">Enter New Password</label>
                                    <input  type="password" id="newPassword">
 
                                    <label class="cp">Confirm New Password</label>
                                    <input type="password" id="confirmPassword"> 


                                </div>
            
                               <br> <button class="button" id="save">Save Changes</button>

                            </div> -->
            <div class="copyrights">
                <p>2021  <i class="fa fa-copyright" aria-hidden="true"></i> Bizzmirth <a href="#" target="_blank"></a></p>
            </div>
        </div>


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
    <script src="../js/dashboard-custom.js"></script>
    <script src="../js/jpanelmenu.min.js"></script>
    <script src="../js/counterup.min.js"></script>
    <script src="../assets/js/confirm_pass.js"></script>
    <script type="text/javascript" src="../logout/logout.js"></script>
</body>
</html>