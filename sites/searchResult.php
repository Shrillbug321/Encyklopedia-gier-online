<?php
    global $connection;
    session_start();
	require_once("databaseConnection.php");
	echo '<script src="../script.js"> </script>';
	echo '<style src="../style.css"> </style>';
	if (strlen($_POST['search']) < 3)
		echo '<div id="wrongLogin"> <div> Proszę wpisać co najmniej 3 znaki. <br/>
              <button> Rozumiem </button> </div> </div>';
	else
	{
		echo '<p class="title"> Wyniki wyszukania dla '.$_POST['search'].': </p> <br/>';
		$sql = 'SELECT id, title, galleryFolder FROM games WHERE title LIKE "%'.$_POST['search'].'%"';
		$result = $connection->query($sql);
		if (mysqli_num_rows($result) > 0)
		{
			while ($row = $result->fetch_assoc())
				echo '<a class="smallCoverDiv" href="game.php?idGame='.$row['id'].'">
				 <img class="smallCover" src="'.$row['galleryFolder'].'cover.jpg">
				 <p class="title"> '.$row['title'].' </p> </a>';
			echo '<div style="clear:both;"> </div>';
		}
		else
			echo '<p class="title"> Brak wyników </p>';
	}
?>