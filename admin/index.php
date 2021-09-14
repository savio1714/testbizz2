<?php
session_start();

if(!isset($_SESSION['username'])){
    echo '<script>location.href = "login";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 08:20:54 GMT -->
<head>
    <title>Bizzmirth Holidays</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="../../../../../fonts.googleapis.com/cssbcc5.css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/materialize.css" />

    <style type="text/css">
        .lessWords {
          display: block;
          white-space: nowrap;
          width: 12em;
          overflow: hidden;
          text-overflow: ellipsis;
        }
    </style>
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
<?php include 'header.php';?>
   

    <!--== BODY CONTNAINER ==-->
<?php include 'sidebar.php';?>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="./"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Dashboard</a>
                        </li>
                        <!-- <li class="page-back"><a href="index2.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li> -->
                    </ul>
                </div>
                <!--== DASHBOARD INFO ==-->
                <div class="ad-v2-hom-info">
					<div class="ad-v2-hom-info-inn">
						<ul>
							<li>
								<div class="ad-hom-box ad-hom-box-1">
									<span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-users"></i></span>
									<div class="ad-hom-view-com">
									<p><i class="fa  fa-arrow-up up"></i> <span style="font-size: 11px;"> Total Franchisee</span></p>
                                        <?php
                                                require 'connect.php';
                                                $stmt = $conn->prepare("SELECT count(franchisee_id) as totalFranchisee FROM franchisee where user_type='4' and status='1' ");
                                                $stmt->execute();
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {
                                                        $totalFranchisee=$row['totalFranchisee'];
                                                        echo '<h3>'.$totalFranchisee.'</h3>';

                                                    }
                                                      
                                                } 
                                                    else{
                                                        echo '<h3>0</h3>';
                                                    }
                                        ?> 
									<!-- <h3>22,520</h3> -->
									</div>
		 						</div>
							</li>
							<li>
								<div class="ad-hom-box ad-hom-box-2">
									<span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-users"></i></span>
									<div class="ad-hom-view-com">
									<p><i class="fa  fa-arrow-up up"></i> <span style="font-size: 11px;">Total Travel Agent</span></p>
                                     <?php
                                                require 'connect.php';
                                                $stmt = $conn->prepare("SELECT count(travel_agent_id) as totaltravel_agent FROM travel_agent where user_type='3' and status='1' ");
                                                $stmt->execute();
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {
                                                        $totaltravel_agent=$row['totaltravel_agent'];
                                                        echo '<h3>'.$totaltravel_agent.'</h3>';

                                                    }
                                                      
                                                } 
                                                    else{
                                                        echo '<h3>0</h3>';
                                                    }
                                        ?>
									<!-- <h3>22,520</h3> -->
									</div>
								</div>
							</li>
							<li>
								<div class="ad-hom-box ad-hom-box-3">
									<span class="ad-hom-col-com ad-hom-col-3"><i class="fa fa-users"></i></span>
									<div class="ad-hom-view-com">
									<p><i class="fa  fa-arrow-up up"></i> <span style="font-size: 11px;"> Total Customer</span></p>
                                    <?php
                                                require 'connect.php';
                                                $stmt = $conn->prepare("SELECT count(cust_id) as totalcustomer FROM customer where user_type='2' and status='1' ");
                                                $stmt->execute();
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {
                                                        $totalcustomer=$row['totalcustomer'];
                                                        echo '<h3>'.$totalcustomer.'</h3>';

                                                    }
                                                      
                                                } 
                                                    else{
                                                        echo '<h3>0</h3>';
                                                    }
                                        ?>
									<!-- <h3>22,520</h3> -->
									</div>
								</div>
							</li>
							<li>
								<div class="ad-hom-box ad-hom-box-4">
									<span class="ad-hom-col-com ad-hom-col-4"><i class="fa fa-users"></i></span>
									<div class="ad-hom-view-com">
									<p><i class="fa  fa-arrow-up up"></i> <span style="font-size: 11px;"> Total Employee</span></p>
									 <?php
                                                require 'connect.php';
                                                $stmt = $conn->prepare("SELECT count(regional_manager_id) as totalregional_manager,(SELECT count(sales_manager_id)  FROM sales_manager where user_type='5' and status='1' ) as totalsales_manager ,(SELECT count(branch_manager_id)   FROM branch_manager where user_type='6' and status='1' ) as totalbranch_manager FROM regional_manager where user_type='7' and status='1' ");
                                                $stmt->execute();
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {
                                                        $totalregional_manager=$row['totalregional_manager'];
                                                        $totalsales_manager=$row['totalsales_manager'];
                                                        $totalbranch_manager=$row['totalbranch_manager'];

                                                        $totalemp = $totalregional_manager + $totalsales_manager + $totalbranch_manager;
                                                        echo '<h3>'.$totalemp.'</h3>';

                                                    }
                                                      
                                                } 
                                                    else{
                                                        echo '<h3>0</h3>';
                                                    }
                                        ?>
									</div>
								</div>
							</li>
						</ul>
					</div>
                </div>


                <!--== Regional Manager And Branch Manager ==-->

                <div class="sb2-2-3">
                    <div class="row">
                        <!--== Regional Manager ==-->
                        <div class="col-md-6">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Regional Manager</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <a class='dropdown-button drop-down-meta' href='#' data-activates='dropdown6'><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->
                                    <ul id='dropdown6' class='dropdown-content'>
                                        <li><a href="employee/add_regional_manager.php">Add New</a>
                                        </li>
                                        <!-- <li><a href="#!">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li>
 -->                                        <li class="divider"></li>
                                       <!--  <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li> -->
                                        <!-- <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th >Address</th>
                                                    <!-- <th>Budget</th> -->
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php
                                                require '../connect.php';
                                                $srno =1;
                                                $stmt = $conn->prepare("SELECT * FROM regional_manager where user_type='7' and (status='1'  or status='3') and regional_manager_id != '' order by regional_manager_id desc limit 5");
                                                $stmt->execute();

                                                    // set the resulting array to associative
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {
                                                        echo '<tr>
                                                    <td><span class="txt-dark weight-500">'.$row['regional_manager_id'].'</span>
                                                    </td>
                                                    <td>'.$row['firstname'].' '.$row['lastname'].'</td>
                                                    <td class="lessWords">'.$row['address'].'
                                                    </td>';
                                                    if($row['status'] ==1){
                                                             echo '<td>
                                                                    <span class="label label-success">Active</span>
                                                                </td>';
                                                        } else if($row['status'] ==3){
                                                            echo '<td>
                                                                    <span class="label label-danger">Removed</span>
                                                                </td>';
                                                        }
                                                        // else if($row['status'] ==2){
                                                        //     echo '<td>
                                                        //             <span class="label label-info">Hold</span>
                                                        //         </td>';
                                                        // }
                                                        else{

                                                        }

                                                   echo'</tr>';

                                                    }
                                                }else{
                                                    echo '<tr>

                                                    <td colspan="4">Not Registered Any Regional Manager</td>
                                                    </tr>
                                                    ';
                                                }
                                                ?>
                                                <!-- <tr>
                                                    <td><span class="txt-dark weight-500">2</span>
                                                    </td>
                                                    <td>Beavis</td>
                                                    <td class="lessWords">xyyz dsfdsfdsfsdf dsfsdfsdfsdf
                                                    </td>
                                                   
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                </tr> -->
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--== Branch Manager ==-->
                        <div class="col-md-6">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Branch Manager</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <a class='dropdown-button drop-down-meta' href='#' data-activates='dropdown5'><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->
                                    <ul id='dropdown5' class='dropdown-content'>
                                        <li><a href="employee/add_branch_manager.php">Add New</a>
                                        </li>
                                        <!-- <li><a href="#!">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li> -->
                                        <li class="divider"></li>
                                        <!-- <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li> -->
                                        <!-- <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <!-- <th>Budget</th> -->
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                                require '../connect.php';
                                                $srno =1;
                                                $stmt = $conn->prepare("SELECT * FROM branch_manager where user_type='6' and (status='1' or status='3') and branch_manager_id != '' order by branch_manager_id desc limit 5");
                                                $stmt->execute();

                                                    // set the resulting array to associative
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {
                                                        echo '<tr>
                                                    <td><span class="txt-dark weight-500">'.$row['branch_manager_id'].'</span>
                                                    </td>
                                                    <td>'.$row['firstname'].' '.$row['lastname'].'</td>
                                                    <td class="lessWords">'.$row['address'].'
                                                    </td>';
                                                    if($row['status'] ==1){
                                                             echo '<td>
                                                                    <span class="label label-success">Active</span>
                                                                </td>';
                                                        } else if($row['status'] ==3){
                                                            echo '<td>
                                                                    <span class="label label-danger">Removed</span>
                                                                </td>';
                                                        }
                                                        // else if($row['status'] ==2){
                                                        //     echo '<td>
                                                        //             <span class="label label-info">Hold</span>
                                                        //         </td>';
                                                        // }
                                                        else{

                                                        }

                                                   echo'</tr>';

                                                    }
                                                }else{
                                                    echo '<tr>

                                                    <td colspan="4">Not Registered Any Branch Manager</td>
                                                    </tr>
                                                    ';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--== Sales Manager And Franchisee==-->

                <div class="sb2-2-3">
                    <div class="row">
                        <!--== Sales Manager ==-->
                        <div class="col-md-6">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Sales Manager</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <a class='dropdown-button drop-down-meta' href='#' data-activates='dropdown4'><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->
                                    <ul id='dropdown4' class='dropdown-content'>
                                        <li><a href="employee/add_sales_manager.php">Add New</a>
                                        </li>
                                        <!-- <li><a href="#!">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li>
 -->                                        <li class="divider"></li>
                                       <!--  <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li> -->
                                        <!-- <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th >Address</th>
                                                    <!-- <th>Budget</th> -->
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php
                                                require '../connect.php';
                                                $srno =1;
                                                $stmt = $conn->prepare("SELECT * FROM sales_manager where user_type='5' and (status='1'  or status='3') and sales_manager_id != '' order by sales_manager_id desc limit 5");
                                                $stmt->execute();

                                                    // set the resulting array to associative
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {
                                                        echo '<tr>
                                                    <td><span class="txt-dark weight-500">'.$row['sales_manager_id'].'</span>
                                                    </td>
                                                    <td>'.$row['firstname'].' '.$row['lastname'].'</td>
                                                    <td class="lessWords">'.$row['address'].'
                                                    </td>';
                                                    if($row['status'] ==1){
                                                             echo '<td>
                                                                    <span class="label label-success">Active</span>
                                                                </td>';
                                                        } else if($row['status'] ==3){
                                                            echo '<td>
                                                                    <span class="label label-danger">Removed</span>
                                                                </td>';
                                                        }
                                                        // else if($row['status'] ==2){
                                                        //     echo '<td>
                                                        //             <span class="label label-info">Hold</span>
                                                        //         </td>';
                                                        // }
                                                        else{

                                                        }

                                                   echo'</tr>';

                                                    }
                                                }else{
                                                    echo '<tr>

                                                    <td colspan="4">Not Registered Any Sales Manager</td>
                                                    </tr>
                                                    ';
                                                }
                                                ?>
                                                <!-- <tr>
                                                    <td><span class="txt-dark weight-500">2</span>
                                                    </td>
                                                    <td>Beavis</td>
                                                    <td class="lessWords">xyyz dsfdsfdsfsdf dsfsdfsdfsdf
                                                    </td>
                                                   
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                </tr> -->
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--== Franchisee ==-->
                        <div class="col-md-6">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Franchisee</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <a class='dropdown-button drop-down-meta' href='#' data-activates='dropdown3'><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->
                                    <ul id='dropdown3' class='dropdown-content'>
                                        <li><a href="franchisee/add_franchisee.php">Add New</a>
                                        </li>
                                        <!-- <li><a href="#!">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li> -->
                                        <li class="divider"></li>
                                        <!-- <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li> -->
                                        <!-- <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <!-- <th>Budget</th> -->
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                                require '../connect.php';
                                                $srno =1;
                                                $stmt = $conn->prepare("SELECT * FROM franchisee where user_type='4' and (status='1' or status='0') and franchisee_id != '' order by franchisee_id desc limit 5");
                                                $stmt->execute();

                                                    // set the resulting array to associative
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {
                                                        echo '<tr>
                                                    <td><span class="txt-dark weight-500">'.$row['franchisee_id'].'</span>
                                                    </td>
                                                    <td>'.$row['firstname'].' '.$row['lastname'].'</td>
                                                    <td class="lessWords">'.$row['address'].'
                                                    </td>';
                                                    if($row['status'] ==1){
                                                             echo '<td>
                                                                    <span class="label label-success">Active</span>
                                                                </td>';
                                                        } else if($row['status'] ==0){
                                                            echo '<td>
                                                                    <span class="label label-danger">Deleted</span>
                                                                </td>';
                                                        }
                                                        // else if($row['status'] ==2){
                                                        //     echo '<td>
                                                        //             <span class="label label-info">Hold</span>
                                                        //         </td>';
                                                        // }
                                                        else{

                                                        }

                                                   echo'</tr>';

                                                    }
                                                }else{
                                                    echo '<tr>

                                                    <td colspan="4">Not Registered Any Franchisee</td>
                                                    </tr>
                                                    ';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="sb2-2-3">
                    <div class="row">
                        <!--== Travel Agent ==-->
                        <div class="col-md-6">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Travel Agent</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <a class='dropdown-button drop-down-meta' href='#' data-activates='dropdown1'><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->
                                    <ul id='dropdown1' class='dropdown-content'>
                                        <li><a href="travel_agent/add_travel_agent.php">Add New</a>
                                        </li>
                                        <!-- <li><a href="#!">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li>
 -->                                        <li class="divider"></li>
                                       <!--  <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li> -->
                                        <!-- <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th >Address</th>
                                                    <!-- <th>Budget</th> -->
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php
                                                require '../connect.php';
                                                $srno =1;
                                                $stmt = $conn->prepare("SELECT * FROM travel_agent where user_type='3' and (status='1'  or status='0') and travel_agent_id != '' order by travel_agent_id desc limit 5");
                                                $stmt->execute();

                                                    // set the resulting array to associative
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {
                                                        echo '<tr>
                                                    <td><span class="txt-dark weight-500">'.$row['travel_agent_id'].'</span>
                                                    </td>
                                                    <td>'.$row['firstname'].' '.$row['lastname'].'</td>
                                                    <td class="lessWords">'.$row['address'].'
                                                    </td>';
                                                    if($row['status'] ==1){
                                                             echo '<td>
                                                                    <span class="label label-success">Active</span>
                                                                </td>';
                                                        } else if($row['status'] ==0){
                                                            echo '<td>
                                                                    <span class="label label-danger">Deleted</span>
                                                                </td>';
                                                        }
                                                        // else if($row['status'] ==2){
                                                        //     echo '<td>
                                                        //             <span class="label label-info">Hold</span>
                                                        //         </td>';
                                                        // }
                                                        else{

                                                        }

                                                   echo'</tr>';

                                                    }
                                                }else{
                                                    echo '<tr>

                                                    <td colspan="4">Not Registered Any Travel Agent</td>
                                                    </tr>
                                                    ';
                                                }
                                                ?>
                                                <!-- <tr>
                                                    <td><span class="txt-dark weight-500">2</span>
                                                    </td>
                                                    <td>Beavis</td>
                                                    <td class="lessWords">xyyz dsfdsfdsfsdf dsfsdfsdfsdf
                                                    </td>
                                                   
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                </tr> -->
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--== Customer ==-->
                        <div class="col-md-6">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Customer</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <a class='dropdown-button drop-down-meta' href='#' data-activates='dropdown2'><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->
                                    <ul id='dropdown2' class='dropdown-content'>
                                        <li><a href="customer/add_customer.php?vkvbvjfgfikix=">Add New (B2C)</a>
                                        </li>
                                        <li><a href="customer/add_customer.php?vkvbvjfgfikix=ta">Add New (Travel Agent)</a>
                                        </li>
                                        <!-- <li><a href="#!">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li> -->
                                        <li class="divider"></li>
                                        <!-- <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li> -->
                                        <!-- <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                        </li> -->
                                        <!-- <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <!-- <th>Budget</th> -->
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                                require '../connect.php';
                                                $srno =1;
                                                $stmt = $conn->prepare("SELECT * FROM customer where user_type='2' and (status='1' or status='0') and cust_id != '' order by cust_id desc limit 5");
                                                $stmt->execute();

                                                    // set the resulting array to associative
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {
                                                        echo '<tr>
                                                    <td><span class="txt-dark weight-500">'.$row['cust_id'].'</span>
                                                    </td>
                                                    <td>'.$row['firstname'].' '.$row['lastname'].'</td>
                                                    <td class="lessWords">'.$row['address'].'
                                                    </td>';
                                                    if($row['status'] ==1){
                                                             echo '<td>
                                                                    <span class="label label-success">Active</span>
                                                                </td>';
                                                        } else if($row['status'] ==0){
                                                            echo '<td>
                                                                    <span class="label label-danger">Deleted</span>
                                                                </td>';
                                                        }
                                                        // else if($row['status'] ==2){
                                                        //     echo '<td>
                                                        //             <span class="label label-info">Hold</span>
                                                        //         </td>';
                                                        // }
                                                        else{

                                                        }

                                                   echo'</tr>';

                                                    }
                                                }else{
                                                    echo '<tr>

                                                    <td colspan="4">Not Registered Any Customer</td>
                                                    </tr>
                                                    ';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--== User Details ==-->
               <!--  <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>User Details</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-users" class="dropdown-content">
                                        <li><a href="#!">Add New</a>
                                        </li>
                                        <li><a href="#!">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                        </li>
                                    </ul>
               

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Country</th>
                                                    <th>Listings</th>
                                                    <th>Enquiry</th>
                                                    <th>Bookings</th>
                                                    <th>Reviews</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-danger">12</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-success">24</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-info">36</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-danger">12</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-success">24</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-info">36</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/3.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-danger">12</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-success">24</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-info">36</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/4.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-danger">12</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-success">24</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-info">36</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/5.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-danger">12</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-success">24</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-info">36</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="sb2-2-3">
                    <div class="row"> -->
                        <!--== Listing Enquiry ==-->
                       <!--  <div class="col-md-6">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Travel Package Enquiry</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-listings"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-listings" class="dropdown-content">
                                        <li><a href="#!">Add New</a>
                                        </li>
                                        <li><a href="#!">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                        </li>
                                    </ul>
                              

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Listing</th>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>City</th>
                                                    <th>Enquiry</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="filled-in" id="filled-in-box-1" checked="checked" />
                                                        <label for="filled-in-box-1"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/1.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Taaj Club House</span><span class="list-enq-city">Illunois, United States</span>
                                                    </td>
                                                    <td>12 may</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">15</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="filled-in" id="filled-in-box-2" checked="checked" />
                                                        <label for="filled-in-box-2"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/2.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Grand Hotel</span><span class="list-enq-city">Rio,Brazil</span>
                                                    </td>
                                                    <td>07 aug</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">05</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="filled-in" id="filled-in-box-3" checked="checked" />
                                                        <label for="filled-in-box-3"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/3.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Grand Pales</span><span class="list-enq-city">Chennai,India</span>
                                                    </td>
                                                    <td>18 jun</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">35</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="filled-in" id="filled-in-box-4" />
                                                        <label for="filled-in-box-4"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/4.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Lake Palace Hotel</span><span class="list-enq-city">Beijing,China</span>
                                                    </td>
                                                    <td>09 apr</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">24</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="filled-in" id="filled-in-box-5" />
                                                        <label for="filled-in-box-5"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/5.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">First Class Hotel</span><span class="list-enq-city">Berlin,Germany</span>
                                                    </td>
                                                    <td>21 jun</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">18</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!--== Hotel Bookings ==-->
                       <!--  <div class="col-md-6">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Hotel Bookings</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-hotel"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-hotel" class="dropdown-content">
                                        <li><a href="#!">Add New</a>
                                        </li>
                                        <li><a href="#!">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                        </li>
                                    </ul>
                            

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Listing</th>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>City</th>
                                                    <th>Enquiry</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="ch2-1" />
                                                        <label for="ch2-1"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/1.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Taaj Club House</span><span class="list-enq-city">Illunois, United States</span>
                                                    </td>
                                                    <td>12 may</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">15</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="ch2-2" />
                                                        <label for="ch2-2"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/2.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Grand Hotel</span><span class="list-enq-city">Rio,Brazil</span>
                                                    </td>
                                                    <td>07 aug</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">05</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="ch2-3" />
                                                        <label for="ch2-3"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/3.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Grand Pales</span><span class="list-enq-city">Chennai,India</span>
                                                    </td>
                                                    <td>18 jun</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">35</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="ch2-4" />
                                                        <label for="ch2-4"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/4.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Lake Palace Hotel</span><span class="list-enq-city">Beijing,China</span>
                                                    </td>
                                                    <td>09 apr</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">24</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="ch2-5" />
                                                        <label for="ch2-5"></label>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/listing/5.jpg" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">First Class Hotel</span><span class="list-enq-city">Berlin,Germany</span>
                                                    </td>
                                                    <td>21 jun</td>
                                                    <td>Hawaii</td>
                                                    <td>
                                                        <span class="label label-success">18</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                   <!--  </div>
                </div> -->

                <!--== Latest Activity ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <!--== Latest Activity ==-->
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Latest Activity</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <!-- <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-activ"><i class="material-icons">more_vert</i></a> -->
                                    <!-- <ul id="dr-activ" class="dropdown-content"> -->
                                        <!-- <li><a href="#!">Add New</a>
                                        </li> -->
                                        <!-- <li><a href="#!">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li> -->
                                        <!-- <li class="divider"></li> -->
                                        <!-- <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li> -->
                                        <!-- <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                        </li> -->
                                    <!-- </ul> -->
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn list-act-hom">
                                    <ul>

                                        <?php
                                                require 'connect.php';
                                                $stmt = $conn->prepare("SELECT * FROM logs where from_whom='1' and status='1' order by  register_date desc limit 8");
                                                $stmt->execute();
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {

                                                        $title=$row['title'];
                                                        $message2=$row['message2'];
                                                        $ref_no =$row['reference_no'];

                                                        $ld= new DateTime($row['register_date']);
                                                        $latestDate= $ld->format('d M, Y'); 
                                                        

                                                        
                                                        
                                                        echo '<li class="list-act-hom-con">
                                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                                <h4><span>'.$latestDate.'</span> '.$title.'</h4>
                                                                <p>'.$message2.'.</p>
                                                            </li>';

                                                    }
                                                      
                                                } 
                                                    else{
                                                        echo ' <li class="list-act-hom-con">
                                                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                                    <h6> No Latest Activity</h6>
                                                                    
                                                                </li>';
                                                    }
                                        ?>


                                    
                                        <!-- <li class="list-act-hom-con">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <h4><span>08 Jun, 2017</span> City Tour and Evening Free</h4>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                        </li>
                                        <li class="list-act-hom-con">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <h4><span>27 July, 2017</span> Desert Safari with Dinner</h4>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                        </li>
                                        <li class="list-act-hom-con">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <h4><span>14 Aug, 2017</span> Day at leisure</h4>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                        </li>
                                        <li class="list-act-hom-con">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <h4><span>24 Sep, 2017</span> Departure</h4>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--== Social Media ==-->
                        <!-- <div class="col-md-6">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Social Media</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-social"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-social" class="dropdown-content">
                                        <li><a href="#!">Add New</a>
                                        </li>
                                        <li><a href="#!">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                        </li>
                                    </ul>
                             

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Media</th>
                                                    <th>Name</th>
                                                    <th>Share</th>
                                                    <th>Like</th>
                                                    <th>Members</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/sm/1.png" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Linked In</span><span class="list-enq-city">Illunois, United States</span>
                                                    </td>
                                                    <td>15K</td>
                                                    <td>18K</td>
                                                    <td>
                                                        <span class="label label-success">263</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/sm/2.png" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Twitter</span><span class="list-enq-city">Illunois, United States</span>
                                                    </td>
                                                    <td>15K</td>
                                                    <td>18K</td>
                                                    <td>
                                                        <span class="label label-success">263</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/sm/3.png" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Facebook</span><span class="list-enq-city">Illunois, United States</span>
                                                    </td>
                                                    <td>15K</td>
                                                    <td>18K</td>
                                                    <td>
                                                        <span class="label label-success">263</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/sm/4.png" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Google Plus</span><span class="list-enq-city">Illunois, United States</span>
                                                    </td>
                                                    <td>15K</td>
                                                    <td>18K</td>
                                                    <td>
                                                        <span class="label label-success">263</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/sm/5.png" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">YouTube</span><span class="list-enq-city">Illunois, United States</span>
                                                    </td>
                                                    <td>15K</td>
                                                    <td>18K</td>
                                                    <td>
                                                        <span class="label label-success">263</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/sm/6.png" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">WhatsApp</span><span class="list-enq-city">Illunois, United States</span>
                                                    </td>
                                                    <td>15K</td>
                                                    <td>18K</td>
                                                    <td>
                                                        <span class="label label-success">263</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/sm/7.png" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">VK</span><span class="list-enq-city">Illunois, United States</span>
                                                    </td>
                                                    <td>15K</td>
                                                    <td>18K</td>
                                                    <td>
                                                        <span class="label label-success">263</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/sm/2.png" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Twitter</span><span class="list-enq-city">Illunois, United States</span>
                                                    </td>
                                                    <td>15K</td>
                                                    <td>18K</td>
                                                    <td>
                                                        <span class="label label-success">263</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!--== User Details ==-->
                <!-- <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Google Map</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-map"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-map" class="dropdown-content">
                                        <li><a href="#!">Add New</a>
                                        </li>
                                        <li><a href="#!">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi tab-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290413.804893654!2d-93.99620524741552!3d39.66116578737809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1469954001005" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
   <!--  <section>
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
    </section>
 -->
    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 08:21:16 GMT -->
</html>