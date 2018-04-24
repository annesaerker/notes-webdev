<?php
	session_start();
	$_SESSION['sUserName'] = "A";
	echo $_SESSION['sUserName'];
?>