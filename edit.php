<?php
session_start();
$id = $_SESSION['id'];
if(!isset($_SESSION['id'])){
		Header('Location: login.php');
	}
	
	include_once "connect_to_mysql.php";
	
	$mrno = $_POST['mrno'];
	$patient = mysql_query("Select * from patients where mrno = '$mrno'");
	while ($row = mysql_fetch_array($patient))
	{
		$firstname = $row['firstname'];
		$id = $row['id'];
		$lastname = $row['lastname'];
		$mrno = $row['mrno'];
		$DOB = $row['DOB'];
		$age = $row['age'];
		$address = $row['address'];
		$occupation = $row['occupation'];
		$cell = $row['cellno'];
		$other = $row['otherno'];
		$mrno = $row['mrno'];
		$hmoname = $row['hmo_name'];
		$hmono = $row['hmo_no'];
		$rh = $row['ref_hospital'];
		$company = $row['company'];
		$ac = $row['auth_code'];
	}
		
		   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Edit Patient Detail for MRNo <?php echo "$mrno";?></title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="edit">
<img src="Images/FastIcon_Users.png" width="50" height="50" />
<h2>Edit Patient's Details</h2>
<form action="submitedit.php" method="post">
<table cellspacing="5">
<tr>
	<td width="121">Firstname:</td>
	<td width="217"><input name="firstname" type="text" class="textbox2" width="200" maxlength="50" value="<?php echo "$firstname"; ?>" /></td>
</tr>
<tr>
	<td>Lastname:</td>
	<td><input name="lastname" type="text" class="textbox2" width="200" maxlength="50" value="<?php echo "$lastname"; ?>" /></td>
</tr>
<tr>
  <td>Date of Birth:</td>
  <td><input name="DOB" type="text" class="textbox2" width="200" value="<?php echo "$DOB"; ?>" maxlength="10" /></td>
</tr>
<tr>
	<td>Age:</td>
	<td><input name="age" type="text" class="textbox2" width="200" value="<?php echo"$age"; ?>" /></td>
</tr>
<tr>
	<td>Address:</td>
	<td><input name="address" type="text" class="textbox2" width="200" value="<?php echo"$address"; ?>" /></td>
</tr>
<tr>
	<td>Occupation:</td>
	<td><input name="occupation" type="text" class="textbox2" width="200" maxlength="50" value="<?php echo"$occupation"; ?>" /></td>
</tr>
<tr>
	<td>Cellphone No:</td>
	<td><input name="cellno" type="text" class="textbox2" width="200" maxlength="14" value="<?php echo"$cell"; ?>" /></td>
</tr>
<tr>
	<td>Other no:</td>
	<td><input name="otherno" type="text" class="textbox2" width="200" maxlength="14" value="<?php echo "$other"; ?>" /></td>
</tr>
<tr>
	<td>M.R.No:</td>
	<td><input name="mrno" type="text" class="textbox2" width="200" maxlength="10" value="<?php echo "$mrno"; ?>" /></td>
</tr>
<tr> 
	<td>HMO Name:</td>
	<td><input name="hmoname" type="text" class="textbox2" width="200" maxlength="50" value="<?php echo "$hmoname"; ?>" /></td>
</tr>
<tr>
	<td>HMO NO:</td>
	<td><input name="hmono" type="text" class="textbox2" width="200" maxlength="10" value="<?php echo "$hmono"; ?>" /></td>
</tr>
<tr>
	<td>Referring Hospital:</td>
	<td><input name="rh" type="text" class="textbox2" width="200" maxlength="50" value="<?php echo "$rh"; ?>" /></td>
</tr>
<tr>
	<td>Company:</td>
	<td><input name="company" type="text" class="textbox2" width="200" maxlength="50" value="<?php echo "$company"; ?>" /></td>
</tr>
<tr>
	<td>Authorization Code:</td>
	<td><input name="ac" type="text" class="textbox2" width="200" maxlength="10" value="<?php echo "$ac"; ?>" /></td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td><input type="reset" value="Reset" /> &nbsp;
	<input type="submit" value="Save" /></td>
</tr>
</table>
</form><br /><br />
<font color="#FF0000">NB: Do not edit any infomation that is correct and NEVER edit the MRNo.</font></div>
</body>
</html>