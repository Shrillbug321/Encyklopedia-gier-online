<?php
    global $connection;
    session_start();
	require_once("../databaseConnection.php");
	echo '<script src="../../script.js"> </script>';
	if (isset($_POST['user']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm']))
	{
		if ($_POST['password'] == $_POST['confirm'])
		{
			$sql = 'INSERT INTO users (user, email, password, avatar)
                    VALUES ("'.$_POST['user'].'", "'.$_POST['email'].'", "'.$_POST['password'].'", "../media/users/default_avatar.png")';
			$result = $connection -> query($sql);
			
			$sql = 'SELECT id FROM users WHERE id = ( SELECT MAX(id) FROM users )';
			$result = $connection -> query($sql);
			$row = $result->fetch_assoc();
			mkdir("../../media/users/".$row['id']);
			$_SESSION['user'] = $_POST['user'];
			$_SESSION['idUser'] = $row['id'];
			$_SESSION['avatar'] = '../../media/users/default_avatar.png';
			header('Location: ../profile.php?id='.$row['id']);
		}
		else
		{	
			$_SESSION['passwordConfirmNotEqual'] = 1;
			header('Location: '.$_SERVER['HTTP_REFERER']);
		}
	}
?>