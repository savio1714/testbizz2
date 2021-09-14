<?php 
date_default_timezone_set('Asia/Calcutta');
$today = date('Y-m-d H:i:s' );

require "../connect.php";

$f_id= $_POST["f_id"];
$id= $_POST["id"];
$user_type="3";

$status= '0';
$editfor= $_POST["action"];

if($editfor == 'pending'){
	$ta_id = ""; //set Franchisee id to empty
    $identifier_name = 'id=';
}else if($editfor == 'registered') {
	$ta_id = $_POST["tid"]; //set Franchisee id
    $identifier_name = 'travel_agent_id=';
}


 $title="Delete Travel Agent";
if($ta_id ==''){
	$message="Deleted Travel Agent from ".$editfor. " list";
	$message2="Deleted Travel Agent from ".$editfor. " list";
}else{
	$message="Deleted Travel Agent(".$ta_id.") from ".$editfor. " list";
	$message2="Deleted Travel Agent(".$ta_id.") from ".$editfor. " list";
}

$fromWhom="1";
$register_by="4"; 

	$sql1 = "UPDATE travel_agent SET status=:status, deleted_date=:deleted_date WHERE $identifier_name:id";
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

if(isset($_POST["tid"])){
	$travel_agent_id= $_POST["tid"];

	$sql2 = "UPDATE login SET status=:status WHERE user_id=:travel_agent_id and user_type_id=:user_type";
	$stmt2 = $conn->prepare($sql2);
	$result2=  $stmt2->execute(array(
		':status' => $status,
		':user_type' => $user_type,
		':travel_agent_id' => $travel_agent_id		
	));

	if ($result2) {
		echo 1;

	}
	else{
		echo 0;
	}
}


	


?>