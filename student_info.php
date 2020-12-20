<?php
 require_once 'phpvalidation/validation_student_info.php';
 $students = getStudentInfo();

			// if(isset($_GET['action'])) {
			// 	$users = simplexml_load_file('data/student_data.xml');
			// 	$id = $_GET['id'];
			// 	$index = 0;
			// 	$i = 0;
			// 	foreach($users->user as $user){
			// 		if($user['id']==$id){
			// 			$index = $i;
			// 			break;
			// 		}
			// 		$i++;
			// 	}
			// 	unset($users->user[$index]);
			// 	file_put_contents('data/student_data.xml', $users->asXML());
			// 	}
			// 	$users = simplexml_load_file('data/student_data.xml');
			// 	$snum= 'Number of Students: '.count($users);
			$sinfo="Students Information";
?>
<!DOCTYPE HTML>
<html lang="en">
		<head>
			<title>
				Student Information
			</title>
			<link rel="stylesheet" href="css/stfcinfo.css">
		</head>
	<body>
	<h1><?php echo $sinfo ?></h1>
	<h2><?php// echo $snum ?></h2>
		<table class="center content-table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Date Of Birth </th>
					<th>Gender</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
			</thead>
			
			
			<tbody>
			<?php
				foreach($students as $s){
            ?>
			<tr>
				
				<td><?php echo $s['id']; ?></td>
				<td><?php echo $s['first_name']; ?></td>
				<td><?php echo $s['dob']; ?></td>
				<td><?php echo $s['gender']; ?></td>
				<td><?php echo $s['phone']; ?></td>
				<td><?php echo $s['email']; ?></td>
				
				<td><button class="edit">Edit</button>
				<a href="#" onclick="return confirm('Do you want to delete?')"><button>Delete</button></a>
				</td>
				
			</tr>
			<?php } ?>
			<tbody>
			
		</table>
	</body>
</html>