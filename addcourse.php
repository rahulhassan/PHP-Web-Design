<?php include_once "phpValidation/validation_course_info.php" ;?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Add Course</title>
		<link href="https://fonts.googleapis.com/css2?family=Teko:wght@400&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/addCourse.css">
	</head>
	<body>
		<div class="main">
			
			<h2 style="text-align:center; color:#525252">Add Course</h2>
			<p  style="color:green; text-align:center;"><?php echo $msg;?></p>
			
			You must have to fill (<span style="color:red">*</span>) fields.<br><br>
			<form action="" method="post" onsubmit="return validate()">
				<div>
				<label>Subject Name</label>
				<input id="sname" class="ibox align" type="text" name="subname">
				<span id="err_sname" style="color:red;">*<?php echo $err_subname;?></span>
				<br><br>
				
				<label>Section</label>
				<input class="ibox align" id="section" type="text" name="secname">
				<span  id="err_section" style="color:red;">*<?php echo $err_secname;?></span>
				<br><br>
				
				<label>Day</label>
				<input class="ibox align" type="text" id="day" value="" name="day">
				<span  id="err_day" style="color:red;">*<?php echo $err_day;?></span>
				<br><br>
				
				<label>Time</label>
				<input class="ibox align" type="text" id="time" value="" name="time">
				<span  id="err_time" style="color:red;">*<?php echo $err_time;?></span>
				<br><br>
				
				</div><br><br>
				<a class="back" href="dashboard.php">Back</a>
				<input class="btn" type="submit" name="signup" value="Submit">
			</form>
		</div>
		<script src="js/courseV.js"></script>
	</body>
</html>