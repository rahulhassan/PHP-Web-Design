<?php 
	require_once '../models/db_connect.php';
	include_once "../phpValidation/validation_student_info.php";
?>
<html>
	<head>
		<title>Update Student</title>
		<link href="https://fonts.googleapis.com/css2?family=Teko:wght@400&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../css/addstudent.css">
	</head>
	<body>
		<div class="main">	
			<h2 style="text-align:center; color:#525252">Update Student Information</h2>
			You must have to fill (<span style="color:red">*</span>) fields.<br><br>
			<form action="" name="forms" method="post" onsubmit="return validate()">
				<div>
					<label>Name</label>
					<input class="nwd lname align" type="text" value="" name="lname" placeholder="Last Name">
					<input class="nwd fname align" id="fname" type="text" value="<?php echo $info['first_name']?>" name="fname" placeholder="First Name"></td>
					<span style="color:red;"  id="err_fname">*<?php echo $err_fname;?></span>
					<br><br>
				
					<label>Date Of Birth</label>
					<input class="ibox align" type="date" id="dob" value="" name="dob">
					<span style="color:red;" id="err_dob">*<?php echo $err_dob;?></span>
					<br><br>
					
					<label>Gender</label>
					<span class="ibox align">
					<input type="radio" value="Male"  name="gender"> Male
					<input type="radio" value="Female"  name="gender"> Female
					<input type="radio" value="Other"  name="gender"> Other
					</span>
					<span style="color:red;" id="err_gender">*<?php echo $err_gender;?></span>
					<br><br>
					
					<label>Phone</label>
					<input class="ibox align" id="phone" type="phone" value="" name="phone">
					<span style="color:red;" id="err_phone">*<?php echo $err_phone;?></span>
					<br><br>
					
					<label>Email</label>
					<input class="ibox align" type="email" id="email" value="" name="email">
			
				</div><br><br>
				<a class="back" href="../info/student_info.php">Back</a>
				<input class="btn" type="submit" name="update" value="Update">
			</form>
		</div>
		<script src="../js/studentFacultyV.js"></script>
	</body>
</html>