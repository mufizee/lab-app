<?php
session_start();
$id = $_SESSION['id'];
if(!isset($_SESSION['id'])){
		Header('Location: login.php');
	}
	

	include_once "connect_to_mysql.php";

$hmo = "";
//check to see if form has been submitted. 
if (isset($_POST['hmo'])){
// assign values to the initialized variables
$hmo = $_POST['hmo'];

$sql = mysql_query("INSERT INTO hmo (hmo) VALUES('$hmo')") or die (mysql_error());
		echo "update successful <p><a href = index.php>Click here</a> to return to portal";
		exit();
}
?>
<html>
<body>
<h4>&nbsp;New HMO Registration</h4>
<form id="frmhmo" name="formhmo" method="post" action="newhmo.php" enctype="multipart/form-data">
  <table cellspacing="5">
      
    <tr>
      <td>Enter HMO Name</td>
      <td><input type="text" name="hmo" class="textbox2" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input class="button" type="submit" value="Register HMO" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>