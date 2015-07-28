<?php
session_start();
$id = $_SESSION['id'];
if(!isset($_SESSION['id'])){
		Header('Location: login.php');
	}
	
	include_once "connect_to_mysql.php";
	$date = date("d/m/Y");
	$day = date("d");
	$year = date("Y");
	$month = date("m");
	$mrno = $_POST['mrno'];
	$hmo = $_POST['hmo'];
	$name = $_POST['pname'];
	$rno = $_POST['rno'];
	$lens = $_POST['lens'];
	$lensno = $_POST['lensno'];
	$lenscost = $_POST['lenscost'];
	$frame = $_POST['frame'];
	$frameno = $_POST['frameno'];
	$framecost = $_POST['framecost'];
	$drug = $_POST['drug'];
	$drugno = $_POST['drugno'];
	$drugcost = $_POST['drugcost'];
	$tono = $_POST['tono'];
	$cvf = $_POST['cvf'];
	$consult = $_POST['consult'];
	
	$lenscash = $lenscost * $lensno; 
	$framecash = $framecost * $frameno;
	$drugcash = $drugcost * $drugno;
	$totalcost = $lenscash + $framecash + $drugcash + $tono + $cvf + $consult;
	
	if ($totalcost < 1)
	{
		Header('Location: receipt.php');
	}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FEC Reciept</title>
<link href="css/receipt.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="receipt rtitle">
<span class="rtextbig">First Eye Clinic</span><br />
Eye care services from cradle to gray days<br />
No. 66, Ijaye Road, Ogba Bus-Stop,<br />
Ikeja, Lagos <br />
<span class="add">Phone No : 08033435554</span>   0702-642-8800<br />
01-895-3513 <br />
BILL
</div> 
<div class="receipt rmain">
Name: <?php echo "$name"; ?> <br />
Bill No.: <?php echo"$rno";?><br />
Date: <?php echo"$date";?><br />
<!--Staff:-->  MRNo.:<?php echo"$mrno"; ?><br />
<?php if($hmo != ""){
	echo "HMO:  $hmo";
}
?>
<br />
</div>
<div class="receipt rmain"><br />

<span class="rdiscribe">Description</span><span class="rquantity">Qty</span><span class="ramount">Amount</span>
<br />
</div>
<div class="receipt rmain"><br />
<?php if($lens != "None" /*|| $lenscash != 0 || $lenscash != ""*/){
	echo "<span class='rdiscribe'>$lens</span><span class='rquantity'>$lensno</span><span class='ramount'>$lenscash</span><br />";
	}
	else{
		$lens = "";
		$lenscash = "";
		$lenscost = "";
		$lensno = "";
	}
	if($frame != "None"){
		echo "<span class='rdiscribe'>$frame</span><span class='rquantity'>$frameno</span><span class='ramount'>$framecash</span><br />";
	}
	else{
		$frame = "";
		$frameno = "";
		$framecash = "";
	}
	if($drug != "None"){
		echo "<span class='rdiscribe'>Drug</span><span class='rquantity'>$drugno</span><span class='ramount'>$drugcash</span><br />";
	}
	else{
		$drug = "";
		$drugcash = "";
		$drugno = "";
	}
	if($tono != 0){
		echo "<span class='rdiscribe'>Tonometery</span><span class='rquantity'>&nbsp;</span><span class='ramount'>$tono</span><br />";
	}
	else
	{
		$tono = "";
	}
	
	if($cvf != 0){
		echo "<span class='rdiscribe'>Central Visual Field</span><span class='rquantity'>&nbsp;</span><span class='ramount'>$cvf</span><br />";
	}
	else
	{$cvf = "";}
	if($consult != 0){
		echo "<span class='rdiscribe'>Consultation</span><span class='rquantity'>&nbsp;</span><span class='ramount'>$consult</span><br />";
	}
	else{$cvf = "";}
	
	echo"<br /><br /><span class='rdiscribe'>Total Cost:</span><span class='rquantity'>&nbsp;</span><span class='ramount'>$totalcost</span><br />";
 ?>

<br />
<br />
Doctor's Signature:______________<br />

<!--<span class="rleft">Bal. Refund</span><span class="rright"><?php echo "500"; ?></span><br />
--><br />
<?php
	
	$sql = mysql_query("INSERT INTO bills (patient_name, receiptno, hmo, date, staff, mrno, lensname, lensno, lensamount, framename, frameno, frameamount, drugname, drugno, drugamount, tono, cvf, consult, Total, Month, year) VALUES ('$name', '$rno', '$hmo', '$year/$month/$day', '$id', '$mrno', '$lens', '$lensno', '$lenscash', '$frame', '$frameno', '$framecash', '$drug', '$drugno', '$drugcash', '$tono', '$cvf', '$consult', '$totalcost', '$month', '$year')") or die(mysql_error());
			if ($frame != ""){
			$sql3 = mysql_query("Update stock SET status = 'Out of Stock' where item_name = '$frame'");}
			/*if ($drug != ""){
			$sql4 = mysql_query("Update stock SET status = 'Out of Stock' where item_name = '$drug'");}*/
						// Update last_log_date field for this member now
			$sql2 = mysql_query("INSERT INTO logs (personel, action, date, time) VALUES('$id', 'New Receipt for $mrno', '$date' , CURRENT_TIMESTAMP)") or die(mysql_error());

?>
</div>
<a class="link" href="index.php">home</a>
</body>
</html>