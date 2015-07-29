<?php
session_start();
$id = $_SESSION['id'];
if (isset($_SESSION['id'])) {
	Header('Location: index.php');
}
if ($_POST['username']) {
	include_once "connect_to_mysql.php";
	$username = stripslashes($_POST['username']);
	$password = preg_replace('#[a-z]+://[^<>\s]+[[a-z0-9]/]#i', "", $_POST['password']);
	#$password = md5($password);
	$sql         = mysqli_query("SELECT * FROM staff WHERE username ='$username' AND password='$password'");
	$login_ckeck = mysqli_num_rows($sql);
	if ($login_ckeck > 0) {
		while ($row = mysqli_fetch_row($sql)) {
			$id = $row["id"];
			session_id('id');
			$username             = $row["username"];
			$_SESSION['username'] = $username;
			#update db_logs
			exit();
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lab Portal - Login</title>
	<link rel="stylesheet" type="text/css" href="css/initial.css" />
</head>
<body>
<div id="wrapper">
	<div class="title">Login</div>
	<div id="content">
		<h1>Sign in to Your Lab</h1>
		<form action="login.php" method="POST" id="login"></form>
			<table>
				<tr>
					<td><label for="username">Username</label></td>
					<td><input type="text" name="username" form="login" id="username" class="textbox2" /></td>
				</tr>
				<tr>
					<td><label for="password">Password</label></td>
					<td><input type="password" name="password" form="login" id="password" class="textbox2" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><a class="smalltext" href="staffreg.php">Register here</a> </td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input class="button" type="submit" form="login" value="Submit"></td>
				</tr>
			</table>
	</div>
</div>
</body>
</html>