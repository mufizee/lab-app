<?php
session_start();
$id = $_SESSION['id'];
if(!isset($_SESSION['id'])){
		Header('Location: login.php');
	}
	
	include_once "connect_to_mysql.php";
	
	$mrno = $_POST['mrno'];
	$patient = mysql_query("Select * from patients where mrno = '$mrno'");
	$id_check = mysql_num_rows($patient);
	if($id_check > 0){
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
	}
	else{
		echo "<span class='notfound'>Patient Profile Not Found</span>";
		exit();}
		
		   
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
<h2>Patient's Details</h2>
<form action="submitedit.php" method="post">
<table cellspacing="5">
<tr>
	<td width="121">Firstname:</td>
	<td width="217"><strong><?php echo "$firstname"; ?></strong></td>
</tr>
<tr>
	<td>Lastname:</td>
	<td><strong><?php echo "$lastname"; ?></strong></td>
</tr>
<tr>
  <td>Date of Birth:</td>
  <td><strong><?php echo "$DOB"; ?></strong></td>
</tr>
<tr>
	<td>Age:</td>
	<td><strong><?php echo"$age"; ?></strong></td>
</tr>
<tr>
	<td>Address:</td>
	<td><strong><?php echo"$address"; ?></strong></td>
</tr>
<tr>
	<td>Occupation:</td>
	<td><strong><?php echo"$occupation"; ?></strong></td>
</tr>
<tr>
	<td>Cellphone No:</td>
	<td><strong><?php echo"$cell"; ?></strong></td>
</tr>
<tr>
	<td>Other no:</td>
	<td><strong><?php echo "$other"; ?></strong></td>
</tr>
<tr>
	<td>M.R.No:</td>
	<td><strong><?php echo "$mrno"; ?></strong></td>
</tr>
<tr> 
	<td>HMO Name:</td>
	<td><strong><?php echo "$hmoname"; ?></strong></td>
</tr>
<tr>
	<td>HMO NO:</td>
	<td><strong><?php echo "$hmono"; ?></strong></td>
</tr>
<tr>
	<td>Referring Hospital:</td>
	<td><strong><?php echo "$rh"; ?></strong></td>
</tr>
<tr>
	<td>Company:</td>
	<td><strong><?php echo "$company"; ?></strong></td>
</tr>
<tr>
	<td>Authorization Code:</td>
	<td><strong><?php echo "$ac"; ?></strong></td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td><a href="index.php"><strong><br />
	  Go Back</strong></a></td>
</tr>
</table>
</form><br /><br />
</div>
</body>
</html>