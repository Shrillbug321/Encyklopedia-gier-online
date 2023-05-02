<?php
	session_start();
	require_once("../databaseconnection.php");
	echo $sql = 'SELECT id, subcategory FROM subcategories WHERE idCategory='.$_POST['idCategory'];
	
	$result = $connection->query($sql);
	while ($row = $result->fetch_assoc())
	{
		echo '<option value='.$row['id'].'>'. $row['subcategory'].' </option>';
	}
	echo '</select>';
?>