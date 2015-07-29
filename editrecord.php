<?php
session_start();
$id = $_SESSION['id'];
if (!isset($_SESSION['id'])) {
	Header('Location: login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="recordedit.php">
<table>
<tr><td>Please enter MRNo Number:&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="mrno" class="textbox2" /></td></tr>
<tr><td>Please enter the record Number:</td>
<td><input type="text" name="rno" class="textbox2" /></td></tr>
<tr><td>&nbsp;</td><td><input class="button" type="submit" value="submit" /></td></tr>

</table></form>
</body>
</html>