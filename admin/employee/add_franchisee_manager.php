<?php
session_start();

if(!isset($_SESSION['username'])){
    echo '<script>location.href = "../login";</script>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bizzmirth Holidays</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="../images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="../../../../../fonts.googleapis.com/cssbcc5.css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mob.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/materialize2.css" />
    <link rel="stylesheet" href="../css/styles2.css">
        <link rel="stylesheet" type="text/css" href="../js/chosen.min.css">

</head>

<body>
    <div id="testpho"></div>
    <div id="testemails"></div>


    <!--== MAIN CONTRAINER ==-->
<?php include '../header2.php';?>

    
        <?php include '../sidebar2.php';?>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="../"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li><li class="active-bre"><a href="franchisee_manager">Franchisee Manager </a>
                        </li>
                        <li class="active-bre"><a href="#"> Add Franchisee Manager </a>
                        </li>
                        <li class="page-back"><a href="franchisee_manager"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Add New Franchisee Manager</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            
                                            <div class="form-group col-md-6 col-sm-12">
                                               
                                                <label for="regional_manager_id" style="margin-top: -6%;font-size: 0.8rem;">Regional Manager Id</label>

                                                <?php
                                                require '../connect.php';
                                                $stmt = $conn->prepare("SELECT * FROM regional_manager WHERE status = 1 ORDER BY regional_manager_id ASC");
                                                $stmt->execute();

                                                                                                   
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                ?>
                                                <select id="regional_manager_id"  class="selectdesign">
                                                    <option value="">-- Select Regional Manager Id --</option>
                                                    <?php 
                                                    if($stmt->rowCount()>0){
                                                         foreach (($stmt->fetchAll()) as $key => $row) {  
                                                            echo '<option value="'.$row['regional_manager_id'].'">'.$row['regional_manager_id'].' ('.$row['firstname'].' '.$row['lastname'].') </option>'; 
                                                        } 
                                                    }else{ 
                                                        echo '<option value="">Regional Manager not available</option>'; 
                                                    } 
                                                    ?>
                                                </select>
                                                

                                            </div>

                                            <div class="form-group col-md-6 col-sm-12">
                                                <label>Regional Manager Name</label>
                                                <input type="text"  id="regional_manager_name" placeholder="No Regional Manager Name" readonly>
                                                
                                            </div>
                                            
                                           
                                        
                                        </div>
                                       
                                       
                                        <div class="row">
                                            
                                            <div class="input-field col-md-6 col-sm-12">
                                                <input id="firstname" type="text" >
                                                <label for="firstname">First Name</label>
                                            </div>
                                            <div class="input-field col-md-6 col-sm-12">
                                                <input id="lastname" type="text" >
                                                <label for="lastname">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="input-field col-md-6 col-sm-12">
                                                <input id="email" type="email">
                                                <label for="email">Email</label>
                                            </div>

                                            <div class="input-field col-md-6 col-sm-12">
                                                <label for="date-picker" style="margin-top: -25px;font-size: 0.8rem;">Date of Birth</label>
                                            <input type="date" id="dob" class="datepicker" >
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="input-field col-md-6 col-sm-12">
                                                <label style="margin-top: -25px;font-size: 0.8rem;">Gender</label>
                                            <input class="with-gap gender " name="gender" type="radio" id="test3" value="male"/>
                                            <label for="test3">Male</label>
                                            <input class="with-gap gender" name="gender" type="radio" id="test4" value="female"/>
                                            <label for="test4">Female</label>
                                            <input class="with-gap gender" name="gender" type="radio" id="test5" value="others"/>
                                            <label for="test5">Others</label>
                                                
                                                
                                                <!-- <label for="phone">Gender</label>  -->
                                            </div>

                                            <div class="input-field col-md-6 col-sm-12">
                                                <label for="phone" style="margin-top: -6%;font-size: 0.8rem;">Mobile</label>

                                                <div class="form-group col s4">
                                                <!-- <label style="margin-top: -17%;font-size: 0.8rem;">Country Code</label> -->
                                                 <?php
                                                require '../connect.php';
                                                $stmt = $conn->prepare("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");
                                                $stmt->execute();

                                                                                                    
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                ?>
                                                <select id="country_cd" class="selectdesign2">
                                                    <?php 
                                                    if($stmt->rowCount()>0){
                                                         foreach (($stmt->fetchAll()) as $key => $row) {  
                                                            echo '<option value="'.$row['country_code'].'">+'.$row['country_code'].' ('.$row['sortname'].')</option>'; 
                                                        } 
                                                    }else{ 
                                                        echo '<option value="">Country not available</option>'; 
                                                    } 
                                                    ?>
                                                </select>
                                           


                                            
                                            
                                                </div>
                                                <div class="form-group col s8">
                                                    <input id="phone" type="text" >
                                                    
                                                </div>
                                                

                                                <!-- <input id="bdate" type="email" value="<?php echo $date_of_birth;?>" >
                                                <label for="email">Date of Birth</label> -->
                                            </div>

                                        </div>



                                        <div class="row">
                                            
                                             <div class="form-group col-md-6 col-sm-12">
                                                <label>Country</label>
                                                
                                            <?php
                                                require '../connect.php';
                                                $stmt = $conn->prepare("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");
                                                $stmt->execute();

                                                                                                   
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                ?>
                                                <select id="country" class="selectdesign">
                                                <option value="">--Select Country--</option>
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


                                            
                                            
                                        </div>
                                        


                                            <div class="form-group col-md-6 col-sm-12">
                                                <label>State</label>
                                                <select id="mystate" class="selectdesign">
                                                    <option value="">--Select country first--</option>

                                                   
                                                </select>
                                                </div>
                                    

                                    
                                    

                                        
                                        </div>

                                       

                                    <div class="row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label>City</label><br>
                                        <select id="city" class="selectdesign">

                                        <option value="">--Select state first--</option>
                                            
                                        </select>
                                        <!-- <div id="cityError" class=" errorMessage2"></div>                  -->
                                    </div>

                                     <div class="form-group col-md-6 col-sm-12">
                                        <label>Pincode</label>
                                        <input type="text" class="form-control" id="pin" placeholder="Pincode" readonly>
                                        
                                    </div>

                                </div>
                                



                                        

                                    





                            


                                         <div class="row">
                                            
                                            <div class="input-field col-md-12 col-sm-12">
                                                
                                                <!-- <textarea id="address" style="margin-top: 1.5%;" ></textarea> -->
                                                <input id="address" type="text" >
                                            
                                                <label for="address">Address</label>
                                            </div>
                                         </div>



                                         <div class="row">

                                            <div class="form-group col-md-6 col-sm-12">
                                                <label>Zone</label>
                                                
                                            <?php
                                                require '../connect.php';
                                                $stmt = $conn->prepare("SELECT * FROM zone WHERE status = 1 ORDER BY zone_name ASC");
                                                $stmt->execute();

                                                                                                   
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                ?>
                                                <select id="zone_name" class="selectdesign">
                                                <option value="">--Select Zone--</option>
                                                <?php 
                                                if($stmt->rowCount()>0){
                                                     foreach (($stmt->fetchAll()) as $key => $row) {  
                                                        echo '<option value="'.$row['id'].'">'.$row['zone_name'].'</option>'; 
                                                    } 
                                                }else{ 
                                                    echo '<option value="">Zone not available</option>'; 
                                                } 
                                                ?>
                                            </select>


                                            
                                            
                                            </div>
                                            
                                             <div class="form-group col-md-6 col-sm-12">
                                                <label>Region</label>
                                                <select id="region_name" class="selectdesign">
                                                    <option value="">--Select Zone first--</option>

                                                   
                                                </select>
                                            </div>


                                        
                                        </div>

                                        <div class="row">
                                            
                                             <div class="form-group col-md-6 col-sm-12">
                                                <label>Branch</label>
                                                <select id="branch_name" class="selectdesign">
                                                    <option value="">--Select region first--</option>

                                                   
                                                </select>
                                            </div>
                                    </div>
                                        


                                           
                                    

                                    
                                    

                                        
                                        

                                         <!-- <div class="row">
                                            
                                            <div class="input-field col-md-col-md-12 col-sm-12">
                                                <input id="branch_name" type="text" >
                                                <label for="branch_name">Head Office</label>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="input-field col-md-6 col-sm-12">
                                                <input id="zone_name" type="text" >
                                                <label for="zone_name">Zone Name</label>
                                            </div>
                                            <div class="input-field col-md-6 col-sm-12">
                                                <input id="region_name" type="text" >
                                                <label for="region_name">Region Name</label>
                                            </div>
                                            
                                        </div> -->
                                        
                                        <div class="row">
                                        
                                            <div class="input-field col-md-6 col-sm-12">
                                              <label style="margin-top: -34px;font-size: 0.8rem;">Profile</label>
                                                    <div class="file-field input-field">
                                                        <div class="btn">
                                                            <span>Upload</span>
                                                            <input type="file" id="file" name="file">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text"  >
                                                             <input type="hidden" name="profile_pic" id="profile_pic" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="preview1" id="preview1">
                                                    <img alt="Profile_pic" class="imgsize" id="img">
                                                    </div>
                                                
                                            </div>

                                            <div class="input-field col-md-6 col-sm-12">
                                              <label style="margin-top: -34px;font-size: 0.8rem;">Bank Passbook</label>
                                                    <div class="file-field input-field">
                                                        <div class="btn">
                                                            <span>Upload</span>
                                                            <input type="file"id="file6" name="file6">
                                                        </div>
                                                         <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text"  >
                                                             <input type="hidden" name="passbook" id="passbook" disabled>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="preview6" id="preview6">
                                                   <img alt="Bank Passbook" class="imgsize" id="img6">
                                                    </div>
                                                
                                            </div>
                                            
                                             <!-- <div class="input-field col-md-6 col-sm-12">
                                              <label style="margin-top: -34px;font-size: 0.8rem;">KYC</label>
                                                    <div class="file-field input-field">
                                                        <div class="btn">
                                                            <span>Upload</span>
                                                            <input type="file"id="file2" name="file2">
                                                        </div>
                                                         <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text"  >
                                                             <input type="hidden" name="kyc" id="kyc" disabled>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="preview2" id="preview2">
                                                   <img alt="KYC" class="imgsize" id="img2">
                                                    </div>
                                                
                                            </div> -->
                                          <!--   <div class="input-field col s6" >

                                            </div> -->
                                   
                                        </div>

                                        <div class="row">
                                        
                                            <div class="input-field col-md-6 col-sm-12">
                                              <label style="margin-top: -34px;font-size: 0.8rem;">PAN Card</label>
                                                    <div class="file-field input-field">
                                                        <div class="btn">
                                                            <span>Upload</span>
                                                            <input type="file" id="file3" name="file3">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text"  >
                                                             <input type="hidden" name="pan_card" id="pan_card" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="preview3" id="preview3">
                                                    <img alt="Pan Card" class="imgsize" id="img3">
                                                    </div>
                                                
                                            </div>
                                             <div class="input-field col-md-6 col-sm-12">
                                              <label style="margin-top: -34px;font-size: 0.8rem;">Aadhar Card</label>
                                                    <div class="file-field input-field">
                                                        <div class="btn">
                                                            <span>Upload</span>
                                                            <input type="file"id="file4" name="file4">
                                                        </div>
                                                         <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text"  >
                                                             <input type="hidden" name="aadhar_card" id="aadhar_card" disabled>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="preview4" id="preview4">
                                                   <img alt="Aadhar Card" class="imgsize" id="img4">
                                                    </div>
                                                
                                            </div>
                                          <!--   <div class="input-field col s6" >

                                            </div> -->
                                   
                                        </div>
                                        <div class="row">
                                        
                                            <div class="input-field col-md-6 col-sm-12">
                                              <label style="margin-top: -34px;font-size: 0.8rem;">Voting Card</label>
                                                    <div class="file-field input-field">
                                                        <div class="btn">
                                                            <span>Upload</span>
                                                            <input type="file" id="file5" name="file5">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text"  >
                                                             <input type="hidden" name="voting_card" id="voting_card" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="preview5" id="preview5">
                                                    <img alt="Voting Card" class="imgsize" id="img5">
                                                    </div>
                                                
                                            </div>
                                             

                                            <input type="hidden" id="testValue" name="testValue" value="6">
                                            <input type="hidden" id="invalidimage1" name="invalidimage1" >
                                            <input type="hidden" id="invalidimage2" name="invalidimage2" >
                                            <input type="hidden" id="invalidimage3" name="invalidimage3" >
                                            <input type="hidden" id="invalidimage4" name="invalidimage4" >
                                            <input type="hidden" id="invalidimage5" name="invalidimage5" >
                                            <input type="hidden" id="invalidimage6" name="invalidimage6" >
                                          <!--   <div class="input-field col s6" >

                                            </div> -->
                                   
                                        </div>

                                        
                                        <div class="row">
                                            <div class="input-field col s12" style="margin-top: 20px;">
                                               <!--  <a href="registered_customer.php" class="waves-effect waves-light btn-large">Back</a> -->

                                                 <a href="#" class="waves-effect waves-light btn-large" id="addBranchManager">Submit</a>
                                                
                                            </div>
                                           
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
  <!--   <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section> -->

    <!--======== SCRIPT FILES =========-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="../js/custom.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="../js/chosen.jquery.js"></script>
<!--     <script src="../js/chosen.min.js"></script> -->
<script type="text/javascript" src="../assets/js/submitdata.js"></script>
<script type="text/javascript" src="../assets/js/office.js"></script>


    <!-- <script src="../../assets/js/upload_file.js"></script> -->

</body>


</html>
<script type="text/javascript">
    $('#file').change(function(){

        uploadfun('#file','../../uploading/upload','#img','#profile_pic','Please Upload Profile','.preview1','profile_pic','#invalidimage1');
    });

    $('#file2').change(function(){

        uploadfun('#file2','../../uploading/upload','#img2','#kyc','Please Upload Proper KYC','.preview2','kyc','#invalidimage2');
    });

    $('#file3').change(function(){

        uploadfun('#file3','../../uploading/upload','#img3','#pan_card','Please Upload PAN Card','.preview3','pancard','#invalidimage3');
    });
    $('#file4').change(function(){

        uploadfun('#file4','../../uploading/upload','#img4','#aadhar_card','Please Upload Aadhar Card','.preview4','aadhar','#invalidimage4');
    });

    $('#file5').change(function(){

        uploadfun('#file5','../../uploading/upload','#img5','#voting_card','Please Upload Voting Card','.preview5','voting','#invalidimage5');
    });

    $('#file6').change(function(){

        uploadfun('#file6','../../uploading/upload','#img6','#passbook','Please Upload Bank Passbook','.preview6','passbook','#invalidimage6');
    });


//upload function
   function uploadfun(typeid,urlpart,imgid,valid,messages,previewclass,foldername,invalidvalue){

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
            $(imgid).attr("src","../../uploading/"+response); 
            $(valid).val(response);
                    $(previewclass+' img').show(); // Display image element
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

<script type="text/javascript">
    $('#country').on('change', function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'../address/countrydata',
                data:'country_id='+countryID,
                success:function(htmll){
                    

                    $('#mystate').html(htmll); 
                      $('#city').html('<option value="">Select state first</option>'); 

                    
                }
            }); 
        }else{
            $('#mystate').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>');
            $('#pin').val('');   
        }
        });
        
        $('#mystate').on('change', function(){
            // alert();
            var stateID = $(this).val();
            if(stateID){
                $.ajax({
                    type:'POST',
                    url:'../address/countrydata',
                    data:'state_id='+stateID,
                    success:function(html){
                        $('#city').html(html);
                       
                    }
                }); 
            }else{
                $('#city').html('<option value="">Select state first</option>');
                $('#pin').val('');   
            }
        });

        $('#city').on('change', function(){
            var cityID = $(this).val();
            if(cityID){
                 $.ajax({
                          type:'POST',
                          url:'../address/pincode',
                          data:'city_id='+cityID,
                          success:function(response){
                             // $('#pin').html(response);
                             $('#pin').val(response); 
                          }
                      }); 
            }else{
                $('#city').html('<option value="">Select state first</option>');
                $('#pin').val('');  
            }
        });

        $('#regional_manager_id').on('change', function(){
            var regional_manager_id = $(this).val();
            var rm_id='';
            if(regional_manager_id == ''){
                rm_id='-1'
            }else{
                rm_id=regional_manager_id;
            }

            if(rm_id){
                 $.ajax({
                          type:'POST',
                          url:'../agents/regional_manager_name',
                          data:'regional_manager_id='+rm_id,
                          success:function(response){
                             // $('#pin').html(response);
                             $('#regional_manager_name').val(response); 
                          }
                      }); 
            }else{
                
            }
        });

</script>
