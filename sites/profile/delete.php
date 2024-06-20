<?php
    global $connection;
	session_start();
	require_once("../databaseConnection.php");
	$sql = 'DELETE FROM users WHERE id='.$_SESSION['idUser'];
	$connection -> query($sql);
	rmdir('../../media/users/'.$_SESSION['idUser']);
	header("Location: ../login/logout.php");
?>