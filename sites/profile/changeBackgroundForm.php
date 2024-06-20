<?php
	session_start();
?>
<form enctype="multipart/form-data" action="profile/changeBackground.php" method="post">
	<label> Tło <input  type="file" name="background"> </label>
	<input type="submit" value="Zmień">
</form>