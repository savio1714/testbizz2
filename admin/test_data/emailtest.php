<?php
require '../connect.php';

$email = $_POST["email"];
$tablename = $_POST["tablename"];

 if($tablename == 2){
    $tname='customer';
}else if($tablename == 3 ){
    $tname='travel_agent';

}else if($tablename == 4){
    $tname='franchisee';
}else if($tablename == 5){
    $tname='sales_manager';
}else if($tablename == 6){
    $tname='branch_manager';
}else if($tablename == 7){
    $tname='regional_manager';
}else{
    
}

if(!empty($_POST["email"])){ 
    // Fetch city data based on the specific state

    $stmt2 = $conn->prepare("SELECT * FROM ".$tname." WHERE email = '".$email."'");
    $stmt2->execute();                                                                                   
    $stmt2->setFetchMode(PDO::FETCH_ASSOC);
     
    // Generate HTML of city options list

     if($stmt2->rowCount()>0){
        	echo 1;
   
    }else{
        echo 0;
    }
}

?>