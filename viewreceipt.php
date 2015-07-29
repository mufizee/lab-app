<?php
session_start();
$id = $_SESSION['id'];
if (!isset($_SESSION['id'])) {
	Header('Location: login.php');
}
$mrno = $_POST['mrno'];
$rno  = $_POST['rno'];
include_once "connect_to_mysql.php";

$ret = mysql_query("Select * from bills WHERE mrno = '$mrno' and receiptno = '$rno' LIMIT 1");
while ($row = mysql_fetch_array($ret)) {
	$hmo       = $row['hmo'];
	$name      = $row['patient_name'];
	$date      = $row['date'];
	$lens      = $row['lensname'];
	$lensno    = $row['lensno'];
	$lenscost  = $row['lensamount'];
	$frame     = $row['framename'];
	$frameno   = $row['frameno'];
	$framecost = $row['frameamount'];
	$drug      = $row['drugname'];
	$drugno    = $row['drugno'];
	$drugcost  = $row['drugamount'];
	$tono      = $row['tono'];
	$cvf       = $row['cvf'];
	$consult   = $row['consult'];
	$total     = $row['Total'];

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
Name: <?php echo "$name";?> <br />
Bill No.: <?php echo "$rno";?><br />
Date: <?php echo "$date";?><br />
<!--Staff:  -->MRNo.:<?php echo "$mrno";?><br />
<?php if ($hmo != "") {
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
<?php
if ($lens != "") {
	echo "<span class='rdiscribe'>$lens</span><span class='rquantity'>$lensno</span><span class='ramount'>$lenscost</span><br />";}
if ($frame != "") {
	echo "<span class='rdiscribe'>$frame</span><span class='rquantity'>$frameno</span><span class='ramount'>$framecost</span><br />";}
if ($drug != "") {
	echo "<span class='rdiscribe'>Drug</span><span class='rquantity'>$drugno</span><span class='ramount'>$drugcost</span><br />";}
if ($tono != 0) {
	echo "<span class='rdiscribe'>Tonometery</span><span class='rquantity'>&nbsp;</span><span class='ramount'>$tono</span><br />";}
if ($cvf != 0) {
	echo "<span class='rdiscribe'>Central Visual Field</span><span class='rquantity'>&nbsp;</span><span class='ramount'>$cvf</span><br />";}
if ($consult != 0) {
	echo "<span class='rdiscribe'>Consultation</span><span class='rquantity'>&nbsp;</span><span class='ramount'>$consult</span><br />";}

echo "<br /><br /><span class='rdiscribe'>Total Cost:</span><span class='rquantity'>&nbsp;</span><span class='ramount'>$total</span><br />";
?>

<br />
<br />
Doctor's Signature:______________<br />

<!--<span class="rleft">Bal. Refund</span><span class="rright"><?php echo "500";?></span><br />
--><br />

</div>
<a class="link" href="index.php">home</a>
</body>
</html>