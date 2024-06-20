<?php
    global $connection;
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<?php require_once("head.php"); ?>
	</head>
	<body>
		<?php require_once("header.php"); ?>
		<article>
			<div id="content">
				<div id="lastNews">
				<?php
					$sql = 'SELECT id, idGame, title FROM news';
					$result = $connection->query($sql);
					while ($row = $result->fetch_assoc())
					{
						$sql2 = 'SELECT galleryFolder FROM games WHERE id='.$row['idGame'];
						$result2 = $connection->query($sql2);
						$row2 = $result2->fetch_assoc();
						$cover= $row2['galleryFolder'].'cover.jpg';
						echo '<a class="smallCoverDiv" href="news.php?id='.$row['id'].'">
						        <img class="smallCover" src="'.$cover.'"> <p class="title"> '.$row['title'].' </p> </a>';
					}
				?>
				<div style="clear:both;"> </div>
				</div>
			</div>
		</article>
		<?php require_once("footer.php"); ?>
	</body>
</html>