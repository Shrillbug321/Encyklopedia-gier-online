<?php
	session_start();
	unset($_SESSION['idUser']);
	unset($_SESSION['user']);
	unset($_SESSION['background']);
	if( isset($_SESSION['admin']))
		unset($_SESSION['admin']);
	session_destroy();
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>