<?php
session_start();
require "../../connect.php";

$user_type= $_POST["user_type"];
$user_id= $_POST["user_id"];

$firstname= $_POST["firstname"];
$lastname= $_POST["lastname"];
$phone= $_POST["phone"];
$email= $_POST["email"];
$gender= $_POST["gender"];
$dob= $_POST["bdate"];
$address= $_POST["address"];

$profile_pic= $_POST["profile_pic"];

// $country_code= $_POST["country_code"];
$country= $_POST["country"];
$state= $_POST["state"];
$city= $_POST["city"];
$pincode= $_POST["pincode"];

$title="Update Profile Details";
$message="You have updated your profile details";
$operation="update";


if($firstname !='' ||$lastname !='' ||$phone !='' ||$email !='' ||$gender !='' ||$dob !='' ||$address !='' ||$profile_pic !=''||$country !=''||$state !=''||$city !=''){

	
	if($user_type =='2'){
		updateData('customer',$user_type,$user_id,'cust_id',$firstname,$lastname,$phone,$email,$gender,$dob,$country,$state,$city,$pincode,$address,$profile_pic,$title,$message,$operation);
	}else if($user_type =='3'){
		updateData('travel_agent',$user_type,$user_id,'travel_agent_id',$firstname,$lastname,$phone,$email,$gender,$dob,$country,$state,$city,$pincode,$address,$profile_pic,$title,$message,$operation);
	}else if($user_type =='4'){
		updateData('franchisee',$user_type,$user_id,'franchisee_id',$firstname,$lastname,$phone,$email,$gender,$dob,$country,$state,$city,$pincode,$address,$profile_pic,$title,$message,$operation);
	}else if($user_type =='5'){
		updateData('sales_manager',$user_type,$user_id,'sales_manager_id',$firstname,$lastname,$phone,$email,$gender,$dob,$country,$state,$city,$pincode,$address,$profile_pic,$title,$message,$operation);
	}else if($user_type =='6'){
		updateData('branch_manager',$user_type,$user_id,'branch_manager_id',$firstname,$lastname,$phone,$email,$gender,$dob,$country,$state,$city,$pincode,$address,$profile_pic,$title,$message,$operation);
	}else if($user_type =='7'){
		updateData('regional_manager',$user_type,$user_id,'regional_manager_id',$firstname,$lastname,$phone,$email,$gender,$dob,$country,$state,$city,$pincode,$address,$profile_pic,$title,$message,$operation);
	}else{
		echo 0;
	}
	

}else{
	echo 0;

}



function updateData($tablename,$user_type,$user_id,$user_id_colunmName,$firstname,$lastname,$phone,$email,$gender,$dob,$country,$state,$city,$pincode,$address,$profile_pic,$title,$message,$operation){

	require "../../connect.php";

	$sql1 = "UPDATE $tablename SET firstname=:firstname,lastname=:lastname,contact_no=:contact_no,email=:email,gender=:gender,date_of_birth=:date_of_birth,country=:country,state=:state,city=:city,pincode=:pincode,address=:address,profile_pic=:profile_pic WHERE user_type=:user_type AND $user_id_colunmName=:user_id_colunmName";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':firstname' => $firstname,
		':lastname' => $lastname,
		':contact_no' => $phone,
		':email' => $email,
		':gender' => $gender,
		':date_of_birth' => $dob,
		':country' => $country,
		':state' => $state,
		':city' => $city,
		':pincode' => $pincode,
		':address' => $address,
		':profile_pic' => $profile_pic,
		':user_type' => $user_type,
		':user_id_colunmName' => $user_id	
	));

	if ($result) {

	//updating username
		$_SESSION["username2"] = $firstname ;
		// echo $_SESSION["username2"];
		
		$sql = "UPDATE login SET username=:email WHERE user_id=:user_id and user_type_id=:user_type_id";
		$stmt2 = $conn->prepare($sql);
		$result2=  $stmt2->execute(array(
			':email' => $email,
			':user_type_id' => $user_type,
			':user_id' => $user_id		
		));

		if($result2){

			$sql3= "INSERT INTO logs (title,message,operation, reference_no, register_by, from_whom) VALUES (:title ,:message, :operation, :reference_no, :register_by, :from_whom)";
			$stmt3 =$conn->prepare($sql3);

			$result3=$stmt3->execute(array(
			':title' => $title,
			':message' => $message,
			':operation' =>$operation,
			':reference_no' => $user_id,
			':register_by' => $user_type,
			':from_whom' => $user_type
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
		echo 1	;
		}

	}
	else{
		echo 0;
	}
}




?>