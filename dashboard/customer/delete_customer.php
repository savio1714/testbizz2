<?php 
date_default_timezone_set('Asia/Calcutta');
$today = date('Y-m-d H:i:s' );

require "../../connect.php";

$ta_id= $_POST["ta_id"];

$cust_id= $_POST["cust_id"];
$user_type="2";

$status= '0';

$title="Delete Customer";
$fromWhom="3";
$register_by="3";
$message="You have deleted Customer with ID ".$cust_id;
$operation="delete";

 

	$sql1 = "UPDATE customer SET status=:status, deleted_date=:deleted_date WHERE cust_id=:cust_id";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':status' => $status,
		':deleted_date' => $today,
		':cust_id' => $cust_id		
	));

	if ($result) {
		echo 1;

	}
	else{
		echo 0;
	}

if(isset($_POST["cust_id"])){

	$sql2 = "UPDATE login SET status=:status WHERE user_id=:cust_id and user_type_id=:user_type";
	$stmt2 = $conn->prepare($sql2);
	$result2=  $stmt2->execute(array(
		':status' => $status,
		':user_type' => $user_type,
		':cust_id' => $cust_id		
	));

	if ($result2) {
		
		$sql3= "INSERT INTO logs (title,message,operation, reference_no, register_by, from_whom) VALUES (:title ,:message, :operation, :reference_no, :register_by, :from_whom)";
		$stmt3 =$conn->prepare($sql3);

		$result3=$stmt3->execute(array(
		':title' => $title,
		':message' => $message,
		':operation' =>$operation,
		':reference_no' => $ta_id,
		':register_by' => $register_by,
		':from_whom' => $fromWhom
		));

		if($result3){
			echo 1;
		}
		else{
			echo 0	;
		}
		// echo 1;

	}
	else{
		echo 0;
	}
}


	


?>