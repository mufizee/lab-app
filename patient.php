<?php
session_start();
$id = $_SESSION['id'];
if(!isset($_SESSION['id'])){
		Header('Location: login.php');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.button{border: none; background-color: transparent; }
</style>
</head>

<body>
<p>
  <?php 
	include_once "connect_to_mysql.php";
		
		echo "Registered Patients";
		echo "<br /><br />";
		$patients = mysql_query("Select * from patients");
				echo "<table><tr>";
				echo "<td width='50'><b>No.</b></td>";
				echo "<td width='150'><b>Name</b> </td>";
				echo "<td width='150'><b>M.R.No</b> </td>";
				echo "<td width='150'><b>Date of Birth</b> </td>";
				echo "<td width='150'><b>Age</b></td>";
				echo "<td width='150'><b>Address</b></td>";
				echo "<td width='150'><b>Occupation</b> </td>";
				echo "</tr>";
			while ($row = mysql_fetch_array($patients))
			{
				$name = $row['firstname'];
				echo "<form method='post' action='csheet.php'>";
				echo "<tr>";
				echo "<td>". $row['id']."</td>";
				echo "<td><input class='button' type='submit' value='". $row['firstname']. " " . $row['lastname']."'</td>";
				echo "<td>". $row['mrno']."</td>";
				echo "<td>". $row['DOB']."</td>";
				echo "<td>". $row['age']."</td>";
				echo "<td>". $row['address']."</td>";
				echo "<td>". $row['occupation']."</td>";
				echo"</tr>";
				echo "</form>";
			}
			echo "</table>";
		
	?>
</p>

</body>
</html>