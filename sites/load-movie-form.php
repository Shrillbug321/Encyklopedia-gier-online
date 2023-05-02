<?php
	$i=1;
	echo '<form enctype="multipart/form-data" action="add-movie.php" method="post">';
	while ( $i <= $_POST['howMany'] )
	{
		echo '<label> Film '.$i.  '<input type="file" name="movie'.$i.'"> </input> </label> <br>';
		$i++;
	}
	echo '<input type="submit" value="Dodaj"> </input>
		<input type="number" name="howMany" value="'.$_POST['howMany'].'" hidden> </input>
		<input type="idgame" name="idgame" value="'.$_POST['idgame'].'" hidden> </input>
		</form>';
?>
