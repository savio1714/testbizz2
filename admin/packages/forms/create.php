<?php
// session_start();
require '../../connect.php';

// get Row data
    $data = stripslashes(file_get_contents("php://input"));
// json Decoding, true -> for getting data in associative manner
    $mydata = json_decode($data, true);
// declare variables
    $result_4 = '';
    $get_itinerary_id;
    $get_id;

// insert package data
    $sql = 'INSERT INTO package (category_id,sub_category_id,category_hotel_id,category_meal_id,name,unique_code,description,
                destination,location,travel_from,travel_to,sightseeing_type) 
            VALUES (:category_id,:sub_category_id,:category_hotel_id,:category_meal_id,:name,:unique_code,:description,
                :destination,:location,:travel_from,:travel_to,:sightseeing_type)';
    $statement = $conn->prepare($sql);
    $result = $statement->execute([
                ':category_id' => $mydata['category_id'],
                ':sub_category_id' => $mydata['sub_category_id'],
                ':category_hotel_id' => $mydata['category_hotel_id'],
                ':category_meal_id' => $mydata['category_meal_id'],
                ':name' => $mydata['name'],
                ':unique_code' => $mydata['unique_code'],
                ':description' => $mydata['description'],
                ':destination' => $mydata['destination'],
                ':location' => $mydata['location'],
                ':travel_from' => $mydata['travel_from'],
                ':travel_to' => $mydata['travel_to'],
                ':sightseeing_type' => $mydata['sightseeing_type']
            ]);
    if ( $result ) {
        $package_query = $conn->prepare("SELECT id FROM package ORDER BY id DESC LIMIT 1");
        $package_query->execute();
        $get_package_id = $package_query->fetch();
        // echo $get_package_id["id"];
        $get_id = $get_package_id["id"];
    }
    
// insert package itinerary data
    if ( $mydata['inclusion'] || $mydata['exclusion'] || $mydata['remark'] || $mydata['details_of_day'] ) 
    {
        $sql_2 = 'INSERT INTO package_itinerary_details (package_id,inclusion,exclusion,remark)
                VALUES(:package_id,:inclusion,:exclusion,:remark)';
        $statement_2 = $conn->prepare($sql_2);
        $result_2 = $statement_2->execute([
                ':package_id' => $get_id,
                ':inclusion' => $mydata['inclusion'],
                ':exclusion' => $mydata['exclusion'],
                ':remark' => $mydata['remark']
            ]);
        if (  $result_2 ) {
            $itinerary_query = $conn->prepare("SELECT id FROM package_itinerary_details ORDER BY id DESC LIMIT 1");
            $itinerary_query->execute();
            $get_itinerary_query_id = $itinerary_query->fetch();
            // echo $get_itinerary_query_id["id"];
            $get_itinerary_id = (int)$get_itinerary_query_id["id"];
        }

    }
// insert package trip_days
    if ( $mydata['details_of_day'] )
    {
        $sql_3 = 'INSERT INTO package_trip_days (package_id,itinerary_details_id,details_of_day) VALUES(:package_id,:itinerary_details_id,:details_of_day)';
        $statement_3 = $conn->prepare($sql_3);
        
        foreach ( $mydata['details_of_day'] as $day ) 
        {
            $statement_3->bindParam(':package_id', $get_id, PDO::PARAM_INT);
            $statement_3->bindParam(':itinerary_details_id', $get_itinerary_id, PDO::PARAM_INT);
            $statement_3->bindParam(':details_of_day', $day, PDO::PARAM_STR);
            $result_3 = $statement_3->execute();
        }

    }
// insert package pricing data
    if ( $mydata['total_package_price'] ) 
    {
        $sql_4 = 'INSERT INTO package_pricing (package_id,net_price,net_gst,net_total,markup_price,markup_loading_price,
                    markup_gst,markup_total,total_package_price)
                VALUES(:package_id,:net_price,:net_gst,:net_total,:markup_price,:markup_loading_price,
                    :markup_gst,:markup_total,:total_package_price)';
        $statement_4 = $conn->prepare($sql_4);
        $result_4 = $statement_4->execute([
                ':package_id' => $get_id,
                ':net_price' => $mydata['net_price'],
                ':net_gst' => $mydata['net_gst'],
                ':net_total' => $mydata['net_total'],
                ':markup_price' => $mydata['markup_price'],
                ':markup_loading_price' => $mydata['markup_loading_price'],
                ':markup_gst' => $mydata['markup_gst'],
                ':markup_total' => $mydata['markup_total'],
                ':total_package_price' => $mydata['total_package_price']
            ]);
    }
// insert package pictures / images
    if ( $mydata['images'] )
    {
        $sql_5 = 'INSERT INTO package_pictures (package_id,image) VALUES(:package_id,:image)';
        $statement_5 = $conn->prepare($sql_5);
        
        foreach ( $mydata['images'] as $key => $image) 
        {
            $html_string = str_replace(' ', '-', $mydata['name']); 
            $image_string = preg_replace('/[^A-Za-z0-9\-]/', '', $html_string); 
            $image_name = $image_string.time().'-'.++$key.'.'.'jpg';
            $destination = "uploading/packages/".$image_name;

            $name = basename($mydata['name']);
            // echo $name;

            move_uploaded_file($mydata['name'], $destination);
            // /* Upload file */
            $statement_5->bindParam(':package_id', $get_id, PDO::PARAM_INT);
            $statement_5->bindParam(':image', $destination, PDO::PARAM_STR);
            $statement_5->execute();
            
        }
    }
// insert package category_occupancy
    if ( $mydata['occupancy_id'] )
    {
        $sql_6 = 'INSERT INTO package_to_category_occupancy (package_id,occupancy_id) VALUES(:package_id,:occupancy_id)';
        $statement_6 = $conn->prepare($sql_6);
        $result_6 = $statement_6->execute([
                ':package_id' => $get_id,
                ':occupancy_id' => $mydata['occupancy_id']
            ]);
    }
// insert package category_vehicle
    if ( $mydata['vehicle_id'] )
    {
        $sql_7 = 'INSERT INTO package_to_category_vehicle (package_id,vehicle_id) VALUES(:package_id,:vehicle_id)';
        $statement_7 = $conn->prepare($sql_7);
        $result_7 = $statement_7->execute([
                ':package_id' => $get_id,
                ':vehicle_id' => $mydata['vehicle_id']
            ]);
    }

// check success
    if ( $result && $result_4) {
            echo "success";
        }else{
            echo "fail";
    }


            
           






    // extract($_POST);
    // $error=array();
    // $extension=array("jpeg","jpg","png","gif");
    // foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
    //     $file_name=$_FILES["files"]["name"][$key];
    //     $file_tmp=$_FILES["files"]["tmp_name"][$key];
    //     $ext=pathinfo($file_name,PATHINFO_EXTENSION);

    //     if(in_array($ext,$extension)) {
    //         if(!file_exists("photo_gallery/".$txtGalleryName."/".$file_name)) {
    //             move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"photo_gallery/".$txtGalleryName."/".$file_name);
    //         }
    //         else {
    //             $filename=basename($file_name,$ext);
    //             $newFileName=$filename.time().".".$ext;
    //             move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"photo_gallery/".$txtGalleryName."/".$newFileName);
    //         }
    //     }
    //     else {
    //         array_push($error,"$file_name, ");
    //     }
    // }

?>