<?php
session_start();
$id = $_SESSION['id'];
if (!isset($_SESSION['id'])) {
	Header('Location: login.php');
}
// Include DB connection
if ($_POST['firstname']) {
	include_once "connect_to_mysql.php";

	$firstname = $_POST["firstname"];
	$lastname  = $_POST["lastname"];
	$age       = $_POST["age"];
	$hmoname   = $_POST["hmoname"];
	$hmono     = $_POST["hmono"];
	$address   = $_POST["address"];
	$sex       = $_POST["sex"];
	$mrno      = $_POST['mrno'];
	$time      = CURRENT_TIMESTAMP;
	//$date = date("Y/m/d");
	$month = $_POST['month'];
	$day   = $_POST['day'];
	$year  = $_POST['year'];
	$date  = "$year/$month/$day";
	$rno   = $_POST['rno'];

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

	// Update last_log_date field for this member now
	//$sql2 = mysql_query("INSERT INTO logs (personel, action, date, time) VALUES('$id', 'new patient record for $firstname $lastname saved', '$date', CURRENT_TIMESTAMP)");
	if ($firstname != "") {
		$sql = mysql_query("INSERT INTO records (Reciept_no, MRno, Time, Date, name, Age, HMO, HMOno, Address, Sex, complaint, diagnosisRE, diagnosisLE, vision_withoutgRE, vision_withoutgLE, vision_withgRE, vision_withgLE, lidsadnexaRE, lidsadnexaLE, conjuctivaRE, conjuctivaLE, corneaRE, corneaLE, ant_chamberRE, ant_chamberLE, irisRE, irisLE, pupilRE, pupilLE, lensRE ,lensLE, op_mRE, op_mLE, tensionRE, tensionLE, lacductRE, lacductLE, autorefreading_od, autorefreading_os, subjectivereading_od, subjectivereading_os, nearreading_OD, nearreading_OS, fundus_od, 	fundus_os, treatment, diabetic, hypertensive, asthmatic, allergies, cardiac, others, urinesugar, bp, personel, bills_total) VALUES ('$rno', '$mrno', CURRENT_TIMESTAMP, '$date', '$firstname $lastname', '$age', '$hmoname', '$hmono', '$address', '$sex', '$complaint', '$diagre', '$diagle', '$vwithoutgre', '$vwithoutgle', '$vwithgre', '$vwithgle', '$lare', '$lale', '$conjre', '$conjle', '$cornre', '$cornle', '$acre', '$acle', '$irisre', '$irisle', '$pupilre', '$pupille', '$lensre', '$lensle', '$opmre', '$opmle', '$tensre', '$tensle', '$ldre', '$ldle', '$arrOD', '$arrOS', '$srOD', '$srOS', '$nrOD', '$nrOS', '$FOD', '$FOS', '$treatment', '$diab', '$hype', '$astma', '$allerg', '$cardi', '$others', '$urine', '$BP', '$id', '')") or die(mysql_error());

		//print success message if update successful then exit the script
		echo "Success! <a href='index.php'>Click here</a> to go back";
		//header("location: index.php");
		exit();}

}

?>