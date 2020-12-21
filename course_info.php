<?php
 require_once 'phpvalidation/validation_course_info.php';
 $course = getCourseInfo();
	$uinfo="Course Information";
?>
<!DOCTYPE HTML>
<html lang="en">
		<head>
			<title>
                Course Information
			</title>
			<link rel="stylesheet" href="css/stfcinfo.css">
		</head>
	<body>
	<h1><?php echo $uinfo ?></h1>
		<table class="center content-table">
			<thead>
				<tr>
					<th>Course Name</th>
					<th>Section</th>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Action</th>
				</tr>
			</thead>
			
			
			<tbody>
			<?php
				foreach($course as $u){
            ?>
			<tr>
				
				<td><?php echo $u['course_name']; ?></td>
				<td><?php echo $u['section']; ?></td>
                <td><?php echo $u['day']; ?></td>
                <td><?php echo $u['time']; ?></td>
				
				<td><button class="edit">Edit</button>
				<a href="#" onclick="return confirm('Do you want to delete?')"><button>Delete</button></a>
				</td>
				
			</tr>
			<?php } ?>
			<tbody>
			
		</table>
	</body>
</html>