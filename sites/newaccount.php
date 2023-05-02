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
				require_once ("newaccountform.php");
				if (isset($_SESSION['notequal']))
				{
					echo '<div id="wrongLogin"> <div> Hasło i potwierdzenie się różnią. <br> <button> Zrozumiałem/am </button> </div> </div>';
					unset($_SESSION['notequal']);
				}
			?>
			</div>
		</article>
		<?php require_once ("footer.php"); ?>
	</body>
</html>