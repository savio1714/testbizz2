<?php
session_start();

if(!isset($_SESSION['username'])){
    echo '<script>location.href = "../login";</script>';
}


$id = $_GET['vkvbvjfgfikix'];
// $user_id = $_GET['jdjdfdjs'];
// $reference_no = $_GET['nohbref'];
$country = $_GET['ncy'];
$state = $_GET['mst'];
$city = $_GET['hct'];

$zone = $_GET['zdfds'];
$region = $_GET['rdsfdsf'];
$branch = $_GET['bdfdsf'];

$editfor = $_GET['editfor'];

if($editfor == 'pending'){
    // $identifier_id= $_POST["vkvbvjfgfikix"];
    $identifier_name = 'id=';
}else if($editfor == 'registered') {
    // $identifier_id= $_POST["vkvbvjfgfikix"];
    $identifier_name = 'regional_manager_id=';
}


    require '../connect.php';


    $stmt = $conn->prepare("SELECT *, (select zone_name from zone where id = '".$zone."') as zone_name, (select region_name from region where id = '".$region."') as region_name,(select branch_name from branch where id = '".$branch."') as branch_name, (select state_name from states where id = '".$state."') as statename, (select city_name from cities where id = '".$city."') as city_name,(select country_name from countries where id = '".$country."') as countryname FROM `regional_manager` where $identifier_name'".$id."'");
    $stmt->execute();
     // set the resulting array to associative
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    if($stmt->rowCount()>0){
    foreach (($stmt->fetchAll()) as $key => $row) {
        // $fid=$row['id'];

        $regional_manager_id=$row['regional_manager_id'];
        $branch_name=$row['branch_name'];
        $zone_name=$row['zone_name'];
        $region_name=$row['region_name'];
        $firstname=$row['firstname'];
        // $username=$row['username'];
        $lastname=$row['lastname'];
        $email=$row['email'];
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
    }                                                      
    else{
                                                            
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
    <input id="phoneN" type="hidden" value="<?php echo $contact_no;?>" >
    <input id="emailV" type="hidden" value="<?php echo $email;?>" >


    <!--== MAIN CONTRAINER ==-->
<?php include '../header2.php';?>

    
        <?php include '../sidebar2.php';?>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="../"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li><li class="active-bre"><a href="regional_manager">Regional Manager </a>
                        </li>
                        <li class="active-bre"><a href="#"> Edit Regional Manager </a>
                        </li>
                        <li class="page-back"><a href="regional_manager"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Edit regional_manager</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <!-- <div class="row">
                                            
                                            <div class="input-field col-md-6 col-sm-12">
                                                <input id="sales_manager_id" type="text" value="<?php echo $reference_no ;?>" readonly>
                                                <label>Sales Manager Id</label>

                                            </div>

                                            <div class="input-field col-md-6 col-sm-12">
                                                <label>Sales Manager Name</label>
                                                <input type="text" id="sales_manager_name" value="<?php echo $sales_manager_name ;?>" readonly>
                                                
                                            </div>                                          
                                        
                                        </div> -->
                                        <?php

                                                if($regional_manager_id !==''){
                                                   echo '
                                                   <div class="row">
                                            
                                                    <div class="input-field col-md-12 col-sm-12">
                                                        <input id="rmid" type="text" value="'.$regional_manager_id.'" readonly>
                                                        
                                                        <label for="rmid">Employee No.</label>
                                                    </div>
                                                    
                                                </div>';
                                                }else{
                                                    
                                                }
                                                ?>

                                       
                                       
                                        <div class="row">
                                            
                                            <div class="input-field col-md-6 col-sm-12">
                                                <input id="firstname" type="text" value="<?php echo $firstname ;?>" >
                                                <label for="firstname">First Name</label>
                                            </div>
                                            <div class="input-field col-md-6 col-sm-12">
                                                <input id="lastname" type="text" value="<?php echo $lastname ;?>" >
                                                <label for="lastname">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="input-field col-md-6 col-sm-12">
                                                <input id="email" type="email" value="<?php echo $email;?>">
                                                <label for="email">Email</label>
                                            </div>

                                            <div class="input-field col-md-6 col-sm-12">
                                                <label for="date-picker" style="margin-top: -25px;font-size: 0.8rem;">Date of Birth</label>
                                            <input type="date" id="dob" class="datepicker" value="<?php echo $date_of_birth ;?>">
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="input-field col-md-6 col-sm-12">
                                                <label style="margin-top: -25px;font-size: 0.8rem;">Gender</label>
                                            <input class="with-gap gender " name="gender" type="radio" id="test3" value="male" <?php if ($gender == 'male'){echo ' checked ';} ?>/>
                                            <label for="test3">Male</label>
                                            <input class="with-gap gender" name="gender" type="radio" id="test4" value="female" <?php if ($gender == 'female'){echo ' checked ';} ?>/>
                                            <label for="test4">Female</label>
                                            <input class="with-gap gender" name="gender" type="radio" id="test5" value="others" <?php if ($gender == 'others'){echo ' checked ';} ?>/>
                                            <label for="test5">Others</label>
                                                
                                                
                                                <!-- <label for="phone">Gender</label>  -->
                                            </div>

                                            <div class="input-field col-md-6 col-sm-12 con">
                                                <label for="phone" style="margin-top: -5%;font-size: 0.8rem;">Mobile</label>

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
                                                    <input id="phone" type="text" value="<?php echo $contact_no ;?>" >
                                                    
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


                                            
                                            
                                        </div>
                                        


                                            <div class="form-group col-md-6 col-sm-12">
                                                <label>State</label>
                                                <select id="mystate" class="selectdesign">
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
                                                </div>
                                    

                                    
                                    

                                        
                                        </div>

                                       

                                    <div class="row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label>City</label><br>
                                        <select id="city" class="selectdesign">
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
                                        <!-- <option value="">--Select state first--</option> -->
                                            
                                        </select>
                                        <!-- <div id="cityError" class=" errorMessage2"></div>                  -->
                                    </div>

                                     <div class="form-group col-md-6 col-sm-12">
                                        <label>Pincode</label>
                                        <input type="text" class="form-control" id="pin" placeholder="Pincode" value="<?php echo $pincode ;?>" readonly>
                                        
                                    </div>

                                </div>
                                



                                        

                                    





                            


                                         <div class="row">
                                            
                                            <div class="input-field col-md-12 col-sm-12">
                                                
                                                <!-- <textarea id="address" style="margin-top: 1.5%;" ></textarea> -->
                                                <input id="address" type="text" value="<?php echo $address ;?>" >
                                            
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
                                            <option value="<?php echo $zone;?>"><?php echo $zone_name.' (Already Selected)' ; ?></option>
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
                                                    <?php
                                                        require '../connect.php';
                                                        $stmt = $conn->prepare("SELECT * FROM region WHERE zone_id = '".$zone."' AND status = 1 ORDER BY region_name ASC");
                                                        $stmt->execute();

                                                                                                           
                                                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                        ?>
                                                        
                                                        <option value="<?php echo $region;?>"><?php echo $region_name.' (Already Selected)' ; ?></option>
                                                        <?php 
                                                        if($stmt->rowCount()>0){
                                                             foreach (($stmt->fetchAll()) as $key => $row) {  
                                                                echo '<option value="'.$row['id'].'">'.$row['region_name'].'</option>'; 
                                                            } 
                                                        }else{ 
                                                            echo '<option value="">Region not available</option>'; 
                                                        } 
                                                        ?>

                                                   
                                                </select>
                                                </div>
                                    

                                    
                                    

                                        
                                        </div>

                                        <div class="row">
                                            
                                             <div class="form-group col-md-6 col-sm-12">
                                                <label>Branch</label>
                                                <select id="branch_name" class="selectdesign">
                                                    <?php
                                                        require '../connect.php';
                                                        $stmt = $conn->prepare("SELECT * FROM branch WHERE region_id = '".$region."' AND status = 1 ORDER BY branch_name ASC");
                                                        $stmt->execute();

                                                                                                           
                                                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                        ?>
                                                        
                                                        <option value="<?php echo $branch;?>"><?php echo $branch_name.' (Already Selected)' ; ?></option>
                                                        <?php 
                                                        if($stmt->rowCount()>0){
                                                             foreach (($stmt->fetchAll()) as $key => $row) {  
                                                                echo '<option value="'.$row['id'].'">'.$row['branch_name'].'</option>'; 
                                                            } 
                                                        }else{ 
                                                            echo '<option value="">Branch not available</option>'; 
                                                        } 
                                                        ?>

                                                   
                                                </select>
                                                </div>
                                    </div>



                                        
                                        
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
                                                             <input type="hidden" name="profile_pic" id="profile_pic" value="<?php echo $profile_pic;?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div>
                                                    <!-- <img alt="Profile_pic" class="imgsize" id="img"> -->

                                                    <?php
                                                        if($profile_pic ==''){
                                                            echo '<img src="../../uploading/not_uploaded.png" alt="Profile pic" class="imgsize" id="img">';
                                                        }else{
                                                            echo '<img src="../../uploading/'.$profile_pic.'" alt="Profile pic" class="imgsize" id="img">';
                                                        }
                                                     ?>
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
                                                             <input type="hidden" name="passbook" id="passbook" value="<?php echo $bank_passbook;?>" disabled>
                                                        </div>
                                                    
                                                    </div>
                                                    <div>
                                                   <!-- <img alt="Bank Passbook" class="imgsize" id="img6"> -->
                                                   <?php
                                                        if($bank_passbook ==''){
                                                            echo '<img src="../../uploading/not_uploaded.png" alt="Bank Passbook" class="imgsize" id="img6">';
                                                        }else{
                                                            echo '<img src="../../uploading/'.$bank_passbook.'" alt="Bank Passbook" class="imgsize" id="img6">';
                                                        }
                                                     ?>
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
                                                             <input type="hidden" name="kyc" id="kyc" value="<?php echo $kyc;?>" disabled>
                                                        </div>
                                                    
                                                    </div>
                                                    <div >
                                                   
                                                   <?php
                                                        if($kyc ==''){
                                                            echo '<img src="../../uploading/not_uploaded.png" alt="Kyc" class="imgsize" id="img2">';
                                                        }else{
                                                            echo '<img src="../../uploading/'.$kyc.'" alt="KYC" class="imgsize" id="img2">';
                                                        }
                                                     ?>
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
                                                             <input type="hidden" name="pan_card" id="pan_card" value="<?php echo $pan_card;?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div>
                                                    <!-- <img alt="Pan Card" class="imgsize" id="img3"> -->
                                                    <?php
                                                        if($pan_card ==''){
                                                            echo '<img src="../../uploading/not_uploaded.png" alt="Pan Card" class="imgsize" id="img3">';
                                                        }else{
                                                            echo '<img src="../../uploading/'.$pan_card.'" alt="Pan Card" class="imgsize" id="img3">';
                                                        }
                                                     ?>
                                                    </div>
                                                
                                            </div>
                                             <div class="input-field col-md-6 col-sm-12">
                                              <label style="margin-top: -34px;font-size: 0.8rem;">Aadhar Card</label>
                                                    <div class="file-field input-field">
                                                        <div class="btn">
                                                            <span>Upload</span>
                                                            <input type="file"id="file4" name="file4"  >
                                                        </div>
                                                         <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text"  >
                                                             <input type="hidden" name="aadhar_card" id="aadhar_card" value="<?php echo $aadhar_card;?>"  disabled>
                                                        </div>
                                                    
                                                    </div>
                                                    <div >
                                                   <!-- <img alt="Aadhar Card" class="imgsize" id="img4"> -->
                                                   <?php
                                                        if($aadhar_card ==''){
                                                            echo '<img src="../../uploading/not_uploaded.png" alt="Aadhar Card" class="imgsize" id="img4">';
                                                        }else{
                                                            echo '<img src="../../uploading/'.$aadhar_card.'" alt="Aadhar Card" class="imgsize" id="img4">';
                                                        }
                                                     ?>
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
                                                             <input type="hidden" name="voting_card" id="voting_card" value="<?php echo $voting_card;?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div >
                                                    <!-- <img alt="Voting Card" class="imgsize" id="img5"> -->
                                                    <?php
                                                        if($voting_card ==''){
                                                            echo '<img src="../../uploading/not_uploaded.png" alt="Voting Card" class="imgsize" id="img5">';
                                                        }else{
                                                            echo '<img src="../../uploading/'.$voting_card.'" alt="Voting Card" class="imgsize" id="img5">';
                                                        }
                                                     ?>
                                                    </div>
                                                
                                            </div>
                                             

                                            <input type="hidden" id="testValue" name="testValue" value="7">
                                            <input type="hidden" id="editfor" name="editfor" value="<?php echo $editfor;?>">
                                            <input type="hidden" id="testiod" name="testiod" value="<?php echo $id;?>">
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

                                                 <a href="#" class="waves-effect waves-light btn-large" id="editRegionalManager">Edit</a>
                                                
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

      }else{
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
            }
        });

        // $('#sales_manager_id').on('change', function(){
        //     var sales_manager_id = $(this).val();
        //     var franch_id='';
        //     if(sales_manager_id == ''){
        //         franch_id='-1'
        //     }else{
        //         franch_id=sales_manager_id;
        //     }

        //     if(franch_id){
        //          $.ajax({
        //                   type:'POST',
        //                   url:'../agents/sales_manager_name.php',
        //                   data:'sales_manager_id='+franch_id,
        //                   success:function(response){
        //                      // $('#pin').html(response);
        //                      $('#sales_manager_name').val(response); 
        //                   }
        //               }); 
        //     }else{
                
        //     }
        // });
</script>
