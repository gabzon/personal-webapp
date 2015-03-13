<?php
/**
* Simple PHP age Calculator
*
* Calculate and returns age based on the date provided by the user.
* @param   date of birth('Format:yyyy-mm-dd').
* @return  age based on date of birth
*/
function ageCalculator($dob){
	if(!empty($dob)){
		$birthdate = new DateTime($dob);
		$today   = new DateTime('today');
		$age = $birthdate->diff($today)->y;
		return $age;
	}else{
		return 0;
	}
}

function print_tags($id){
	$posttags = get_the_tags($id);
	if ($posttags) {
		foreach($posttags as $tag) {
			echo $tag->slug . ' ';
		}
	}
}
