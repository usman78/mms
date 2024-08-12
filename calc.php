<?php
	$price = 0;
	$date = $_POST['junior-date'];
	$week = $_POST['weeks'];
	$courseWeeks = (int)$week;
	$counter = 0;
	$placement = 65;
	$accomodation_high = 0;
	$accomodation_low = 0;
	

	switch ($week) {
		case '1':
			$new_date = strtotime("+1 week" , strtotime($date));
			break;
		case '2':
				$new_date = strtotime("+2 week" , strtotime($date));
				break;
		case '3':
			$new_date = strtotime("+3 week" , strtotime($date));
			break;
		case '4':
			$new_date = strtotime("+4 week" , strtotime($date));
			break;
		case '5':
			$new_date = strtotime("+5 week" , strtotime($date));
			break;
		case '6':
			$new_date = strtotime("+6 week" , strtotime($date));						
			break;
		default:
			echo "Number of weeks are not valid.";
										
	}
	
	echo "Start Date: " . $date."<br>";
	echo "End Date: " . date('d-m-Y',$new_date)."<br><br>";
	$date = date('d-m-Y', strtotime($date));

	// echo $date.'<br>';

	$ffd= date('d-m-Y', strtotime("14-01-2019"));
	$fld= date('d-m-Y', strtotime("31-05-2019"));
	$sfd= date('d-m-Y', strtotime("03-06-2019"));
	$sld= date('d-m-Y', strtotime("06-09-2019"));
	$tfd= date('d-m-Y', strtotime("09-09-2019"));
	$tld= date('d-m-Y', strtotime("06-12-2019"));		


	while($courseWeeks > 0){


		

	switch ($counter) {
			case '0':
				$new_date = strtotime("+0 week" , strtotime($date));
				$new_date = date('d-m-Y', $new_date);
				// echo $new_date;
				break;
			case '1':
				$new_date = strtotime("+1 week" , strtotime($date));
				$new_date = date('d-m-Y', $new_date);
				// echo $new_date;
				break;
			case '2':
					$new_date = strtotime("+2 week" , strtotime($date));
					$new_date = date('d-m-Y', $new_date);
					// echo $new_date;
					break;
			case '3':
				$new_date = strtotime("+3 week" , strtotime($date));
				$new_date = date('d-m-Y', $new_date);
				// echo $new_date;
				break;
			case '4':
				$new_date = strtotime("+4 week" , strtotime($date));
				$new_date = date('d-m-Y', $new_date);
				// echo $new_date;
				break;
			case '5':
				$new_date = strtotime("+5 week" , strtotime($date));
				$new_date = date('d-m-Y', $new_date);
				// echo $new_date;
				break;
			case '6':
				$new_date = strtotime("+6 week" , strtotime($date));
				$new_date = date('d-m-Y', $new_date);
				// echo $new_date;						
				break;
			default:
				echo "Number of weeks are not valid.";
											
		}


	// High Season Condition 
	if(strtotime($new_date) >= strtotime($sfd) && strtotime($new_date) <= strtotime($sld)){
		$coursefee = 320;
		$accomodation_high += 220;
		$price += $coursefee;
		echo "Week ".$counter." in High season.<br>";

	}
	else {
		$course_fee = 270;
		$accomodation_low += 190;
		$price += $course_fee;
		echo "Week ".$counter." in Low season.<br>";
	}
	$courseWeeks = $courseWeeks - 1;
	$counter = $counter + 1;
}

// if(is_numeric($placement)){
// 	echo "placement is numeric";
// }



echo "Course Price: " . $price  . "<br>"; 
echo "Accomodation for weeks in High Season: " . $accomodation_high . "<br>";
echo "Accomodation for weeks in Low Season: " . $accomodation_low . "<br>";
echo "Accomodation Placement Fee: " . $placement . "<br>"; 	 	 	
	




// 	if(strtotime($date) >= strtotime($ffd) && strtotime($date) <= strtotime($fld)){
// 		if(strtotime($new_date) < strtotime($fld)){
// 			$course_fee = 270;
// 			$price = $course_fee * $week;
// 			echo "All Low Season 1.<br>";
// 			echo "Your course fee is: " . $price;
// 		}
// 		else {
// 			$counter = 1;
// 			$course_fee = 270;
// 			$price += $coursefee;
// 			$courseWeeks = $courseWeeks - 1;
// 			while($courseWeeks < 0){
// 				$weekAddition = strtotime("+1 week", strtotime($date));
// 				if(strtotime($weekAddition) < strtotime($fld)){
// 					$counter = $counter + 1; 
// 					echo $counter." week low season.";
// 					$price  += 270;
// 					$courseWeeks = $courseWeeks - 1;
// 				}
// 				else {

// 				}
// 			}
// 			echo "Your course fee is: " . $price;
// 		}


		
// 	}else if(strtotime($date) >= strtotime($sfd) && strtotime($date) <= strtotime($sld)){
// 		$course_fee = 320;
// 		echo "High Season.<br>";
// 		$price = $course_fee * $week;
// 		echo "Your course fee is: " . $price;
// 	}else if(strtotime($date) >= strtotime($tfd) && strtotime($date) <= strtotime($tld)){
// 		$course_fee = 270;
// 		$price = $course_fee * $week;
// 		echo "Low Season 2.<br>";
// 		echo "Your course fee is: " . $price;
// 	}
// else{
// 		echo "Neither Low Season nor High Season.";
// 	} 



?>
