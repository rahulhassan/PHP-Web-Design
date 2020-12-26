<?php include_once "../phpValidation/validation_student_info.php" ;?>
<html>
	<head>
		<title>Add Student</title>
		<link href="https://fonts.googleapis.com/css2?family=Teko:wght@400&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../css/addstudent.css">
	</head>
	<body>
		<div class="main">	
			<h2 style="text-align:center; color:#525252">Add Student</h2>
			<p  style="color:green; text-align:center;"><?php echo $msg;?></p>
			You must have to fill (<span style="color:red">*</span>) fields.<br><br>
			<form action="" name="forms" method="post" onsubmit="return validate()">
				<div>
				<label>Name</label>
				<input class="nwd lname align" type="text" name="lname" placeholder="Last Name">
				<input class="nwd fname align" id="fname" type="text" value="" name="fname" placeholder="First Name"></td>
				<span style="color:red;"  id="err_fname">*<?php echo $err_fname;?></span>
				<br><br>
				
				<label>ID</label>
				<input class="ibox align" onfocusout="checkStudent(this)" type="text" id="id" placeholder="example: 1102020" name="id">
				<span style="color:red;" id="err_id">*<?php echo $err_id;?></span>

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
				<br><br>
				
				<label>Password</label>
				<input class="ibox align" id="pass" type="password" value="" name="pass">
				<span style="color:red;" id="err_pass">*<?php echo $err_pass;?></span>
				
				</div><br><br>
				<a class="back" href="../dashboard.php">Back</a>
				<input class="btn" type="submit" name="signup" value="Submit">
			</form>
		</div>
		<script src="../js/studentFacultyV.js"></script>
	</body>
</html>