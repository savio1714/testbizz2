<?php 
date_default_timezone_set('Asia/Calcutta');
$today = date('Y-m-d H:i:s' );

require "../../connect.php";

$rm_id= $_POST["rm_id"];
$action= $_POST["action"];
$id= $_POST["id"];
$user_type="6";

if($action == 'pending'){
	$bm_id = "";
	$status= '0';
}else if($action == 'registered') {
	$bm_id = $_POST["bmid"];
	$status= '3';
}


$title="Delete Franchisee Manager";
if($bm_id ==''){
	$message="Deleted Franchisee Manager from ".$action. " list";
$message2="Deleted Franchisee Manager from ".$action. " list";
}else{
	$message="Deleted Franchisee Manager(".$bm_id.") from ".$action. " list";
$message2="Deleted Franchisee Manager(".$bm_id.") from ".$action. " list";
}

$fromWhom="1";
$register_by="7";

// $status= '0';



	$sql1 = "UPDATE branch_manager SET status=:status, deleted_date=:deleted_date WHERE id=:id";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':status' => $status,
		':deleted_date' => $today,
		':id' => $id		
	));

	if ($result) {

		$sql3= "INSERT INTO logs (title,message,message2, reference_no, register_by, from_whom) VALUES (:title ,:message, :message2, :reference_no, :register_by, :from_whom)";
		$stmt3 =$conn->prepare($sql3);

		$result3=$stmt3->execute(array(
		':title' => $title,
		':message' => $message,
		':message2' =>$message2,
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

if(isset($_POST["bmid"])){
	$branch_manager_id= $_POST["bmid"];

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