<?php
session_start();
if(!isset($_SESSION['username2']) || !isset($_SESSION['user_type_id_value']) || !isset($_SESSION['user_id']) ){
    echo '<script>location.href = "../login";</script>';
}

if($_SESSION["user_type_id_value"] !='4'){
    echo '<script>location.href = "../login";</script>';
}


$user_type =$_SESSION["user_type_id_value"];
$user_id =$_SESSION["user_id"];
$f_firstname =$_SESSION["username2"];
$f_lastname =$_SESSION["lname"];

$id = $_GET['vkvbvjfgfikix'];
$country = $_GET['ncy'];
$state = $_GET['mst'];
$city = $_GET['hct'];


require '../connect.php';


    $stmt = $conn->prepare("SELECT *, (select city_name from cities where id = '".$city."'), (select state_name from states where id = '".$state."') as statename, (select city_name from cities where id = '".$city."') as city_name,(select country_name from countries where id = '".$country."') as countryname FROM `travel_agent` where travel_agent_id ='".$id."'");
    $stmt->execute();
     // set the resulting array to associative
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    if($stmt->rowCount()>0){
    foreach (($stmt->fetchAll()) as $key => $row) {
        // $fid=$row['id'];
        $firstname=$row['firstname'];
        // $username=$row['username'];
        $lastname=$row['lastname'];
        $email=$row['email'];
        $country_code=$row['country_code'];
        $contact_no=$row['contact_no'];
        $date_of_birth=$row['date_of_birth'];
        $gender=$row['gender'];
        $address=$row['address'];


        // $id_proof=$row['id_proof'];
        $profile_pic=$row['profile_pic'];
        $kyc=$row['kyc'];
        $pan_card=$row['pan_card'];
        $aadhar_card=$row['aadhar_card'];
        $voting_card=$row['voting_card'];
        $bank_passbook=$row['bank_passbook'];

        $city_name=$row['city_name'];
        $statename=$row['statename'];
        $countryname=$row['countryname'];
        $pincode=$row['pincode'];



 
    }

    $stmt2 = $conn->prepare("select sortname from countries where country_code = '".$country_code."'");
    $stmt2->execute();
     // set the resulting array to associative
    $stmt2->setFetchMode(PDO::FETCH_ASSOC);

    if($stmt2->rowCount()>0){
        foreach (($stmt2->fetchAll()) as $key2 => $row2) {
            $sortname = $row2['sortname'];

        }


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

    <title>Edit Travel Agent | Bizzmirth Holidays</title>
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
    <style type="text/css">
        .dashboard-form:after{
    position: absolute;
  width: 1px;
  height: 84%;
  content: '';
  background: none;
  left: 50%;
  top: 8%;
}

.imgsize{
    width: 150px;
    height: 150px;
  /*  margin-bottom: 5%;*/
}
    </style>
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

             <div id="testpho"></div>
            <div id="testemails"></div>
            <input id="phoneN" type="hidden" value="<?php echo $contact_no;?>" >
            <input id="emailV" type="hidden" value="<?php echo $email;?>" >
            

            <div class="dashboard-content">
            <div class="dashboard-form">
                <div class="row">


                    <!-- Profile -->
                    <div class="col-lg-12 col-md-12 col-xs-12 padding-right-30">
                        <div class="dashboard-list-box">
                            <h4 class="gray">Edit Travel Agent Details</h4>
                            <div class="dashboard-list-box-static">
                                
                                <!-- Avatar -->
                                <div class="edit-profile-photo">
                                    
                                    <img id="img" src="<?php echo '../uploading/'.$profile_pic;?>" alt="Profile Pic">
                                    <input type="hidden" name="profile_pic" id="profile_pic" value="<?php echo $profile_pic;?>" disabled>

                                   <!--  <input type="file" id="file2" name="file2" /> -->

                                    <div class="change-photo-btn">
                                        <div class="photoUpload">
                                            <span><i class="fa fa-upload"></i> Upload Photo</span>
                                            <input type="file" id="file" name="file" class="upload" />
                                        </div>

                                    </div>



                                </div>
                                <div id="profileMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                
            
                                <!-- Details -->
                                <div class="my-profile">

                                <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                        <label>Franchisee ID</label>
                                        <input id="f_id" type="text" placeholder="Franchisee ID" value="<?php echo $user_id?>" readonly>
                                        <!-- <div id="fnameMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div> -->
                                    </div>
                                    

                                   <div class="col-lg-6 col-md-6">
                                        <label>Franchisee Name</label>
                                        <input id="f_name"  type="text" placeholder="Franchisee Name" value="<?php echo $f_firstname . ' '. $f_lastname;?>" readonly>
                                        <!-- <div id="lnameMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div> -->
                                   </div>
                                </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <label>Travel Agent First Name</label>
                                            <input id="firstname" type="text" placeholder="Enter First Name" value="<?php echo $firstname?>">
                                            <div id="fnameMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                        </div>
                                    

                                        <div class="col-lg-6 col-md-6">
                                            <label>Travel Agent Last Name</label>
                                            <input id="lastname"  type="text" placeholder="Enter Last Name" value="<?php echo $lastname?>">
                                            <div id="lnameMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                       </div>
                                    </div>

                                    <label>Phone Number</label>

                                    <div class="row">
                                        
                                    
                                        <div class="col-lg-4 col-md-4 col-sm-4 ">

                                        <?php
                                            require '../connect.php';
                                            $stmt = $conn->prepare("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");
                                            $stmt->execute();

                                                                                               
                                            $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                            ?>
                                            <select  id="countrycode">
                                            <option value="<?php echo $country_code;?>"><?php echo '+'.$country_code.' ('.$sortname.') (Already Selected)' ; ?></option>
                                            <?php 
                                            if($stmt->rowCount()>0){
                                                 foreach (($stmt->fetchAll()) as $key => $row) {  
                                                    echo '<option value="'.$row['country_code'].'">+'.$row['country_code'].'('.$row['sortname'].')</option>'; 
                                                } 
                                            }else{ 
                                                echo '<option value="">No Country Code available</option>'; 
                                            } 
                                            ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                             <input id="phone" type="text" placeholder="Phone Number" value="<?php echo $contact_no?>">
                                        </div>
                                    </div>

                                           
                                    
                                    <div id="phoneMessage" style="display:none;color: #e74c3c;font-size: 85%;">  
                                    </div>




                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                        <label>Email Address</label>
                                        <input id="emailvalue" type="text" placeholder="abc@xyz.com" value="<?php echo $email;?>">
                                        <div id="emailMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <label>Date of Birth</label>
                                        <input type="date" id="bdate" value="<?php echo $date_of_birth;?>">
                                        <div id="dobMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                            
                                        <div class="col-lg-6 col-md-6">
                                        <label>Gender</label>

                                        <input id="check-a" type="radio" class="gender" name="gender" value="male" <?php if ($gender == 'male'){echo ' checked ';} ?> />
                                        <label style="display: inline-block;" for="check-a" >Male</label>

                                        <input id="check-b" type="radio" class="gender" name="gender" value="female" <?php if ($gender == 'female'){echo ' checked ';} ?> />
                                        <label  style="display: inline-block;" for="check-b">Female</label>

                                        <input id="check-c" type="radio" class="gender" name="gender" value="others" <?php if ($gender == 'others'){echo ' checked ';} ?> />
                                        <label style="display: inline-block;" for="check-c">Others</label>
                                         <div id="genderMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                    

                                        </div>

                                    </div>

                                     
                               

                                

                                </div>  <!-- closing my-profile-->

                                

                                 <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        
                                        <label class="margin-top-0">Country</label>

                                        <?php
                                            require '../connect.php';
                                            $stmt = $conn->prepare("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");
                                            $stmt->execute();

                                                                                               
                                            $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                            ?>
                                    
                                        <select id="country" class="chosen-select-no-single" >
                                             <option value="<?php echo $country;?>"><?php echo $countryname.' (Already Selected)' ; ?></option>
                                            <?php 
                                            if($stmt->rowCount()>0){
                                                 foreach (($stmt->fetchAll()) as $key => $row) {  
                                                    echo '<option value="'.$row['id'].'">'.$row['country_name'].'</option>'; 
                                                } 
                                            }else{ 
                                                echo '<option value="">Country not available</option>'; 
                                            } 
                                            ?>
                                        </select>
                                        <div id="countryMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>

                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <label>State</label>
                                        <select id="mystate" class="chosen-select-no-single" >
                                             <?php
                                                        require '../connect.php';
                                                        $stmt = $conn->prepare("SELECT * FROM states WHERE country_id = '".$country."' AND status = 1 ORDER BY state_name ASC");
                                                        $stmt->execute();

                                                                                                           
                                                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                        ?>
                                                        
                                                        <option value="<?php echo $state;?>"><?php echo $statename.' (Already Selected)' ; ?></option>
                                                        <?php 
                                                        if($stmt->rowCount()>0){
                                                             foreach (($stmt->fetchAll()) as $key => $row) {  
                                                                echo '<option value="'.$row['id'].'">'.$row['state_name'].'</option>'; 
                                                            } 
                                                        }else{ 
                                                            echo '<option value="">State not available</option>'; 
                                                        } 
                                                        ?>
                                        </select>
                                        <div id="stateMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                    </div>
                                     
                                 </div>

                                    
                                    <div class="row">

                                        <div class="col-lg-6 col-md-6">
                                            <label>City</label>
                                            <select id="city" class="chosen-select-no-single" >
                                                <?php
                                                        require '../connect.php';
                                                        $stmt = $conn->prepare("SELECT * FROM cities WHERE state_id = '".$state."' AND status = 1 ORDER BY city_name ASC");
                                                        $stmt->execute();

                                                                                                           
                                                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                        ?>
                                                        
                                                        <option value="<?php echo $city;?>"><?php echo $city_name.' (Already Selected)' ; ?></option>
                                                        <?php 
                                                        if($stmt->rowCount()>0){
                                                             foreach (($stmt->fetchAll()) as $key => $row) {  
                                                                echo '<option value="'.$row['id'].'">'.$row['city_name'].'</option>'; 
                                                            } 
                                                        }else{ 
                                                            echo '<option value="">City not available</option>'; 
                                                        } 
                                                        ?>
                                            </select>
                                            <div id="cityMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <label>Zip Code</label>
                                            <input type="text" id="pin"  placeholder="Pincode" value="<?php echo $pincode;?>" readonly>
                                        </div>
                                        
                                    </div>
                                        

                                    

                                    <label>Full Address</label>
                                    <textarea id="address" placeholder="Enter Address" ><?php echo $address; ?></textarea>
                                    <div id="addressMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>


                                    <div class="row">
                                        <label class="margin-top-0" style="margin: 17px;">Upload Proof</label>

                                         <div class="col-lg-4 col-md-6 col-xs-6">
                                        
                                        <div class="edit-profile-photo">

                                         <!-- <img id="img6" src="../images/id-proof-line.png" alt=""> -->
                                         <?php
                                                        if($bank_passbook ==''){
                                                            echo '<img src="../uploading/not_uploaded.png" alt="Bank Passbook" class="imgsize" id="img6">';
                                                        }else{
                                                            echo '<img src="../uploading/'.$bank_passbook.'" alt="Bank Passbook" class="imgsize" id="img6">';
                                                        }
                                                     ?>
                                    
                                        <input type="hidden" name="passbook" id="passbook" value="<?php echo $bank_passbook;?>" disabled>


                                        <div class="change-photo-btn">
                                            <div class="photoUpload">
                                                <span><i class="fa fa-upload"></i> Bank Passbook</span>
                                                <input type="file" id="file6" name="file6" class="upload" />
                                            
                                            </div>

                                        </div>



                                        </div>
                                    </div>
                                        
                                        <!-- <div class="col-lg-4 col-md-6 col-xs-6">
                                        
                                            <div class="edit-profile-photo">
                                             

                                             <?php
                                                        if($kyc ==''){
                                                            echo '<img src="../uploading/not_uploaded.png" alt="Kyc" class="imgsize" id="img2">';
                                                        }else{
                                                            echo '<img src="../uploading/'.$kyc.'" alt="KYC" class="imgsize" id="img2">';
                                                        }
                                                     ?>
                                        
                                            <input type="hidden" name="kyc" id="kyc" value="<?php echo $kyc;?>" disabled>


                                            <div class="change-photo-btn">
                                                <div class="photoUpload">
                                                    <span><i class="fa fa-upload"></i> KYC</span>
                                                    <input type="file" id="file2" name="file2" class="upload" />
                                                
                                                </div>

                                            </div>



                                        </div>

                                        </div> -->
                                        <div class="col-lg-4 col-md-6 col-xs-6">
                                            
                                            <div class="edit-profile-photo">
                                             <!-- <img id="img3" src="../images/id-proof-line.png" alt=""> -->
                                              <?php
                                                        if($pan_card ==''){
                                                            echo '<img src="../uploading/not_uploaded.png" alt="Pan Card" class="imgsize" id="img3">';
                                                        }else{
                                                            echo '<img src="../uploading/'.$pan_card.'" alt="Pan Card" class="imgsize"  id="img3">';
                                                        }
                                                     ?>
                                        
                                            <input type="hidden" name="pan_card" id="pan_card" value="<?php echo $pan_card;?>" disabled>


                                            <div class="change-photo-btn">
                                                <div class="photoUpload">
                                                    <span><i class="fa fa-upload"></i> Pan Card</span>
                                                    <input type="file" id="file3" name="file3" class="upload" />
                                                
                                                </div>

                                            </div>



                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-xs-6">
                                            
                                            <div class="edit-profile-photo">
                                             <!-- <img id="img4" src="../images/id-proof-line.png" alt=""> -->
                                             <?php
                                                        if($aadhar_card ==''){
                                                            echo '<img src="../uploading/not_uploaded.png" alt="Aadhar Card" class="imgsize" id="img4">';
                                                        }else{
                                                            echo '<img src="../uploading/'.$aadhar_card.'" alt="Aadhar Card" class="imgsize" id="img4">';
                                                        }
                                                     ?>
                                        
                                            <input type="hidden" name="aadhar_card" id="aadhar_card" value="<?php echo $aadhar_card;?>" disabled>


                                            <div class="change-photo-btn">
                                                <div class="photoUpload">
                                                    <span><i class="fa fa-upload"></i> Aadhar Card</span>
                                                    <input type="file" id="file4" name="file4" class="upload" />
                                                
                                                </div>

                                            </div>



                                            </div>
                                        </div>

                                    </div>



                                    <div class="row">
                                        
                                        <div class="col-lg-4 col-md-6 col-xs-6">
                                        
                                        <div class="edit-profile-photo">
                                         <!-- <img id="img5" src="../images/id-proof-line.png" alt=""> -->
                                         <?php
                                                        if($voting_card ==''){
                                                            echo '<img src="../uploading/not_uploaded.png" alt="Voting Card" class="imgsize" id="img5">';
                                                        }else{
                                                            echo '<img src="../uploading/'.$voting_card.'" alt="Voting Card" class="imgsize" id="img5">';
                                                        }
                                                     ?>
                                    
                                        <input type="hidden" name="voting_card" id="voting_card" value="<?php echo $voting_card;?>" disabled>


                                        <div class="change-photo-btn">
                                            <div class="photoUpload">
                                                <span><i class="fa fa-upload"></i> Voting Card</span>
                                                <input type="file" id="file5" name="file5" class="upload" />
                                            
                                            </div>

                                        </div>



                                        </div>

                                    </div>
                                   

                                    <div class="col-lg-4 col-md-6 col-xs-6">
                                        <input type="hidden" id="testValue" name="testValue" value="3">
                                        <input type="hidden" id="invalidimage1" name="invalidimage1" >
                                            <input type="hidden" id="invalidimage2" name="invalidimage2" >
                                            <input type="hidden" id="invalidimage3" name="invalidimage3" >
                                            <input type="hidden" id="invalidimage4" name="invalidimage4" >
                                            <input type="hidden" id="invalidimage5" name="invalidimage5" >
                                            <input type="hidden" id="invalidimage6" name="invalidimage6" >
                                        
                                    </div>



                                    </div>
                                     <div id="invalidImageMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>





                                    <div class="dashboard-list-box-static" style="float: clear;">
                            <button id="edit_travel_agent" class="button" >Save Changes</button>
                            <div id="regist" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                        </div>

            


                    </div>

                </div>
            </div>

            <input id="ta_id" type="hidden" value="<?php echo $id ;?>"  disabled>


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
    <script src="../js/plugin.js"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/dashboard-custom.js"></script>
    <script src="../js/jpanelmenu.min.js"></script>
    <script src="../js/counterup.min.js"></script>
    <script src="../assets/js/register.js"></script>
    <!-- <script src="../assets/js/upload_file.js"></script> -->
    <script type="text/javascript" src="../logout/logout.js"></script>


    <script type="text/javascript">
    $('#file').change(function(){

        uploadfun('#file','../uploading/upload','#img','#profile_pic','Please Upload Profile','profile_pic','#invalidimage1');
    });

    $('#file2').change(function(){

        uploadfun('#file2','../uploading/upload','#img2','#kyc','Please Upload Proper KYC','kyc','#invalidimage2');
    });

    $('#file3').change(function(){

        uploadfun('#file3','../uploading/upload','#img3','#pan_card','Please Upload PAN Card','pancard','#invalidimage3');
    });
    $('#file4').change(function(){

        uploadfun('#file4','../uploading/upload','#img4','#aadhar_card','Please Upload Aadhar Card','aadhar','#invalidimage4');
    });

    $('#file5').change(function(){

        uploadfun('#file5','../uploading/upload','#img5','#voting_card','Please Upload Voting Card','voting','#invalidimage5');
    });

    $('#file6').change(function(){

        uploadfun('#file6','../uploading/upload','#img6','#passbook','Please Upload Bank Passbook','passbook','#invalidimage6');
    });


//upload function
   function uploadfun(typeid,urlpart,imgid,valid,messages,foldername,invalidvalue){

    var fd = new FormData();
      var files = $(typeid)[0].files[0];
      fd.append('file',files);
      fd.append('getname',foldername);


//getting filesize of that image 
    var file_size = $(typeid)[0].files[0].size;
    
//checking if the filesize is greater then 2MB
    if(file_size<2097152) {

      $.ajax({
        url: urlpart,
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
          if(response != 0){
            $(imgid).attr("src","../uploading/"+response); 
            $(valid).val(response);
                    // $(previewclass+' img').show(); // Display image element
                    $(invalidvalue).val('');
                  }else{
                    $(valid).val('');
                    $(invalidvalue).val('2');
                    alert(messages);
                  }
                },
              });
      }
      else{
        alert('File size is greater than 2MB');
        $(invalidvalue).val('2');
      }
   }

</script>


</body>
</html>

