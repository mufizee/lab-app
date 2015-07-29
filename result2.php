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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
.button{border: none; background-color: transparent; }
</style>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<title>First Eye Clinic Portal</title>
<link href="result.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="edit2">
<?php
session_start();
$id = $_SESSION['id'];
include_once "connect_to_mysql.php";

$hmo      = $_POST['hmo'];
$patients = mysql_query("Select * from records WHERE HMO = '$hmo'");
echo "<table><tr>";
echo "<td width='50'><b>No.</b></td>";
echo "<td width='150'><b>Name</b> </td>";
echo "<td width='150'><b>M.R.No</b> </td>";
echo "<td width='150'><b>Date of Birth</b> </td>";
echo "<td width='150'><b>Age</b></td>";
echo "<td width='150'><b>HMO</b></td>";
echo "<td width='150'><b>HMO No.</b> </td>";
echo "</tr>";
while ($row = mysql_fetch_array($patients)) {
	$name = $row['firstname'];
	echo "<form method='post' action='csheet.php'>";
	echo "<tr>";
	echo "<td>" . $row['id'] . "</td>";
	echo "<td><input class='button' type='submit' value='" . $row['firstname'] . " " . $row['lastname'] . "'</td>";
	echo "<td>" . $row['mrno'] . "</td>";
	echo "<td>" . $row['DOB'] . "</td>";
	echo "<td>" . $row['age'] . "</td>";
	echo "<td>" . $row['hmo'] . "</td>";
	echo "<td>" . $row['hmono'] . "</td>";
	echo "</tr>";
	echo "</form>";
}
echo "</table>";
?>

</div>
</body>
</html>