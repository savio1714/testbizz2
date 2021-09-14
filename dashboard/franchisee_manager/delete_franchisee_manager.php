<?php 
date_default_timezone_set('Asia/Calcutta');
$today = date('Y-m-d H:i:s' );

require "../../connect.php";


$rm_id= $_POST["rm_id"];
$branch_manager_id= $_POST["branch_manager_id"];
$user_type="6";

$status= '3';

$title="Delete Franchisee Manager";
$fromWhom="7";
$register_by="7";
$message="You have deleted Franchisee Manager with ID ".$branch_manager_id;
$operation="delete";



	$sql1 = "UPDATE branch_manager SET status=:status, deleted_date=:deleted_date WHERE branch_manager_id=:branch_manager_id";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':status' => $status,
		':deleted_date' => $today,
		':branch_manager_id' => $branch_manager_id		
	));

	if ($result) {
		$sql3= "INSERT INTO logs (title,message,operation, reference_no, register_by, from_whom) VALUES (:title ,:message, :operation, :reference_no, :register_by, :from_whom)";
		$stmt3 =$conn->prepare($sql3);

		$result3=$stmt3->execute(array(
		':title' => $title,
		':message' => $message,
		':operation' =>$operation,
		':reference_no' => $rm_id,
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

if(isset($_POST["branch_manager_id"])){

	$sql2 = "UPDATE login SET status=:status WHERE user_id=:branch_manager_id and user_type_id=:user_type";
	$stmt2 = $conn->prepare($sql2);
	$result2=  $stmt2->execute(array(
		':status' => $status,
		':user_type' => $user_type,
		':branch_manager_id' => $branch_manager_id		
	));

	if ($result2) {
		echo 1;

	}
	else{
		echo 0;
	}
}


	


?>