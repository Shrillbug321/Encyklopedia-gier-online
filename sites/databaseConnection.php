<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "encyklopedia gier sieciowych";
	$connection = new mysqli($server, $user, $password, $database);
	if ($connection->connect_error)
		die("Błąd połączenia z bazą");
?>