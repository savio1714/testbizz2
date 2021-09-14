<?php
require "../../connect.php";
// console.log("a");
$password= $_POST["password"];
$user_id= $_POST["uid"];
$user_type_id= $_POST["utid"];

$title="Change Password";
$message="You have change your password";
$operation="update";

// $fromWhom="3";


$sql1 = "UPDATE login SET password=:password WHERE user_id=:user_id and user_type_id=:user_type_id ";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':password' => $password,
		':user_id' => $user_id,
		':user_type_id' => $user_type_id
			
	));

	if ($result) {
		$sql2= "INSERT INTO logs (title,message,operation, reference_no, register_by, from_whom) VALUES (:title ,:message, :operation, :reference_no, :register_by, :from_whom)";
			$stmt2 =$conn->prepare($sql2);

			$result2=$stmt2->execute(array(
			':title' => $title,
			':message' => $message,
			':operation' =>$operation,
			':reference_no' => $user_id,
			':register_by' => $user_type_id,
			':from_whom' => $user_type_id
			));

			if($result2){
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




?>