<?php
session_start();
$id = $_SESSION['id'];
if (!isset($_SESSION['id'])) {
	Header('Location: login.php');
}
?>

<html>
<head>
<title>Record Update Status</title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="edit">
<img src="Images/FastIcon_Users.png" width="50" height="50" />
<h3>Edit Record Status</h3>
<br /><br />
<?php
// Include DB connection
if ($_POST['mrno']) {
	include_once "connect_to_mysql.php";

	/*$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$hmoname = $_POST["hmoname"];
	$hmono = $_POST["hmono"];*/
	$mrno = $_POST['mrno'];
	$time = 'CURRENT_TIMESTAMP';
	$date = date("Y/m/d");
	$rno  = $_POST['rno'];

	$complaint   = $_POST['complaint'];
	$diagre      = $_POST['diagre'];
	$diagle      = $_POST['diagle'];
	$vwithoutgre = $_POST['vwithoutgre'];
	$vwithoutgle = $_POST['vwithoutgle'];
	/*$nvwithoutgre = $_POST['nvwithoutgre'];
	$nvwithoutgle = $_POST['nvwithoutgle'];*/
	$vwithgre = $_POST['vwithgre'];
	$vwithgle = $_POST['vwithgle'];
	/*$nvwithgre = $_POST['nvwithgre'];
	$nvwithgle = $_POST['nvwithgle'];*/
	$lare      = $_POST['lare'];
	$lale      = $_POST['lale'];
	$conjre    = $_POST['conjre'];
	$conjle    = $_POST['conjle'];
	$cornre    = $_POST['cornre'];
	$cornle    = $_POST['cornle'];
	$acre      = $_POST['acre'];
	$acle      = $_POST['acle'];
	$irisre    = $_POST['irisre'];
	$irisle    = $_POST['irisle'];
	$pupilre   = $_POST['pupilre'];
	$pupille   = $_POST['pupille'];
	$lensre    = $_POST['lensre'];
	$lensle    = $_POST['lensle'];
	$opmre     = $_POST['opmre'];
	$opmle     = $_POST['opmle'];
	$tensre    = $_POST['tensre'];
	$tensle    = $_POST['tensle'];
	$ldre      = $_POST['ldre'];
	$ldle      = $_POST['ldle'];
	$arrOD     = $_POST['arrOD'];
	$arrOS     = $_POST['arrOS'];
	$srOD      = $_POST['srOD'];
	$srOS      = $_POST['srOS'];
	$nrOD      = $_POST['nrOD'];
	$nrOS      = $_POST['nrOS'];
	$FOD       = $_POST['FOD'];
	$FOS       = $_POST['FOS'];
	$treatment = $_POST['treatment'];
	$diab      = $_POST['diab'];
	$hype      = $_POST['hype'];
	$astma     = $_POST['astma'];
	$allerg    = $_POST['allerg'];
	$cardi     = $_POST['cardi'];
	$others    = $_POST['others'];
	$urine     = $_POST['urine'];
	$BP        = $_POST['BP'];

	//Get member username into a session variable

	if ($mrno != "") {
		$sql = mysql_query("UPDATE records SET Reciept_no = '$rno', Time = '$time', Date = '$date', complaint = '$complaint', diagnosisRE = '$diagre', diagnosisLE = '$diagle', vision_withoutgRE = '$vwithoutgre', vision_withoutgLE = '$vwithoutgle', vision_withgRE = '$vwithgre', vision_withgLE = '$vwithgle', lidsadnexaRE = '$lare', lidsadnexaLE = '$lale', conjuctivaRE = '$conjre', conjuctivaLE = '$conjle', corneaRE = '$cornre', corneaLE = '$cornle', ant_chamberRE = '$acre', ant_chamberLE = '$acle', irisRE = '$irisre', irisLE = '$irisle', pupilRE = '$pupilre', pupilLE = '$pupille', lensRE = '$lensre',lensLE = '$lensle', op_mRE = '$opmre', op_mLE = '$opmle', tensionRE = '$tensre', tensionLE = '$tensle', lacductRE = '$ldre', lacductLE = '$ldle', autorefreading_od = '$arrOD', autorefreading_os = '$arrOS', subjectivereading_od = '$srOD', subjectivereading_os = '$srOS', nearreading_OD = '$nrOD', nearreading_OS = '$nrOS', fundus_od = '$FOD', fundus_os = '$FOS', treatment = '$treatment', diabetic = '$diab', hypertensive = '$hype', asthmatic = '$astma', allergies = '$allerg', cardiac = '$cardi', others = '$others', urinesugar = '$urine', bp = '$BP', personel = '$id' where MRno = '$mrno' and Reciept_no = '$rno'") or die(mysql_error());

		//Update last_log_date field for this member now
		$sql2 = mysql_query("INSERT INTO logs (personel, action, date, time) VALUES('$id', 'Patient record for $mrno edited', '$date', CURRENT_TIMESTAMP)");

		//print success message if update successful then exit the script
		echo "<h4>Success Message</h4>";
		echo "<br />The Record for <strong>$mrno</strong> has successfully been saved. <a href='index.php'><font color='#FF0000'>Click here</font></a> to go back";
		//header("location: index.php");
		exit();}

}

?>
</div>
</body>
</html>