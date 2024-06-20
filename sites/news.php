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
			<?php
				$sql = 'SELECT idGame, author, date, title, image, text FROM news WHERE id ='.$_GET['id'];
				$result = $connection->query($sql);
				$row = $result->fetch_assoc();
				echo '<div id="newsContent">
					<div> <p class="newsMeta">'.$row['author'].'</p> <p class="newsMeta"> '.$row['date'].'</p> </div>
					<p class="title">'.$row['title'].'</p>
					<img class="newsImage" src="'.$row['image'].'">
					<p>'.$row['text'].'</p>
				</div>';
				$sql = 'SELECT id, title FROM news WHERE idGame="'.$row['idGame'].'"';
				$result = $connection->query($sql);
				echo '<div id="gameNews">';
				while ($row = $result->fetch_assoc())
					echo '<a href="news.php?id='.$row['id'].'">'.$row['title'].'</a> <br/>';

				echo '</div>';
				echo '<div style="clear: both;"> </div>';
			?>
			</div>
		</article>
		<?php require_once("footer.php"); ?>
	</body>
</html>