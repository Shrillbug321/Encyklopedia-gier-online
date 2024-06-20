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
				$sql = 'SELECT galleryFolder FROM games WHERE id="'.$_GET['idGame'].'"';
				$result = $connection->query($sql);
				$directory = $result->fetch_assoc()['galleryFolder'];
				$a = scandir($directory);
				echo '<div> <div id="buttons"> 
                        <button id="prev" onclick=prev("'.$directory.'")> &lt </button>
                        <button id="next" onclick="next(\''.$directory.'\','.(sizeof($a)-3).')"> &gt </button> </div>
				<img id="imageBig" src="'.$directory.'/1.jpg" data-id=1>  </div>';
				for ($i=1; $i<sizeof($a); $i++)
					echo '<img class="image" src="'.$directory.$i.'.jpg" onclick="zoom(\''.$directory.$i.'.jpg\', '.$i.')"> ';
			?>
			</div>
		</article>
		<?php require_once("footer.php"); ?>
	</body>
</html>