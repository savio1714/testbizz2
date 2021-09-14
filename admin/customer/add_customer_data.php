<?php
// session_start();
require '../connect.php';

$travel_agent_id=$_POST['travel_agent_id'];
$registrant=$_POST['travel_agent_name'];
$customer_level=$_POST['customer_level'];
$level=$_POST['level'];

$firstname=$_POST['firstname'];
// $mname=$_POST['mname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$country_code=$_POST['country_code'];
$phone_no=$_POST['phone'];
$age=$_POST['age'];
$bdate=$_POST['dob'];
$profile_pic=$_POST['profile_pic'];
$kyc=$_POST['kyc'];
$pan_card=$_POST['pan_card'];
$aadhar_card=$_POST['aadhar_card'];
$voting_card=$_POST['voting_card'];
$passbook=$_POST['passbook'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$user_type="2";

if($travel_agent_id ==''){
	$register_by="1";
	$message="Added new customer through B2C";
	$message2="Added new customer through B2C";
}else{
	$register_by="3";
	$message="Added new customer by ".$travel_agent_id;
	$message2="Added new customer by ".$travel_agent_id;
}

 $title="Add Customer";
// $message="Added new Travel Agent by ".$franchisee_id;
// $message2="Added new Travel Agent by ".$franchisee_id;
$fromWhom="1";


$sql= "INSERT INTO customer (firstname,lastname, email, country_code, contact_no , date_of_birth,age,gender,country,state,city,pincode,address,profile_pic, kyc,pan_card,aadhar_card,voting_card,bank_passbook,user_type,registrant,reference_no,register_by,level,customer_reference_no) VALUES (:firstname ,:lastname, :email, :country_code, :phone_no, :bdate, :age, :gender , :country, :state, :city, :pincode,:address,:profile_pic ,:kyc,:pan_card,:aadhar_card,:voting_card,:passbook,  :user_type,:registrant,  :travel_agent_id, :register_by,:level,:customer_level)";
$stmt3 =$conn->prepare($sql);

$result2=$stmt3->execute(array(
':firstname' => $firstname, 
':lastname' => $lastname, 
':email' => $email,
':country_code' => $country_code, 
':phone_no' => $phone_no,
':country' => $country,
':state' => $state,
':city' => $city,
':pincode' => $pincode,
':address' => $address,  
':bdate' => $bdate,
':age' => $age,  
':gender' => $gender,
':profile_pic' => $profile_pic,
':kyc' => $kyc,
':pan_card' => $pan_card,
':aadhar_card' => $aadhar_card,
':voting_card' => $voting_card,
':passbook' => $passbook,  
':user_type' => $user_type,
':registrant' =>$registrant,
':travel_agent_id' => $travel_agent_id,
':level' =>$level,
':customer_level' => $customer_level,
':register_by' => $register_by
));

if($result2){
	$sql2= "INSERT INTO logs (title,message,message2, reference_no, register_by, from_whom) VALUES (:title ,:message, :message2, :reference_no, :register_by, :from_whom)";
	$stmt =$conn->prepare($sql2);

	$result=$stmt->execute(array(
	':title' => $title,
	':message' => $message,
	':message2' =>$message2,
	':reference_no' => $travel_agent_id,
	':register_by' => $register_by,
	':from_whom' => $fromWhom
	));

	if($result){
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

?>