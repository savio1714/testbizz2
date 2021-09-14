<?php 
date_default_timezone_set('Asia/Calcutta');
$today = date('Y-m-d H:i:s' );

require "../../connect.php";

$f_id= $_POST["f_id"];
$travel_agent_id= $_POST["travel_agent_id"];
$user_type="3";

$status= '0';

$title="Delete Travel Agent";
$fromWhom="4";
$register_by="4";
$message="You have deleted Travel Agent with ID ".$travel_agent_id;
$operation="delete";



	$sql1 = "UPDATE travel_agent SET status=:status, deleted_date=:deleted_date WHERE travel_agent_id=:travel_agent_id";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':status' => $status,
		':deleted_date' => $today,
		':travel_agent_id' => $travel_agent_id		
	));

	if ($result) {
		echo 1;

	}
	else{
		echo 0;
	}
 
if(isset($_POST["travel_agent_id"])){

	$sql2 = "UPDATE login SET status=:status WHERE user_id=:travel_agent_id and user_type_id=:user_type";
	$stmt2 = $conn->prepare($sql2);
	$result2=  $stmt2->execute(array(
		':status' => $status,
		':user_type' => $user_type,
		':travel_agent_id' => $travel_agent_id		
	));

	if ($result2) {
		$sql3= "INSERT INTO logs (title,message,operation, reference_no, register_by, from_whom) VALUES (:title ,:message, :operation, :reference_no, :register_by, :from_whom)";
		$stmt3 =$conn->prepare($sql3);

		$result3=$stmt3->execute(array(
		':title' => $title,
		':message' => $message,
		':operation' =>$operation,
		':reference_no' => $f_id,
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