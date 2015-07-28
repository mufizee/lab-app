<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h4>Find using HMO</h4>
<form action="searchpatient.php" method="post">
<table>
<tr>
<td>Enter patient's MRno</td> <td><input type="text" name="mrno" class="textbox2" /></td><td><input class="button" type="submit" value="Find" /></td>
</tr>

</table>
</form><br />
<br />
<h4>Find using Patient names</h4>
<form action="searchpatientname.php" method="post">
<table><tr><td>Enter patient's Firstname: </td><td><input type="text" name="firstname" class="textbox2" /></td></tr>
<tr><td>Enter patient's Lastname: </td><td><input type="text" name="lastname" class="textbox2" /></td></tr>
<tr><td> </td><td><input class="button" type="submit" value="Find" /></td></tr>
</table>
</form>
</body>
</html>