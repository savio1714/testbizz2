<?php 
date_default_timezone_set('Asia/Calcutta');
$today = date('Y-m-d H:i:s' );

require "../../connect.php";

$sm_id= $_POST["sm_id"];
$franchisee_id= $_POST["franchisee_id"];
$user_type="4";

$status= '0';

$title="Delete Franchisee";
$fromWhom="5";
$register_by="5";
$message="You have deleted Franchisee with ID ".$franchisee_id;
$operation="delete";



	$sql1 = "UPDATE franchisee SET status=:status, deleted_date=:deleted_date WHERE franchisee_id=:franchisee_id";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':status' => $status,
		':deleted_date' => $today,
		':franchisee_id' => $franchisee_id		
	));

	if ($result) {
		echo 1;

	}
	else{
		echo 0;
	}

if(isset($_POST["franchisee_id"])){

	$sql2 = "UPDATE login SET status=:status WHERE user_id=:franchisee_id and user_type_id=:user_type";
	$stmt2 = $conn->prepare($sql2);
	$result2=  $stmt2->execute(array(
		':status' => $status,
		':user_type' => $user_type,
		':franchisee_id' => $franchisee_id		
	));

	if ($result2) {
		$sql3= "INSERT INTO logs (title,message,operation, reference_no, register_by, from_whom) VALUES (:title ,:message, :operation, :reference_no, :register_by, :from_whom)";
		$stmt3 =$conn->prepare($sql3);

		$result3=$stmt3->execute(array(
		':title' => $title,
		':message' => $message,
		':operation' =>$operation,
		':reference_no' => $sm_id,
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