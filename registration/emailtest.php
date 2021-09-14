<?php
require '../connect.php';

$email = $_POST["email"];

if(!empty($_POST["email"])){ 
    // Fetch city data based on the specific state

    $stmt2 = $conn->prepare("SELECT * FROM customer WHERE email = '".$email."'");
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