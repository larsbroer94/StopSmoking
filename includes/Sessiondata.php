<?php
function sessionStart() {
	session_start();
	$_SESSION["accesstoken"] = "testtoken";
}

function sessionCheck() {
	if(isset($_SESSION['accesstoken']) && !empty($_SESSION['accesstoken']))
	{
		echo 'Set and not empty, and no undefined index error!';
		return true;
	}else
		return false;
}

function sessionDestroy() { session_destroy(); }
?>