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
        <style type="text/css">
            .lable-margin{
                margin-top: 40%;
            }

            @media only screen and (max-width: 768px) {
              .lable-margin{
                    margin-top: 1%;
                }
            }

            .lable-margin2{
                margin-top: 10%;
            }

            @media only screen and (max-width: 768px) {
              .lable-margin2{
                    margin-top: 1%;
                }
            }
        </style>

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
                        <li class="page-back"><a href="add_new_packages3.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Add New Package - Pricing</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                </div>

                                
                                <div class="tab-inn">
                                    <form>
                                         
                                        <div class="col-sm-6">
                                            <div class="row-sm-6">
                                                <div class="col-sm-2">
                                                    <label class="lable-margin">Net Price :</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" name="">
                                                </div>
                                            </div>


                                            <div class="row-sm-6">
                                                <div class="col-sm-2">
                                                    <label class="lable-margin">GST @5% :</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" name="">
                                                </div>
                                            </div>

                                             <div class="row-sm-6">
                                                <div class="col-sm-2">
                                                    <label class="lable-margin">Total :</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" name="">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-6">
                                            <div class="row-sm-6">
                                                <div class="col-sm-2">
                                                    <label class="lable-margin">Markup Price :</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" name="">
                                                </div>
                                            </div>


                                            <div class="row-sm-6">
                                                <div class="col-sm-2">
                                                    <label class="lable-margin">Loading Price :</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" name="">
                                                </div>
                                            </div>

                                             <div class="row-sm-6">
                                                <div class="col-sm-2">
                                                    <label class="lable-margin">GST @5% :</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" name="">
                                                </div>
                                            </div>

                                             <div class="row-sm-6">
                                                <div class="col-sm-2">
                                                    <label class="lable-margin">Total :</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" name="">
                                                </div>
                                            </div>
                                        </div>
                                          
                                          <div class="col-sm-6">
                                            <div class="row-sm-6">
                                                <div class="col-sm-4">
                                                    <label class="lable-margin2">Total Selling Price :</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="">
                                                </div>
                                            </div>


                                            
                                        </div> 
                                          <!-- <div class="col-sm-6">

                                            <div class="row-sm-6">
                                                <div class="col-sm-2">
                                                    <label class="lable-margin">Markup Price :</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" name="">
                                                </div>
                                            </div>


                                            <div class="row-sm-6">
                                                <div class="col-sm-2">
                                                    <label class="lable-margin">Markup Loading :</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" name="">
                                                </div>

                                            </div>
                                            
                                            <div class="row-sm-6">
                                                <div class="col-sm-2">
                                                    <label class="lable-margin">Markup Price :</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" name="">
                                                </div>
                                            </div>
                                            
                                          </div>
 -->

                                        <!-- <div class="col-sm-6" style="margin-left: 1%;">
                                            <div class=" row-md-2 row-sm-2" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">1:</label>
                                                
                                            </div>
                                            <div class=" row-md-4 row-sm-4">
                                                
                                                <input type="text"  id="net"  >
                                            </div>

                                            <div class=" row-md-2 row-sm-2" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">2:</label>
                                                
                                            </div>
                                            <div class=" row-md-4 row-sm-4">
                                                
                                                <input type="text"  id="gst1"  >
                                            </div>
                                        </div>










                                        <div class="col" style="margin-left: 1%;">
                                            <div class=" col-md-2 col-sm-2" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">NET Price :</label>
                                                
                                            </div>
                                            <div class=" col-md-4 col-sm-4">
                                                
                                                <input type="text"  id="net"  >
                                            </div>

                                            <div class=" col-md-2 col-sm-2" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">GST @ 5% :</label>
                                                
                                            </div>
                                            <div class=" col-md-4 col-sm-4">
                                                
                                                <input type="text"  id="gst1"  >
                                            </div>
                                        </div>

                                         <div class="row" style="margin-left: 1%;">
                                            <div class=" col-md-2 col-sm-2" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">Total:</label>
                                                
                                            </div>
                                            <div class=" col-md-4 col-sm-4">
                                                
                                                <input type="text"  id="np"  >
                                            </div>

                                            <div class=" col-md-2 col-sm-2" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">Markup Price :</label>
                                                
                                            </div>
                                            <div class=" col-md-4 col-sm-4">
                                                
                                                <input type="text"  id="mp"  >
                                            </div>
                                        </div>

                                         <div class="row" style="margin-left: 1%;">
                                            <div class=" col-md-2 col-sm-2" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">Markup Loading :</label>
                                                
                                            </div>
                                            <div class=" col-md-4 col-sm-4">
                                                
                                                <input type="text"  id="ml"  >
                                            </div>

                                            <div class=" col-md-2 col-sm-2" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">GST @5%:</label>
                                                
                                            </div>
                                            <div class=" col-md-4 col-sm-4">
                                                
                                                <input type="text"  id="gst2"  >
                                            </div>
                                        </div> -->


                                         <!-- <div class="row" style="margin-left: 1%;">
                                            <div class=" col-md-2 col-sm-2" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">Total :</label>
                                                
                                            </div>
                                            <div class=" col-md-4 col-sm-4">
                                                
                                               
                                            </div>

                                            <div class=" col-md-2 col-sm-2" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">Total Selling Price:</label>
                                                
                                            </div>
                                            <div class=" col-md-4 col-sm-4">
                                                
                                                <input type="text"  id="totalmp"  >
                                            </div>
                                        </div> -->


                                        <!--  <div class="row" style="margin-left: 1%;">
                                            
                                            <div class=" col-md-4 col-sm-4" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">Total Selling Price </label>
                                                
                                            </div>
                                            <div class=" col-md-4 col-sm-4">
                                                
                                                <input type="text"  id="mrp"  >
                                            </div>

                                        </div> -->
                                              <!-- <div class="form-group col-md-12 col-sm-12">
                                                <label>Actual Product Cost (Child)</label>
                                                <input type="text"  id="child"  >
                                                
                                            </div> -->
                                        
                                       <!--  <div class="row" style="margin-left: 1%;">
                                            <div class=" col-md-2 col-sm-2" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">GST @5% :</label>
                                                
                                            </div>
                                            <div class=" col-md-3 col-sm-3">
                                                
                                                <input type="text"  id="adult"  >
                                            </div>
                                        </div>

                                        <div class="row" style="margin-left: 1%;">
                                            <div class=" col-md-2 col-sm-2" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">Total:</label>
                                                
                                            </div>
                                            <div class=" col-md-3 col-sm-3">
                                                
                                                <input type="text"  id="adult"  >
                                            </div>
                                        </div>


                                        <div class="row" style="margin-left: 50%;">
                                            <div class=" col-md-2 col-sm-2" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">Markup Price :</label>
                                                
                                            </div>
                                            <div class=" col-md-3 col-sm-3">
                                                
                                                <input type="text"  id="adult"  >
                                            </div>
                                        </div>

                                        <div class="row" style="margin-left: 1%;">
                                            <div class=" col-md-2 col-sm-2" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">Markup Loading :</label>
                                                
                                            </div>
                                            <div class=" col-md-3 col-sm-3">
                                                
                                                <input type="text"  id="adult"  >
                                            </div>
                                        </div>

                                        <div class="row" style="margin-left: 1%;">
                                            <div class=" col-md-2 col-sm-2" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">GST @5% :</label>
                                                
                                            </div>
                                            <div class=" col-md-3 col-sm-3">
                                                
                                                <input type="text"  id="adult"  >
                                            </div>
                                        </div>

                                        <div class="row" style="margin-left: 1%;">
                                            <div class=" col-md-2 col-sm-2" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">Total :</label>
                                                
                                            </div>
                                            <div class=" col-md-3 col-sm-3">
                                                
                                                <input type="text"  id="adult"  >
                                            </div>
                                        </div>

                                        <div class="row" style="margin-left: 1%;">
                                            <div class=" col-md-2 col-sm-2" style="width: 9.5%;">
                                                <label style="margin-top: 20%;">Total Selling Price :</label>
                                                
                                            </div>
                                            <div class=" col-md-3 col-sm-3">
                                                
                                                <input type="text"  id="adult"  >
                                            </div>
                                        </div> -->
                                         <!--  <div class="form-group col-md-12 col-sm-12">
                                                <label>Markup Product Price</label>
                                                <input type="text"  id="markup"  >
                                                
                                            </div> -->





                                     <!--   <div class="form-group col-md-12 col-sm-12">
                                                <label>NAC Value</label>
                                                <input type="text"  id="nac"  >
                                                
                                            </div> -->
                                            <!-- <div class="form-group col-md-12 col-sm-12">
                                                <label>Transaction Fee 1</label>
                                                <input type="text"  id="tf"  >
                                                
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label>Transaction Fee 2</label>
                                                <input type="text"  id="tf2"  > 
                                                
                                            </div> 
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label>Package Discount</label>
                                                <input type="text"  id="discount"  >
                                                
                                            </div> 

                                             <div class="form-group col-md-12 col-sm-12">
                                                <label>HSN Code / SAC Code</label>
                                                <input type="text"  id="hsn"  >
                                                
                                            </div> -->
                                            <!-- <div class="form-group col-md-12 col-sm-12">
                                                <label>GST(%)</label>
                                                <input type="text"  id="sgst"  >
                                                
                                            </div> -->
                                            <!-- <div class="form-group col-md-12 col-sm-12">
                                                <label>CGST(%)</label>
                                                <input type="text"  id="cgst"  >
                                                
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label>IGST(%)</label>
                                                <input type="text"  id="igst"  >
                                                 
                                            </div>-->
                                            <!-- <div class="form-group col-md-12 col-sm-12">
                                                <label>Final Selling Price</label>
                                                <input type="text"  id="pax">
                                                
                                            </div>
                                             -->
                                    
                                        <!-- </div> -->

                                  
                                      

                                        
                                        <div class="row">
                                            <div class="input-field col s12" style="margin-top: 20px;">
                                              

                                                 <a href="add_new_packages5.php" class="waves-effect waves-light btn-large" >Next</a>
                                                
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




</body>


</html>

