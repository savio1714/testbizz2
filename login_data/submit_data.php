<?php
session_start();
require '../connect.php';
$username=$_POST['username'];
$password=$_POST['password'];
$remember_me=$_POST['remember_me'];

 

$stmt = $conn->prepare("SELECT * FROM login where username='".$username."' AND password='".$password."' AND status='1' ");
$stmt->execute();

    // set the resulting array to associative
$stmt->setFetchMode(PDO::FETCH_ASSOC);

if($stmt->rowCount()>0){
	foreach (($stmt->fetchAll()) as $key => $row) 
		# code...
		// $_SESSION["username2"] = $row['username'];
		$_SESSION["user_type_id_value"] = $row['user_type_id'];
		$_SESSION["user_id"] = $row['user_id'];

		if ($_SESSION["user_type_id_value"] =='2'){

		$stmt = $conn->prepare("SELECT * FROM customer where email='".$username."'  AND status='1' ");
				$stmt->execute();

				    // set the resulting array to associative
				$stmt->setFetchMode(PDO::FETCH_ASSOC);

				if($stmt->rowCount()>0){
					foreach (($stmt->fetchAll()) as $key => $row){
						$_SESSION["username2"] = $row['firstname'] ;
						$_SESSION["lname"] = $row['lastname'] ;
						
					}
				}
		}else if($_SESSION["user_type_id_value"] =='3'){
			$stmt = $conn->prepare("SELECT * FROM travel_agent where email='".$username."'  AND status='1' ");
				$stmt->execute();

				    // set the resulting array to associative
				$stmt->setFetchMode(PDO::FETCH_ASSOC);

				if($stmt->rowCount()>0){
					foreach (($stmt->fetchAll()) as $key => $row){
						$_SESSION["username2"] = $row['firstname'] ;
						$_SESSION["lname"] = $row['lastname'] ;
						
					}
				}

		}else if($_SESSION["user_type_id_value"] =='4'){
			$stmt = $conn->prepare("SELECT * FROM franchisee where email='".$username."'  AND status='1' ");
				$stmt->execute();

				    // set the resulting array to associative
				$stmt->setFetchMode(PDO::FETCH_ASSOC);

				if($stmt->rowCount()>0){
					foreach (($stmt->fetchAll()) as $key => $row){
						$_SESSION["username2"] = $row['firstname'] ;
						$_SESSION["lname"] = $row['lastname'] ;
						
					}
				}

		}else if($_SESSION["user_type_id_value"] =='5'){
			$stmt = $conn->prepare("SELECT * FROM sales_manager where email='".$username."'  AND status='1' ");
				$stmt->execute();

				    // set the resulting array to associative
				$stmt->setFetchMode(PDO::FETCH_ASSOC);

				if($stmt->rowCount()>0){
					foreach (($stmt->fetchAll()) as $key => $row){
						$_SESSION["username2"] = $row['firstname'] ;
						$_SESSION["lname"] = $row['lastname'] ;
						
					}
				}

		}else if($_SESSION["user_type_id_value"] =='6'){
			$stmt = $conn->prepare("SELECT * FROM branch_manager where email='".$username."'  AND status='1' ");
				$stmt->execute();

				    // set the resulting array to associative
				$stmt->setFetchMode(PDO::FETCH_ASSOC);

				if($stmt->rowCount()>0){
					foreach (($stmt->fetchAll()) as $key => $row){
						$_SESSION["username2"] = $row['firstname'] ;
						$_SESSION["lname"] = $row['lastname'] ;
						
					}
				}

		}else if($_SESSION["user_type_id_value"] =='7'){
			$stmt = $conn->prepare("SELECT * FROM regional_manager where email='".$username."'  AND status='1' ");
				$stmt->execute();

				    // set the resulting array to associative
				$stmt->setFetchMode(PDO::FETCH_ASSOC);

				if($stmt->rowCount()>0){
					foreach (($stmt->fetchAll()) as $key => $row){
						$_SESSION["username2"] = $row['firstname'] ;
						$_SESSION["lname"] = $row['lastname'] ;
						
					}
				}

		}else{
			$_SESSION["username2"] = '' ;
			$_SESSION["lname"]='';
		}	

	if ($_SESSION["user_type_id_value"] =='2' || $_SESSION["user_type_id_value"]== '3' || $_SESSION["user_type_id_value"]== '4' || $_SESSION["user_type_id_value"]== '5' || $_SESSION["user_type_id_value"]== '6' || $_SESSION["user_type_id_value"]== '7'){
		if ($remember_me == 'true') {



				setcookie('user2',$username, time() + (86400 * 30), "/"); // 86400 = 1 day
				// setcookie('user2',$username , time() + (86400 * 30), "/"); // 86400 = 1 day
				setcookie('pass',$password , time() + (86400 * 30), "/"); // 86400 = 1 day
			}else{
				setcookie('user2',''); // 86400 = 1 day
				setcookie('pass',''); // 86400 = 1 day
			}
		echo '1';
	}else{
		echo '0';
	}
}
	else{
		echo '0';
	}


$stmt2 = $conn->prepare("SELECT * FROM user_type where id='".$_SESSION["user_type_id_value"]."' AND status='1' ");
$stmt2->execute();

    // set the resulting array to associative
$stmt2->setFetchMode(PDO::FETCH_ASSOC);

if($stmt2->rowCount()>0){
	foreach (($stmt2->fetchAll()) as $key => $row2) 

		# code...
		$_SESSION["user_type_name"] = $row2['name'];
}
	else{
		echo '0';
	}

	// if(isset($_SESSION["username"])) {
 //    header("Location:index.php");
 //    }


// if ($result->num_rows > 0) {
// 	while($row = $result->fetch_assoc()) {
// 		echo "1";
// 	}
// } else {
// 	echo "0";
// }

?>