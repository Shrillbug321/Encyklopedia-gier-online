<?php
	session_start();
?>
<form action="profile/changepassword.php" method="post">
	<label> Stare hasło <input type="text" name="old"> </input> </label> <br>
	<label> Nowe hasło <input type="text" name="new"> </input> </label> <br>
	<label> Potwierdź hasło <input type="text" name="confirm"> </input> </label> <br>
	<input type="submit" value="Zmień"> </input>
</form>