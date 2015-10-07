<?php

	//loob AB'i ühenduse
	
	require_once("../config_global.php");
	$database = "if15_mkoinc_3";
	
	function getCarData(){
		
		$mysqli = new mysqli($GLOBALS["servername"],$GLOBALS["server_username"],$GLOBALS["server_password"],$GLOBALS ["database"]);

		$stmt = $mysqli -> prepare("SELECT id, user_id, number_id,number_plate,car_color");
		
				$stmt->bind_result($id, $user_id_from_database, $number_plate, $car_color);
				$stmt ->execute();
		
		$row = 0;
		
		while($stmt->fetch()){
			
			echo $row." ".$number_plate."<br>";
			$row++;
			
		}
		
		$stmt->close();
		
		$mysqli->close();
	}
	
?>