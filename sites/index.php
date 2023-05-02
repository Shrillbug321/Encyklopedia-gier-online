<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<?php require_once ("head.php"); ?>
	</head>
	<body>
		<?php require_once ("header.php"); ?>
		<article>
			<div id="content">
			<?php
				echo '<div id="games">
				<p class="title"> Ostatnio dodane gry </p>';
				$sql = 'SELECT id, title, galleryFolder FROM games ORDER BY id DESC LIMIT 5';
				$result = $connection->query($sql);
				while( $row = $result->fetch_assoc())
				{
					echo '<a class="smallCoverDiv" href="game.php?idgame='.$row['id'].'"> <img class="smallCover" src="'.$row['galleryFolder'].'cover.jpg"> <br> <p class="title"> '.$row['title'].' </p> </a>';
				}
				echo '<div style="clear: both;"> </div>  </div>';
				echo '<div id="lastNews">
				<p class="title"> Ostatnio dodane wiadomości </p>';
				$sql = 'SELECT id, idgame, title FROM news ORDER BY id DESC LIMIT 5';
				$result = $connection->query($sql);
				while( $row = $result->fetch_assoc())
				{
					$sql2 = 'SELECT galleryFolder FROM games WHERE id='.$row['idgame'];
					$row2 = $connection->query($sql2)->fetch_assoc();
					echo '<a class="smallCoverDiv" href="news.php?id='.$row['id'].'"> <img class="smallCover" src="'.$row2['galleryFolder'].'cover.jpg"> <br> <p class="title"> '.$row['title'].' </p> </a>';
				}
				echo '<div style="clear: both;"> </div>  </div>';
			?>
			</div>
		</article>
		<?php require_once ("footer.php"); ?>
	</body>
</html>