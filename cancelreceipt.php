<?php
session_start();
$id = $_SESSION['id'];
if (!isset($_SESSION['id'])) {
	Header('Location: login.php');
}

include_once "connect_to_mysql.php";

$mrno = "";
$rno  = "";
//check to see if form has been submitted.
if (isset($_POST['mrno'])) {
// assign values to the initialized variables
	$mrno = $_POST['mrno'];
	$rno  = $_POST['rno'];

//if ($auth == "doc"){
	$sql = mysql_query("DELETE FROM bills where mrno = '$mrno' and rno = '$rno' ") or die(mysql_error());
	echo "<div>Receipt Delete successful <p><a href = index.php>Click here</a> to return to portal</div>";

	// Update last_log_date field for this member now
	$sql2 = mysql_query("INSERT INTO logs (personel, action, date, time) VALUES('$id', 'Deleted Receipt for $rno From Database', '$date' , CURRENT_TIMESTAMP)") or die(mysql_error());
	exit();

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="cancelreceipt.php" method="post">
<table cellspacing="5">
  <tr>
    <td>Enter MRno:</td>
    <td><input name="mrno" type="text" class="textbox2" width="200" maxlength="50" />
      *</td>
  </tr>
    <tr>
    <td>Enter Receipt No:</td>
    <td><input name="rno" type="text" class="textbox2" width="200" maxlength="50" />
      *</td>
  </tr>
  <tr>
  <td width="121">&nbsp;</td>
    <td width="217"><input class="button"  type="submit" value="Delete Receipt" /></td>
  </tr>
</table>
</form>
</body>
</html>
</body>
</html>