<?php
session_start();

if(!isset($_SESSION['username'])){
    echo '<script>location.href = "../login.php";</script>';
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
                        </li><li class="active-bre"><a href="all_packages.php">Package </a>
                        </li>
                        <li class="active-bre"><a href="#"> Add Package  </a>
                        </li>
                        <li class="page-back"><a href="add_new_packages4.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Add New Package - Picture</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                </div>
                                <div class="tab-inn">
                                    <form>
                                       <div class="row">
                                        
                                            <div class="input-field col-md-6 col-sm-12">
                                              <label style="margin-top: -34px;font-size: 0.8rem;">Picture</label>
                                                    <div class="file-field input-field">
                                                        <div class="btn">
                                                            <span>Upload</span>
                                                            <input type="file" id="file3" name="file3">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text"  >
                                                             <input type="hidden" name="picture" id="picture" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="preview3" id="preview3">
                                                    <img alt="picture" class="imgsize" id="img3">
                                                    </div>
                                                
                                            </div>
                                        <div class="row">
                                        
                                            
                                             

                                            <!-- <input type="hidden" id="testValue" name="testValue" value="5">
                                            <input type="hidden" id="invalidimage1" name="invalidimage1" >
                                            <input type="hidden" id="invalidimage2" name="invalidimage2" >
                                            <input type="hidden" id="invalidimage3" name="invalidimage3" >
                                            <input type="hidden" id="invalidimage4" name="invalidimage4" >
                                            <input type="hidden" id="invalidimage5" name="invalidimage5" >
                                            <input type="hidden" id="invalidimage6" name="invalidimage6" > -->
                                          <!--   <div class="input-field col s6" >

                                            </div> -->
                                   
                                        </div>

                                        
                                        <div class="row">
                                            <div class="input-field col s12" style="margin-top: 20px;">
                                               <!--  <a href="registered_customer.php" class="waves-effect waves-light btn-large">Back</a> -->

                                                 <button ><a href="add_new_packages5.php" class="waves-effect waves-light btn-large" >SUBMIT</a> </button>
                                                
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


    <!-- <script src="../../assets/js/upload_file.js"></script> -->

</body>


</html>
<script type="text/javascript">
    $('#file').change(function(){

        uploadfun('#file','../../uploading/upload.php','#img','#profile_pic','Please Upload Profile','.preview1','profile_pic','#invalidimage1');
    });

    $('#file2').change(function(){

        uploadfun('#file2','../../uploading/upload.php','#img2','#kyc','Please Upload Proper KYC','.preview2','kyc','#invalidimage2');
    });

    $('#file3').change(function(){

        uploadfun('#file3','../../uploading/upload.php','#img3','#pan_card','Please Upload PAN Card','.preview3','pancard','#invalidimage3');
    });
    $('#file4').change(function(){

        uploadfun('#file4','../../uploading/upload.php','#img4','#aadhar_card','Please Upload Aadhar Card','.preview4','aadhar','#invalidimage4');
    });

    $('#file5').change(function(){

        uploadfun('#file5','../../uploading/upload.php','#img5','#voting_card','Please Upload Voting Card','.preview5','voting','#invalidimage5');
    });

    $('#file6').change(function(){

        uploadfun('#file6','../../uploading/upload.php','#img6','#passbook','Please Upload Bank Passbook','.preview6','passbook','#invalidimage6');
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
                url:'../address/countrydata.php',
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
                    url:'../address/countrydata.php',
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
                          url:'../address/pincode.php',
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

        $('#branch_manager_id').on('change', function(){
            var branch_manager_id = $(this).val();
            var bm_id='';
            if(branch_manager_id == ''){
                bm_id='-1'
            }else{
                bm_id=branch_manager_id;
            }

            if(bm_id){
                 $.ajax({
                          type:'POST',
                          url:'../agents/branch_manager_name.php',
                          data:'branch_manager_id='+bm_id,
                          success:function(response){
                             // $('#pin').html(response);
                             $('#branch_manager_name').val(response); 
                          }
                      }); 
            }else{
                
            }
        });

</script>
