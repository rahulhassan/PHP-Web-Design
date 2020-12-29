
<?php

	$username="";
	$password="";
	$err_username="";
	$err_password="";
	$invalid_info="";
	
	$hasError=false;
	
	if(isset($_POST["login"])){
		if(empty($_POST["username"])){
			$err_username="*Username required";
			$hasError = true;
		}
		elseif(strlen($_POST["username"]) < 5){
			$err_username="*Username must be 5 characters long";
			$hasError = true;
		}
		else{
			$username=$_POST["username"];
		}
		if(empty($_POST["password"])){
			$err_password="*Password required";
			$hasError = true;
		}
		else{
			$password=$_POST["password"];
		}
		
		if(!$hasError){
			$xml=simplexml_load_file("data/admin.xml");
			$users = $xml->user;
			$flag=false;
			foreach($users as $user){
				if($user->uname == $username && $user->pass== $password){
					$flag = true;
					setcookie("username",$username,time() + 10000);
				}
			}
			if($flag){
				header("Location: dashboard.php");
			}else{
				$invalid_info="Username or Password is Incorrect";
			}
		}
	}
?>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="css/adminLogin.css">
	</head>
	<body>
		<form class="box" action="" method="post">
			<a href="index.php"><img src="img/logo.png" width="60" title="Eastern Prime University" alt="Eastern Prime University"></a>
			<h1>Login</h1>
			<p style="color:#ee5253;"><?php echo $invalid_info;?></p>
			<input type="text" name="username" value="<?php echo $username;?>" placeholder="Username">
			<p style="color:#ee5253;"><?php echo $err_username;?></p>
			<input type="password" name="password"  value="<?php echo $password;?>" placeholder="Password">
			<p style="color:#ee5253;"><?php echo $err_password;?></p>
			<input type="submit" name="login" value="Login">
		</form>
	</body>
</html>