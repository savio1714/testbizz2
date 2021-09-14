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
               
                
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4> Customer Payout Details</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                </div>
                                <div class="row" style="float: right; margin-right: 2px;">
                                            <div class="input-field col s12" >
                                               <!--  <a href="pending_customer.php" class="waves-effect waves-light btn-large">Amount</a> -->Amount to pay Customer:
                                                 <a href="#" class="waves-effect waves-light btn-large">100/-</a>
                                                <!-- <input type="submit" class="waves-effect waves-light btn-large" value="Back"> -->
                                            </div>
                                           
                                        </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            
                                            <div class="input-field col s12">
                                                <input id="name" type="text" value="Savio Miranda">
                                                <label for="first_name">Customer Name</label>
                                            </div>
                                        
                                        </div>
                                        <div class="row">
                                            
                                            <div class="input-field col s6">
                                                <input id="first_name" type="text" value="CUS1465352">
                                                <label for="first_name">Customer ID</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="last_name" type="text" Value="9876543210">
                                                <label for="last_name">Phone No.</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="phone" type="text" value="07/07/2018" >
                                                <label for="phone">Email ID</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="email" type="email" value="123456789">
                                                <label for="email">Booking ID</label>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="gender" type="text" value="Goa tour">
                                                <label for="phone">Package Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="bdate" type="email" value="20,000/-">
                                                <label for="email">Package Amount</label>
                                            </div>

                                        </div>
                                         <div class="row">
                                            
                                          <!--   <div class="input-field col s6">
                                                <input id="name" type="text" value="123456788776543">
                                               
                                            
                                                <label for="first_name">Transaction ID</label>
                                            </div -->
                                    
                                            
                                            <div class="input-field col s6">
                                                <input id="name" type="text" value="Net Banking">
                                               
                                            
                                                <label for="first_name">Transaction Mode</label>
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

