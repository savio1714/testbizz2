<?php
session_start();

if(!isset($_SESSION['username'])){
    echo '<script>location.href = "../index.php";</script>';
}

$id = $_GET['vkvbvjfgfikix'];
// $user_id = $_GET['jdjdfdjs'];
// $user_id = $_GET['rgist'];


    require '../connect.php';


// $stmt2 = $conn->prepare("SELECT username FROM login where user_id = '".$user_id."' and id='".$id."' ");
//     $stmt2->execute();

//     $stmt2->setFetchMode(PDO::FETCH_ASSOC);

//     if($stmt2->rowCount()>0){
//     foreach (($stmt2->fetchAll()) as $key2 => $row2) {
//         $username=$row2['username'];
//     }
//     }                                                      
//     else{
                                                            
//     }





    $stmt = $conn->prepare("SELECT * FROM customer where id = '".$id."'");
    $stmt->execute();
     // set the resulting array to associative
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    if($stmt->rowCount()>0){
    foreach (($stmt->fetchAll()) as $key => $row) {

        $firstname=$row['firstname'];
        // $username=$row['username'];
        $lastname=$row['lastname'];
        $email=$row['email'];
        $contact_no=$row['contact_no'];
        $date_of_birth=$row['date_of_birth'];
        $gender=$row['gender'];
        $address=$row['address'];
        $id_proof=$row['id_proof'];
 
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
    <link rel="stylesheet" href="../css/materialize.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
<?php include '../header2.php';?>

    <!--== BODY CONTNAINER ==-->
    
        <?php include '../sidebar2.php';?>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> View Customer Details </a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>View Customer Details</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            
                                            <div class="input-field col s12">
                                                <input id="name" type="text" value="<?php echo $firstname.' '. $lastname;?>" readonly>
                                                <label for="first_name">Name</label>
                                            </div>
                                        
                                        </div>
                                        <div class="row">
                                            
                                            <div class="input-field col s6">
                                                <input id="first_name" type="text" value="<?php echo $firstname;?>" readonly>
                                                <label for="first_name">First Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="last_name" type="text" value="<?php echo $lastname;?>" readonly>
                                                <label for="last_name">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="phone" type="text" value="<?php echo $contact_no;?>" readonly>
                                                <label for="phone">Mobile</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="email" type="email" value="<?php echo $email;?>" readonly>
                                                <label for="email">Email</label>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="gender" type="text" value="<?php if($gender == 'male'){ echo "Male";} else if ($gender == 'female'){echo "Female";}else{echo "Others";} ;  ?>" readonly>
                                                <label for="phone">Gender</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="bdate" type="email" value="<?php echo $date_of_birth;?>" readonly>
                                                <label for="email">Date of Birth</label>
                                            </div>

                                        </div>
                                         <div class="row">
                                            
                                            <div class="input-field col s12">
                                                <input id="name" type="text" value="<?php echo $address;?>" readonly>
                                                <!-- <textarea id="address" style="margin-top: 1.5%;" readonly><?php echo $address;?></textarea> -->
                                            
                                                <label for="first_name">Address</label>
                                            </div>
                                        
                                        </div>

                                       

                                        <div class="row">
                                            <label style="padding: 10px;">ID Proof</label>
                                            <div class="col s12">
                                                
                                                <?php echo '<a href="../../upload/'.$id_proof.'" target="_blank" title="id proof"><img src="../../upload/'.$id_proof.'" alt="id proof" style="width: 250px;height: 250px"></a>';?>


                                            </div>
                                            

                                        </div>


                                        


                                         <!-- <div class="row">
                                            
                                            <div class="input-field col s6">
                                                <input name="group1" type="radio" id="test1" />
                                                <label for="test1">Male</label>
                                                <input name="group1" type="radio" id="test1" />
                                                <label for="test1">Female</label>
                                                <input name="group1" type="radio" id="test1" />
                                                <label for="test1">Others</label>
                                            </div>
                                             <div class="input-field col s6">
                                               
                                            <input type="date" id="date-picker" class="datepicker">
                                            </div>

                                        </div> -->
                                      <!--   <div class="row">
                                            <div class="input-field col s6">
                                                <input id="city" type="text" value="Illunois" class="validate">
                                                <label for="city">City</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="country" type="text" value="United States" class="validate">
                                                <label for="country">Country</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="password" type="password" value="aksdjfhasdf" class="validate">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="password1" type="password" value="asdfaefrerfg" class="validate">
                                                <label for="password1">Confirm Password</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="email" type="email" value="marshahi@mail.com" class="validate">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="email1" type="email" value="marshahi@mail.com" class="validate">
                                                <label for="email1">Alternate Email</label>
                                            </div>
                                        </div> -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <a href="pending_customer.php" class="waves-effect waves-light btn-large">Back</a>
                                                 <a href="#" class="waves-effect waves-light btn-large" <?php echo 'onclick=\'confirmfunc("' .$id. '","' .$firstname. '")\'';?>>Confirm</a>
                                                <!-- <input type="submit" class="waves-effect waves-light btn-large" value="Back"> -->
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
    <script type="text/javascript">
    function confirmfunc(id,name)
    { 
    var dataString = 'id='+ id+'&uname='+name;


      $.ajax({
        type: "POST",
        url: "confirm_customer.php",
        data: dataString,
        cache: false,
          success:function(data){
            if(data == 1){
                   alert("Username and Password send via sms and email");
             location.href = "pending_customer.php";
          }
          else{

          alert("Failed to confirm");
        }
      }
      });
          
    };
</script>

</body>


</html>
