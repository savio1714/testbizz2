<?php
require '../connect.php';

$countrycode = $_POST["countrycode"];
$phoneTenDegit = $_POST["phone"];
$phone=$countrycode."".$phoneTenDegit;

if(!empty($_POST["phone"])){ 
    // Fetch city data based on the specific state

    $stmt2 = $conn->prepare("SELECT * FROM customer WHERE contact_no = '".$phoneTenDegit."' AND country_code = '".$countrycode."'");
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