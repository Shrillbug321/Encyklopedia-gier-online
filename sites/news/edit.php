<?php
	session_start();
	header('Location: ../game.php?idgame='.$_POST['idgame']);
	require_once("../databaseconnection.php");
	$date = substr($_POST['releasedDate'], 8, 2).'-'.substr($_POST['releasedDate'], 5, 2).'-'.substr($_POST['releasedDate'], 0, 4);
	echo$sql = 'UPDATE games SET title="'.$_POST['title'].'", description="'.$_POST['description'].'", platforms="'.$_POST['platforms'].'",
		releasedDate="'.$date.'", producent="'.$_POST['producent'].'", publisher="'.$_POST['publisher'].'",
		language="'.$_POST['language'].'", status="'.$_POST['status'].'", requirements="'.$_POST['requirements'].'" WHERE id='.$_POST['idgame'];
	$connection->query($sql);
	if (isset($_POST['cover']))
	{
		$directory = '../../media/games/'.$_POST['idgame'].'/img/';
		$directoryup = '../media/games/'.$_POST['idgame'].'/img/avatar.jpg';
		$filename = $directory.basename($_FILES['cover']['name']);
		move_uploaded_file($_FILES['cover']['tmp_name'], $filename);
		rename($filename, $directory.'/cover.jpg');
	}
?>