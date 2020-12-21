<?php
 require_once 'phpvalidation/validation_university_info.php';
 $university = getUniversityInfo();
	$uinfo="University Information";
?>
<!DOCTYPE HTML>
<html lang="en">
		<head>
			<title>
				University Information
			</title>
			<link rel="stylesheet" href="css/stfcinfo.css">
		</head>
	<body>
	<h1><?php echo $uinfo ?></h1>
		<table class="center content-table">
			<thead>
				<tr>
					<th>University Name</th>
					<th>Since</th>
                    <th>Address</th>
                    <th>Action</th>
				</tr>
			</thead>
			
			
			<tbody>
			<?php
				foreach($university as $u){
            ?>
			<tr>
				
				<td><?php echo $u['university_name']; ?></td>
				<td><?php echo $u['since']; ?></td>
				<td><?php echo $u['location']; ?></td>
				
				<td><button class="edit">Edit</button>
				<a href="#" onclick="return confirm('Do you want to delete?')"><button>Delete</button></a>
				</td>
				
			</tr>
			<?php } ?>
			<tbody>
			
		</table>
	</body>
</html>