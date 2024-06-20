<?php
    global $connection;
    session_start();
	require_once("../databaseConnection.php");
	$sql = 'UPDATE users SET user="'.$_POST['user'].'" WHERE id='.$_SESSION['idUser'];
	if ($connection->query($sql) === true)
		$_SESSION['user'] = $_POST['user'];
	header('Location: '.$_SERVER['HTTP_REFERER']);
?>