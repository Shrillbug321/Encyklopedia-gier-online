<?php
	session_start();
	require_once ("../databaseconnection.php");
	header('Location: '.$_SERVER['HTTP_REFERER']);
	$directory = '../../media/users/'.$_SESSION['idUser'].'/';
	$directoryup = '../media/users/'.$_SESSION['idUser'].'/avatar.png';
	$filename = $directory.basename($_FILES['avatar']['name']);
	move_uploaded_file($_FILES['avatar']['tmp_name'], $filename);
	rename($filename, $directory.'/avatar.png');
	$sql = 'UPDATE users SET avatar ="'.$directoryup.'" WHERE id='.$_SESSION['idUser'];
	$connection->query($sql);
?>