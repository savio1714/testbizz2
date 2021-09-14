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
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Add Employee</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Add New Employee</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            
                                            <div class="form-group col-md-6 col-sm-12">
                                                <!-- <input id="location" type="text"> -->
                                                <label for="location" style="margin-top: -6%;font-size: 0.8rem;">Location</label>

                                                <?php
                                                require '../connect.php';
                                                $stmt = $conn->prepare("SELECT * FROM location WHERE status = 1");
                                                $stmt->execute();

                                                                                                   
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                ?>
                                                <select id="location"  class="selectdesign">
                                                    <option value="">Select Location</option>
                                                    <?php 
                                                    if($stmt->rowCount()>0){
                                                         foreach (($stmt->fetchAll()) as $key => $row) {  
                                                            echo '<option value="'.$row['id'].'">'.$row['location_name'].' </option>'; 
                                                        } 
                                                    }else{ 
                                                        echo '<option value="">Location not available</option>'; 
                                                    } 
                                                    ?>
                                                </select>
                                                



                                            </div>

                                            <div class="form-group col-md-6 col-sm-12">
                                                <!-- <input id="location" type="text"> -->
                                                <label for="designation" style="margin-top: -6%;font-size: 0.8rem;">Designation</label>

                                                <?php
                                                require '../connect.php';
                                                $stmt2 = $conn->prepare("SELECT ut.name, d.user_type_id FROM user_type AS ut INNER JOIN designation AS d ON ut.id=d.user_type_id WHERE d.status = 1");
                                                $stmt2->execute();

                                                                                                   
                                                $stmt2->setFetchMode(PDO::FETCH_ASSOC);
                                                ?>
                                                <select id="designation"  class="selectdesign">
                                                    <option value="">Select Designation</option>
                                                    <?php 
                                                    if($stmt2->rowCount()>0){
                                                         foreach (($stmt2->fetchAll()) as $key2 => $row2) {  
                                                            echo '<option value="'.$row2['user_type_id'].'">'.$row2['name'].' </option>';  
                                                        } 
                                                    }else{ 
                                                        echo '<option value="">Designtion not available</option>'; 
                                                    } 
                                                    ?>
                                                </select>
                                                



                                            </div>

                                            
                                           
                                        
                                        </div>
                                       
                                       
                                    
                                        <div class="row">
                                            
                                            <div class="input-field col-md-6 col-sm-12">
                                                <input id="firstname" type="text" >
                                                <label for="firstname">Employee First Name</label>
                                            </div>
                                            <div class="input-field col-md-6 col-sm-12">
                                                <input id="lastname" type="text" >
                                                <label for="lastname">Employee Last Name</label>
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
                                                            echo '<option value="'.$row['country_code'].'">'.$row['country_code'].' ('.$row['sortname'].')</option>'; 
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
                                            
                                            <div class="input-field col-md-6 col-sm-12">
                                                <input id="pass" type="password" >
                                                <label for="pass">Password</label>
                                            </div>
                                            <div class="input-field col-md-6 col-sm-12">
                                                <input id="cpass" type="password" >
                                                <label for="cpass">Confirm Password</label>
                                            </div>
                                </div>
                                <input type="hidden" id="testValue" name="testValue" value="emp">

                                        
                                        <div class="row">
                                            <div class="input-field col s12" style="margin-top: 20px;">
                                               <!--  <a href="registered_customer.php" class="waves-effect waves-light btn-large">Back</a> -->

                                                 <a href="#" class="waves-effect waves-light btn-large" id="addEmployee">Submit</a>
                                                
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
            }
        });
</script>
