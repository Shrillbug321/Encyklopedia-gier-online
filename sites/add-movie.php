<?php
	session_start();
	header('Location: movies.php?idgame='.$_POST['idgame']);
	$directory = '../media/games/'.$_POST['idgame'].'/movies/';
	$movies = scandir($directory);
	$moviesInFolder = count($movies)-1;
	$i=1;
	$start=$moviesInFolder;
	$end = $_POST['howMany']+$moviesInFolder;
	while ( $start < $end )
	{
		$directoryup = '../media/games/'.$_POST['idgame'].'/movies/'.$start.'.mp4';
		$filename = $directory.basename($_FILES['movie'.$i]['name']);
		move_uploaded_file($_FILES['movie'.$i]['tmp_name'], $filename);
		rename($filename, $directory.'/'.$start.'.mp4');
		$start++;
		$i++;
	}
?>
