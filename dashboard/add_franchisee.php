<?php
session_start();
if(!isset($_SESSION['username2']) || !isset($_SESSION['user_type_id_value']) || !isset($_SESSION['user_id']) ){
    echo '<script>location.href = "../login";</script>';
}

if($_SESSION["user_type_id_value"] !='5'){
    echo '<script>location.href = "../login";</script>';
}

$user_type =$_SESSION["user_type_id_value"];
$user_id =$_SESSION["user_id"];
$firstname =$_SESSION["username2"];
$lastname =$_SESSION["lname"];



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Franchisee | Bizzmirth Holidays</title>
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
            

            <div class="dashboard-content">
            <div class="dashboard-form">
                <div class="row">


                    <!-- Profile -->
                    <div class="col-lg-12 col-md-12 col-xs-12 padding-right-30">
                        <div class="dashboard-list-box">
                            <h4 class="gray">Franchisee Details</h4>
                            <div class="dashboard-list-box-static">
                                
                                <!-- Avatar -->
                                <div class="edit-profile-photo">
                                    
                                    <img id="img" src="../images/user_icon.png" alt="">
                                    <input type="hidden" name="profile_pic" id="profile_pic" disabled>

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
                                        <label>Floor Manager ID</label>
                                        <input id="sm_id" type="text" placeholder="Floor Manager ID" value="<?php echo $user_id?>" readonly>
                                        <!-- <div id="fnameMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div> -->
                                    </div>
                                    

                                   <div class="col-lg-6 col-md-6">
                                        <label>Floor Manager Name</label>
                                        <input id="sm_name"  type="text" placeholder="Floor Manager Name" value="<?php echo $firstname . ' '. $lastname;?>" readonly>
                                        <!-- <div id="lnameMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div> -->
                                   </div>
                                </div>

                                

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <label>Franchisee First Name</label>
                                            <input id="firstname" type="text" placeholder="Enter First Name">
                                            <div id="fnameMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                        </div>
                                    

                                        <div class="col-lg-6 col-md-6">
                                            <label>Franchisee Last Name</label>
                                            <input id="lastname"  type="text" placeholder="Enter Last Name">
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
                                            <option value="">Select Country Code</option>
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
                                             <input id="phone" type="text" placeholder="Phone Number">
                                        </div>
                                    </div>

                                           
                                    
                                    <div id="phoneMessage" style="display:none;color: #e74c3c;font-size: 85%;">  
                                    </div>




                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                        <label>Email Address</label>
                                        <input id="emailvalue" type="text" placeholder="abc@xyz.com">
                                        <div id="emailMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <label>Date of Birth</label>
                                        <input type="date" id="bdate" >
                                        <div id="dobMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                            
                                        <div class="col-lg-6 col-md-6">
                                        <label>Gender</label>

                                        <input id="check-a" type="radio" class="gender" name="gender" value="male">
                                        <label style="display: inline-block;" for="check-a" >Male</label>

                                        <input id="check-b" type="radio" class="gender" name="gender" value="female">
                                        <label  style="display: inline-block;" for="check-b">Female</label>

                                        <input id="check-c" type="radio" class="gender" name="gender" value="others">
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
                                             <option value="">Select Country</option>
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
                                             <option value="">Select country first</option>
                                        </select>
                                        <div id="stateMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                    </div>
                                     
                                 </div>

                                    
                                    <div class="row">

                                        <div class="col-lg-6 col-md-6">
                                            <label>City</label>
                                            <select id="city" class="chosen-select-no-single" >
                                                <option value="">Select state first</option>  
                                            </select>
                                            <div id="cityMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <label>Zip Code</label>
                                            <input type="text" id="pin"  placeholder="Pincode" readonly>
                                        </div>
                                        
                                    </div>
                                        

                                    

                                    <label>Full Address</label>
                                    <textarea id="address" placeholder="Enter Address"></textarea>
                                    <div id="addressMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>


                                    <div class="row">
                                        <label class="margin-top-0" style="margin: 17px;">Upload Proof</label>

                                        <div class="col-lg-4 col-md-6 col-xs-6">
                                        
                                        <div class="edit-profile-photo">

                                         <img id="img6" src="../images/id-proof-line.png" alt="">
                                    
                                        <input type="hidden" name="passbook" id="passbook" disabled>


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
                                             <img id="img2" src="../images/id-proof-line.png" alt="">
                                        
                                            <input type="hidden" name="kyc" id="kyc" disabled>


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
                                             <img id="img3" src="../images/id-proof-line.png" alt="">
                                        
                                            <input type="hidden" name="pan_card" id="pan_card" disabled>


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
                                             <img id="img4" src="../images/id-proof-line.png" alt="">
                                        
                                            <input type="hidden" name="aadhar_card" id="aadhar_card" disabled>


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
                                         <img id="img5" src="../images/id-proof-line.png" alt="">
                                    
                                        <input type="hidden" name="voting_card" id="voting_card" disabled>


                                        <div class="change-photo-btn">
                                            <div class="photoUpload">
                                                <span><i class="fa fa-upload"></i> Voting Card</span>
                                                <input type="file" id="file5" name="file5" class="upload" />
                                            
                                            </div>

                                        </div>



                                        </div>

                                    </div>
                                    

                                    <div class="col-lg-4 col-md-6 col-xs-6">
                                        <input type="hidden" id="testValue" name="testValue" value="4">
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
                            <button id="registerFranchisee" class="button" >Register</button>
                            <div id="regist" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                        </div>

            


                    </div>

                </div>
            </div>

            <input id="utss" type="hidden" value="<?php echo $user_type;?>"  disabled>
            <input id="uiss" type="hidden" value="<?php echo $user_id?>" disabled >

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

