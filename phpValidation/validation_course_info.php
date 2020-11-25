<?php
	$subname = $secname = $day = $time= "";
	$err_subname = $err_secname = $err_day = $err_time= "";
	
	$hasError=false;
	
	if(isset($_POST["signup"])){
		if(empty ($_POST["subname"])){
			$err_subname="Subject Name Required";
			$hasError = true;
		}
		else{
			$subname = htmlspecialchars($_POST["subname"]);
		}
		
		if(empty($_POST["secname"])){
			$err_secname = "Section Name Required";
			$hasError = true;	
		}
		else{
			$secname = htmlspecialchars($_POST["secname"]);
		}
		if(empty($_POST["day"])){
			$err_day = "Day Required";
			$hasError = true;	
		}
		else{
			$day =($_POST["day"]);
		}
		if(empty($_POST["time"])){
			$err_time = "Time Required";
			$hasError = true;	
		}
		else{
			$time =($_POST["time"]);
		}
		
	}
	
?>