<?php
	session_start();
?>
<form enctype="multipart/form-data" action="profile/changebackground.php" method="post">
	<label> Tło <input  type="file" name="background"> </input> </label>
	<input type="submit" value="Zmień"> </input>
</form>