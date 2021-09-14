<?php
// session_start();
require '../../connect.php';

$bm_id=$_POST['bm_id'];
$registrant=$_POST['bm_name'];
$branch_name=$_POST['branch_name'];
$zone_name=$_POST['zone_name'];
$region_name=$_POST['region_name'];
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
$user_type="5";
$register_by="6";
// $register_by="5";

 $title="Add Floor Manager";
$message="Added New Floor Manager by ".$bm_id;
$message2="Added New Floor Manager by ".$bm_id;
$fromWhom="1";


$sql= "INSERT INTO sales_manager (firstname,lastname, email, country_code, contact_no , date_of_birth,age,gender,country,state,city,pincode,address,profile_pic, kyc,pan_card,aadhar_card,voting_card,bank_passbook,user_type,branch,zone,region,registrant,reference_no,register_by) VALUES (:firstname ,:lastname, :email, :country_code, :phone_no, :bdate, :age, :gender , :country, :state, :city, :pincode,:address,:profile_pic ,:kyc,:pan_card,:aadhar_card,:voting_card,:passbook,  :user_type,:branch_name,  :zone_name, :region_name,:registrant,  :bm_id, :register_by)";
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
':branch_name' =>$branch_name,
':zone_name' => $zone_name,
':region_name' => $region_name,
':registrant' =>$registrant,
':bm_id' => $bm_id,
':register_by' => $register_by
));

if($result2){
	$sql2= "INSERT INTO logs (title,message,message2, reference_no, register_by, from_whom) VALUES (:title ,:message, :message2, :reference_no, :register_by, :from_whom)";
	$stmt =$conn->prepare($sql2);

	$result=$stmt->execute(array(
	':title' => $title,
	':message' => $message,
	':message2' =>$message2,
	':reference_no' => $bm_id,
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