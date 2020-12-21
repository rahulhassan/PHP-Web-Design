<?php include_once "phpValidation/validation_university_info.php" ;?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Add University</title>
		<link rel="stylesheet" href="css/adduni.css">
	</head>
	<body>
		<div class="main">	
			<h2 style="text-align:center; color:#525252">Add University</h2>
			<p  style="color:green; text-align:center;"><?php echo $msg;?></p>
			You must have to fill (<span style="color:red">*</span>) fields.<br><br>
			<form action="" method="post" onsubmit="return validate()">
				<div>
				<label>University Name</label>
				<input class="ibox align" id="uniname" type="text" name="uniname">
				<span style="color:red;" id="err_uniname">*<?php echo $err_uniname;?></span>
				<br><br>
				
				<label>Since</label>
				<input class="ibox align" id="since" type="number" name="since">
				<span style="color:red;" id="err_since">*<?php echo $err_since;?></span>
				<br><br>
				
				<label>Location</label>
				<input class="ibox align" id="location" type="text" value="" name="location">
				<span style="color:red;" id="err_location">*<?php echo $err_location;?></span>
				<br><br>
				
				</div><br>
				<a class="back" href="dashboard.php">Back</a>
				<input class="btn" type="submit" name="signup" value="Submit">
			</form>
		</div>
		<script src="js/addUniversity_validation.js"></script>
	</body>
</html>