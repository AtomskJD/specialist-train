<?php
	session_start();
	$_SESSION['hello']="qwe";
	echo session_name(). '=' . session_id();
?>