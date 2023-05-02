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
				<input id="howManyMovies" type="number" name="howManyMovies"> </input> <button id="howManyMoviesButton"> + </button> 
				<?php echo '<input id="idgame" type="number" name="idgame" value="'. $_GET['idgame'].'" hidden> </input>' ?>
			</div>
		</article>
		<?php require_once ("footer.php"); ?>
	</body>
</html>