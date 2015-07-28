<?php
$errorMsg = "";
$username = "";
$password = "";
$cpassword = "";
$firstname = "";
$middlename = "";
$lastname = "";
$month = "";
$day = "";
$year = "";
$Gender = "";
$level = "";
$phone = "";
$phone2 = "";
$nextofKin = "";
$nokPhone = "";
$mstat = "";
$spouse = "";

	if($_POST['username'])
	{
		include_once "connect_to_mysql.php";
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$phone = $_POST['phone1'];
		$phone2 = $_POST['phone2']; 
		$nextofKin = $_POST['nextofkin'];
		$nokPhone = $_POST['nextphone'];
		$spouse = $_POST['spousename'];
		$month = $_POST['month'];
		$day = $_POST['day'];
		$year = $_POST['YYYY'];
		$Gender = $_POST['gender'];
		$level = $_POST['level'];
		$mstat = $_POST['mstats'];
		
		if ((!$username) || (!$firstname) || (!$lastname) || (!$phone) || (!$password) || ($password != $cpassword) || (!$month) || (!$day) || (!$year))
		 {
			$errorMsg = "You did not fill the following required information!<br />";
			if (!$username){
				$errorMsg .= "-- Username";}
			else if (!$password){
				$errorMsg .= "-- Password";}
			else if($password != $cpassword){
				$errorMsg .= "-- Password Mis-match.";}
			else if	(!$firstname){
				$errorMsg .= "-- firstname";	
			}
			else if (!$lastname){
				$errorMsg .= "-- lastname";
			}
			else if	(!$month){
				$errorMsg .= "-- Month of Birth";	
			}
			else if (!$day){
				$errorMsg .= "-- Day of Birth";
			}
			else if (!$year) {
				$errorMsg .= "-- Year of Birth.";
			}
			else if (!$phone) {
				$errorMsg .= "-- Phone no.";
			}
			
		}else
		{
			$sql_username_check = mysql_query("SELECT id FROM staff WHERE username='$username' LIMIT 1");
			$username_check = mysql_num_rows($sql_username_check);
			if ($username_check > 0){ 
		$errorMsg = "<u>ERROR:</u><br />Your User Name is already in use inside our system. Please try another.";}
		else {
		// Add MD5 Hash to the password variable
       $hashedPass = md5($password); 

			$sql = mysql_query("INSERT INTO staff (id, username, password, firstname, middlename, lastname, DOB, Gender, level, phone, phone2, nextofkin, nokphone, marritalStats, spouse, Time) VALUES (NULL, '$username', '$password', '$firstname', '$middlename', '$lastname', '$year/$month/$day', '$Gender', '$level', '$phone', '$phone2', '$nextofKin', '$nokPhone', '$mstat', '$spouse', CURRENT_TIMESTAMP)") or die(mysql_error());
			//print success message if login successful then exit the script
			echo "$username, your registration has been successful <br /><a href='login.php'>Click here<br>
</a> to login";
			//header("location: login.php");
			exit();
		}
	}
}	
?>
<div>
<p>Please Fill in all fields with asterisks </p>
<p>&nbsp;<font color="#FF0000"><?php echo"$errorMsg"; ?></font></p>
<form action="staffreg.php" method="post" enctype="multipart/form-data">
<table cellspacing="10">  
  
  	<tr>
    	<td width="125">Username</td>
        <td width="297"><input type="text" name="username" width="200" class="textbox2" maxlength="15" value="<?php echo"$username"; ?>"/> 
          &nbsp;*</td>
    </tr>
    <tr>
    	<td>Password</td>
        <td><input type="password" name="password" width="200" class="textbox2" maxlength="15" value="<?php echo"$password"; ?>" />
        &nbsp;*</td>
    </tr>
    <tr>
    	<td>confirm-password</td>
        <td><input type="password" name="cpassword" width="200" class="textbox2" maxlength="15" value="<?php echo"$cpassword"; ?>"/> 
          &nbsp;*</td>
    </tr>
    <tr>
    	<td>Firstname</td>
        <td><input type="text" name="firstname" width="200" class="textbox2" maxlength="20" value="<?php echo"$firstname"; ?>"/>
        &nbsp;*</td>
    </tr>
    <tr>
    	<td>Middlename</td>
        <td><input type="text" name="middlename" width="200" class="textbox2" maxlength="20" value="<?php echo"$middlename"; ?>"/></td>
    </tr>
    <tr>
    	<td>Lastname</td>
        <td><input type="text" name="lastname" width="200" class="textbox2" maxlength="20" value="<?php echo"$lastname"; ?>"/>
        &nbsp;*</td>
    </tr>
    <tr>
    	<td>Date of Birth</td>
        <td>
        <select name="month" class="textbox3">
        <option value="<?php echo"$month"; ?>" selected="selected"><?php echo"$month"; ?></option>
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
        <option value="<?php echo"$day"; ?>" selected="selected"><?php echo"$day"; ?></option>
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
      
      <select name="YYYY" class="textbox3">
      <option value="<?php echo"$year"; ?>" selected="selected"><?php echo"$year"; ?></option>

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

</select>
        </td>
    </tr>
    <tr>
    	<td>Gender</td>
        <td><input name="gender" type="radio" value="Male" checked >
Male
  <input name="gender" type="radio" value="Female" >
Female </td>
    </tr>
      	<tr>
    	<td width="125">Level</td>
        <td width="297"><select name="level" class="textbox3">
        <option value="admin">Administrator</option>
      <option value="staff" selected="selected">Staff</option>
      </select></td>
    </tr>
    <tr>
    	<td>Phone No.</td>
        <td><input type="text" name="phone1" width="200" class="textbox2" maxlength="14" value="<?php echo"$phone"; ?>"/>
        &nbsp;*</td>
    </tr>
    <tr>
    	<td>Phone No. 2</td>
        <td><input type="text" name="phone2" width="200" class="textbox2" maxlength="14" value="<?php echo"$phone2"; ?>" /></td>
    </tr>
      	<tr>
    	<td width="125">Next of kin</td>
        <td width="297"><input type="text" name="nextofkin" width="200" class="textbox2" maxlength="25" value="<?php echo"$nextofKin"; ?>"/></td>
    </tr>
    <tr>
    	<td>Next of Kin's phone</td>
        <td><input type="text" name="nextphone" width="200" class="textbox2" maxlength="14" value="<?php echo"$nokPhone"; ?>"/></td>
    <tr>
    	<td>Marital Status</td>
        <td><select name="mstats" class="textbox3" >
        <option value="<?php echo"$mstat"; ?>"><?php echo"$mstat"; ?></option>
        <option value="married">Married</option>
        <option value="single">Single</option>
        <option value="divorced">Divorced</option></select></td>
    </tr>
    <tr>
    	<td>Spouse name</td>
        <td><input type="text" name="spousename" width="200" class="textbox2" value="<?php echo"$spouse"; ?>"/></td>
    </tr>
    <tr>
    	<td>&nbsp;</td>
        <td><input type="submit" value="Submit"> &nbsp; <input type="reset" value="Reset" /></td>
    </tr>
    
  </table>
</form>
<br>
Already registered? <a href="index.php">Log in</a>
</div>