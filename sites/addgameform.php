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
				<form id="addGameForm" action="game/add.php" method="post">
					<label> Nazwa gry <input type="text" name="title"> </input> </label>
					<?php
						$sql = 'SELECT id, category FROM categorytable';
						$result = $connection->query($sql);
						echo '<select id="categorySel"name="category">';
						while ( $row = $result->fetch_assoc())
						{
							echo '<option value='.$row['id'].'>'. $row['category'] .' </option>';
						}
					
						echo '</select>';
						echo '<select id="subcategorySel" name="subcategory" style="display:none;">';
					?>
					<input type="submit" value="Dodaj grę"> </input>
					
				</form>
			
			</div>
		</article>
		<?php require_once ("footer.php"); ?>
	</body>
</html>