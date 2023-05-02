<?php
	$i=1;
	echo '<form enctype="multipart/form-data" action="add-image.php?idgame='.$_POST['idgame'].'" method="post">';
	while ( $i <= $_POST['howMany'] )
	{
		echo '<label> Obraz '.$i.  '<input type="file" name="image'.$i.'"> </input> </label> <br>';
		$i++;
	}
	echo '<input type="submit" value="Dodaj"> </input>
		<input type="number" name="howMany" value='.$_POST['howMany'].' hidden> </input>
		</form>';
?>
