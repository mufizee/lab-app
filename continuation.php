<?php
session_start();
$id = $_SESSION['id'];
if(!isset($_SESSION['id'])){
		Header('Location: login.php');
	}
?>
<form method="post" action="newsheet.php">
Please enter MRno: 
  <input type="text" name="mrno" class="textbox2" /><input class="button" type="submit" value="submit" />
</form>
