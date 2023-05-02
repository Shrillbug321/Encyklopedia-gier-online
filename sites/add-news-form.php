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
				<form id="addNewsForm" enctype="multipart/form-data" action="news/add.php" method="post">
					<label> Tytuł <br> <input type="text" name="title"> </input> </label> <br>
					<label> Gra <br> <select type="text" name="game"> 
					<?php
						$sql = 'SELECT id, title FROM games';
						$result = $connection->query($sql);
						while($row = $result->fetch_assoc())
						{
							echo '<option value='.$row['id'].'>'.$row['title'].' </option>';
						}
					?>
					</select> </label> <br>
					<label> Obrazek <br> <input type="file" name="image"> </input> </label> <br>
					<label> Treść <br> <textarea name="text"> </textarea> </label> <br>
					<input type="submit" value="Dodaj wiadomość"> </input>
				</form>
			</div>
		</article>
		<?php require_once ("footer.php"); ?>
	</body>
</html>