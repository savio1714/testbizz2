<?php
// session_start();
require '../../connect.php';


$customer_reference_no = $_POST['customer_level'];
$level = $_POST['level'];

$firstname = $_POST['firstname'];
// $mname = $_POST['mname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$country_code = $_POST['country_code'];
$phone_no = $_POST['phone'];
$age = $_POST['age'];
$bdate = $_POST['bdate'];

$address = $_POST['address'];
$pincode = $_POST['pincode'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];

$profile_pic = $_POST['profile_pic'];
$kyc = $_POST['kyc'];
$pan_card = $_POST['pan_card'];
$aadhar_card = $_POST['aadhar_card'];
$voting_card = $_POST['voting_card'];
$passbook = $_POST['passbook'];

$register_by = $_POST['register_by'];
$ref_id = $_POST['ref_id'];
$registrant = $_POST['registrant'];
$user_type = "2";


$title="Add Customer";
$message="Added New Customer by You";
$operation="add";

$fromWhom="3";
 
if(!empty($_POST["customer_level"])){
	if($level == '' || $level > 5){
		echo 0;
	}else{

		addCustomer($firstname,$lastname,$email,$country_code,$phone_no,$country,$state,$city,$pincode,$address,$bdate,$age,$gender,$profile_pic,$kyc,$pan_card,$aadhar_card,$voting_card,$passbook,$register_by,$ref_id,$registrant,$customer_reference_no,$level,$user_type,$conn,$title,$message,$operation,$fromWhom);
		
	}

}else{

	addCustomer($firstname,$lastname,$email,$country_code,$phone_no,$country,$state,$city,$pincode,$address,$bdate,$age,$gender,$profile_pic,$kyc,$pan_card,$aadhar_card,$voting_card,$passbook,$register_by,$ref_id,$registrant,$customer_reference_no,$level,$user_type,$conn,$title,$message,$operation,$fromWhom);
		
}



function  addCustomer($firstname,$lastname,$email,$country_code,$phone_no,$country,$state,$city,$pincode,$address,$bdate,$age,$gender,$profile_pic,$kyc,$pan_card,$aadhar_card,$voting_card,$passbook,$register_by,$ref_id,$registrant,$customer_reference_no,$level,$user_type,$conn,$title,$message,$operation,$fromWhom){

	$sql= "INSERT INTO customer (firstname,lastname, email, country_code, contact_no , date_of_birth, age,gender,country,state,city,pincode,address,profile_pic,kyc,user_type,pan_card,aadhar_card,voting_card,bank_passbook,register_by,reference_no,registrant,customer_reference_no,level) VALUES (:firstname ,:lastname, :email, :country_code, :phone_no, :bdate, :age,  :gender , :country, :state, :city, :pincode,:address,:profile_pic ,:kyc,  :user_type, :pan_card, :aadhar_card, :voting_card, :passbook, :register_by, :ref_id, :registrant, :customer_reference_no, :level)";
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
		':register_by' => $register_by, 
		':ref_id' => $ref_id, 
		':registrant' => $registrant, 
		':customer_reference_no' => $customer_reference_no, 
		':level' => $level,   
		':user_type' => $user_type
		));

		if($result2){
			$sql2= "INSERT INTO logs (title,message,operation, reference_no, register_by, from_whom) VALUES (:title ,:message, :operation, :reference_no, :register_by, :from_whom)";
			$stmt =$conn->prepare($sql2);

			$result=$stmt->execute(array(
			':title' => $title,
			':message' => $message,
			':operation' =>$operation,
			':reference_no' => $ref_id,
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
}



?>