<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<?php require_once("head.php"); ?>
	</head>
	<body>
		<?php require_once("header.php"); ?>
		<article>
			<div id="content">
			<?php
				require_once("newAccountForm.php");
				if (isset($_SESSION['passwordConfirmNotEqual']))
				{
					echo '<div id="wrongLogin"> <div> Hasło i potwierdzenie się różnią. <br/>
                            <button> Rozumiem </button> </div> </div>';
					unset($_SESSION['passwordConfirmNotEqual']);
				}
			?>
			</div>
		</article>
		<?php require_once("footer.php"); ?>
	</body>
</html>