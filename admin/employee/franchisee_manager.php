<?php
session_start();

if(!isset($_SESSION['username'])){
    echo '<script>location.href = "../login";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
 

<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/user-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 08:21:19 GMT -->
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
    <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css">  
    <link rel="stylesheet" href="../assets/css/tableFilter.css" />
        <link rel="stylesheet" href="../css/styles2.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
<?php include '../sidebar2.php';?>
    
    <!--== BODY CONTNAINER ==-->
<!--       <div class="container-fluid sb2">
        <div class="row"> -->
      <?php include '../header2.php';?>

            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="../"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#">Franchisee Manager</a>
                        </li>

                        <li class="page-back"><a href="../"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Pending List</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-users" class="dropdown-content">
                                        <li><a href="add_franchisee_manager">Add Franchisee Manager</a>
                                        </li>
                                        <li><a href="bm/download_list?vkvbvjfgfikix=Pending">Download List</a>
                                       </li>
                                        <!-- <li><a href="#">Download List</a>
                                        </li>
                                        <li><a href="#"><i class="material-icons">subject</i>View All</a>
                                        </li> -->
                                    </ul>

                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover" id="pendingTable">
                                            <thead>
                                                <tr>
                                                    <th>Sr no.</th>
                                                    <th>Employee Name</th>
                                                    <th>Address</th>
                                                    <th>Phone No.</th>
                                                    <th>DOB</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                    <th>Confirm</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require '../connect.php';
                                                $srno =1;
                                                $stmt = $conn->prepare("SELECT * FROM branch_manager where user_type='6' and status='2' order by branch_manager_id");
                                                $stmt->execute();

                                                    // set the resulting array to associative
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {
                                                        $bd= new DateTime($row['date_of_birth']);
                                                        $bdate= $bd->format('d-m-Y'); 
                                                        echo ' <tr>
                                                    <td> '.$srno.'
                                                    </td>
                                                    <td>'.$row['firstname'].' '.$row['lastname'].'
                                                    </td>
                                                    <td class="lessWords">'.$row['address'].'</td>
                                                    <td>+'.$row['country_code'].' '.$row['contact_no'].'</td>
                                                    <td>'.$bdate.'</td>
                                                    <td>
                                                        <a href="#" onclick=\'editfunc("' .$row["id"]. '","' .$row["reference_no"]. '","' .$row["country"]. '","' .$row["state"]. '","' .$row["city"]. '",
                                                        "pending","' .$row["zone"]. '","' .$row["region"]. '","' .$row["branch"]. '")\'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#" onclick=\'deletefunc("' .$row["id"]. '","","pending","' .$row["reference_no"]. '")\'><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#" onclick=\'confirmfunc("' .$row["id"]. '","' .$row["email"]. '","' .$row["state"]. '","' .$row["reference_no"]. '")\'><i class="material-icons dp48">verified_user</i></a>
                                                    </td>
                                                </tr>';

                                                $srno++;

                                                    }
                                                      
                                                } 
                                                    else{
                                                        echo '<tr>
                                                    <td colspan="8">No Pending Franchisee Manager
                                                    </td>
                                                    <tr>';
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
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Registered List</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-register-list"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-register-list" class="dropdown-content">
                                        <li><a href="bm/download_list?vkvbvjfgfikix=Registered">Download List</a>
                                        </li>
                                        <!-- <li><a href="user-edit.html">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li> -->
                                        <!-- <li><a href="#"><i class="material-icons">subject</i>View All</a>
                                        </li> -->
                                    </ul>

                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover" id="registerTable">
                                            <thead>
                                                <tr>
                                                    <th>Employee No.</th>
                                                    <th>Name</th>
                                                    <th>Password</th>
                                                    <th>Email ID</th>
                                                    <th>Zone</th>
                                                    <th>Region</th>
                                                    <th>Branch</th>
                                                    <!-- <th>Is Approved</th> -->
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require '../connect.php';
                                                $srno =1;
                                                $stmt = $conn->prepare("SELECT * FROM branch_manager where user_type='6' and (status='1' or status='3') order by branch_manager_id ");
                                                $stmt->execute();

                                                    // set the resulting array to associative
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {

                                                    $stmt2 = $conn->prepare("SELECT * ,(select zone_name from zone where id = '".$row['zone']."') as zone_name, (select region_name from region where id = '".$row['region']."') as region_name,(select branch_name from branch where id = '".$row['branch']."') as branch_name FROM login where user_type_id='6' and (status='1' or status='3') and user_id='".$row['branch_manager_id']."' ");
                                                    $stmt2->execute();

                                                        // set the resulting array to associative
                                                    $stmt2->setFetchMode(PDO::FETCH_ASSOC);

                                                    if($stmt2->rowCount()>0){
                                                        foreach (($stmt2->fetchAll()) as $key2 => $row2) {
                                                            $pass=$row2['password'];
                                                            $status=$row2['status'];
                                                            $zone_name=$row2['zone_name'];
                                                             $region_name=$row2['region_name'];
                                                             $branch_name=$row2['branch_name'];
                                                         }
                                                    }   
                                                        echo ' <tr>
                                                    <td>'.$row['branch_manager_id'].'
                                                    </td>
                                                    <td>'.$row['firstname'].' '.$row['lastname'].'
                                                    </td>
                                                    <td>'.$pass.'</td>
                                                    <td>'.$row['email'].'</td>
                                                    <td>'.$zone_name.'</td>
                                                    <td>
                                                        '.$region_name.'
                                                    </td>
                                                    <td>'.$branch_name.'</td>';
                                                    if($row['status'] == 1){
                                                        echo '<td><span class="label label-success">Active</span>
                                                    </td>';
                                                    }else{
                                                        
                                                        echo '<td><span class="label label-danger">Removed</span>
                                                    </td>';
                                                        
                                                    }
                                                    echo '
                        
                                                    <td>
                                                        <a href="#" onclick=\'editfunc("' .$row["branch_manager_id"]. '","' .$row["reference_no"]. '","' .$row["country"]. '","' .$row["state"]. '","' .$row["city"]. '",
                                                        "registered","' .$row["zone"]. '","' .$row["region"]. '","' .$row["branch"]. '")\'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>';

                                                    if($status ==3){
                                                             echo '<td><span class="label label-danger"></span>
                                                    </td>';
                                                        }else{
                                                            echo '<td>
                                                        <a href="#" onclick=\'deletefunc("' .$row["id"]. '","'.$row["branch_manager_id"]. '","registered","' .$row["reference_no"]. '")\'><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>';
                                                        }
                                                    
                                                    
                                               echo ' </tr>';

                                                $srno++;

                                                    }
                                                      
                                                } 
                                                    else{
                                                        echo '<tr>
                                                    <td colspan="8">Not Registered Franchisee Manager
                                                    </td>
                                                    <tr>';
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


            </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
    <!-- <section>
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
    <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
    $('#pendingTable').DataTable();
} );
$(document).ready( function () {
    $('#registerTable').DataTable();
} );     
</script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/user-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 08:21:20 GMT -->
</html>

<script type="text/javascript">

    function editfunc(id,refno,cut,st,ct,editfor,z,r,b)
    { 
        window.location.href='edit_franchisee_manager?vkvbvjfgfikix='+id+'&nohbref='+refno+'&ncy='+cut+'&mst='+st+'&hct='+ct+'&editfor='+editfor+'&zdfds='+z+'&rdsfdsf='+r+'&bdfdsf='+b;  
    };


    function deletefunc(id,bmid,action,rm_id)
    { 
    var dataString = 'id='+ id+'&bmid='+bmid+'&action='+action+'&rm_id='+rm_id;


      $.ajax({
        type: "POST",
        url: "fm/delete_franchisee_manager",
        data: dataString,
        cache: false,
          success:function(data){
            if(data == 11 || data == 1){

            alert("Delete Succesfully");
             window.location.reload();
          }
          else{

          alert("deletion failed");
        }
      }
      });
          
    };


    function confirmfunc(id,email,st,rm_id)
    { 
    var dataString = 'id='+ id+'&uname='+email+'&st='+st+'&rm_id='+rm_id;


      $.ajax({
        type: "POST",
        url: "fm/confirm_franchisee_manager",
        data: dataString,
        cache: false,
          success:function(data){
            if(data == 1){
                   alert("Email and Password send via sms and email");
             window.location.reload();
          }
          else{

          alert("Failed to confirm");
        }
      }
      });
          
    };
</script>