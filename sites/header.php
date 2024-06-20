<header>
	<div class="logo">
		<h1> <a href="../index.php"> Encyklopedia gier sieciowych </a> </h1>
	</div>
</header>
	<div id="login"> 
		<?php
            global $connection;
			if (isset($_SESSION['wrongLoginAttempt']))
			{
				echo '<div id="wrongLogin"> <div> Niepoprawne dane logowania <br/> <button> Rozumiem </button> </div> </div>';
				unset($_SESSION['wrongLoginAttempt']);
			}
			if (!isset($_SESSION['user']))
				echo '<button class="account" id="loginBtn"> Zaloguj się </button>';
			else
				echo '<button class="account" id="profileBtn">'.$_SESSION['user'].'</button>';
		?>
	</div>
		<?php
			if (isset ($_SESSION['admin']) )
				echo '<div id="adminPanel"> <a href="addGameForm.php"> Dodaj grę </a>
                        <a href="addNewsForm.php"> Dodaj wiadomość </a> </div>';
		?>
	<div id="links">
		<?php 
		$sql = "SELECT id, category FROM categoryTable";
		$result = $connection->query($sql);
		echo '<ul>';
			echo '<li class="category"> <a href="newsCentre.php"> Wiadomości </a> </li>';
			while ($row = $result->fetch_assoc())
			{
				echo '<li class="category" data-id='.$row['id'].'> 
				        <a href="category.php?id='.$row['id'].'">'.$row['category'].'</a>';
				$sql2 = 'SELECT id, subcategory FROM subcategories WHERE idCategory='.$row['id'];
				echo '<ul>';
					$result2 = $connection->query($sql2);
					while ($row2 = $result2->fetch_assoc())
						echo '<li class="subcategory" data-id='.$row['id'].' data-sub='.$row2['id'].'>
						 <a href="category.php?id='.$row['id'].'&sub='.$row2['id'].'">'.$row2['subcategory'].' </li>';
				echo '</ul>';
				echo '</li>';
			}
		echo '<form id="searchForm" action="searchResult.php" method="post"> 
			<input id="search" type="text" name="search"> </input> <img id="lupa" src="../media/lupa.png">
		</form>';
		echo '</ul>';
		?>
	</div>