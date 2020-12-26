<?php 
	if(!isset($_COOKIE["username"])){
		header("Location: index.php");
	}
	
?>
<html>
	<head>
		<title>Dashboard</title>
		<link rel="stylesheet" href="css/dashboard.css">
	</head>
	<body>
		
		<span style="font-size:30px; color:#ffff">Welcome, 
			<?php 
				echo $_COOKIE["username"];
			?>
		</span> 
		<a class="logout" href='admin_login.php'>Log Out</a>
		<br>
		<div class="navigation">
			<ul>
			
				<li class="std"><a href="#">STUDENT</a>
					<ul> 
						<li><a href="insertData/addstudent.php">Add Student</a></li>
						<li><a href="info/student_info.php">Update</a></li>
						<li><a href="info/student_info.php">Delete</a></li>
						<li><a href="info/student_info.php">View</a></li>		
					</ul>
				</li>
				<li><a href="#">FACULTY</a>
					<ul> 
						<li><a href="insertData/addfaculty.php">Add Faculty</a></li>
						<li><a href="info/faculty_info.php">Update</a></li>
						<li><a href="info/faculty_info.php">Delete</a></li>
						<li><a href="info/faculty_info.php">View</a></li>		
					</ul>
				</li>
				<li><a href="#">UNIVERSITY</a>
					<ul> 
						<li><a href="adduniversity.php">Add University</a></li>
						<li><a href="university_info.php">Update</a></li>
						<li><a href="university_info.php">Delete</a></li>
						<li><a href="university_info.php">View</a></li>		
					</ul>
				</li>
				<li><a href="#">COURSE</a>
					<ul> 
						<li><a href="addcourse.php">Add Course</a></li>
						<li><a href="course_info.php">Update</a></li>
						<li><a href="course_info.php">Delete</a></li>
						<li><a href="course_info.php">View</a></li>		
					</ul>
				</li>
				<li class="gr"><a href="#">GENERATE REPORT</a>
					<ul> 
						<li><a href="generateReport/student_enrollment.php">Student Enrollment</a></li>
						<li><a href="generateReport/course_enrollment.php">Course Enrollment</a></li>	
					</ul>
				</li>
			</ul>
		</div>
		<div class="sitem">
		<input class="sbox" type="text" name="searchbox" placeholder="type here..."><br>
		<input class="sbtn" type="submit" name="search" value="Search">
		</div>
				
	</body>
</html>