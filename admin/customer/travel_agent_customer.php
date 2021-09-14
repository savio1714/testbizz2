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
                        <li class="active-bre"><a href="#">Travel Agent Customer</a>
                        </li>
                        <li class="page-back"><a href="../"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
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
                                        <li><a href="add_customer?vkvbvjfgfikix=ta">Add Customer</a>
                                        </li>
                                        <!-- <li><a href="#">Download List</a> -->
                                        <li><a href="download_list?vkvbvjfgfikix=Pending&fsdfdsfsdf=ta_cust">Download List</a>
                                        </li>
                                        <!-- 
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
                                                    <th>Customer Name</th>
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
                                                $stmt = $conn->prepare("SELECT * FROM customer where user_type='2' and reference_no !='' and status='2' ");
                                                $stmt->execute();

                                                    // set the resulting array to associative
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {
                                                        $bd= new DateTime($row['date_of_birth']);
                                                        $bdate= $bd->format('d-m-Y'); 
                                                        echo ' <tr>
                                                    <td> '.$srno.'</td>
                                                    <td>'.$row['firstname'].' '.$row['lastname'].'</td>
                                                    <td class="lessWords">'.$row['address'].'</td>
                                                    <td>+'.$row['country_code'].' '.$row['contact_no'].'</td>
                                                    <td>'.$bdate.'</td>
                                                    <td>
                                                        <a href="#" onclick=\'editfunc("' .$row["id"]. '","' .$row["reference_no"]. '","' .$row["country"]. '","' .$row["state"]. '","' .$row["city"]. '","pending")\'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#" onclick=\'deletefunc("' .$row["id"]. '","","pending","")\'><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#" onclick=\'confirmfunc("' .$row["id"]. '","' .$row["email"]. '","' .$row["reference_no"]. '")\'><i class="material-icons dp48">verified_user</i></a>
                                                    </td>
                                                </tr>';

                                                $srno++;

                                                    }
                                                      
                                                } 
                                                    else{
                                                        echo '<tr>
                                                    <td colspan="8">No Pending Customer
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
                                        <!-- <li><a href="#">Download List</a> -->
                                        <li><a href="download_list?vkvbvjfgfikix=Registered&fsdfdsfsdf=ta_cust">Download List</a>
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
                                                    <th>Customer ID</th>
                                                    <th>Customer Name</th>
                                                    <th>Address</th>
                                                    <th>Phone No.</th>
                                                    <th>DOB</th>
                                                    <th>Date Of Joining</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require '../connect.php';
                                                $srno =1;
                                                $stmt = $conn->prepare("SELECT * FROM customer where user_type='2' and reference_no !='' and status='1' ");
                                                $stmt->execute();

                                                    // set the resulting array to associative
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {
                                                        $dt= new DateTime($row['register_date']);
                                                        $datev= $dt->format('d-m-Y');
                                                        $bd= new DateTime($row['date_of_birth']);
                                                        $bdate= $bd->format('d-m-Y'); 
                                                        echo ' <tr>
                                                    <td> '.$row['cust_id'].'
                                                    </td>
                                                    <td>'.$row['firstname'].' '.$row['lastname'].'
                                                    </td>
                                                    <td class="lessWords">'.$row['address'].'</td>
                                                    <td>+'.$row['country_code'].' '.$row['contact_no'].'</td>
                                                    <td>'.$bdate.'</td>
                                                    <td>
                                                        '.$datev.'
                                                    </td>
                                                    <td>
                                                        <a href="#" onclick=\'editfunc("' .$row["cust_id"]. '","' .$row["reference_no"]. '","' .$row["country"]. '","' .$row["state"]. '","' .$row["city"]. '",
                                                        "registered")\'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#" onclick=\'deletefunc("' .$row["cust_id"]. '","'.$row["cust_id"]. '","registered","' .$row["reference_no"]. '")\'><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    
                                                </tr>';

                                                $srno++;

                                                    }
                                                      
                                                } 
                                                    else{
                                                        echo '<tr>
                                                    <td colspan="8">No Registered Customer
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

    function editfunc(id,refno,cut,st,ct,editfor)
    { 
        window.location.href='edit_customer?vkvbvjfgfikix='+id+'&nohbref='+refno+'&ncy='+cut+'&mst='+st+'&hct='+ct+'&editfor='+editfor;  
    };


    function deletefunc(id,cid,action,ta_id)
    { 
    var dataString = 'id='+ id+'&cid='+cid+'&action='+action+'&ta_id='+ta_id;


      $.ajax({
        type: "POST",
        url: "delete_customer",
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


    function confirmfunc(id,email,ref_no)
    { 
    var dataString = 'id='+ id+'&uname='+email+'&ref_no='+ref_no;


      $.ajax({
        type: "POST",
        url: "confirm_customer",
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