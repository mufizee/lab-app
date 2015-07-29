<?php
session_start();
$id = $_SESSION['id'];
if (!isset($_SESSION['id'])) {
	Header('Location: login.php');
}
?>

<p><b>NB: Please use only one of the following:</b><br />
</p>
<!--<form action="result2.php" method="post">
  <table>
<tr>
<td colspan="3" bgcolor="#D7E6FE">Search by HMO</td>
</tr>
<tr>
<td>Enter HMO Name: &nbsp;</td>
<td><input type="text" class="textbox4" name="hmo"></td>
</tr>
<tr>
  <td></td>
  <td><input type="submit" value="Display Result"></td>
</tr>
</table>
</form>
--><br />
<form action="result.php" method="post">
  <table>
  <tr>
  <td colspan="3" bgcolor="#D7E6FE">Search by MRno.</td>
  </tr>
  <tr>
  <td width="132">Enter Patient's MRno:</td>
  <td width="170"><input type="text" class="textbox2" name="mrno"></td>
  </tr>
  <tr>
  <td>Enter Record no:</td>
  <td><input type="text" class="textbox2" name="rno"></td>
  </tr>
  <tr>
    <td></td>
    <td><input class="button" type="submit" value="Display Result"></td>
  </tr>
  </table>
</form>
<!--<br />
<form action="result3.php" method="post">
<table>
<tr>
<td colspan="3" bgcolor="#C9DFFE">Search by Patient's MR No.</td>
</tr>
<tr>
  <td>Please enter the MR no.</td>
  <td colspan="2"><input type="text" class="textbox4" name="mrno" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Display Result"></td>
</tr>
</table>
</form>-->