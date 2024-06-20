<!DOCTYPE html>
<script src="../jquery-3.5.0.min.js"> </script>
<script src="../script.js"> </script>
<html lang="pl">
	<div class="tile" id="loginForm">
		<form action="login/login.php" method="post">
			<label> Nazwa użytkownika <input type="text" name="user" value="Puchaty"> </label> <br/>
			<div style="clear: both"> </div>
			<label> Hasło <input type="password" name="password" value="mle"> </label> <br/>
			<div style="clear: both"> </div>
			<input type="submit" name="submit" value="Wejdź">
		</form>
			<button id="newAccount"> Nowe konto </button>
	</div>
</html>