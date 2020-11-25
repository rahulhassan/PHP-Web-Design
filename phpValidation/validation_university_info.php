<?php
	$uniname = $since = $location = "";
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
		
	}
	
?>