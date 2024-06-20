<?php
    global $connection;
	session_start();
	require_once("../databaseConnection.php");
	header('Location: '.$_SERVER['HTTP_REFERER']);
	$sql = 'SELECT password FROM users WHERE id='.$_SESSION['idUser'];
	$result = $connection->query($sql);

	if ($_POST['old'] != $result->fetch_assoc()['password'])
	{
		$_SESSION['changePasswordError'] = 1;
		exit();
	}
	if ($_POST['new'] != $_POST['confirm'])
	{
		$_SESSION['changePasswordError'] = 2;
		exit();
	}
	$sql = 'UPDATE users SET password="'.$_POST['new'].'" WHERE id='.$_SESSION['idUser'];
	$connection->query($sql);
?>