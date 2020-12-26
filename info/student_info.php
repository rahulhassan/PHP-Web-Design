<?php
	require_once '../phpvalidation/validation_student_info.php';
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
			<link rel="stylesheet" href="../css/stfcinfo.css">
		</head>
	<body>
	<a href="../dashboard.php"><button class="home">HOME</button></a>
	<h1><?php echo $sinfo ?></h1>
	<input type="text" onkeyup="liveSearch(this)" placeholder="Write student name..." id="ssearchBox">
		<table class="center content-table" id="myTable">
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
					<td><?php echo $s['first_name']." ".$s['last_name']; ?></td>
					<td><?php echo $s['dob']; ?></td>
					<td><?php echo $s['gender']; ?></td>
					<td><?php echo $s['phone']; ?></td>
					<td><?php echo $s['email']; ?></td>
					
					<td>
						<a href="../update/studentUpdate.php?id=<?php echo $s['id'];?>"><button class="edit">Edit</button></a>
						<a href="../delete/studentDelete.php?id=<?php echo $s['id'];?>" onclick="return confirm('Do you want to delete?')"><button>Delete</button></a>
					</td>
					
				</tr>
				<?php } ?>
			<tbody>
			
		</table>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="../js/search_operation.js"></script>
	</body>
</html>