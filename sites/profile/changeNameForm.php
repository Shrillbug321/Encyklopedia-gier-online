<?php
	session_start();
?>
<form action="profile/changeName.php" method="post">
	<label> Nowa nazwa <input type="text" name="user"> </label>
	<input type="submit" value="Zmień">
</form>