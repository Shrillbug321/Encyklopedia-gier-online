<?php
    global $connection;
    session_start();
	require_once("../databaseConnection.php");
	$sql = 'SELECT id FROM news WHERE id = (SELECT MAX(id) FROM news)';
	$result = $connection->query($sql);
	$row = $result->fetch_assoc();
	$idNews = $row['id']+1;
	$img = '../media/news/'.$idNews.'/1.jpg';
	$sql = 'INSERT INTO news (idGame, author, title, image, text)
            VALUES ("'.$_POST['game'].'", "'.$_SESSION['user'].'", "'.$_POST['title'].'", "'.$img.'", "'.$_POST['text'].'")';
	$connection->query($sql);
	mkdir('../../media/news/'.$idNews);
	if (isset($_FILES['image']))
	{
		$directory = '../../media/news/'.$idNews.'/';
		$directoryUpload = '../media/news/'.$idNews.'/1.jpg';
		$fileName = $directory.basename($_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], $fileName);
		rename($fileName, $directory.'1.jpg');
	}
	header('Location: ../news.php?id='.$idNews);
?>