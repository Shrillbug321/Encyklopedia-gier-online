<?php
    global $connection;
    session_start();
	require_once("../databaseConnection.php");
	header('Location: '.$_SERVER['HTTP_REFERER']);
	$directory = '../../media/users/'.$_SESSION['idUser'].'/';
	$directoryUpload = '../media/users/'.$_SESSION['idUser'].'/avatar.png';
	$fileName = $directory.basename($_FILES['avatar']['name']);
	move_uploaded_file($_FILES['avatar']['tmp_name'], $fileName);
	rename($fileName, $directory.'/avatar.png');
	$sql = 'UPDATE users SET avatar ="'.$directoryUpload.'" WHERE id='.$_SESSION['idUser'];
	$connection->query($sql);
?>