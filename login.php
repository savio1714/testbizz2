<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Bizzmirth Holidays</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.ico">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="images/logo1.png"> -->
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="font/flaticon.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="css/plugin.css" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
         #preview #img ,#preview #img2,#preview #img3,#preview #img4,#preview #img5,#preview #img6 {
     display: none;
   }

   




         /*.preview{
        }
     width: 100px;
     height: 100px;
     border: 1px solid black;
     margin: 0 auto;
     background: white;
   }*/
    </style>
</head>
<body>
 
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- Header -->
  <?php include 'header.php';?>
    <!-- Header Ends -->

    <!-- Navigation Bar -->

    <!-- Navigation Bar Ends -->

    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>login/Register</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Shop</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">login/Register</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <section class="login">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="login-form">
                        <form>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-title">
                                        <h2>Login</h2>
                                        <p>Register if you don't have an account.</p>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Username</label>
                                    <input type="email" class="form-control" id="username" placeholder="Enter Email" value="<?php if(isset($_COOKIE['user2'])){echo $_COOKIE['user2'];}?>" >
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter correct password" value="<?php if(isset($_COOKIE['pass'])){echo $_COOKIE['pass'];}?>" >
                                </div>
                                <div class="col-xs-12">
                                    <div class="checkbox-outer">
                                        <input type="checkbox" name="remember_me" id="remember_me"  <?php if(isset($_COOKIE['user2'])){echo 'checked';}?>>
                                        <label>Remember Me?</label> 
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="comment-btn">
                                        <!-- <button id="login" class="btn-blue btn-red">Login</button> -->
                                        <a id="login" class="btn-blue btn-red">Login</a>
                                    </div>
                                </div>
                                <!-- <div class="col-xs-12">
                                    <div class="login-accounts">
                                        <a href="forgot-password.html" class="forgotpw">Forgot Password?</a>
                                        <h3>Login using</h3>
                                        <div class="login-accounts-btn">
                                            <a class="btn-blue" href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                                            <a class="btn-blue btn-google" href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a>                              
                                            <a class="btn-blue btn-twit" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="login-form">
                        <form>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-title">
                                        <h2>Register</h2>
                                        <p>Enter your details to be a member.</p>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="custom-file">Profile Picture: </label><br>
                                    <!-- <input type="file" id="id_proof" class="custom-file-input"> -->
                                    <div class="col-md-5 col-sm-5 ">
                                    <input type="file" id="file" name="file" />
                                    <div id="profileError" class=" errorMessage2"></div>
                                    
                                  </div>
                                 
                                  <div class="col-md-3 col-sm-3 ">  <input type="hidden" name="profile_pic" id="profile_pic" disabled></div>
                                   <div class='preview col-md-4 col-sm-12' id="preview">
                                    <img src="" id="img" width="100" height="100" align="right" alt="Profile Image">
                                  </div>

                                   
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Firstname:</label>
                                    <input type="text" class="form-control " id="fname" placeholder="Enter First Name">
                                    <i class="fa fa-check-circle"></i>
                                    <i class="fa fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                               <!--  <div class="form-group col-xs-12">
                                    <label>Middlename:</label>
                                    <input type="text" class="form-control" id="mname" placeholder="Enter Middle Name">
                                </div> -->
                                 <div class="form-group col-xs-12">
                                    <label>Lastname:</label>
                                    <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
                                    <i class="fa fa-check-circle"></i>
                                    <i class="fa fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="abc@xyz.com">
                                    <i class="fa fa-check-circle"></i>
                                    <i class="fa fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>

                                <div class="form-group col-xs-12">
                                    <label>Phone Number:</label>
                                    <div class="relative">
                                      <div class="form-group phnocode">
                                        <?php
                                            require 'connect.php';
                                            $stmt = $conn->prepare("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");
                                            $stmt->execute();

                                                                                               
                                            $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                            ?>
                                            <select style="padding: 10px;" id="countrycode">
                                            <option value="">Select</option>
                                            <?php 
                                            if($stmt->rowCount()>0){
                                                 foreach (($stmt->fetchAll()) as $key => $row) {  
                                                    echo '<option value="'.$row['country_code'].'">'.$row['country_code'].'('.$row['sortname'].')</option>'; 
                                                } 
                                            }else{ 
                                                echo '<option value="">No Country Code available</option>'; 
                                            } 
                                            ?>
                                            </select>
                                        <div id="countryCodeError" class=" errorMessage2"></div>
                                        </div>
                                        <div class="form-group phno">
                                         <input type="text" class="form-control" id="phone_no" placeholder="Phone Number">
                                        <i class="fa fa-check-circle" style="top: 15px;"></i>
                                        <i class="fa fa-exclamation-circle" style="top: 15px;"></i>
                                        <small>Error Message</small>
                                        </div>
                                    </div>
                                   
                                </div>


                               <!--  <div class="form-group col-xs-12">
                                    <label>Phone Number:</label>

                                    <div class="form-group col-3">
                                        
                                    </div>

                                     <div class="form-group col-4">
                                        
                                    </div>
                                    
                                    
                                    
                                    
                                </div> -->

                                 <div class="form-group col-xs-12" >
                                    <label>Gender:</label>
                                    <div class="form-check form-check-inline">
                                        <div class="form-group col-xs-3">
                                      <input type="radio" name="gender" class="form-check-input gender" value="male"> 

                                      <label class="form-check-label" for="male">Male</label>
                                      </div>
                                      <div class="form-group col-xs-3">
                                         <input type="radio"  class="form-check-input gender" name="gender" value="female">
                                          <label class="form-check-label" for="female">Female</label>
                                      </div>
                                      <div class="form-group col-xs-3">
                                          <input type="radio"  class="form-check-input gender" name="gender" value="others">
                                          <label class="form-check-label" for="others">Others</label>
                                      </div>
                                    </div>
                                    <div id="errorMessage" class=""></div>
                                  
                                </div>

                                 <div class="form-group col-xs-12">
                                    <label>Date of Birth:</label>
                                    <input class="form-control" type="date" id="bdate">
                                    <i class="fa fa-check-circle"></i>
                                    <i class="fa fa-exclamation-circle"></i>
                                    <small id="messagedate">Error Message</small>
                                </div>
                                 <div class="form-group col-xs-12">
                                    <label>Age:</label>
                                    <input type="number" class="form-control" id="age" placeholder="Age" readonly>
                                    <div id="ageError" class=" errorMessage2"></div>
                                </div>



                                <div class="form-group col-xs-12">
                                    <label>Country:</label>

                                    <?php
                                    require 'connect.php';
                                    $stmt = $conn->prepare("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");
                                    $stmt->execute();

                                                                                       
                                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                    ?>
                                    <select id="mycountry">
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
                                    <div id="countryError" class=" errorMessage2"></div>
     
                                </div>

                                
                                <div class="form-group col-xs-12">
                                    <label>State:</label>
                                    <select id="state">
                                        <option value="">Select country first</option>
                                    </select>
                                    <div id="stateError" class=" errorMessage2"></div>
                                </div>

                                <div class="form-group col-xs-12">
                                    <label>City:</label>
                                    <select id="mycity">
                                        <option value="">Select state first</option>
                                    </select>
                                    <div id="cityError" class=" errorMessage2"></div>                 
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Pincode:</label>
                                    <input type="text" class="form-control" id="pin" placeholder="Pincode" readonly>
                                    
                                </div>


                                <div class="form-group col-xs-12">
                                    <label>Full Address:</label>
                                    <textarea id="address" class="form-control" placeholder="Address"  rows="5"></textarea>
                                    <!-- <input type="text" class="form-control" id="phone_no" placeholder="Phone Number"> -->
                                    <i class="fa fa-check-circle"></i>
                                    <i class="fa fa-exclamation-circle"></i>
                                    <small>Error Message</small>
                                </div>
                               


                                    
                               
                                

                                <!-- <div class="form-group col-xs-12">
                                    <label class="custom-file">PAN / Aadhar Card: </label><br>

                                    <div class="col-md-6 col-sm-6 ">
                                    <input type="file" id="file" name="file" />
                                     <div id="idProofError" class=" errorMessage2"></div>
                                  </div>
                                 
                                  <div class="col-md-6 col-sm-6 ">  <input type="hidden" name="id_proof" id="id_proof" disabled></div>
                                   
                                </div> -->

                                <div class="form-group col-xs-12">
                                    <label class="custom-file">KYC: </label><br>
                                    <!-- <input type="file" id="id_proof" class="custom-file-input"> -->
                                    <div class="col-md-5 col-sm-5 ">
                                    <input type="file" id="file2" name="file2" />
                                    <!-- <div id="profileError" class=" errorMessage2"></div> -->
                                    
                                  </div>
                                 
                                  <div class="col-md-3 col-sm-3 ">  <input type="hidden" name="kyc" id="kyc" disabled></div>
                                   <div class='preview col-md-4 col-sm-12' id="preview">
                                    <img src="" id="img2" width="100" height="100" align="right" alt="KYC Proof">
                                  </div>

                                   
                                </div>

                                <div class="form-group col-xs-12">
                                    <label class="custom-file">PAN Card: </label><br>
                                    <!-- <input type="file" id="id_proof" class="custom-file-input"> -->
                                    <div class="col-md-5 col-sm-5 ">
                                    <input type="file" id="file3" name="file3" />
                                    <!-- <div id="profileError" class=" errorMessage2"></div> -->
                                    
                                  </div>
                                 
                                  <div class="col-md-3 col-sm-3 ">  <input type="hidden" name="pan_card" id="pan_card" disabled></div>
                                   <div class='preview col-md-4 col-sm-12' id="preview">
                                    <img src="" id="img3" width="100" height="100" align="right" alt="PAN Card Proof">
                                  </div>

                                   
                                </div>

                                <div class="form-group col-xs-12">
                                    <label class="custom-file">Aadhar Card: </label><br>
                                    <!-- <input type="file" id="id_proof" class="custom-file-input"> -->
                                    <div class="col-md-5 col-sm-5 ">
                                    <input type="file" id="file4" name="file4" />
                                    <!-- <div id="profileError" class=" errorMessage2"></div> -->
                                    
                                  </div>
                                 
                                  <div class="col-md-3 col-sm-3 ">  <input type="hidden" name="aadhar_card" id="aadhar_card" disabled></div>
                                   <div class='preview col-md-4 col-sm-12' id="preview">
                                    <img src="" id="img4" width="100" height="100" align="right" alt="Aadhar Card Proof">
                                  </div>

                                   
                                </div>

                                <div class="form-group col-xs-12">
                                    <label class="custom-file">Voting Card: </label><br>
                                    <!-- <input type="file" id="id_proof" class="custom-file-input"> -->
                                    <div class="col-md-5 col-sm-5 ">
                                    <input type="file" id="file5" name="file5" />
                                    <!-- <div id="profileError" class=" errorMessage2"></div> -->
                                    
                                  </div>
                                 
                                  <div class="col-md-3 col-sm-3 ">  <input type="hidden" name="voting_card" id="voting_card" disabled></div>
                                   <div class='preview col-md-4 col-sm-12' id="preview">
                                    <img src="" id="img5" width="100" height="100" align="right" alt="Voting Card Proof">
                                  </div>

                                   
                                </div>

                                <div class="form-group col-xs-12">
                                    <label class="custom-file">Bank Passbook: </label><br>
                                    <!-- <input type="file" id="id_proof" class="custom-file-input"> -->
                                    <div class="col-md-5 col-sm-5 ">
                                    <input type="file" id="file6" name="file6" />
                                    <!-- <div id="profileError" class=" errorMessage2"></div> -->
                                    
                                  </div>
                                 
                                  <div class="col-md-3 col-sm-3 ">  <input type="hidden" name="passbook" id="passbook" disabled></div>
                                   <div class='preview col-md-4 col-sm-12' id="preview">
                                    <img src="" id="img6" width="100" height="100" align="right" alt="Bank Passbook Proof">
                                  </div>

                                   
                                </div>

                                <div class="col-lg-4 col-md-6 col-xs-6">
                                        <input type="hidden" id="testValue" name="testValue" value="2">
                                        <input type="hidden" id="invalidimage1" name="invalidimage1" >
                                            <input type="hidden" id="invalidimage2" name="invalidimage2" >
                                            <input type="hidden" id="invalidimage3" name="invalidimage3" >
                                            <input type="hidden" id="invalidimage4" name="invalidimage4" >
                                            <input type="hidden" id="invalidimage5" name="invalidimage5" >
                                            <input type="hidden" id="invalidimage6" name="invalidimage6" >
                                            
                                        
                                    </div>
                                 


                                <!-- <div class="form-group col-xs-6">
                                    <label>Select Password :</label>
                                    <input type="password" class="form-control" id="date" placeholder="Enter Password">
                                </div>
                                <div class="form-group col-xs-6 col-left-padding">
                                    <label>Confirm Password :</label>
                                    <input type="password" class="form-control" id="phnumber" placeholder="Re-enter Password">
                                </div> -->
                                <div class="col-xs-12">
                                    <div class="checkbox-outer">
                                        <input type="checkbox" name="agree" id="agree" > I agree to the <a href="terms_condition.php">terms and conditions.</a>
                                        <div id="agreeError" class=" errorMessage2"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="comment-btn">
                                        <a href="#" id="register" class="btn-blue btn-red">Register Now</a>
                                        <div id="errorMessageText" class="errorMessage2"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
      <?php include 'footer.php';?>
    <!-- Footer Ends --> 
    <!-- back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>

    <!-- *Scripts* -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/preloader.js"></script>
    <script src="login_data/login.js"></script>
    <script src="assets/js/register.js"></script>
    <!-- <script src="assets/js/upload_file.js"></script> -->

    <script type="text/javascript">
    $('#file').change(function(){

        uploadfun('#file','uploading/upload.php','#img','#profile_pic','Please Upload Profile','profile_pic','#invalidimage1', '#preview #img');
    });

    $('#file2').change(function(){

        uploadfun('#file2','uploading/upload.php','#img2','#kyc','Please Upload Proper KYC','kyc','#invalidimage2', '#preview #img2');
    });

    $('#file3').change(function(){

        uploadfun('#file3','uploading/upload.php','#img3','#pan_card','Please Upload PAN Card','pancard','#invalidimage3', '#preview #img3');
    });
    $('#file4').change(function(){

        uploadfun('#file4','uploading/upload.php','#img4','#aadhar_card','Please Upload Aadhar Card','aadhar','#invalidimage4', '#preview #img4');
    });

    $('#file5').change(function(){

        uploadfun('#file5','uploading/upload.php','#img5','#voting_card','Please Upload Voting Card','voting','#invalidimage5', '#preview #img5');
    });

    $('#file6').change(function(){

        uploadfun('#file6','uploading/upload.php','#img6','#passbook','Please Upload Bank Passbook','passbook','#invalidimage6', '#preview #img6');
    });


//upload function
   function uploadfun(typeid,urlpart,imgid,valid,messages,foldername,invalidvalue,imgdisplay){

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
            $(imgid).attr("src","uploading/"+response); 
            $(valid).val(response);
                    // $(previewclass+' img').show(); // Display image element
                    $(imgdisplay).show(); // Display image element
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



   $('#mycountry').on('change', function(){

        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'registration/countrydata.php',
                data:'country_id='+countryID,
                success:function(htmll){


                    $('#state').html(htmll); 
                      $('#mycity').html('<option value="">Select state first</option>');
                      $('#pin').val(''); 



                    
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#mycity').html('<option value="">Select state first</option>');
            $('#pin').val('');  
        }
        });
        
        $('#state').on('change', function(){
            // alert();
            var stateID = $(this).val();
            if(stateID){
                $.ajax({
                    type:'POST',
                    url:'registration/countrydata.php',
                    data:'state_id='+stateID,
                    success:function(html){
                        $('#mycity').html(html);
                        $('#pin').val(''); 
                       
                    }
                }); 
            }else{
                $('#mycity').html('<option value="">Select state first</option>');
                $('#pin').val('');  
            }
        });

        $('#mycity').on('change', function(){
            var cityID = $(this).val();
            if(cityID){
                 $.ajax({
                          type:'POST',
                          url:'registration/pincode.php',
                          data:'city_id='+cityID,
                          success:function(response){
                             // $('#pin').html(response);
                             $('#pin').val(response); 
                          }
                      }); 
            }else{
                $('#pin').val(''); 
                $('#mycity').html('<option value="">Select state first</option>'); 
            }
        });

</script>

</body>
</html>