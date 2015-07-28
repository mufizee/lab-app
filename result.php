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
<?php
session_start();
$id = $_SESSION['id'];
include_once "connect_to_mysql.php";

$mrno = $_POST['mrno'];
$rno = $_POST['rno'];
$sql = mysql_query("SELECT * FROM records WHERE MRno Like '$mrno' and Reciept_no = '$rno'");
	$id_check = mysql_num_rows($sql);
	if($id_check > 0){
		while($row = mysql_fetch_array($sql)){
			//Get member ID into a variable
			$patient = $row["MRno"];
			//Get patient details into variables
			$name = $row["name"];
			$age = $row["Age"];
			$sex = $row["Sex"];
			$RP = $row["Reciept_no"];
			$HMO = $row["HMO"];
			$HMOno = $row["HMOno"];
			$Address = $row["Address"];
			$testdate = $row["Date"];
			$complaint = $row["complaint"];
			$diagnosisRE = $row["diagnosisRE"];
			$diagnosisLE = $row["diagnosisLE"];
			$vision_withoutgRE = $row["vision_withoutgRE"];
			$vision_withoutgLE = $row["vision_withoutgLE"];
			$vision_withgRE = $row["vision_withgRE"];
			$vision_withgLE = $row["vision_withgLE"];
			$lidsadnexaRE = $row["lidsadnexaRE"];
			$lidsadnexaLE = $row["lidsadnexaLE"];
			$conjuctivaRE = $row["conjuctivaRE"];
			$conjuctivaLE = $row["conjuctivaLE"];
			$corneaRE = $row["corneaRE"];
			$corneaLE = $row["corneaLE"];
			$ant_chamberRE = $row["ant_chamberRE"];
			$ant_chamberLE = $row["ant_chamberLE"];
			$irisRE = $row["irisRE"];
			$irisLE = $row["irisLE"];
			$pupilRE = $row["pupilRE"];
			$pupilLE = $row["pupilLE"];
			$lensRE = $row["lensRE"];
			$lensLE = $row["lensLE"];
			$op_mRE = $row["op_mRE"];
			$op_mLE = $row["op_mLE"];
			$tensionRE = $row["tensionRE"];
			$tensionLE = $row["tensionLE"];
			$lacductRE = $row["lacductRE"];
			$lacductLE = $row["lacductLE"];
			$autorefreading_od = $row["autorefreading_od"];
			$autorefreading_os = $row["autorefreading_os"];
			$subjectivereading_od = $row["subjectivereading_od"];
			$subjectivereading_os = $row["subjectivereading_os"];
			$nearreading_OD = $row["nearreading_OD"];
			$nearreading_OS = $row["nearreading_OS"];
			$fundus_od = $row["fundus_od"];
			$fundus_os = $row["fundus_os"];
			$treatment = $row["treatment"];
			$diabetic = $row["diabetic"];
			$hypertensive = $row["hypertensive"];
			$asthmatic = $row["asthmatic"];
			$allergies = $row["allergies"];
			$cardiac = $row["cardiac"];
			$others = $row["others"];
			$urinesugar = $row["urinesugar"];
			$bp = $row["bp"];
			$personel = $row["personel"];
			$bills_total = $row["bills_total"];
			
			
			//Reciept_no, MRno, Time, Date, name, Age, HMO, HMOno, Address, Sex, complaint, diagnosisRE, diagnosisLE, vision_withoutgRE, vision_withoutgLE, nearvisionwithout_RE, nearvisionwithout_LE, vision_withgRE, vision_withgLE, nearvisionwith_RE, nearvisionwith_LE, lidsadnexaRE, lidsadnexaLE, conjuctivaRE, conjuctivaLE, corneaRE, corneaLE, ant_chamberRE, ant_chamberLE, irisRE, irisLE, pupilRE, pupilLE, lensRE ,lensLE, op_mRE, op_mLE, tensionRE, tensionLE, lacductRE, lacductLE, autorefreading_od, autorefreading_os, subjectivereading_od, subjectivereading_os, nearreading_OD, nearreading_OS, fundus_od, 	fundus_os, treatment, diabetic, hypertensive, asthmatic, allergies, cardiac, others, urinesugar, bp, personel, bills_total
		
		}
	}
	else{
		//print update failure message and link back to the main page
		echo "<br /><br />No match for MRNo. $mrno on $date in our database, please try again<br /><br /><a href='index.php'>Click here</a> to go back to home page.";
		exit();
	}
			
?>
<title>Result for <?php echo "$name"; ?></title>
<link href="result.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
<div id="container">
<table cellpadding="0">
<tr>
<td rowspan="4" width="114">&nbsp;</td>
<td class="head" colspan="4">First  Eye Clinic</td>
</tr>
<tr>
<td height="22" colspan="4" class="add">Eye care services from cradle to gray days</td>
</tr>
<tr>
<td colspan="4" class="add">No. 66, Ijaye Road, Ogba Bus-Stop, Ikeja - Lagos</td>
</tr>
<tr>
<td class="add" colspan="4">Phone No : 08033435554,   0702- 642-8800<br />
  01-895-3513 </td>
</tr>
<tr>
<td>&nbsp;</td>
<td colspan="4">&nbsp;</td>
</tr>

<tr>
<td></td>
<td class="name" colspan="4">Result Form</td>
</tr>
<tr>
<td></td>
<td width="450"></td>
<td width="87"></td>
<td width="118"></td>
</tr>
<tr>
<td colspan="5"><hr /></td>
</tr>
<tr>
<td colspan="2">Name: &nbsp;<strong><?php echo "$name"; ?></strong></td>
<td>Age: &nbsp;&nbsp;<strong><?php echo "$age"; ?></strong></td>
<td>Sex: &nbsp;&nbsp;<strong><?php echo "$sex"; ?></strong></td>
<td width="122">Date: &nbsp;&nbsp; <strong><?php echo "$testdate"; ?></strong></td>
</tr>
<tr>
<td colspan="5"><hr /></td>
</tr>
<tr>
<td colspan="2">Complaint:&nbsp;  <b><?php if($complaint != "")
{
	echo"&nbsp;&nbsp;$complaint";
}
?></b></td>
<td colspan="3">HMO Name: &nbsp;&nbsp;<strong><?php echo"$HMO"; ?></strong></td>
</tr>
<tr>
<td colspan="5"><hr /></td>
</tr>
<tr>
<td colspan="2">HMO NO:&nbsp;<strong><?php echo"$HMOno"; ?></strong></td>
<td>&nbsp;</td>
<td colspan="2">&nbsp;</td>
</tr>
<tr>
<td colspan="5"><hr /></td>
</tr>
</table>
</div>
<!--Container for Retrieved result-->
<div class="resultBottom2">
<?php
  
if($diagnosisRE != "")
{
	echo"Diagnosis OD: &nbsp;&nbsp;&nbsp;<b>$diagnosisRE</b><br /><br />";
}
 
if ($diagnosisLE != "")
{
	echo"Diagnosis OS: &nbsp;&nbsp;&nbsp;<b>$diagnosisLE</b><br /><br />";
}

if ($vision_withoutgRE != "")
{
	echo"Vision Without Glasses (Right Eye): &nbsp;&nbsp;&nbsp;<b>$vision_withoutgRE</b><br /><br />";
}
if ($vision_withoutgLE != "")  
{
	echo"Vision Without Glasses (Left Eye): &nbsp;&nbsp;&nbsp;<b>$vision_withoutgLE</b><br /><br />";
}
/*if ($nearvisionwithout_RE != "") 
{
	echo"Near Vision Without Glasses (Right Eye): &nbsp;&nbsp;&nbsp;<b>$nearvisionwithout_RE</b><br /><br />";
}
if ($nearvisionwithout_LE != "") 
{
	echo"Near Vision Without Glasses (Left Eye): &nbsp;&nbsp;&nbsp;<b>$nearvisionwithout_LE</b><br /><br />";
}*/
if ($vision_withgRE != "")
{
	echo"Vision With Glasses (Right Eye): &nbsp;&nbsp;&nbsp;<b>$vision_withgRE</b><br /><br />";
}

if ($vision_withgLE != "")
{
	echo"Vision With Glasses (Left Eye): &nbsp;&nbsp;&nbsp;<b>$vision_withgLE</b><br /><br />";
}
/*if($nearvisionwith_RE  != "")
{
	echo"Near Vision With Glasses (Right Eye): &nbsp;&nbsp;&nbsp;<b>$nearvisionwith_RE</b><br /><br />";
}
if($nearvisionwith_LE != "")
{
	echo"Near Vision With Glasses (Left Eye): &nbsp;&nbsp;&nbsp;<b>$nearvisionwith_LE</b><br /><br />";
}*/
if($lidsadnexaRE != "") 
{
	echo"Lids & Adnexa (Right Eye): &nbsp;&nbsp;&nbsp;<b>$lidsadnexaRE</b><br /><br />";
}

if($lidsadnexaLE  != "")
{
	echo "Lids & Adnexa (Left Eye): &nbsp;&nbsp;&nbsp;<b>$lidsadnexaLE</b><br /><br />";
}

if($conjuctivaRE  != "")
{
	echo "Conjuctiva (Right Eye): &nbsp;&nbsp;&nbsp;<b>$conjuctivaRE</b><br /><br />";
}

if($conjuctivaLE  != "")
{
	echo "Conjuctiva (Right Eye): &nbsp;&nbsp;&nbsp;<b>$conjuctivaLE</b><br /><br />";
}

if($corneaRE != "")
{
	echo "Cornea (Right Eye): &nbsp;&nbsp;&nbsp;<b>$corneaRE</b><br /><br />";
} 

if($corneaLE  != "")
{
	echo "Cornea (Left Eye): &nbsp;&nbsp;&nbsp;<b>$corneaLE</b><br /><br />";
}

if($ant_chamberRE != "");
{
	echo "Anterior Chamber (Right Eye): &nbsp;&nbsp;&nbsp;<b>$ant_chamberRE</b><br /><br />";
}
if($ant_chamberLE != "") 
{
	echo "Anterior Chamber (Left Eye): &nbsp;&nbsp;&nbsp;<b>$ant_chamberLE</b><br /><br />";
}

if($irisRE != "")
{
	echo "Iris (Right Eye): &nbsp;&nbsp;&nbsp;<b>$irisRE</b><br /><br />";
}

if($irisLE  != "")
{
	echo "Iris (Left Eye): &nbsp;&nbsp;&nbsp;<b>$irisLE</b><br /><br />";
}
if($pupilRE  != "")
{
	echo "Pupil (Right Eye): &nbsp;&nbsp;&nbsp;<b>$pupilRE</b><br /><br />";
}
if($pupilLE != "")
{
	echo "Pupil (Left Eye): &nbsp;&nbsp;&nbsp;<b>$pupilLE</b><br /><br />";
}

if($lensRE != "")
{
	echo "Lens (Right Eye): &nbsp;&nbsp;&nbsp;<b>$lensRE</b><br /><br />";
}

if($lensLE != "")
{
	echo "Lens (Left Eye): &nbsp;&nbsp;&nbsp;<b>$lensLE</b><br /><br />";
}

if($op_mRE != "")
{
	echo "Ocular Position/Movements (Right Eye): &nbsp;&nbsp;&nbsp;<b>$op_mRE</b><br /><br />";
}  

if($op_mLE  != "")
{
	echo "Ocular Position/Movements (Left Eye): &nbsp;&nbsp;&nbsp;<b>$op_mLE</b><br /><br />";
}
if($tensionRE != "") 
{
	echo "Tension (Right Eye): &nbsp;&nbsp;&nbsp;<b>$tensionRE</b><br /><br />";
}
if($tensionLE != "")
{
	echo "Tension (Left Eye): &nbsp;&nbsp;&nbsp;<b>$tensionLE</b><br /><br />";
}
if($lacductRE  != "")
{
	echo "Lacduct (Right Eye): &nbsp;&nbsp;&nbsp;<b>$lacductRE</b><br /><br />";
}
if($lacductLE != "")
{
	echo "Lacduct (Left Eye): &nbsp;&nbsp;&nbsp;<b>$lacductLE</b><br /><br />";
}
if($autorefreading_od != "")
{
	echo "Auto Refractometer Reading (OD): &nbsp;&nbsp;&nbsp;<b>$autorefreading_od</b><br /><br />";
}
if($autorefreading_os != "")
{
	echo "Auto Refractometer Reading (OS): &nbsp;&nbsp;&nbsp;<b>$autorefreading_os</b><br /><br />";
}
if($subjectivereading_od != "")
{
	echo "Subjective Reading (OD): &nbsp;&nbsp;&nbsp;<b>$subjectivereading_od</b><br /><br />";	
}
if($subjectivereading_os != "")
{
	echo "Subjective Reading (OS): &nbsp;&nbsp;&nbsp;<b>$subjectivereading_os</b><br /><br />";
}
if($nearreading_OD != "")
{
	echo "Near Reading (OD): &nbsp;&nbsp;&nbsp;<b>$nearreading_OD</b><br /><br />";
}
if($nearreading_OS  != "")
{
	echo "Near Reading (OS): &nbsp;&nbsp;&nbsp;<b>$nearreading_OS</b><br /><br />";
}
if($fundus_od != "")
{
	echo "Fundus (OD): &nbsp;&nbsp;&nbsp;<b>$fundus_od</b><br /><br />";
}
if ($fundus_os != "")
{
	echo "Fundus (OS): &nbsp;&nbsp;&nbsp;<b>$fundus_os</b><br /><br />";
}
if($treatment != "")
{
	echo "Treatment : &nbsp;&nbsp;&nbsp;<b>$fundus_od</b><br /><br />";
}
if ($diabetic != "" ||  $hypertensive != "" || $asthmatic != "" || $allergies != "" || $cardiac != "" || $others != "" || $urinesugar != "")
{
	echo "<b>Other investigations</b><br /> <br />";
}
if($diabetic != "") 
{
	echo "Diabetic : &nbsp;&nbsp;&nbsp;<b>$diabetic</b><br /><br />";
}
if($hypertensive != "")
{
	echo "Hypertensive : &nbsp;&nbsp;&nbsp;<b>$hypertensive</b><br /><br />";
}
if($asthmatic  != "")
{
	echo "Asthmatic : &nbsp;&nbsp;&nbsp;<b>$asthmatic</b><br /><br />";
}
if($allergies  != "")
{
	echo "Allergies : &nbsp;&nbsp;&nbsp;<b>$allergies</b><br /><br />";
}
if($cardiac  != "")
{
	echo "Cardiac : &nbsp;&nbsp;&nbsp;<b>$cardiac</b><br /><br />";
}
if($urinesugar  != "")
{
	echo "Urine Sugar : &nbsp;&nbsp;&nbsp;<b>$urinesugar</b><br /><br />";
}
if($bp  != "")
{
	echo "BP : &nbsp;&nbsp;&nbsp;<b>$bp</b><br /><br />";
}
/*if($bills_total != "")
{
	echo "Total : &nbsp;&nbsp;&nbsp;<b>$bills_total</b><br /><br />";
}*/

//$Reciept_no $MRno  $Time  $Date  $name  $Age  $HMO  $HMOno  $Address  $Sex  $complaint  $diagnosisRE  $diagnosisLE  $vision_withoutgRE  $vision_withoutgLE  $nearvisionwithout_RE  $nearvisionwithout_LE  $vision_withgRE  $vision_withgLE  $nearvisionwith_RE  $nearvisionwith_LE  $lidsadnexaRE  $lidsadnexaLE  $conjuctivaRE  $conjuctivaLE  $corneaRE  $corneaLE  $ant_chamberRE  $ant_chamberLE  $irisRE  $irisLE  $pupilRE  $pupilLE  $lensRE  $lensLE  $op_mRE  $op_mLE  $tensionRE  $tensionLE  $lacductRE  $lacductLE  $autorefreading_od  $autorefreading_os  $subjectivereading_od  $subjectivereading_os  $nearreading_OD  $nearreading_OS  $fundus_od  	$fundus_os  $treatment  $diabetic  $hypertensive  $asthmatic  $allergies  $cardiac  $others  $urinesugar  $bp  $personel  $bills_total

?>
</div>
<div class="resultTops">
<b>Doctor's Signature: _________________________________</b>
</div>

</div>
</body>
</html>