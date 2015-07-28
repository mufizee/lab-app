<?php
session_start();
session_destroy(); 
if(!session_is_registered('id')){
	header("Location: login.php"); 
$msg = "You are now logged out";
} else {
$msg = "<h2>could not log you out</h2>";
} 
?> 