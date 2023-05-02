<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<?php require_once ("head.php"); ?>
	</head>
	<body>
		<?php require_once ("header.php"); ?>
		<article>
			<div id="content">
			<?php
				if ( !isset($_SESSION['idUser']) )
				{
					echo '<p> Zaloguj się, aby zobaczyć swój profil </p>';
					return;
				}
				if( isset($_SESSION['changePasswordError']) )
				{
					if ( $_SESSION['changePasswordError'] == 1 )
					{
						echo '<div id="wrongLogin"> <div> Niepoprawne stare hasło <br> <button> Zrozumiałem/am </button> </div> </div>';
						unset($_SESSION['changePasswordError']);
					}
					else if ( $_SESSION['changePasswordError'] == 2 )
					{
						echo '<div id="wrongLogin"> <div> Pola nowe hasło i potwierdzenie się różnią <br> <button> Zrozumiałem/am </button> </div> </div>';
						unset($_SESSION['changePasswordError']);
					}
				}
				$sql = 'SELECT id, user, avatar, background FROM users WHERE id='.$_SESSION['idUser'];
				$result = $connection -> query($sql);
				$row = $result -> fetch_assoc();
				echo '<div id="profileInfo"> 
					<img id="avatar" src="'.$row['avatar'].'"> 
					<p class="title" id="user">'.$row['user'].' </p> <br>
					<img id="userBackground" src="'.$row['background'].'"> 
				</div>
				<div id="linksInProfile"> 
					<p id="changeName"> Zmień nazwę </p> 
					<p id="changePassword"> Zmień hasło </p> 
					<p id="changeAvatar"> Zmień obrazek konta </p> 
					<p id="changeBackground"> Zmień tło </p> 
					<p id="delete"> Usuń konto </p>
					<p id="areYouSure"> Na pewno? <br> <a href="profile/delete.php"> Tak </a> <a id="no" href="#"> Nie </a> </p>
				</div>
				<div id="settings">	</div>
				<div style="clear: both;"></div>';
			?>
			</div>
		</article>
		<?php require_once ("footer.php"); ?>
	</body>
</html>