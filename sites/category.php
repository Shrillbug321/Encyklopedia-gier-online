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
				<div id="games">
				<?php
					$sql = 'SELECT id, title, galleryFolder FROM games WHERE idCategory="'.$_GET['id'].'"';
					if (isset($_GET['sub']))
						$sql.='AND idSubcategory='.$_GET['sub'];

					$result = $connection->query($sql);
					while ($row = $result->fetch_assoc())
						echo '<a class="smallCoverDiv" href="game.php?idGame='.$row['id'].'"> <img class="smallCover" src="'.$row['galleryFolder'].'cover.jpg"> <p class="title"> '.$row['title'].' </p> </a>';
				?>
				<div style="clear:both;"> </div>
				</div>
			</div>
		</article>
		<?php require_once("footer.php"); ?>
	</body>
</html>