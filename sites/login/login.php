<?php
	session_start();
	require_once ("../databaseconnection.php");
	$sql = 'SELECT id, user, password, avatar, background FROM users';
	$result = $connection -> query($sql);
	while ($row = $result -> fetch_assoc())
	{
		if ($row['user'] == $_POST['user'] && $row['password'] == $_POST['password'])
		{
			$_SESSION['user'] = $row['user'];
			$_SESSION['idUser'] = $row['id'];
			$_SESSION['avatar'] = $row['avatar'];
			$_SESSION['background'] = $row['background'];
			$sql = 'SELECT idUser FROM admins WHERE idUser='.$_SESSION['idUser'];
			$admin = $connection -> query($sql)-> fetch_assoc();
			if (isset($admin))
			{
				$_SESSION['admin'] = 1;
			}
			if( isset($_SESSION['wrong']) )
			{
				unset($_SESSION['wrong']);
			}
		}
	}
	if (!isset($_SESSION['user']))
		$_SESSION['wrong'] = 1;
	header('Location: '.$_SERVER['HTTP_REFERER']);
?>