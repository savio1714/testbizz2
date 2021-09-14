<?php
session_start();
if(!isset($_SESSION['username2']) || !isset($_SESSION['user_type_id_value']) || !isset($_SESSION['user_id']) ){
    echo '<script>location.href = "../login";</script>';
}


$user_type =$_SESSION["user_type_id_value"];
$user_id =$_SESSION["user_id"];

$custid = $_GET['dsfctiddfs'];

if($_SESSION["user_type_id_value"] !='2'){
    echo '<script>location.href = "../login";</script>';
}


if ($user_type =='2'){
    getAllValue($user_type,$user_id,'customer','cust_id',$custid);
}



function  getAllValue($usertype,$user_id,$tablename,$clounmName,$cust_id){

    require '../connect.php';
     $stmt = $conn->prepare("SELECT * FROM $tablename where $clounmName='".$cust_id."'");
    $stmt->execute();
     // set the resulting array to associative
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    if($stmt->rowCount()>0){
        foreach (($stmt->fetchAll()) as $key => $row) {

            $GLOBALS['firstname']=$row['firstname'];
            // $username=$row['username'];
            $GLOBALS['lastname']=$row['lastname'];
            $GLOBALS['email']=$row['email'];
            $GLOBALS['country_code']=$row['country_code'];
            $GLOBALS['contact_no']=$row['contact_no'];
            $GLOBALS['date_of_birth']=$row['date_of_birth'];
            $GLOBALS['gender']=$row['gender'];
            $GLOBALS['address']=$row['address'];
            $GLOBALS['profile_pic']=$row['profile_pic'];
            $GLOBALS['age']=$row['age'];
            $GLOBALS['pincode']=$row['pincode'];


            $GLOBALS['country'] = $row['country'];
            $GLOBALS['state'] = $row['state'];
            $GLOBALS['city'] = $row['city'];



            getAddressParts('countries',$GLOBALS['country'],'states',$GLOBALS['state'],'cities',$GLOBALS['city']);
        }

    }
}


function getAddressParts($country,$countryValue,$state,$stateValue,$city,$cityValue){
        require '../connect.php';

    $stmt2 = $conn->prepare("SELECT country_name,(select state_name from $state where id = '".$stateValue."') as statename, (select city_name from $city where id = '".$cityValue."') as city_name FROM $country where id = '".$countryValue."'");
        $stmt2->execute();

        $stmt2->setFetchMode(PDO::FETCH_ASSOC);

        if($stmt2->rowCount()>0){
        foreach (($stmt2->fetchAll()) as $key2 => $row2) {
            $GLOBALS['city_name']=$row2['city_name'];
            $GLOBALS['statename']=$row2['statename'];
            $GLOBALS['countryname']=$row2['country_name'];
        }
        }                                                      
        else{
                                                                
        }
}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Referral Customer | Bizzmirth Holidays</title>
    <!-- Favicon -->

    <link rel="shortcut icon" type="image/x-icon" href="../images/fav.ico">
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/style2.css" rel="stylesheet" type="text/css">
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

            <div id="testdiv"></div>
            <input id="phoneN" type="hidden" value="<?php echo $contact_no;?>" disabled >
            <input id="emailV" type="hidden" value="<?php echo $email;?>"disabled>
            <input id="country_code" type="hidden" value="<?php echo $country_code;?>" disabled >
            

            <div class="dashboard-content">
            <div class="dashboard-form">
                <div class="row">


                    <!-- Profile -->
                    <div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
                        <div class="dashboard-list-box">
                            <h4 class="gray">Profile Details</h4>
                            <div class="dashboard-list-box-static">
                                
                                <!-- Avatar -->
                                <div class="edit-profile-photo">
                                    
                                    <?php if($user_type =='2'){
                                        echo'<img id="img" src="../uploading/'.$profile_pic.'" alt="Profile">';
                                    }else{
                                        echo'<img src="" alt="noProfile">';
                                    }
                                    ?>
                                    <input type="hidden" name="profile_pic" id="profile_pic" value="<?php echo $profile_pic?>" disabled>

                                   <!--  <input type="file" id="file2" name="file2" /> -->

                                    <!-- <div class="change-photo-btn">
                                        <div class="photoUpload">
                                            <span><i class="fa fa-upload"></i> Upload Photo</span>
                                            <input type="file" id="file" name="file" class="upload" />
                                        </div>

                                    </div> -->



                                </div>
                                <!-- <div id="profileMessage" class="mymessagecolor"></div> -->
                                
            
                                <!-- Details -->
                                <div class="my-profile">

                                    <label>First Name</label>
                                    <input id="firstname" type="text" value="<?php echo $firstname;?>" readonly>
                                    <div id="fnameMessage" class="mymessagecolor" ></div>

                                    <label>Last Name</label>
                                    <input id="lastname"  type="text" value="<?php echo $lastname;?>" readonly>
                                    <div id="lnameMessage" class="mymessagecolor" ></div>

                                    <label>Phone Number</label>
                                    <input id="contact_no" type="text" value="<?php echo $contact_no;?>" readonly>
                                    <div id="phoneMessage" class="mymessagecolor" ></div>

                                    <label>Email Address</label>
                                    <input id="emailvalue" type="text" value="<?php echo $email;?>" readonly>
                                    <div id="emailMessage" class="mymessagecolor" ></div>

                                     <label>Gender</label>
                                <div class="" >

                                    <input id="check-a" type="radio" class="gender" name="gender" value="male" <?php if ($gender == 'male'){echo ' checked ';} ?>>
                                    <label style="display: inline-block;" for="check-a" >Male</label>

                                    <input id="check-b" type="radio" class="gender" name="gender" value="female" <?php if ($gender == 'female'){echo ' checked ';} ?>>
                                    <label  style="display: inline-block;" for="check-b">Female</label>

                                    <input id="check-c" type="radio" class="gender" name="gender" value="others" <?php if ($gender == 'others'){echo ' checked ';} ?>>
                                    <label style="display: inline-block;" for="check-c">Others</label>

                                    
                                </div>
                                <div id="genderMessage" class="mymessagecolor"></div>

                                <label>Date of Birth</label>
                                    <input type="text" id="bdate" value="<?php echo $date_of_birth;?>" readonly>
                                </div>
                                <div id="dobMessage" class="mymessagecolor"></div>
            
                                <!-- <button id="saveChange" class="button">Save Changes</button> -->

                            </div>
                        </div>
                    </div>

                    <!-- Change Password -->
                    <div class="col-lg-6 col-md-6 col-xs-12 padding-left-30">
                        <div class="dashboard-list-box margin-top-0">
                            <h4 class="gray">Address</h4>
                            <div class="dashboard-list-box-static">

                                <!-- Change Password -->
                                <div class="my-profile">
                                    <label class="margin-top-0">Country</label>

                                        <input id="countryname" type="text" value="<?php echo $countryname;?>" readonly>
                                        
                                        <!-- <div id="countryMessage" class="mymessagecolor" ></div> -->

                                    <label>State</label>
                                       <input id="statename" type="text" value="<?php echo $statename;?>" readonly>
                                        <!-- <div id="stateMessage" class="mymessagecolor"></div> -->

                                    <label>City</label>
                                    <input id="city_name" type="text" value="<?php echo $city_name;?>" readonly>
                                    
                                        <!-- <div id="cityMessage" class="mymessagecolor" ></div> -->

                                    <label>Zip Code *</label>
                                    <input type="text" id="pin"  value="<?php echo $pincode;?>" readonly>

                                    <label>Full Address</label>
                                    <textarea id="address" readonly><?php echo $address;?></textarea>
                                    <!-- <div id="addressMessage" class="mymessagecolor"></div> -->

                                    
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-xs-12 padding-left-30">
                        <div class="dashboard-list-box-static">
                             <a href="./" class="button">Back</a>';
                            <!-- <button id="saveChange" class="button">Save Changes</button>
                            <div id="savemessage" style="display:none;color: #e74c3c;font-size: 85%;"></div> -->
                        </div>
                    </div>

                </div>
            </div>

            <input id="utss" type="hidden" value="<?php echo $user_type;?>"  disabled>
            <input id="uiss" type="hidden" value="<?php echo $user_id?>" disabled >
            <input type="hidden" id="invalidimage1" name="invalidimage1" disabled >

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
    <script src="../js/dashboard-custom.js"></script>
    <script src="../js/jpanelmenu.min.js"></script>
    <script src="../js/counterup.min.js"></script>
    <script src="../assets/js/register.js"></script>
    <!-- <script src="../assets/js/upload_file.js"></script> -->
    <script type="text/javascript" src="../logout/logout.js"></script>


    

</body>
</html>

