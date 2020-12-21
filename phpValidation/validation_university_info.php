<?php

	require_once 'models/db_connect.php';
	$uniname = $since = $location = $msg = "";
	$err_uniname = $err_since = $err_location = "";
	
	$hasError=false;
	
	if(isset($_POST["signup"])){
		if(empty ($_POST["uniname"])){
			$err_uniname="University Name Required";
			$hasError = true;
		}
		else{
			$uniname = htmlspecialchars($_POST["uniname"]);
		}
		
		if(empty($_POST["since"])){
			$err_since = "Since Required";
			$hasError = true;	
		}
		else{
			$since = htmlspecialchars($_POST["since"]);
		}
		if(empty($_POST["location"])){
			$err_location = "Location Required";
			$hasError = true;	
		}
		else{
			$location =($_POST["location"]);
		}
		if(!$hasError){
			$msg = "Data Inserted Successfully";
			addUniversity($uniname, $since, $location);
		}
	}
	
	function addUniversity($uniname, $since, $location){

		$query = "INSERT INTO university VALUES (null,'$uniname', $since, '$location')";
		execute($query);
	}
	function getUniversityInfo(){
		$query ="SELECT * FROM university";
		$result = get($query);
		return $result;
	}
?>