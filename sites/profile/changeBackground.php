<?php
    global $connection;
    session_start();
	require_once("../databaseConnection.php");
	header('Location: '.$_SERVER['HTTP_REFERER']);
	$directory = '../../media/users/'.$_SESSION['idUser'].'/';
	$directoryUpload = '../media/users/'.$_SESSION['idUser'].'/background.jpg';
	$fileName = $directory.basename($_FILES['background']['name']);
	move_uploaded_file($_FILES['background']['tmp_name'], $fileName);
	rename($fileName, $directory.'/background.jpg');
	$sql = 'UPDATE users SET background ="'.$directoryUpload.'" WHERE id='.$_SESSION['idUser'];
	$connection->query($sql);
	$_SESSION['background'] = $directoryUpload;
?>