<meta charset="utf-8">
<title> Encyklopedia gier sieciowych </title>
<meta name="description" content="">
<meta name="author" content="Sebastian Dreszer">
<link rel="stylesheet" href="../style.css" type="text/css">
<link rel="shortcut icon" href="../media/favicon.ico">
<?php
	if (isset($_SESSION['background']))
		echo '<style>
			html
			{
				background-image: url('.$_SESSION['background'].');
				background-size: 100%;
				background-repeat: repeat-y;
			}
		</style>';
?>
<script src="../jquery-3.5.0.min.js"> </script>
<script src="../script.js"> </script>
<?php require_once("databaseConnection.php"); ?>