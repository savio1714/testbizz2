<?php
// session_start();
require '../connect.php';

$sub_category_name=$_POST['name'];
$description=$_POST['description'];
$picture=$_POST['picture'];
$category_id=$_POST['category'];


$sql= "INSERT INTO subcategory (sub_category_name,description, picture,category_id) VALUES (:sub_category_name ,:description, :picture,:category_id)";
$stmt3 =$conn->prepare($sql);

$result2=$stmt3->execute(array(
':sub_category_name' => $sub_category_name, 
':description' => $description, 
':picture' => $picture,
':category_id'=>$category_id
));

if($result2){	
		echo 1;
}
else
{
	echo 0	;
	}

?>