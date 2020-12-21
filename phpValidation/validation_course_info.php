<?php
	require_once 'models/db_connect.php';
	$subname = $secname = $day = $time= $msg = "";
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
		if(!$hasError){
			$msg = "Data Inserted Successfully";
			addCourse($subname, $secname, $day, $time);
		}
	}
	
	function addCourse($subname, $secname, $day, $time){

		$query = "INSERT INTO course VALUES (null,'$subname','$secname', '$day', '$time')";
		execute($query);
	}
	function getCourseInfo(){
		$query ="SELECT * FROM course";
		$result = get($query);
		return $result;
	}
?>