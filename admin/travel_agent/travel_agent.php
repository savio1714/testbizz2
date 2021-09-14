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
                        <li class="active-bre"><a href="#">Travel Agent</a>
                        </li>
                        <li class="page-back"><a href="../"><i class="fa fa-backward" aria-hidden="true"></i> Back</a></li>
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
                                        <li><a href="add_travel_agent">Add Travel Agent</a>
                                        </li>
                                        <li><a href="download_list?vkvbvjfgfikix=Pending">Download List</a>
                                       </li>
                                        <!-- <li><a href="#"><i class="material-icons">subject</i>View All</a>
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
                                                    <th>Travel Agent Name</th>
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
                                                $stmt = $conn->prepare("SELECT * FROM travel_agent where user_type='3' and status='2' ");
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
                                                        <a href="#" onclick=\'deletefunc("' .$row["id"]. '","","pending","' .$row["reference_no"]. '")\'><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                                    <td colspan="8">No Pending Travel Agent
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
                                        <li><a href="download_list?vkvbvjfgfikix=Registered">Download List</a>
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
                                                    <th>Travel Agent ID</th>
                                                    <th>Travel Agent Name</th>
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
                                                $stmt = $conn->prepare("SELECT * FROM travel_agent where user_type='3' and status='1' ");
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
                                                    <td> '.$row['travel_agent_id'].'
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
                                                        <a href="#" onclick=\'editfunc("' .$row["travel_agent_id"]. '","' .$row["reference_no"]. '","' .$row["country"]. '","' .$row["state"]. '","' .$row["city"]. '",
                                                        "registered")\'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#" onclick=\'deletefunc("' .$row["travel_agent_id"]. '","'.$row["travel_agent_id"]. '","registered","' .$row["reference_no"]. '")\'><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    
                                                </tr>';

                                                $srno++;

                                                    }
                                                      
                                                } 
                                                    else{
                                                        echo '<tr>
                                                    <td colspan="8">No Registered Travel Agent
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

    function editfunc(id,refno,cut,st,ct,editfor)
    { 
        window.location.href='edit_travel_agent?vkvbvjfgfikix='+id+'&nohbref='+refno+'&ncy='+cut+'&mst='+st+'&hct='+ct+'&editfor='+editfor;  
    };


    function deletefunc(id,tid,action,f_id)
    { 
    var dataString = 'id='+ id+'&tid='+tid+'&action='+action+'&f_id='+f_id;


      $.ajax({
        type: "POST",
        url: "delete_travel_agent",
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


    function confirmfunc(id,email,f_id)
    { 
    var dataString = 'id='+ id+'&uname='+email+'&f_id='+f_id;


      $.ajax({
        type: "POST",
        url: "confirm_travel_agent",
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