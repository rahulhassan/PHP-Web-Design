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
				
				You must have to fill (<span style="color:red">*</span>) fields.<br><br>
				<form action="" method="post">
					<div>
					<label>University Name</label>
					<input class="ibox align" type="text" name="uniname">
					
					<span style="color:red;">*<?php echo $err_uniname;?></span>
					<br><br>
					
					<label>Since</label>
					<input class="ibox align" type="number" name="since">
					<span style="color:red;">*<?php echo $err_since;?></span>
					<br><br>
					
					<label>Location</label>
					<input class="ibox align" type="text" value="" name="location">
					<span style="color:red;">*<?php echo $err_location;?></span>
					<br><br>
					
					</div><br><br>
					<a class="back" href="dashboard.php">Back</a>
					<input class="btn" type="submit" name="signup" value="Submit">
						
				</form>
			
		</div>
	</body>
</html>