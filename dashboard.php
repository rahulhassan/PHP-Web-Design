<?php 
	if(!isset($_COOKIE["username"])){
		header("Location: index.php");
	}
	
?>
<html>
	<head>
		<title>Dashboard</title>
		<style>
			.logout{
				color: #ffff;
				background-color: #616161;
				border: none;
				padding: 8px 16px;
				text-decoration: none;
				text-align: center;
				cursor: pointer;
				position: absolute;
				top: 10px;
				right: 10px;
			}
			.logout:hover{
				background-color:#000000;
			}
			body{
				background-image: url(img/graduate.jpg);
				background-position:center-center;
				background-size:cover;
				background-repeat: no-repeat;
			}
			.navigation {
				background: #3A0B0B;
				min-height: 43px;
				border-bottom: 3px solid #FF6E39;
			}
			.navigation ul{}
			.navigation ul li {
				list-style: none;
				background: #3A0B0B;
				float: left;
				border-right: 1px solid #5f0f0f;
				border-left: 1px solid #5f0f0f;
				position: relative;
				z-index:1;
			}
			.navigation ul li a {
				text-decoration: none;
				color: white;
				display: block;
				padding: 12px 32px 12px 32px;
				font-weight: bold;
				-webkit-transition:.5s;
				-moz-transition:.5s;
				-o-transition:.5s;
			}
			.navigation ul li a:hover, #active {
				color: #000;
				background: #FF6E39;
				transition:.5s;
			}
			.navigation ul li ul {
				position:absolute;
				display:none;
			}	
			.navigation ul li:hover ul {
				left:-40px;
				display: block;
			}
			.navigation ul li ul li:last-child {
				border-bottom:0px solid #631010;
			}
			.navigation ul li ul li {
				background: #8e1d1d;
				width: 145px;
				border-bottom: 2px solid #631010;
				float: none;
				border-right: 0px;
				border-left: 0px;
			}
			.sitem{
				margin-top:15px;
				
			}
			.sbox{
				position:absolute;
				right:0;
				left:0;
				margin:auto;
				line-height: 35px;
				border-radius:25px;
				border: none;
				font-size: 16px;
				width: 800px;
				padding-left: 20px;
				padding-right: 20px;
				z-index:0;
			}
			.sbtn{
				background-color:#3E9A2D;
				color:white;
				outline: none;
				border: none;
				cursor:pointer;
				position:absolute;
				right:0;
				left:0;
				margin:auto;
				line-height: 35px;
				border-radius:25px;
				font-size: 16px;
				width: 100px;
				margin-top:30px;
				
			}
		</style>
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
			
				<li><a href="#">STUDENT</a>
					<ul> 
						<li><a href="addstudent.php">Add Student</a></li>
						<li><a href="student_info.php">Update</a></li>
						<li><a href="student_info.php">Delete</a></li>
						<li><a href="student_info.php">View</a></li>		
					</ul>
				</li>
				<li><a href="#">FACULTY</a>
					<ul> 
						<li><a href="addfaculty.php">Add Faculty</a></li>
						<li><a href="faculty_info.php">Update</a></li>
						<li><a href="faculty_info.php">Delete</a></li>
						<li><a href="faculty_info.php">View</a></li>		
					</ul>
				</li>
				<li><a href="#">UNIVERSITY</a>
					<ul> 
						<li><a href="adduniversity.php">Add University</a></li>
						<li><a href="#">Update</a></li>
						<li><a href="#">Delete</a></li>
						<li><a href="#">View</a></li>		
					</ul>
				</li>
				<li><a href="#">COURSE</a>
					<ul> 
						<li><a href="addcourse.php">Add Course</a></li>
						<li><a href="#">Update</a></li>
						<li><a href="#">Delete</a></li>
						<li><a href="#">View</a></li>		
					</ul>
				</li>
				<li><a href="#">GENERATE REPORT</a>
					<ul> 
						<li><a href="student_enrollment.php">Student Enrollment</a></li>
						<li><a href="course_enrollment.php">Course Enrollment</a></li>	
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