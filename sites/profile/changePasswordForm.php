<?php
	session_start();
?>
<form action="profile/changePassword.php" method="post">
	<label> Stare hasło <input type="text" name="old"> </label> <br/>
	<label> Nowe hasło <input type="text" name="new"> </label> <br/>
	<label> Potwierdź hasło <input type="text" name="confirm"> </label> <br/>
	<input type="submit" value="Zmień">
</form>