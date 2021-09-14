<?php
// session_start();
require '../../connect.php';


$firstname = $_POST['firstname'];
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
$user_type = "4";

$title="Add Franchisee";
$message="Added New Franchisee by You";
$operation="add";

$fromWhom="5";

 
if($firstname != '' || $lastname != '' || $email != '' || $country_code != '' || $phone_no != '' || $bdate != '' || $address !='' || $pincode != ''){

	$sql= "INSERT INTO franchisee (firstname,lastname, email, country_code, contact_no , date_of_birth, age,gender,country,state,city,pincode,address,profile_pic,kyc,user_type,pan_card,aadhar_card,voting_card,bank_passbook,register_by,reference_no,registrant) VALUES (:firstname ,:lastname, :email, :country_code, :phone_no, :bdate, :age,  :gender , :country, :state, :city, :pincode,:address,:profile_pic ,:kyc,  :user_type, :pan_card, :aadhar_card, :voting_card, :passbook, :register_by, :ref_id, :registrant)";
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

}else{
	echo 0;
}



	




?>