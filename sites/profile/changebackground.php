<?php
	session_start();
	require_once ("../databaseconnection.php");
	header('Location: '.$_SERVER['HTTP_REFERER']);
	$directory = '../../media/users/'.$_SESSION['idUser'].'/';
	$directoryup = '../media/users/'.$_SESSION['idUser'].'/background.jpg';
	$filename = $directory.basename($_FILES['background']['name']);
	move_uploaded_file($_FILES['background']['tmp_name'], $filename);
	rename($filename, $directory.'/background.jpg');
	$sql = 'UPDATE users SET background ="'.$directoryup.'" WHERE id='.$_SESSION['idUser'];
	$connection->query($sql);
	$_SESSION['background'] = $directoryup;
?>