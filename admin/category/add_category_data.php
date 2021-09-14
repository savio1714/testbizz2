<?php
// session_start();
require '../connect.php';

$category_name=$_POST['name'];
$description=$_POST['description'];
$picture=$_POST['picture'];


$sql= "INSERT INTO category (category_name,description, picture) VALUES (:category_name ,:description, :picture)";
$stmt3 =$conn->prepare($sql);

$result2=$stmt3->execute(array(
':category_name' => $category_name, 
':description' => $description, 
':picture' => $picture
));

if($result2){	
		echo 1;
}
else
{
	echo 0	;
	}

?>