<?php
session_start();

if(!isset($_SESSION['username'])){
    echo '<script>location.href = "../index.php";</script>';
}


require '../connect.php';
$stmt = $conn->prepare("SELECT count(id) as pending_record FROM customer where status='2' ");
$stmt->execute();

                                                   
$stmt->setFetchMode(PDO::FETCH_ASSOC);
    if($stmt->rowCount()>0){
    foreach (($stmt->fetchAll()) as $key => $row) {
        $pending_record= $row['pending_record'];
    }
                                                          
     }
    else{
        $pending_record=0;
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
                        <li class="active-bre"><a href="#">B2C</a>
                        </li>

                        <li class="page-back"><a href="../"><i class="fa fa-backward" aria-hidden="true"></i> Back</a></li>
                    </ul>
                </div>

                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp" >
                                
                                <div class="tab-inn" >
                                    <ul class="collapsible" data-collapsible="accordion">
                                        <li>
                                            <div class="collapsible-header coll-head"><i class="material-icons dp48">view_list</i>Level 1 <span class="badge badge-danger" style="color:white;background: #F44336; "><?php echo $pending_record ;?></span></div>
                                            <div class="collapsible-body coll-body">

                                                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                
                                <!-- <div class="tab-inn"> -->
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover" id="leadTable">
                                            <thead>
                                                <tr>
                                                    <th>Customer ID</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Email No.</th>
                                                    <th>DOB</th>
                                                    <th>Phone No.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require '../connect.php';
                                                
                                                $stmt = $conn->prepare("SELECT * FROM customer where user_type='2' and register_by ='2' and status='2' ");
                                                $stmt->execute();

                                                    // set the resulting array to associative
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {
                                                        $bd= new DateTime($row['date_of_birth']);
                                                        $bdate= $bd->format('d-m-Y');
                                                        $registerDate= new DateTime($row['register_date']);
                                                        $doj= $registerDate->format('d/m/Y');
                                                        $name= $row['firstname']. ' ' . $row['lastname'];
                                                        $address = $row['address'];  
                                                        echo ' <tr>
                                                    <td> '.$row['cust_id'].'</td>
                                                    <td>'.$row['firstname'].' '.$row['lastname'].'</td>
                                                    <td class="">'.$row['address'].'</td>
                                                    <td>'.$row['email'].'</td>
                                                    <td>'.$doj.'</td>
                                                    <td>+'.$row['country_code'].' '.$row['contact_no'].'</td>
                                                    
                                                </tr>';

                                                

                                                    }
                                                      
                                                } 
                                                    else{
                                                        echo '<tr>
                                                    <td colspan="7">No Lead Customer
                                                    </td>
                                                    <tr>';
                                                    }
              ?>  
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                <!-- </div> -->

                            </div>
                        </div>
                    </div>
                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header coll-head"><i class="material-icons dp48">view_list</i>level1</div>
                                            <div class="collapsible-body coll-body">

                                                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                
                                <!-- <div class="tab-inn"> -->
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover" id="level1Table">
                                            <thead>
                                                <tr>
                                                    <th>Customer ID</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Email No.</th>
                                                    <th>DOB</th>
                                                    <th>Phone No.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require '../connect.php';
                                                
                                                $stmt = $conn->prepare("SELECT * FROM level where step_up5!=''");
                                                $stmt->execute();

                                                    // set the resulting array to associative
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {

                                                        $l1=$row['step_up5'];

                                                        $stmt2 = $conn->prepare("SELECT * FROM customer where user_type='2' and register_by ='2' and status='2'");
                                                        $stmt2->execute();

                                                            // set the resulting array to associative
                                                        $stmt2->setFetchMode(PDO::FETCH_ASSOC);

                                                        if($stmt2->rowCount()>0){
                                                            foreach (($stmt2->fetchAll()) as $key2 => $row2) {


                                                        $bd= new DateTime($row2['date_of_birth']);
                                                        $bdate= $bd->format('d-m-Y');
                                                        $registerDate= new DateTime($row2['register_date']);
                                                        $doj= $registerDate->format('d/m/Y');
                                                        $name= $row2['firstname']. ' ' . $row2['lastname'];
                                                        $address = $row2['address'];  
                                                        echo ' <tr>
                                                    <td> '.$row2['cust_id'].'</td>
                                                    <td>'.$row2['firstname'].' '.$row2['lastname'].'</td>
                                                    <td class="">'.$row2['address'].'</td>
                                                    <td>'.$row2['email'].'</td>
                                                    <td>'.$doj.'</td>
                                                    <td>+'.$row2['country_code'].' '.$row2['contact_no'].'</td>
                                                    
                                                </tr>';

                                            }
                                        }

                                                

                                                    }
                                                      
                                                } 
                                                    else{
                                                        echo '<tr>
                                                    <td colspan="7">No Lead Customer
                                                    </td>
                                                    <tr>';
                                                    }
              ?>  
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                <!-- </div> -->

                            </div>
                        </div>
                    </div>
                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header coll-head"><i class="material-icons dp48">view_list</i>level2</div>
                                            <div class="collapsible-body coll-body">

                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header coll-head"><i class="material-icons dp48">view_list</i>level3</div>
                                            <div class="collapsible-body coll-body">

                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header coll-head"><i class="material-icons dp48">view_list</i>level4</div>
                                            <div class="collapsible-body coll-body">

                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header coll-head"><i class="material-icons dp48">view_list</i>level5</div>
                                            <div class="collapsible-body coll-body">

                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header coll-head"><i class="material-icons dp48">view_list</i>level6</div>
                                            <div class="collapsible-body coll-body">

                                            </div>
                                        </li>
                                        
                                    </ul>
                         
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
    $('#leadTable').DataTable();
} );    
</script>

<script type="text/javascript">
    $(document).ready( function () {
    $('#level1Table').DataTable();
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


    function confirmfunc(id,email,ref_no,name,doj,address)
    { 
    var dataString = 'id='+ id+'&uname='+email+'&ref_no='+ref_no+'&name='+name+'&doj='+doj+'&address='+address;


      $.ajax({
        type: "POST",
        url: "confirm_customer",
        data: dataString,
        cache: false,
          success:function(data){
            if(data == 1){
                   alert("Email and Password sent via sms and email");
             window.location.reload();
          }
          else{

          alert("Failed to confirm");
        }
      }
      });
          
    };
</script>