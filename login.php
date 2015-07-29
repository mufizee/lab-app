<?php
session_start();
if (isset($_SESSION['id'])) {
	Header('Location: index.php');
}

if ($_POST['username']) {
	include_once "connect_to_mysql.php";
	$username = stripslashes($_POST['username']);
	$password = ereg_replace("[^A-Za-z0-9]", "", $_POST['password']);
	//$password = md5($password);

	$sql         = mysql_query("SELECT * FROM staff WHERE username ='$username' AND password='$password'");
	$login_check = mysql_num_rows($sql);
	if ($login_check > 0) {
		while ($row = mysql_fetch_array($sql)) {
			//Get member ID into a session variable
			$id = $row["id"];
			session_register('id');
			//Get member username into a session variable
			$username = $row["username"];
			session_register('username');
			$_SESSION['username'] = $username;
			// Update last_log_date field for this member now
			//mysql_query("INSERT INTO logs (personel, action, date, time) VALUES ('$username', 'Logged into the portal', date('Y/m/d'), CURRENT_TIMESTAMP");
			//print success message if login successful then exit the script
			//echo "Welcome $username";
			header('Location: index.php');
			exit();
		} // close the while loop
	} else {
		//print login failure message and link back to the login page
		echo '<br />No match in our database, please try again<br /><br />';
		//Header('Location: login.php');
		//exit();
	}
}

?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>First Eye Clinic Portal - Login</title>
<link href="css/initial.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js">
</script>
<!--<script type="text/javascript">
$(function () {
	function ajaxify(file){

		$('div id="content"></div>').html("Loading Content: "+file+"...").appendTo('body').fadeIn();
		$.get(file,function(data){
			$("#content").slideUp('slow',function(){

				$(this).html(data).slideDown('slow',function(){
					$('#loading').fadeOut('slow',function(){$(this).remove();});
				});
			});
		});
	}

	$("a").click(function(){
		$('a.current').removeClass('current');
		$(this).addClass('current');
		ajaxify($(this).attr('href'));
		return false;
	});
	//ajaxify('login.php');
});
</script>-->
</head>

<body>
<!--Start of div wrapper-->
<div id="wrapper">
	<div class="title">Login</div>
<div id="content">
	<h1>Sign in to First Eye</h1>
  <table cellspacing="10">
  <form action="login.php" method="post" enctype="multipart/form-data">
  	<tr>
    	<td>Username</td>
        <td><input type="text" name="username" width="200" class="textbox2" /></td>
    </tr>
    <tr>
    	<td>Password</td>
        <td><input type="password" name="password" width="200" class="textbox2" /></td>
    </tr>
    <tr>
    	<td><a class="smalltext" href="staffreg.php">Register here</a> </div></td>
    </tr>
    <tr>
    	<td>&nbsp;</td>
        <td><input class="button" type="submit" value="Submit"></td>
    </tr>
    </form>
  </table>
</div>
<!--end of div wrapper-->
</body>
</html>