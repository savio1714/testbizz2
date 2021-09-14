<?php
require '../connect.php';

$custID = $_POST["custID"];

if(!empty($_POST["custID"])){ 
    // Fetch city data based on the specific state

    $stmt2 = $conn->prepare("SELECT distinct level FROM customer WHERE   customer_reference_no = '".$custID."' order by level desc limit 1");
    $stmt2->execute();                                                                                   
    $stmt2->setFetchMode(PDO::FETCH_ASSOC);
     
    // Generate HTML of city options list

     if($stmt2->rowCount()>0){

        foreach (($stmt2->fetchAll()) as $key3 => $row3) {

             $level=$row3["level"];

              if($level <5){
                echo $row3['level']+1;
             }else{
                echo 0;
                
             }

        }
   
    }else{
        echo 1;
        // echo 'Level1';  
    }
}

?>