<?php
session_start();
$id = $_SESSION['id'];
if (!isset($_SESSION['id'])) {
	Header('Location: login.php');
}

$errorMsg = "";
$date     = date("Y/m/d");

if ($_POST['firstname']) {
	include_once "connect_to_mysql.php";

	$fname      = $_POST['firstname'];
	$lastname   = $_POST['lastname'];
	$gender     = $_POST['gender'];
	$DOB        = $_POST['DOB'];
	$age        = $_POST['age'];
	$address    = $_POST['address'];
	$occupation = $_POST['occupation'];
	$cellno     = $_POST['cellno'];
	$otherno    = $_POST['otherno'];
	$mrno       = $_POST['mrno'];
	$hmoname    = $_POST['hmoname'];
	$hmono      = $_POST['hmono'];
	$rh         = $_POST['rh'];
	$company    = $_POST['company'];
	$ac         = $_POST['ac'];

	if ((!$fname) || (!$lastname) || (!$cellno)) {
		$errorMsg = "You did not fill the following required information!<br />";
		if (!$fname) {
			$errorMsg .= "--firstname";
		} else if (!$lastname) {
			$errorMsg .= "--lastname";
		} else if (!$cellno) {
			$errorMsg .= "--Phone no.";
		}

	} else {
		$sql = mysql_query("UPDATE patients SET firstname = '$fname', lastname = '$lastname', DOB = '$DOB', age = '$age', address = '$address', occupation = '$occupation', cellno = '$cellno', otherno = '$otherno', hmo_name = '$hmoname', hmo_no = '$hmono', ref_hospital = '$rh', company = '$company', auth_code = '$ac' WHERE mrno = '$mrno'") or die(mysql_error());

		// Update last_log_date field for this member now
		$sql2 = mysql_query("INSERT INTO logs (personel, action, date, time) VALUES('$id', 'Updated Records for $mrno', '$date' , CURRENT_TIMESTAMP)") or die(mysql_error());

		//print success message if login successful then exit the script
		$message = "$fname's Update has been successful <br /><a href='index.php'>Click here<br>
</a> to return to the portal";
		//header("Location: index.php");
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Update <?php echo "$status for $mrno"?></title>
<title>Edit Patient Detail for MRNo <?php echo "$mrno";?></title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="edit">
<img src="Images/FastIcon_Users.png" width="50" height="50" />
<h2>Edit Patient's Detail Status <a href="searchpatient.php">searchpatient</a></h2>
<br /><br />
<?php echo "$errorMsg"?> <?php echo "$message"?>
</div>
</body>
</html>