<?php   
session_start(); //to ensure you are using same session
// session_destroy();
// if(session_destroy()){
// 	header('location:index.php');
// }

if(isset($_SESSION['username'])){
    unset($_SESSION['username']);
 //   setcookie('user2','');
	// setcookie('pass','');

    // session_destroy();
  
}

	
	
  header("location: login");



?>
