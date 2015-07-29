<?php
session_start();
$id = $_SESSION['id'];
if (!isset($_SESSION['id'])) {
	Header('Location: login.php');
}
include_once "connect_to_mysql.php";
$mrno    = $_POST['mrno'];
$patient = mysql_query("Select * from patients where mrno = '$mrno'");
while ($row = mysql_fetch_array($patient)) {
	$firstname  = $row['firstname'];
	$id         = $row['id'];
	$lastname   = $row['lastname'];
	$mrno       = $row['mrno'];
	$DOB        = $row['DOB'];
	$age        = $row['age'];
	$address    = $row['address'];
	$occupation = $row['occupation'];
	$cell       = $row['cellno'];
	$other      = $row['otherno'];
	$mrno       = $row['mrno'];
	$hmoname    = $row['hmo_name'];
	$hmono      = $row['hmo_no'];
	$rh         = $row['ref_hospital'];
	$company    = $row['company'];
	$ac         = $row['auth_code'];
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FEC Reciept</title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="edit2">
<div id="navigate"><a href="index.php"><img src="Images/homeicon.png" width="30" height="30"/></a></div>
<form id="frm1" name="frm1" method="post" action="submitreceipt.php">
  <table cellspacing="5" cellpadding="5">
    <tr>
      <td>MRNo:</td>
      <td><input name="mrno" type="text" class="textbox2" width="200" maxlength="15" value="<?php echo "$mrno";?>" /></td>
      <td>No of Items</td>
      <td>Name:&nbsp;&nbsp;&nbsp;<input name="pname" type="text" class="textbox2" width="200" value="<?php echo "$firstname $lastname";?>" /></td>
    </tr>
    <tr>
      <td>Reciept no.</td>
      <td><input name="rno" type="text" class="textbox2" width="80" value="<?php echo "FEC" . rand(1000, 9999);?>" /></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
    <td>HMO Name</td>
    <td>
    <?php
include_once "connect_to_mysql.php";

$hmoselect = @mysql_query("select hmo from eyeclinic.hmo");

echo "<select name=\"hmo\" class=\"textboxX\">";
while ($row = mysql_fetch_assoc($hmoselect)) {
	$hmonames = $row['hmo'];
	echo "<option value=$hmonames>$hmonames</option>";
}
echo "</select>";
?>
    </td>
    </tr>
    <tr>
      <td>Lens</td>
      <td><select name="lens" class="textboxX">
      <option value="None" selected="selected">None</option>
  <optgroup label="Single Vision">
    <option value="SV Transition">Transition</option>
    <option value="SV antireflex">Antireflex</option>
    <option value="SV Tinted Lens">Tinted Lens</option>
  </optgroup>
  <optgroup label="Bifocal">
    <option value="Fused Bifocal (Photochromic)">Fused Bifocal(Photochromic)</option>
    <option value="Fused Bifocal (Antireflex)">Fused Bifocal (Antireflex)</option>
    <option value="Fused Bifocal (Tint)">Fused Bifocal (Tint)</option>
    <option value="D-Top Bifocal (Photochromic)">D-Top Bifocal (Photochromic)</option>
    <option value="D-Top Bifocal (Antireflex)">D-Top Bifocal (Antireflex)</option>
    <option value="D-Top Bifocal (Tint)">D-Top Bifocal (Tint)</option>
  </optgroup>
  <optgroup label="Varilux">
    <option value="Varilux Transition">Transition</option>
    <option value="Varilux antireflex">Antireflex</option>
    <option value="Varilux Tinted Lens">Tinted Lens</option>
  </optgroup>
</select></td>
		<td><select name="lensno" class="textbox3">
        <option value="0" selected="selected">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
      </select></td>
      <td>Amount:
      <input name="lenscost" type="text" class="textbox2" width="200" maxlength="15" /></td>
    </tr>
    <tr>
      <td>Frame</td>
      <td><!--<input name="frame" type="text" class="textbox2" width="200" maxlength="15" />-->
      <?php
include_once "connect_to_mysql.php";

$frameselect = @mysql_query("select item_name from eyeclinic.stock where item_type = 'frame'");

echo "<select name=\"frame\" class=\"textboxX\">";
while ($row = mysql_fetch_assoc($frameselect)) {
	$framenames = $row['item_name'];
	echo "<option value=$framenames>$framenames</option>";
}
echo "</select>";
?>
      </td>
      <td><select name="frameno" class="textbox3">
      	<option value="0" selected="selected">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
      </select></td>
      <td>Amount: <input name="framecost" type="text" class="textbox2" width="200" maxlength="15" /> </td>
    </tr>
    <tr>
    <td>Drug</td>
      <td><!--<input name="frame" type="text" class="textbox2" width="200" maxlength="15" />-->
      <?php
include_once "connect_to_mysql.php";

$Drugselect = @mysql_query("select item_name from eyeclinic.stock where item_type = 'Drug'");

echo "<select name=\"drug\" class=\"textboxX\">";
while ($row = mysql_fetch_assoc($Drugselect)) {
	$Drugnames = $row['item_name'];
	echo "<option value=$Drugnames>$Drugnames</option>";
}
echo "</select>";
?>
      </td>
      <td><select name="drugno" class="textbox3">
      	<option value="0" selected="selected">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
      </select></td>
      <td>Amount: <input name="drugcost" type="text" class="textbox2" width="200" maxlength="15" /> </td>
    </tr>
    <tr>
      <td>Tonometry</td>
      <td><select name="tono" class="textbox3">
      <option value="0" selected="selected">None</option>
      <option value="2000">2000</option>
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Central Visual Field</td>
      <td><select name="cvf" class="textbox3">
      <option value="0" selected="selected">None</option>
      <option value="5000">5000</option>
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Consult</td>
      <td><select name="consult" class="textbox3">
      <option value="0" selected="selected">None</option>
      <option value="1000">1000</option>
      <option value="2000">2000</option>
      <option value="1000">Referred Patient (1000)</option>
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" value="Checkout" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <font color="#FF0000">Please confirm your inputs before checking out</font>
</form>
</div>
</body>
</html>