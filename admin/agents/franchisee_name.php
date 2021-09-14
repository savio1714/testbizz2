<?php
require '../connect.php';

if(!empty($_POST["franchisee_id"])){ 
    // Fetch city data based on the specific state

    $stmt2 = $conn->prepare("SELECT * FROM franchisee WHERE franchisee_id = '".$_POST['franchisee_id']."' AND status = 1");
    $stmt2->execute();                                                                                   
    $stmt2->setFetchMode(PDO::FETCH_ASSOC);
     
    // Generate HTML of city options list

     if($stmt2->rowCount()>0){
        foreach (($stmt2->fetchAll()) as $key => $row2) {
        	echo $row2['firstname'].' '. $row2['lastname'];
        	// echo '<script>document.getElementById("pin").value ="'.$row2['pincode'].'"</script>';
        	// echo '<script>'$('#pin').val(.$row2['pincode'].)'</script>';
            
        }  
    }else{
            echo '';
    } 
}

?>