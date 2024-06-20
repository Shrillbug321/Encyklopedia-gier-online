<?php
	session_start();
	header('Location: movies.php?idGame='.$_POST['idGame']);
	$directory = '../media/games/'.$_POST['idGame'].'/movies/';
	$movies = scandir($directory);
	$moviesInFolder = count($movies)-1;
	$i=1;
	$start=$moviesInFolder;
	$end = $_POST['howMany']+$moviesInFolder;
	while ($start < $end)
	{
		$directoryUpload = '../media/games/'.$_POST['idGame'].'/movies/'.$start.'.mp4';
		$fileName = $directory.basename($_FILES['movie'.$i]['name']);
		move_uploaded_file($_FILES['movie'.$i]['tmp_name'], $fileName);
		rename($fileName, $directory.'/'.$start.'.mp4');
		$start++;
		$i++;
	}
?>
