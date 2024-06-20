<?php
    global $connection;
    session_start();
	header('Location: ../game.php?idGame='.$_POST['idGame']);
	require_once("../databaseConnection.php");
    $date = $_POST['releasedDate'];
	$dateFormatted = substr($date, 8, 2).'-'
        .substr($date, 5, 2).'-'.substr($date, 0, 4);
	$sql = 'UPDATE games SET title="'.$_POST['title']
        .'", description="'.$_POST['description']
        .'", platforms="'.$_POST['platforms']
        .'", releasedDate="'.$dateFormatted
        .'", producent="'.$_POST['producent']
        .'", publisher="'.$_POST['publisher']
        .'", language="'.$_POST['language']
        .'", status="'.$_POST['status']
        .'", requirements="'.$_POST['requirements']
        .'" WHERE id='.$_POST['idGame'];
	$connection->query($sql);
	if (isset($_POST['cover']))
	{
		$directory = '../../media/games/'.$_POST['idGame'].'/img/';
		$directoryUpload = '../media/games/'.$_POST['idGame'].'/img/avatar.jpg';
		$fileName = $directory.basename($_FILES['cover']['name']);
		move_uploaded_file($_FILES['cover']['tmp_name'], $fileName);
		rename($fileName, $directory.'/cover.jpg');
	}
?>