<?php
	require_once 'phpvalidation/validation_faculty_info.php';
	$faculty = getFacultyInfo();
   

			// if(isset($_GET['action'])) {
			// 	$users = simplexml_load_file('data/faculty_data.xml');
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
			// 	file_put_contents('data/faculty_data.xml', $users->asXML());
			// 	}
			// 	$users = simplexml_load_file('data/faculty_data.xml');
			// 	$fnum= 'Number of Faculty: '.count($users);
			$finfo= 'Faculty Information';
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
	<div class="cell">
	<h1><?php echo $finfo ?></h1>
	<h2><?php// echo $fnum ?></h2>
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
			<?php foreach($faculty as $f) { ?>
			<tr>
			<td><?php echo $f['id']; ?></td>
				<td><?php echo $f['first_name']; ?></td>
				<td><?php echo $f['dob']; ?></td>
				<td><?php echo $f['gender']; ?></td>
				<td><?php echo $f['phone']; ?></td>
				<td><?php echo $f['email']; ?></td>
				
				<td><button class="edit">Edit</button>
				<a href="#" onclick="return confirm('Do you want to delete?')"><button>Delete</button></a>
				</td>
			</tr>
			<?php } ?>
			<tbody>
			
			
		</table>
	</div>
	</body>
</html>