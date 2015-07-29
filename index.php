<?php
session_start();
if (!isset($_SESSION['id'])) {
	Header('Location: login.php');
} else {
	$userid   = $_SESSION['id'];
	$username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to your Medical Potal</title>
<script type="text/javascript" src="js/jquery.js">
</script>
<script type="text/javascript">
//1. The basic jquery syntax, it tells the browser to execute the codes inside the brackets only if the DOM is ready for any modification that's going to be made by the scripts
$(function () {
	//2. Procedure block declaration to handle the onclick method (@ #11 & #13), param (string) the URL to
	function ajaxify(file){
		//3.create a new div element with class "loading", add the HTML sting into it, then add itself as a child of body and fade it in (take a look at stylesheet declaration, we set the display attribute to "none")
		$('div id="loading"></div>').html("Loading Content: "+file+"...").appendTo('body').fadeIn();
		//4. create HTTP GET request via ajax, parameter file is the url of the file to load, and on data received..
		$.get(file,function(data){
			//5. Slide up the wrapper div and once the slide up effect completee
			$("#wrapper").slideUp('slow',function(){
				//6. Put the data as HTML string into the wrapper div ($(this) refers to wrapper div) then slid it down slowly, and once slide down completed..
				$(this).html(data).slideDown('slow',function(){
					//7. Fade out the loading content, and then remove it from the DOM when fade out effect completed
					$('#loading').fadeOut('slow',function(){$(this).remove();});
				});
			});
		});
	}

	//8. Anchor inside the selector pattern on click
	$("a").click(function(){
		//$("div#nav ul li a").click(function(){
		//9. remove the class current from the element which  currently has it
		$('a.current').removeClass('current');
		//$('#nav ul li a.current').removeClass('current');
		//10 add the current style to the current clicked anchor
		$(this).addClass('current');
		//11. execute ajaxify function with parameter the URL(href) of the current clicked anchor
		ajaxify($(this).attr('href'));
		//12. Important, to prevent default behaviour of a link, otherwise it will load the URL with full round trip
		return false;
	});
	//13 For the first loaded index.html, tell the browser to load the homepage.html via ajax;
	ajaxify('home.php');
});
</script>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!--navigation -->
<div id="nav">
<div class="clear name"> First Eye Clinic</div>
<div class="holder">
<ul>
<!-- current class for the first load page -->
<table>
<tr>
<td width="59"><li><a class="current" href="home.php">Home</a></li></td>
<td width="72"><li><a href="registration.php">Register</a></li></td>
<td width="85"><li><a href="continuation.php">New_Sheet</a></li></td>
<td width="55"><li><a href="stockkeep.php">Stock</a></li></td>
<td width="49"><li><a href="newrecipt.php">Bills</a></li></td>
<td width="97"><li><a href="viewResults.php">Find_Results</a></li></td>
<!--<td width="67"><li><a href="receipt.php">Receipt</a></li></td>-->
<td width="67"><li><a href="patient.php">Patients</a></li></td>
<td width="200"><div id="search">
<!--<form action="findpatient.php" method="post">
  <input type="text" name="patient" class="search" />
  <img src="Images/iconsearch.jpg" width="20" height="15" alt="Press enter to search" />
</form>-->
</div></td><td><form action="logout.php" method="post"><input type="submit" value="logout" /></form>  </td></tr>
</table>

</ul>
</div><!--end of holder -->

<div class="quit"><form action="logout.php" method="post"></form></div>
</div>
<!-- content holder -->

<div id="container">
<div id="links">
  <br />
  	<div class="links"><img src="Images/FastIcon_Users1.png" width="20" height="20" /><a href="editpatient.php">  Edit Patient</a></div>
    <div class="links"><img src="Images/Text-Edit1.png" width="20" height="20" /> <a href="editrecord.php">Edit Record</a></div>
    <div class="links"><img src="Images/document-icon1.png" width="20" height="20" /><a href="editrecord.php"> Notes</a></div>
    <div class="links"><img src="Images/iconsearch1.png" width="20" height="20" /><a href="search.php"> Find Patients</a></div>
    <div class="links"><img src="Images/newhmo1.png" width="20" height="20" /><a href="newhmo.php"> Register HMO</a></div>
    <div class="links"><img src="Images/p63icon.png" width="20" height="20" /><a href="findreceipt.php"> Find Receipt</a></div>
    <div class="links"><img src="Images/cancelr.png" width="20" height="20" /><a href="cancelreceipt.php"> Cancel Receipt</a></div>
<!--    <div class="links"><img src="Images/Text-delete.png" width="20" height="20" /><a href="delhmo.php"> Delete HMO</a></div>
-->  <br />
  <br />
<br />
</p>

	<?php
include_once "connect_to_mysql.php";
$month = date("m");
$day   = date("d");
echo "<font color='#006699'>&nbsp;&nbsp;Birthdays this Month</font>";
echo "<br /><br />";
$bdays = mysql_query("Select * from patients where Month like '$month'");
//$check_bday = mysql_num_rows($bdays);
//if($check_bday > 0)
//{

while ($row = mysql_fetch_array($bdays)) {
	$shout = $row['bday'];

	echo "<table><tr>";
	echo "<td class='bdays'>" . $row['firstname'] . " " . $row['lastname'] . "</td>";
	echo "<td class='date'>" . $row['DOB'] . "</td>";
	echo "<td>";if ($shout == $day) {echo "<span class='today'>Today</span>";}
	echo "</td>";
	echo "</tr></table>";
}
//mysql_close(mysql_connect);
?>
</p>
</div>
<!--end of div links-->
<div id="wrapper"></div>
<!--end of div wrapper-->
</div><!--end of div container-->
</body>
</html>
