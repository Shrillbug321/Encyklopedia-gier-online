<?php
	session_start();
?>
<form enctype="multipart/form-data" action="profile/changeavatar.php" method="post">
	<label> Obraz <input  type="file" name="avatar"> </input> </label>
	<input type="submit" value="Zmień"> </input>
</form>