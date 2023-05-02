<?php
	session_start();
?>
<form action="profile/changename.php" method="post">
	<label> Nowa nazwa <input type="text" name="user"> </input> </label>
	<input type="submit" value="Zmień"> </input>
</form>