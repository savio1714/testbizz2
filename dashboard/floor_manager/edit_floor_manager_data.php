<?php
require "../../connect.php";

$bmid= $_POST["bm_id"];

$branch_name = $_POST['branch_name'];
$zone_name = $_POST['zone_name'];
$region_name = $_POST['region_name'];
$sales_manager_id=$_POST['sales_manager_id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$country_code=$_POST['country_code'];
$phone=$_POST['phone'];
// $age=$_POST['age'];
$dob=$_POST['bdate'];
$profile_pic=$_POST['profile_pic'];
$kyc=$_POST['kyc'];
$pan_card=$_POST['pan_card'];
$aadhar_card=$_POST['aadhar_card'];
$voting_card=$_POST['voting_card'];
$bank_passbook=$_POST['passbook'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];

$user_type_id = '5';

$message=$sales_manager_id." details has been updated";
$title="Edit Floor Manager";


$fromWhom="6";
$register_by="6";
$operation="update";
 

if($firstname !='' ||$lastname !='' ||$phone !='' ||$email !='' ||$gender !='' ||$dob !='' ||$address !='' ||$profile_pic !=''||$country !=''||$state !=''||$city !='' || $branch_name != '' || $zone_name != '' || $region_name != ''){
	


$sql1 = "UPDATE sales_manager SET firstname=:firstname,lastname=:lastname,email=:email,country_code=:country_code,contact_no=:contact_no,date_of_birth=:date_of_birth,gender=:gender,country=:country,state=:state,city=:city,pincode=:pincode,address=:address,profile_pic=:profile_pic,kyc=:kyc,pan_card=:pan_card,aadhar_card=:aadhar_card,voting_card=:voting_card ,bank_passbook=:bank_passbook,branch=:branch_name ,zone=:zone_name,region=:region_name WHERE sales_manager_id=:sales_manager_id";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':firstname' => $firstname,
		':lastname' => $lastname,
		':country_code' => $country_code,
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
		':kyc' => $kyc,
		':pan_card' => $pan_card,
		':aadhar_card' => $aadhar_card,
		':voting_card' => $voting_card,
		':bank_passbook' => $bank_passbook,
		':branch_name' => $branch_name,
		':zone_name' => $zone_name,
		':region_name' => $region_name,
		':sales_manager_id' => $sales_manager_id	
	));

	if ($result) {
		
		$sql = "UPDATE login SET username=:email WHERE user_id=:user_id and user_type_id=:user_type_id";
		$stmt2 = $conn->prepare($sql);
		$result2=  $stmt2->execute(array(
			':email' => $email,
			':user_type_id' => $user_type_id,
			':user_id' => $sales_manager_id		
		));

		if($result2){
			$sql3= "INSERT INTO logs (user_id,title,message,operation, reference_no, register_by, from_whom) VALUES (:user_id,:title ,:message, :operation, :reference_no, :register_by, :from_whom)";
			$stmt3 =$conn->prepare($sql3);

			$result3=$stmt3->execute(array(
			':user_id' => $sales_manager_id,
			':title' => $title,
			':message' => $message,
			':operation' =>$operation,
			':reference_no' => $bmid,
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
		echo 0	;
		}

	}
	else{
		echo 0;
	}

}else{
	echo 0;

}




?>