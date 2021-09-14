<!-- <?php
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



?> -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Bizzmirth Holidays</title>
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
                            <h4 class="gray">Order History</h4>
                            <div class="dashboard-list-box-static">
                                
                          


                                </div> 
                                <div id="profileMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                
            
                                <!-- Details -->
                                <div class="my-profile">
                                     <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                        <label>Customer Name</label>
                                        <input id="f_id" type="text"  value="Savio" readonly>
                                        <!-- <div id="fnameMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div> -->
                                    </div>
                                    

                                  
                                </div>
                                <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                        <label>Customer ID</label>
                                        <input id="f_id" type="text" value="F12345" readonly>
                                        <!-- <div id="fnameMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div> -->
                                    </div>
                                    

                                   <div class="col-lg-6 col-md-6">
                                        <label>Phone No.</label>
                                        <input id="f_name"  type="text"  value=" 9876543210" readonly>
                                        <!-- <div id="lnameMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div> -->
                                   </div>
                                </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <label>Email ID</label>
                                            <input id="firstname" type="text"  value="anc@gmail.com">
                                            <div id="fnameMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                        </div>
                                    

                                        <div class="col-lg-6 col-md-6">
                                            <label>Booking ID</label>
                                            <input id="lastname"  type="text"  value="98765432">
                                            <div id="lnameMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                       </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <label>Package Name</label>
                                            <input id="firstname" type="text"  value="coorg tour">
                                            <div id="fnameMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                        </div>
                                    

                                        <div class="col-lg-6 col-md-6">
                                            <label>Package Amount</label>
                                            <input id="lastname"  type="text"  value="20,000/-">
                                            <div id="lnameMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                       </div>
                                    </div>

                                      <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <label>Transaction Mode</label>
                                            <input id="tmod" type="text"  value=" Net Banking">
                                            <div id="tmod" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                        </div>
                                    

                                       
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

