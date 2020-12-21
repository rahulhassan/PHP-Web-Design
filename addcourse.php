<?php include_once "phpValidation/validation_course_info.php" ;?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Add Course</title>
		<link rel="stylesheet" href="css/addco.css">
	</head>
	<body>
		<div class="main">
			
			<h2 style="text-align:center; color:#525252">Add Course</h2>
			<p  style="color:green; text-align:center;"><?php echo $msg;?></p>
			
			You must have to fill (<span style="color:red">*</span>) fields.<br><br>
			<form action="" method="post">
				<div>
				<label>Subject Name</label>
				<input class="ibox align" type="text" name="subname">
				
				<span style="color:red;">*<?php echo $err_subname;?></span>
				<br><br>
				
				<label>Section</label>
				<input class="ibox align" type="text" name="secname">
				<span style="color:red;">*<?php echo $err_secname;?></span>
				<br><br>
				
				<label>Day</label>
				<input class="ibox align" type="text" value="" name="day">
				<span style="color:red;">*<?php echo $err_day;?></span>
				<br><br>
				
				<label>Time</label>
				<input class="ibox align" type="text" value="" name="time">
				<span style="color:red;">*<?php echo $err_time;?></span>
				<br><br>
				
				</div><br><br>
				<a class="back" href="dashboard.php">Back</a>
				<input class="btn" type="submit" name="signup" value="Submit">
					
			</form>
		</div>
	</body>
</html>