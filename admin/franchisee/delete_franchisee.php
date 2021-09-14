<?php 
date_default_timezone_set('Asia/Calcutta');
$today = date('Y-m-d H:i:s' );

require "../connect.php";

$sm_id= $_POST["sm_id"];
$action= $_POST["action"];
$id= $_POST["id"];
$user_type="4";

$status= '0';

if($action == 'pending'){
	$f_id = ""; //set Franchisee id to empty
	$identifier_name = 'id=';

}else if($action == 'registered') {
	$f_id = $_POST["fid"]; //set Franchisee id
	$identifier_name = 'travel_agent_id=';

}

 $title="Delete Franchisee";
if($f_id ==''){
	$message="Deleted Franchisee from ".$action. " list";
	$message2="Deleted Franchisee from ".$action. " list";
}else{
	$message="Deleted Franchisee(".$f_id.") from ".$action. " list";
	$message2="Deleted Franchisee(".$f_id.") from ".$action. " list";
}

$fromWhom="1";
$register_by="5";
 


	$sql1 = "UPDATE franchisee SET status=:status, deleted_date=:deleted_date WHERE $identifier_name:id";
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

if(isset($_POST["fid"])){
	$franchisee_id= $_POST["fid"];

	$sql2 = "UPDATE login SET status=:status WHERE user_id=:franchisee_id and user_type_id=:user_type";
	$stmt2 = $conn->prepare($sql2);
	$result2=  $stmt2->execute(array(
		':status' => $status,
		':user_type' => $user_type,
		':franchisee_id' => $franchisee_id		
	));

	if ($result2) {
		echo 1;

	}
	else{
		echo 0;
	}
}


	


?>