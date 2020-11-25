<?php
if(isset($_GET['action'])) {
	$users = simplexml_load_file('data/student_data.xml');
	$id = $_GET['id'];
	$index = 0;
	$i = 0;
	foreach($users->user as $user){
		if($user['id']==$id){
			$index = $i;
			break;
		}
		$i++;
	}
	unset($users->user[$index]);
	file_put_contents('data/student_data.xml', $users->asXML());
	}
	$users = simplexml_load_file('data/student_data.xml');
	$snum= 'Number of Students: '.count($users);
	$sinfo='Student Information';
?>
<!DOCTYPE HTML>
<html lang="en">
		<head>
			<title>
				Student Information
			</title>
			<style>
				
				.content-table{
					border-collapse: collapse;
					margin:25px 0;
					font-size:25px;
					min-width:600px;
					border-radius:10px 10px 0 0;
					overflow: hidden;
					box-shadow:0 0 20px rgba(0,0,0,0.15);
				}
				.content-table thead tr{
					
					background-color:#009879;
					border-radius: 10px;
					color: white;
					text-align:left;
				}
				.content-table th,
				.content-table td{
					padding: 12px 15px;
				}
				.content-table tbody tr{
					border-bottom: 1px solid #dddddd;
				}
				.content-table tbody tr:nth-of-type(even){
					background-color:#f3f3f3;
				}
				.content-table tbody tr:last-of-type{
					border-bottom: 2px solid #009878;
				}
				table tr a button{
					background-color: red;
					cursor: pointer;
					padding: 15px;
					border-radius: 6px;
					border: none;
					color: white;
					font-weight:bold
					
				}
				.edit{
					background-color: green;
					cursor: pointer;
					padding: 15px;
					border: none;
					color: white;
					font-weight:bold;
					border-radius: 6px;
					
				}
				
			</style>
			
		</head>
	<body>
	<div class="cell">
	<h1><?php echo $sinfo ?></h1>
	<h2><?php echo $snum ?></h2>
		<table class="content-table>
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
			<?php foreach($users->user as $user) { ?>
			<tr>
				
				<td><?php echo $user['id']; ?></td>
				<td><?php echo $user->firstname; ?></td>
				<td><?php echo $user->dateOfbirth; ?></td>
				<td><?php echo $user->gender; ?></td>
				<td><?php echo $user->phone; ?></td>
				<td><?php echo $user->email; ?></td>
				<td><button class="edit">Edit</button>
				<a href="student_info.php?action=delete&id=<?php echo $user['id']; ?>" onclick="return confirm('Do you want to delete?')"><button>Delete</button></a>
				</td>
				
			</tr>
			<?php } ?>
			<tbody>
			
		</table>
	</div>
	</body>
</html>