<?php
	session_start();
	echo '<div class="tile" id="profile">
	<a href="profile.php?id='.$_SESSION['idUser'].'"> Profil </a> <br>
	<a href="login/logout.php"> Wyloguj się </a> 
	<img id="smallAvatar" src="'.$_SESSION['avatar'].'"> </div>';
	
	
?>