<?php
    global $connection;
    session_start();
	require_once("../databaseConnection.php");
	if (isset($_POST['subcategory']))
		$sql = 'INSERT INTO games (title, idCategory, idSubcategory)
                VALUES ("'.$_POST['title'].'", '.$_POST['category'].', '.$_POST['subcategory'].')';
	else
		$sql = 'INSERT INTO games (title, idCategory)
                VALUES ("'.$_POST['title'].'", '.$_POST['category'].')';

	$connection->query($sql);
	$sql = 'SELECT id FROM games WHERE id = (SELECT MAX(id) FROM games)';
	$result = $connection->query($sql);
	$row = $result->fetch_assoc();
	$img = '../../media/games/'.$row['id'].'/img/';
	$movies = '../../media/games/'.$row['id'].'/movies/';
	mkdir('../../media/games/'.$row['id']);
	mkdir($img);
	mkdir($movies);
	$sql = 'UPDATE games SET galleryFolder="../media/games/'.$row['id'].'/img/",
	        moviesFolder="../media/games/'.$row['id'].'/movies/"
	        WHERE id='.$row['id'];
	$result = $connection->query($sql);
	header('Location: ../editGameForm.php?idGame='.$row['id']);
?>