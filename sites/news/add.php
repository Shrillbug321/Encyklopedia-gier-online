<?php
	session_start();
	require_once("../databaseconnection.php");
	echo $sql = 'SELECT id FROM news WHERE id = (SELECT MAX(id) FROM news)';
	$result = $connection->query($sql);
	$row = $result->fetch_assoc();
	$idNews = $row['id']+1;
	echo $img = '../media/news/'.$idNews.'/1.jpg';
	echo $sql = 'INSERT INTO news (idGame, author, title, image, text) VALUES ("'.$_POST['game'].'", "'.$_SESSION['user'].'", "'.$_POST['title'].'", "'.$img.'", "'.$_POST['text'].'")';
	$connection->query($sql);
	mkdir('../../media/news/'.$idNews);
	echo $_FILES['image'];
	if (isset($_FILES['image']))
	{
		echo$directory = '../../media/news/'.$idNews.'/';
		$directoryup = '../media/news/'.$idNews.'/1.jpg';
		echo $filename = $directory.basename($_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], $filename);
		rename($filename, $directory.'1.jpg');
	}
	header('Location: ../news.php?id='.$idNews);
?>