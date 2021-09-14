<?php
    require '../connect.php';

    $name=$_GET['vkvbvjfgfikix'];

    if($name == 'Pending'){
        $status=2;
        $srno =1;
    }else if($name == 'Registered'){
        $status=1;
    }

$output="";

    $stmt = $conn->prepare("SELECT * FROM `travel_agent` where status='".$status."'");
    $stmt->execute();
     // set the resulting array to associative
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    if($stmt->rowCount()>0){

    	$output .= '<h2 style="text-align:center">Travel Agent '.$name.' List</h2>
        <table border="1" style="text-align:center">
    	<tr>';
            if($name == 'Pending'){
                $output .= '<th>S.No</th>';
            }else if($name == 'Registered'){
                $output .='<th>Travel Agent ID</th>';
            }
    	$output .= '	
    		<th>Name</th>
    		<th>Email</th>
    		<th>Contact No.</th>
    		<th>Date Of Birth</th>
    		<th>Age</th>
    		<th>Gender</th>
    		<th>Country</th>
    		<th>State</th>
    		<th>City</th>
    		<th>Pincode</th>
    		<th>Address</th>
    		<th>Reference No</th>
    		<th>Registrant</th>
    		<th>Register Date</th>
    	</tr>';
    foreach (($stmt->fetchAll()) as $key => $row) {

        $bd= new DateTime($row['date_of_birth']);
        $bdate= $bd->format('d-m-Y'); 

        $rd= new DateTime($row['register_date']);
        $rDate= $rd->format('d-m-Y');

        // to get franchisee name
        $sql4= $conn->prepare("SELECT firstname,lastname FROM `franchisee` where franchisee_id='".$row['reference_no']."'");
            $sql4->execute();
            $sql4->setFetchMode(PDO::FETCH_ASSOC);
            if($sql4->rowCount()>0){
                foreach (($sql4->fetchAll()) as $key4 => $row4) {
                    $f_name=$row4['firstname']. ' ' .$row4['lastname'];
                }
            }
 

    	$sql2= $conn->prepare("select *,(select city_name from cities where id = '".$row['city']."') as city_name,(select state_name from states where id = '".$row['state']."') as statename from countries where id = '".$row['country']."' ");
		$sql2->execute();
		$sql2->setFetchMode(PDO::FETCH_ASSOC);
		if($sql2->rowCount()>0){
			foreach (($sql2->fetchAll()) as $key3 => $row3) {

				 $country_name=$row3["country_name"];
                 $country_code=$row3["country_code"];
                 $city_name=$row3["city_name"];
                 $statename=$row3["statename"];

			}

		}else
		{
			 
		}


    	$output .= '<tr>';
            if($name == 'Pending'){
                $output .='<td>'.$srno.'</td>';
                $srno++;
            }else if($name == 'Registered'){
                $output .='<td>'.$row['travel_agent_id'].'</td>';
            }
            $output .= '
    		
    		<td>'.$row['firstname'].' '.$row['lastname'].'</td>
    		<td>'.$row['email'].'</td>
    		<td>+'.$country_code.' '.$row['contact_no'].'</td>
    		<td>'.$bdate.'</td>
    		<td>'.$row['age'].'</td>
    		<td>'.$row['gender'].'</td>
    		<td>'.$country_name.'</td>
    		<td>'.$statename.'</td>
    		<td>'.$city_name.'</td>
    		<td>'.$row['pincode'].'</td>
    		<td>'.$row['address'].'</td>
    		<td>'.$row['reference_no'].'</td>
    		<td>'.$f_name.'</td>
    		<td>'.$rDate.'</td>
    	</tr>';

        
 
    }
    $output .= '</table>';
    header("Content-Type: application/xls");
    if($name == 'Pending'){
        header("Content-Disposition: attachment;filename=Pending_Travel_Agent_List.xls");
    }else if($name == 'Registered'){
        header("Content-Disposition: attachment;filename=Registered_Travel_Agent_List.xls");
    }
    

    

    echo $output;
    }                                                      
    else{

        if($name == 'Pending'){
            echo 'No Pending Data';
        }else if($name == 'Registered'){
            echo 'No Registered Data';
        }
    	
                                                            
    }



?>