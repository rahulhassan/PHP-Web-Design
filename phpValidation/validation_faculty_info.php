<?php
	$fname = $lname = $id = $dob = $gender = $phone = $email = $pass = "";
	$err_fname = $err_id = $err_dob = $err_gender = $err_phone = $err_pass = "";
	
	$hasError=false;
	
	if(isset($_POST["signup"])){
		if(empty ($_POST["fname"])){
			$err_fname="First Name Required";
			$hasError = true;
		}
		else{
			$fname = htmlspecialchars($_POST["fname"]);
		}
		
		$lname = htmlspecialchars($_POST["lname"]);
		
		if(empty($_POST["id"])){
			$err_id="ID Required";
			$hasError =true;	
		}
		elseif(strlen($_POST["id"]) < 6){
			$err_id="ID must be 6 characters long";
			$hasError = true;
		}
		else{
			$id = htmlspecialchars($_POST["id"]);
		}
		if(empty($_POST["dob"])){
			$err_dob="Date of birth Required";
			$hasError =true;	
		}
		else{
			$dob =($_POST["dob"]);
		}
		if(empty($_POST["gender"])){
			$err_gender="Gender Required";
			$hasError =true;	
		}
		else{
			$gender =($_POST["gender"]);
		}
		
		if(empty ($_POST["phone"])){
			$err_phone="Phone Number required";
			$hasError = true;
		}
		else{
			$phone = htmlspecialchars($_POST["phone"]);
		}
		
		$email = htmlspecialchars($_POST["email"]);
		
		if(empty ($_POST["pass"])){
			$err_pass="Password required";
			$hasError = true;
		}
		elseif(strlen($_POST["pass"]) < 8){
			$err_pass="Password must be 8 characters long";
			$hasError = true;
		}
		else{
			$pass = htmlspecialchars($_POST["pass"]);
		}
		
		if(!$hasError){
			$users = simplexml_load_file("data/faculty_data.xml");
			
			$user = $users->addChild("user");
			$user->addAttribute("id", $id);
			$user->addChild("firstname",$fname);
			$user->addChild("lastname",$lname);
			$user->addChild("dateOfbirth",$dob);
			$user->addChild("gender",$gender);
			$user->addChild("phone",$phone);
			$user->addChild("email",$email);
			$user->addChild("pass",$pass);
			
			echo "<pre>";
			print_r($users);
			echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			
			$file = fopen("data/faculty_data.xml","w");
			fwrite($file,$xml->saveXML());
		}
	}
	
?>