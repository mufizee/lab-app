<?php
session_start();
$id = $_SESSION['id'];
if (!isset($_SESSION['id'])) {
	Header('Location: login.php');
}
?>
<?php
//Connect to the database through include
include_once "connect_to_mysql.php";

$name   = "";
$type   = "";
$no     = "";
$itemno = "";

//check to see if form has been submitted.
if (isset($_POST['item_name'])) {
// assign values to the initialized variables
	$name   = ereg_replace("[^A-Za-z0-9]", "", $_POST['item_name']);
	$type   = $_POST['item_type'];
	$no     = $_POST['item_no'];
	$itemno = $_POST['amount'];

	$sql = mysql_query("INSERT INTO stock (item_name, item_type, quantity, item_no, personel, status)
		VALUES('$name','$type','','$itemno','','In Stock')") or die(mysql_error());
	echo "update successful <p> Update summary:<br />1. Item name: $name<br />Type: $type<br />No: $no<br />Item Number: $amount <p> <a href = index.php>Click here</a> to return to portal";
	exit();
}
?>
<html>
<head><title>Stock Keeping</title></head>
<body>
<p>
<form action="stockkeep.php" method="post"  enctype="multipart/form-data">
  <table cellspacing="5">
<tr>
<td>Item Type</td>
<td> Name</td>
<td> Item No.</td>
</tr>
<tr>
<td>
<select name="item_type" class="textbox3">
      <option value="drug" selected>Drugs</option>
      <option value="frame">Frames</option>
      <option value="Lens">Lenses</option>
</select>
      </td>
      <td><input name="item_name" type="text" class="textbox2"></td>

      <td><input name="itemno" type="text" class="textbox2"></td>
      </tr>
      <tr>
          <td bgcolor="#EAEAEA">&nbsp;</td>
          <td>&nbsp;<input name="Submit" type="submit" class="button" value="submit"/></td>
          <td>&nbsp; </td>
        </tr>
      </table>
</form>
</body>
</html>