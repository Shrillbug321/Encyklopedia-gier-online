<?php
	session_start();
?>
<form enctype="multipart/form-data" action="profile/changeAvatar.php" method="post">
	<label> Obraz <input  type="file" name="avatar"> </label>
	<input type="submit" value="Zmień">
</form>