<?php
	session_start();
	header('Location: gallery.php?idgame='.$_GET['idgame']);
	$directory = '../media/games/'.$_GET['idgame'].'/img/';
	$images = scandir($directory);
	$imagesInFolder = count($images)-2;
	$i=1;
	$start=$imagesInFolder;
	$end = $_POST['howMany']+$imagesInFolder;
	while ( $start < $end )
	{
		$directoryup = '../media/games/'.$_GET['idgame'].'/img/'.$start.'.jpg';
		$filename = $directory.basename($_FILES['image'.$i]['name']);
		move_uploaded_file($_FILES['image'.$i]['tmp_name'], $filename);
		rename($filename, $directory.'/'.$start.'.jpg');
		$start++;
		$i++;
	}
?>
