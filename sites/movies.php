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
				$sql = 'SELECT moviesFolder FROM games WHERE id='.$_GET['idGame'];
				$result = $connection->query($sql);
				$row = $result->fetch_assoc();				
				$howMany = count(scandir($row['moviesFolder']))-2;
                $i=1;
				echo '<div id="movies">';
				while ($i <= $howMany)
				{
					echo '<iframe src="'.$row['moviesFolder'].$i.'.mp4" title="Film numer '.$i.'" allowfullscreen="true"> </iframe>';
					$i++;
				}
				echo '</div>';
			?>
			</div>
		</article>
		<?php require_once("footer.php"); ?>
	</body>
</html>