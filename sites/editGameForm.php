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
		<?php require_once("header.php"); 
			$sql = 'SELECT * FROM games WHERE id='.$_GET['idGame'];
			$result = $connection->query($sql);
			$row = $result->fetch_assoc();
		?>
		<article>
			<div id="content">
				<form id="editGameForm" enctype="multipart/form-data" action="game/edit.php" method="post">
					<label> Nazwa gry <br/> <input type="text" name="title" value="<?php echo $row['title'] ?>"> </label> <br/>
					<?php echo '<img class="cover" src="'.$row['galleryFolder'].'/cover.jpg'.'"> <br/> <input type="file" name="cover"> <br/>'; ?>
					<label> Opis <br/> <textarea id="editDescription" name="description"><?php echo $row['description'] ?> </textarea> </label> <br/>
					<label> Platformy <br/> <input type="text" name="platforms" value="<?php echo $row['platforms'] ?>"> </label> <br/>
					<label> Data wydania <br/> <input type="date" name="releasedDate" value="<?php echo $row['releasedDate'] ?>"> </label> <br/>
					<label> Producent <br/> <input type="text" name="producent" value="<?php echo $row['producent'] ?>"> </label> <br/>
					<label> Wydawca <br/> <input type="text" name="publisher" value="<?php echo $row['publisher'] ?>"> </label> <br/>
					<label> Język <br/> <input type="text" name="language" value="<?php echo $row['language'] ?>"> </label> <br/>
					<label> Stan <br/> <select name="status"> 
						<option> Aktywna, rozwijana </option>
						<option> Aktywna, nierozwijana </option>
						<option> Aktywna, nieoficjalne serwery </option>
						<option> Nieaktywna </option>						
					</select> </label> <br/>
					<label> Wymagania sprzętowe <br/> <textarea name="requirements"><?php echo $row['requirements'] ?></textarea> </label> <br/>
					<?php echo '<input type="text" name="idGame" value= "'. $_GET['idGame'].'" hidden> </input>' ?>
					<input type="submit" value="Zapisz zmiany">
				</form>
			</div>
		</article>
		<?php require_once("footer.php"); ?>
	</body>
</html>