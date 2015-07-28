<?php
session_start();
$id = $_SESSION['id'];
if(!isset($_SESSION['id'])){
		Header('Location: login.php');
	}
	
	include_once "connect_to_mysql.php";
	
	$mrno = $_POST['mrno'];
	$patient = mysql_query("Select * from patients where mrno = '$mrno'");
	while ($row = mysql_fetch_array($patient))
	{
		$firstname = $row['firstname'];
		$id = $row['id'];
		$lastname = $row['lastname'];
		$age = $row['age'];
		$address = $row['address'];
		$cellno = $row['cellno'];
		$hmoname = $row['hmo_name'];
		$hmono = $row['hmo_no'];
		$rh = $row['ref_hospital'];
		$company = $row['company'];
		$ac = $row['auth_code'];
		$sex = $row['Gender'];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Continuation Sheet</title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="edit2">
<div id="navigate"><a href="index.php"><img src="Images/homeicon.png" width="30" height="30"/></a></div>
<form action="report.php" method="post">
  <table cellspacing="5">
<caption>
  <b>CONTINUATION SHEET</b>
  </caption>
<tr>
	<td colspan="2">Firstname: <font size="+1"><b><input type="text" name="firstname" value="<?php echo "$firstname"; ?>" /></b></font></td>
    <td align="right">M.R.No</td>
	<td><input name="mrno" type="text" class="textbox2" width="200" value="<?php echo "$mrno"?>"></td>
</tr>

<tr>
	<td colspan="2">Lastname: <font size="+1"><b><input type="text" name="lastname" value="<?php echo "$lastname"; ?>" /></b></font></td>
    <td>Age: <font size="+1"><b><input type="text" width="100" name="age" value="<?php echo "$age"; ?>" /></b></font></td>
    <td>HMO No.: <font size="+1"><b><input type="text" width="100" name="hmono" value="<?php echo "$hmono"; ?>" /></b></font></td>
</tr>
<tr>
	<td colspan="2">HMO Name: <font size="+1"><b><input type="text" name="hmoname" value="<?php echo "$hmoname"; ?>" /></b></font></td>
    <td align="right">Cell No.</td>
    <td><font size="+1"><b><input type="text" width="100" name="cellno" value="<?php echo "$cellno"; ?>" /></b></font></td>
</tr>
<tr>
	<td>Date:</td>
    <td colspan="2"><select name="month" class="textbox3">
      <option value="1">January</option>
      <option value="2">February</option>
      <option value="3">March</option>
      <option value="4">April</option>
      <option value="5">May</option>
      <option value="6">June</option>
      <option value="7">July</option>
      <option value="8">August</option>
      <option value="9">September</option>
      <option value="10">October</option>
      <option value="11">November</option>
      <option value="12">December</option>
    </select>
      <select name="day" class="textbox3">
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
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
      </select>
      <select name="year" class="textbox3">
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
        <option value="1993">1993</option>
        <option value="1992">1992</option>
        <option value="1991">1991</option>
        <option value="1990">1990</option>
        <option value="1989">1989</option>
        <option value="1988">1988</option>
        <option value="1987">1987</option>
        <option value="1986">1986</option>
        <option value="1985">1985</option>
        <option value="1984">1984</option>
        <option value="1983">1983</option>
        <option value="1982">1982</option>
        <option value="1981">1981</option>
        <option value="1980">1980</option>
        <option value="1982">1982</option>
        <option value="1981">1981</option>
        <option value="1980">1980</option>
        <option value="1979">1979</option>
        <option value="1978">1978</option>
        <option value="1977">1977</option>
        <option value="1976">1976</option>
        <option value="1975">1975</option>
        <option value="1974">1974</option>
        <option value="1973">1973</option>
        <option value="1972">1972</option>
        <option value="1971">1971</option>
        <option value="1970">1970</option>
        <option value="1969">1969</option>
        <option value="1968">1968</option>
        <option value="1967">1967</option>
        <option value="1966">1966</option>
        <option value="1965">1965</option>
        <option value="1964">1964</option>
        <option value="1963">1963</option>
        <option value="1962">1962</option>
        <option value="1961">1961</option>
        <option value="1960">1960</option>
        <option value="1959">1959</option>
        <option value="1958">1958</option>
        <option value="1957">1957</option>
        <option value="1956">1956</option>
        <option value="1955">1955</option>
        <option value="1954">1954</option>
        <option value="1953">1953</option>
        <option value="1952">1952</option>
        <option value="1951">1951</option>
        <option value="1950">1950</option>
        <option value="1949">1949</option>
        <option value="1948">1948</option>
        <option value="1947">1947</option>
        <option value="1946">1946</option>
        <option value="1945">1945</option>
        <option value="1944">1944</option>
        <option value="1943">1943</option>
        <option value="1942">1942</option>
        <option value="1941">1941</option>
        <option value="1940">1940</option>
        <option value="1939">1939</option>
        <option value="1938">1938</option>
        <option value="1937">1937</option>
        <option value="1936">1936</option>
        <option value="1935">1935</option>
        <option value="1934">1934</option>
        <option value="1933">1933</option>
        <option value="1932">1932</option>
        <option value="1931">1931</option>
        <option value="1930">1930</option>
        <option value="1929">1929</option>
        <option value="1928">1928</option>
        <option value="1927">1927</option>
        <option value="1926">1926</option>
        <option value="1925">1925</option>
        <option value="1924">1924</option>
        <option value="1923">1923</option>
        <option value="1922">1922</option>
        <option value="1921">1921</option>
        <option value="1920">1920</option>
        <option value="1919">1919</option>
        <option value="1918">1918</option>
        <option value="1917">1917</option>
        <option value="1916">1916</option>
        <option value="1915">1915</option>
        <option value="1914">1914</option>
        <option value="1913">1913</option>
        <option value="1912">1912</option>
        <option value="1911">1911</option>
        <option value="1910">1910</option>
        <option value="1909">1909</option>
        <option value="1908">1908</option>
        <option value="1907">1907</option>
        <option value="1906">1906</option>
        <option value="1905">1905</option>
        <option value="1904">1904</option>
        <option value="1903">1903</option>
        <option value="1902">1902</option>
        <option value="1901">1901</option>
        <option value="1900">1900</option>
      </select></td>
    <td>RN: <input type="text" name="rno" value="<?php echo "fe".rand(1000, 9999); ?>" /></td>
</tr>
<tr>
	<td>Complaint:</td>
    <td colspan="2"><textarea name="complaint" type="text" class="textfieldComp" rows="5" cols="45"></textarea></td>
    <td><input type="hidden" width="100" name="sex" value="<?php echo"$sex";?>" /><input type="hidden" width="100" name="address" value="<?php echo"$address";?>" />&nbsp;</td>
</tr>

<tr>
	<td>&nbsp;</td>
    <td><b>Right Eye</b></td>
    <td><b>Left Eye</b></td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>Vision without glasses:</td>
    <td><input name="vwithoutgre" type="text" class="textbox2" width="200"></td>
    <td><input name="vwithoutgle" type="text" class="textbox2" width="200"></td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>Vision with glasses:</td>
    <td><input name="vwithgre" type="text" class="textbox2" width="200"></td>
    <td><input name="vwithgle" type="text" class="textbox2" width="200"></td>
    <td>&nbsp;</td>
</tr>

<tr>
	<td><b>External Examination</b></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>Lids/Adnexal:</td>
    <td><input name="lare" type="text" class="textbox2" width="200"></td>
    <td><input name="lale" type="text" class="textbox2" width="200"></td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>Conjuctiva:</td>
    <td><input name="conjre" type="text" class="textbox2" width="200"></td>
    <td><input name="conjle" type="text" class="textbox2" width="200"></td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>Cornea:</td>
    <td><input name="cornre" type="text" class="textbox2" width="200"></td>
    <td><input name="cornle" type="text" class="textbox2" width="200"></td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>Anterior Chamber:</td>
    <td><input name="acre" type="text" class="textbox2" width="200"></td>
    <td><input name="acle" type="text" class="textbox2" width="200"></td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>Iris</td>
    <td><input name="irisre" type="text" class="textbox2" width="200"></td>
    <td><input name="irisle" type="text" class="textbox2" width="200"></td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>Pupil</td>
    <td><input name="pupilre" type="text" class="textbox2" width="200"></td>
    <td><input name="pupille" type="text" class="textbox2" width="200"></td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>Lens</td>
    <td><input name="lensre" type="text" class="textbox2" width="200"></td>
    <td><input name="lensle" type="text" class="textbox2" width="200"></td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>Ocular Position/Movements</td>
    <td><input name="opmre" type="text" class="textbox2" width="200"></td>
    <td><input name="opmle" type="text" class="textbox2" width="200"></td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>Tension</td>
    <td><input name="tensre" type="text" class="textbox2" width="200"></td>
    <td><input name="tensle" type="text" class="textbox2" width="200">
    </td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>Lacrimal Duct</td>
    <td><input name="ldre" type="text" class="textbox2" width="200"></td>
    <td><input name="ldle" type="text" class="textbox2" width="200"></td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td><B>Refraction</B></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>Auto Refractometer Reading</td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>OD</td>
    <td><input name="arrOD" type="text" class="textbox2" width="200"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>OS</td>
    <td><input name="arrOS" type="text" class="textbox2" width="200"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>Subjective Refraction </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>OD</td>
    <td><input name="srOD" type="text" class="textbox2" width="200"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>OS</td>
    <td><input name="srOS" type="text" class="textbox2" width="200"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>Near Reading:</td>
    <td></td>
    <td></td>
    <td><b>Other Investigations</b></td>
</tr>
<tr>
	<td>OD:</td>
    <td><input name="nrOD" type="text" class="textbox2" width="200"></td>
    <td align="right">Diabetic:</td>
    <td><input name="diab" type="text" class="textbox2" width="200" /></td>
</tr>
<tr>
	<td>OS:</td>
    <td><input name="nrOS" type="text" class="textbox2" width="200"></td>
    <td align="right">Asthmatic:</td>
    <td><input name="astma" type="text" class="textbox2" width="200" /></td>
</tr>
<tr>
	<td>Fundus:</td>
    <td>&nbsp;</td>
    <td align="right">Cardiac:</td>
    <td><input name="cardi" type="text" class="textbox2" width="200" /></td>
</tr>
<tr>
	<td>OD</td>
    <td><input name="FOD" type="text" class="textbox2" width="200"></td>
    <td align="right">Hypertensive:</td>
    <td><input name="hype" type="text" class="textbox2" width="200" /></td>
</tr>
<tr>
	<td>OS</td>
    <td><input name="FOS" type="text" class="textbox2" width="200"></td>
    <td align="right">Allergies</td>
    <td><input name="allerg" type="text" class="textbox2" width="200" /></td>
</tr>
<tr>
	<td>Diagnosis OD:</td>
    <td><input name="diagre" type="text" class="textbox2" width="200"></td>
    <td align="right">BP:</td>
    <td><input name="BP" type="text" class="textbox2" width="200" /></td>
</tr>
<tr>
	<td>Diagnosis OS:</td>
    <td><input name="diagle" type="text" class="textbox2" width="200"></td>
    <td align="right">Urine Sugar</td>
    <td><input name="urine" type="text" class="textbox2" width="200" /></td>
</tr>
<tr>
	<td>Treatment: </td>
    <td colspan="3"><textarea name="treatment" type="text" class="textfieldComp" rows="5" cols="45"></textarea><!--<input name="treatment" type="text" class="textbox2" width="200">--></td>
</tr>
<tr>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">Others:</td>
    <td><input name="others" type="hidden" class="textbox2" width="200" /></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td><input type="submit" value="Save" /> &nbsp; <a href="index.php">Cancel</a></td>
  <td></td>
  <td>&nbsp;</td>
</tr>
</table>
</form>
</div>
</body>
</html>