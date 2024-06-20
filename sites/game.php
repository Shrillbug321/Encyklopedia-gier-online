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
				$sql = 'SELECT id, title, description, platforms, releasedDate, producent, publisher, language, status, requirements FROM games WHERE id="'.$_GET['idGame'].'"';
				$result = $connection->query($sql);
				$row = $result->fetch_assoc();
					echo '<div id="game"> 
					<img class="cover" src="../media/games/'.$_GET['idGame'].'/img/cover.jpg"> 
					<div id="info"> 
						<p class="gameTitle">'.$row['title'].'</p>';
						if (isset ($_SESSION['admin']))
							echo '<div id="adminMenu"> 
								<a href="editgameform.php?idGame='.$_GET['idGame'].'"> <img class="icon" src="../media/pencil.png"> </a> 
								<a href="add-image-form.php?idGame='.$_GET['idGame'].'"> <img class="icon" src="../media/image.png"> </a>
								<a href="add-movie-form.php?idGame='.$_GET['idGame'].'"> <img class="icon" src="../media/movie.png"> </a>
							</div>';
						echo 
						'<ul id="submenu"> 
							<li> <a href="gallery.php?idGame='.$_GET['idGame'].'"> Galeria </a> </li>
							<li> <a href="movies.php?idGame='.$_GET['idGame'].'"> Filmy </a> </li>
						</ul>'
						.'<p class="data"> Platformy: '.$row['platforms'].'</p>'
						.'<p class="data"> Data wydania: '.$row['releasedDate'].'</p>'
						.'<p class="data"> Producent: '.$row['producent'].'</p>'
						.'<p class="data"> Wydawca: '.$row['publisher'].'</p>'
						.'<p class="data"> Język: '.$row['language'].'</p>'
						.'<p class="data"> Stan: '.circleColor($row['status']).$row['status'].'</p>'
					.'</div> <div style="clear:both;">
					</div>'
					.'<p class="description"> Opis </p>
					<p class="data">'.$row['description'].'</p>'
					.'<p class="description"> Wymagania sprzętowe </p>
					<p class="data">'.$row['requirements'].'</p>
					</div>';
				$sql = 'SELECT id, title FROM news WHERE idGame="'.$_GET['idGame'].'"';
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

<?php 
	function circleColor($status)
	{
        switch ($status)
        {
            case 'Aktywna, rozwijana':
                return '<span style="font-size: 22px; color: #63e600;"> &#9679;</span>';
            case 'Nieaktywna':
                return '<span style="font-size: 22px; color: red;"> &#9679;</span>';
            default:
                return '<span style="font-size: 22px; color: #ffeb33;"> &#9679;</span>';
        }
	}
?>
<!-- Sebastian Dreszer czerwiec 2020 -->