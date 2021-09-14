<?php 
date_default_timezone_set('Asia/Calcutta');
$today = date('Y-m-d H:i:s' );

require "../connect.php";

$ta_id= $_POST["ta_id"];
$id= $_POST["id"];
$user_type="2";

$status= '0';
$editfor= $_POST["action"];

if($editfor == 'pending'){
    $identifier_name = 'id=';
    $cust_id = ""; //set Franchisee id to empty
}else if($editfor == 'registered') {
    $identifier_name = 'cust_id=';
    $cust_id = $_POST["cid"]; //set Franchisee id
}



 $title="Delete Customer";
if($cust_id ==''){
	$message="Deleted Customer from ".$editfor. " list";
	$message2="Deleted Customer from ".$editfor. " list";
}else{
	$message="Deleted Customer(".$cust_id.") from ".$editfor. " list";
	$message2="Deleted Customer(".$cust_id.") from ".$editfor. " list";
}

$fromWhom="1";
$register_by="3"; 





	$sql1 = "UPDATE customer SET status=:status, deleted_date=:deleted_date WHERE $identifier_name:id";
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

if(isset($_POST["cid"])){
	$cust_id= $_POST["cid"];

	$sql2 = "UPDATE login SET status=:status WHERE user_id=:cust_id and user_type_id=:user_type";
	$stmt2 = $conn->prepare($sql2);
	$result2=  $stmt2->execute(array(
		':status' => $status,
		':user_type' => $user_type,
		':cust_id' => $cust_id		
	));

	if ($result2) {
		echo 1;

	}
	else{
		echo 0;
	}
}


	


?>