<?php 
require "../../connect.php";

 
$id= $_POST["id"];
$uname= $_POST["uname"];
$state= $_POST["st"];
$string="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#%^*()";
$password = substr(str_shuffle($string), 0,8);

$status= '1';
$user_type_id= '7';


$ref_no= "1";
$register_by ='1';

//Get State Short Name
$stmt = $conn->prepare("SELECT * FROM states WHERE id='".$state."' AND status = 1");
$stmt->execute();

// set the resulting array to associative
$stmt->setFetchMode(PDO::FETCH_ASSOC);

if($stmt->rowCount()>0){
	foreach (($stmt->fetchAll()) as $key => $row) {
		$state=$row['short_name'];
	}
}else{
	$state='GA';
}




function getManagerId($conn,$state){
	$string2 ="1234567890";
	$last3char = substr(str_shuffle($string2), 0,3);

	$sql2= $conn->prepare("SELECT distinct regional_manager_id  from regional_manager order by regional_manager_id");

	$sql2->execute();
	$sql2->setFetchMode(PDO::FETCH_ASSOC);
	if($sql2->rowCount()>0){
		foreach (($sql2->fetchAll()) as $key3 => $row3) {

			 $regional_manager_id=$row3["regional_manager_id"];

			 $rmid=substr($regional_manager_id,4); //get 001
				if($rmid == $last3char){
					getManagerId($conn,$state);
				}
		}
		
		return $uid = 'RM'.$state.$last3char;
		

	}else
	{

		return $uid = 'RM'.$state.$last3char;
	}


}


	$uid= getManagerId($conn,$state);


		//log file
$title="Confirm Regional Manager";
$message=$uid." has been approved";
$message2=$uid." has been approved";
$fromWhom="1";



	$sql1 = "UPDATE regional_manager SET status=:status,regional_manager_id=:regional_manager_id WHERE id=:id";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':status' => $status,
		':regional_manager_id' => $uid,
		// ':deleted_date' => $today,
		':id' => $id		
	));

	if ($result) {
		
		$sql= "INSERT INTO login (username,password, user_id, user_type_id , status) VALUES (:uname ,:password, :user_id, :user_type_id, :status)";
		$stmt3 =$conn->prepare($sql);

		$result2=$stmt3->execute(array(
		':uname' => $uname, 
		':password' => $password, 
		':user_id' => $uid, 
		':user_type_id' => $user_type_id, 
		':status' => $status
		));

		if($result2){
			$sql4= "INSERT INTO logs (user_id,title,message,message2, reference_no, register_by, from_whom) VALUES (:user_id,:title ,:message, :message2, :reference_no, :register_by, :from_whom)";
				$stmt4 =$conn->prepare($sql4);

				$result3=$stmt4->execute(array(
				':user_id' => $uid,
				':title' => $title,
				':message' => $message,
				':message2' =>$message2,
				':reference_no' => $ref_no,
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


?>