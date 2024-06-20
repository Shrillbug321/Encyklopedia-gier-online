<?php
	session_start();
	header('Location: gallery.php?idGame='.$_GET['idGame']);
	$directory = '../media/games/'.$_GET['idGame'].'/img/';
	$images = scandir($directory);
	$imagesInFolder = count($images)-2;
	$i=1;
	$start=$imagesInFolder;
	$end = $_POST['howMany']+$imagesInFolder;
	while ($start < $end)
	{
		$directoryUpload = '../media/games/'.$_GET['idGame'].'/img/'.$start.'.jpg';
		$fileName = $directory.basename($_FILES['image'.$i]['name']);
		move_uploaded_file($_FILES['image'.$i]['tmp_name'], $fileName);
		rename($fileName, $directory.'/'.$start.'.jpg');
		$start++;
		$i++;
	}
?>
