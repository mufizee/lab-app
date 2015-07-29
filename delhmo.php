<?php
session_start();
$id = $_SESSION['id'];
if (!isset($_SESSION['id'])) {
	Header('Location: login.php');
}

include_once "connect_to_mysql.php";

$hmo  = "";
$auth = "";
//check to see if form has been submitted.
if (isset($_POST['hmoname'])) {
// assign values to the initialized variables
	$hmo  = $_POST['hmoname'];
	$auth = $_POST['auth'];

//if ($auth == "doc"){
	$sql = mysql_query("DELETE FROM hmo where hmo = '$hmo'") or die(mysql_error());
	echo "<div>HMO Delete successful <p><a href = index.php>Click here</a> to return to portal</div>";

	// Update last_log_date field for this member now
	$sql2 = mysql_query("INSERT INTO logs (personel, action, date, time) VALUES('$id', 'Deleted HMO $hmo From Database', '$date' , CURRENT_TIMESTAMP)") or die(mysql_error());
	exit();
/*}
else if ($auth = ""){
echo "Please enter the Authorization code or <a href='index.php'>Click here</a> to go back";
exit();
}*/
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete HMO</title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!--hmo drop page-->
<form action="delhmo.php" method="post" enctype="multipart/form-data">
<h4>Please select the HMO you wish to drop</h4><br />
<table>
<tr><td><?php
include_once "connect_to_mysql.php";

$hmoselect = @mysql_query("select hmo from eyeclinic.hmo");

echo "<select name=\"hmoname\">";
while ($row = mysql_fetch_assoc($hmoselect)) {
	$hmonames = $row['hmo'];
	echo "<option value=$hmonames>$hmonames</option>";
}
echo "</select>";
?></td>
</tr>
<!--<tr>
  <td>Enter Authorization Code <input type="password" name="auth" class="textbox3" /></td></tr>
--><tr><td><input type="submit" value="Delete" /></td></tr>
</table>
</form>
</body>
</html>