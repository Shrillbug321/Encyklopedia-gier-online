<?php
	session_start();
	require_once("../databaseconnection.php");
	if ( isset($_POST['subcategory']) )
	{
		echo$sql = 'INSERT INTO games (title, idCategory, idSubcategory) VALUES ("'.$_POST['title'].'", '.$_POST['category'].', '.$_POST['subcategory'].')';
	}
	else
		echo$sql = 'INSERT INTO games (title, idCategory) VALUES ("'.$_POST['title'].'", '.$_POST['category'].')';
	echo $connection->query($sql);
	echo $sql = 'SELECT id FROM games WHERE id = (SELECT MAX(id) FROM games)';
	$result = $connection->query($sql);
	$row = $result->fetch_assoc();
	$img = '../../media/games/'.$row['id'].'/img/';
	$movies = '../../media/games/'.$row['id'].'/movies/';
	mkdir('../../media/games/'.$row['id']);
	mkdir($img);
	mkdir($movies);
	echo$sql = 'UPDATE games SET galleryFolder="../media/games/'.$row['id'].'/img/", moviesFolder="../media/games/'.$row['id'].'/movies/" WHERE id='.$row['id'];
	$result = $connection->query($sql);
	header('Location: ../editgameform.php?idgame='.$row['id']);
?>