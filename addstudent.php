<?php include_once "phpValidation/validation_student_info.php" ;?>
<html>
	<head>
		<title>Add Student</title>
		<link rel="stylesheet" href="css/addstudent.css">
	</head>
	<body>
		<div class="main">
				
				<h2 style="text-align:center; color:#525252">Add Student</h2>
				<p  style="color:green; text-align:center;"><?php echo $msg;?></p>
				You must have to fill (<span style="color:red">*</span>) fields.<br><br>
				<form action="" method="post">
					<div>
					<label>Name</label>
					<input class="nwd lname align" type="text" name="lname" placeholder="Last Name">
					<input class="nwd fname align" type="text" value="" name="fname" placeholder="First Name"></td>
					
					
					<span style="color:red;">*<?php echo $err_fname;?></span>
					<br><br>
					
					<label>ID</label>
					<input class="ibox align" type="text" name="id">
					<span style="color:red;">*<?php echo $err_id;?></span>
					<br><br>
					
					<label>Date Of Birth</label>
					<input class="ibox align" type="date" value="" name="dob">
					<span style="color:red;">*<?php echo $err_dob;?></span>
					<br><br>
					
					<label>Gender</label>
					<span class="ibox align"><input type="radio" value="Male" name="gender"> Male
					<input type="radio" value="Female" name="gender"> Female
					<input type="radio" value="Other" name="gender"> Other
					</span>
					<span style="color:red;">*<?php echo $err_gender;?></span>
					<br><br>
					
					<label>Phone</label>
					<input class="ibox align" type="phone" value="" name="phone">
					<span style="color:red;">*<?php echo $err_phone;?></span>
					<br><br>
					
					<label>Email</label>
					<input class="ibox align" type="email" value="" name="email">
					<br><br>
					
					<label>Password</label>
					<input class="ibox align" type="password" value="" name="pass">
					<span style="color:red;">*<?php echo $err_pass;?></span>
					
					</div><br><br>
					<a class="back" href="dashboard.php">Back</a>
					<input class="btn" type="submit" name="signup" value="Submit">
						
				</form>
			
		</div>
	</body>
</html>