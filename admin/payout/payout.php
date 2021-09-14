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

                                    <h4>Payout Details</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                </div>
                                <div class="tab-inn">
                                    <form>
                                       
                                       
                                       
                                        <div class="row">
                                            <div class="form-group col-md-6 col-sm-12">
                                                <label> Payout Status</label>
                                                <select id="mystate" class="selectdesign">
                                                    <option value="">--Select Payout Status--</option>
                                                     <option value="">Payout Pending</option>
                                                      <option value="">Payout Completed</option>

                                                </select>
                                                </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                                <label> Designation</label>
                                                <select id="mystate" class="selectdesign">
                                                    <option value="">--Select Designation--</option>
                                                     <option value="">Travel Agent</option>
                                                      <option value="">Franchisee</option>
                                                       <option value="">Customer</option>

                                                </select>
                                                </div>

                                                 <div class="form-group col-md-6 col-sm-12">
                                                <label>Customer & ID</label>
                                                <select id="mystate" class="selectdesign">
                                                    <option value="">-- Select Customer & ID--</option>
                                                     <option value="">Savio CUS1008</option>
                                                      <option value="">Upasana CU6781</option>
                                                      

                                                </select>
                                                </div>
                                              <div class="form-group col-md-6 col-sm-12">
                                                <label>Level</label>
                                                <select id="mystate" class="selectdesign">
                                                    <option value="">Level 0 </option>
                                                     <option value="">Level 1</option>
                                                      <option value="">Level 2</option>
                                                      

                                                </select>
                                                </div>
                                        </div>

                                      
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4> User Details</h4>
                                </div>
                               
                               <div class="tab-inn">
                                    
                                      
                                             <div class="row">
                                            
                                            <div class="input-field col-md-6 col-sm-12">
                                                <input id="firstname" type="text" >
                                                <label for="firstname">ID & Name</label>
                                            </div>
                                            <div class="input-field col-md-6 col-sm-12">
                                                <input id="add" type="text" >
                                                <label for="address">Address</label>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="input-field col-md-6 col-sm-12">
                                                <input id="email" type="email">
                                                <label for="email">Email</label>
                                            </div>
                                             <div class="input-field col-md-6 col-sm-12">
                                                <input id="mobile" type="text">
                                                <label for="email">Phone No.</label>
                                            </div>

                                            

                                      
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Payout List</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                   <!--  <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-register-list"><i class="material-icons">more_vert</i></a> -->
                                    <!-- <ul id="dr-register-list" class="dropdown-content">
                                     
                                        <li><a href="download_list?vkvbvjfgfikix=Registered">Download List</a>
                                        </li>
                                       
                                    </ul> -->

                                    <!-- Dropdown Structure -->

                                </div>
                               
                               <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover" id="pendingTable">
                                            <thead>
                                                <tr>
                                                    <th>Level</th>
                                                    <th>ID & Name</th>
                                                    <th>Phone No.</th>
                                                    <th>Booking ID</th>
                                                    <th>Package Name</th>
                                                    <th>Package Amount</th>
                                                    <th>Amount</th>
                                                    <th>View</th>
                                                    <th>Payment Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Level 1</td>
                                                    <td>CUS098765 savio</td>
                                                    <td>9876543210</td>
                                                    <td>1234567</td>
                                                    <td>Goa Package</td>
                                                    <td>20,000/-</td>
                                                    <td>100/-</td>
                                                    <td>
                                                        <a href="payoutview.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>Successful</td>

                                                </tr>
                                                
                                               
                                            </tbody>
                                        </table>
                                    </div>
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

