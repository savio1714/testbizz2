<?php
// session_start();
require '../connect.php';

$location=$_POST['location'];
$user_type=$_POST['designation'];
$password=$_POST['pass'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$country_code=$_POST['country_code'];
$phone_no=$_POST['phone'];
$age=$_POST['age'];
$bdate=$_POST['dob'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];


date_default_timezone_set('Asia/Calcutta');
$todayYear = date('Y' );

$sql2= $conn->prepare("SELECT distinct emp_id  from employee order by emp_id desc limit 1");

$sql2->execute();
$sql2->setFetchMode(PDO::FETCH_ASSOC);
if($sql2->rowCount()>0){
	foreach (($sql2->fetchAll()) as $key3 => $row3) {

		 $emp_id=$row3["emp_id"];

	}

	if($emp_id ==''){
		$uid = 'BH_EMP_'.$todayYear.'_001';
		// $uid='BH_EMP_2021_001';;
	}else{

		$subV=substr($emp_id,7,11);
		if($subV==$todayYear){
			// ''.$ssd
			$emp_id++;
			  $emp_id=str_pad($emp_id, 3, '0', STR_PAD_LEFT);
			  $uid =$emp_id;
		}else{

			$emp_id++;
			$fid=substr($emp_id,12);
			$newValue = 'BH_EMP_'.$todayYear.'_'.$fid;

			  $Nemp_id=str_pad($newValue, 3, '0', STR_PAD_LEFT);
			  $uid =$Nemp_id;
		}
	}



}else
{
	 // $uid= 'BH_EMP_2021_001';
	$uid = 'BH_EMP_'.$todayYear.'_001';
}






$sql= "INSERT INTO employee (emp_id,firstname,lastname, email, country_code, contact_no , date_of_birth,age,gender,country,state,city,pincode,address,user_type,location) VALUES (:emp_id ,:firstname ,:lastname, :email, :country_code, :phone_no, :bdate, :age, :gender , :country, :state, :city, :pincode,:address, :user_type, :location)";
$stmt3 =$conn->prepare($sql);

$result2=$stmt3->execute(array(
':emp_id' => $uid, 
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
':user_type' => $user_type,
':location' => $location

));

if($result2){
	$sql= "INSERT INTO login (username,password, user_id, user_type_id) VALUES (:uname ,:password, :user_id, :user_type_id)";
		$stmt3 =$conn->prepare($sql);

		$result2=$stmt3->execute(array(
		':uname' => $email, 
		':password' => $password, 
		':user_id' => $uid, 
		':user_type_id' => $user_type
		));

		if($result2){
			echo 1;
		}
		else{
		echo 0	;
		}
}
else{
echo 0	;
}

?>