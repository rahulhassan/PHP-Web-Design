<?php include_once "phpValidation/validation_course_info.php" ;?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Add Course</title>
		<style>
		body{
			background-image:linear-gradient(45deg,#6E4079,#F92C77);
			font-family:"Poppins", "Arial", "Helvetica Neue", sans-serif;
		}
		.main{
			background-color:#FFFFFF;
			padding:30px 40px 30px 30px;;
			width: 550px;
			height: 470px;
			position: absolute;
			top:0px;
			left:0px;
			right:0px;
			bottom:0px;
			margin: auto;
			border-radius:15px;
			font-size: 18px;
			color: #555;
			
		}
		.ibox{
			line-height: 40px;
			border-radius:5px;
			font-size: 16px;
			width: 300px;
		}
		.align{
			float:right;
		}
		.back{
			text-decoration: none;
			background: #4272d7;
			line-height: 40px;
			padding:10px 20px;
			transition:0.4s;
			cursor: pointer;
			font-size: 18px;
			color: #fff;
			border-radius: 5px;
		}
		.btn{
			background: #4272d7;
			line-height: 40px;
			padding: 0 50px;
			transition:0.4s;
			cursor: pointer;
			font-size: 18px;
			color: #fff;
			outline: none;
			border: none;
			border-radius: 5px;
			float: right;
			
		}
		.btn:hover{
			background-color:#3868CD;
		}
		label{
			line-height: 40px;
		}
		</style>
	</head>
	<body>
		<div class="main">
				
				<h2 style="text-align:center; color:#525252">Add Course</h2>
				
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