<?php
    global $connection;
    session_start();
	require_once("../databaseConnection.php");
	$sql = 'UPDATE users SET ='.$_POST[''].' WHERE id='.$_SESSION['idUser'];
	$connection->query($sql);
	header('Location: '.$_SERVER['HTTP_REFERER']);
?>