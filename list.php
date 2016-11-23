<?php
	include 'lib/config.php';
	session_start();
	$email = $_SESSION['email'];
	$db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	if($db->connect_errno){
		die('Error de connexió');
	}else
	{	

		if($_SESSION){
			if(!empty($_SESSION['email'])){
				$SQL="SELECT * FROM Tasks INNER JOIN users ON Tasks.`user` = users.`id` WHERE users.`email`="."'$email'";

					$result=$db->query($SQL);
					//print_r($result);
					
					$Num = 1;
}
					?>

<!DOCTYPE html>
<html>
<head>
	<title>Llistat Tasques TODO</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
	
	<header class="jumbotron">
	<h2> TASQUES DEL USUARI:
	<?php echo $_SESSION['email'];?>
	</h2>
	</header>
	<div class="navbar">
	<a href="login.php">Sortir</a>
	<br><br>
	</div>

					<?php
						while($rows=$result-> fetch_array()){
						print_r($Num.'  ');
						if($rows['completed'] == 1){
						print_r("<del>".$rows['descripcio']."</del>");
						$id=$rows['id'];
						echo '<a href="completar.php?Tasks='.$id.'">Completar tasca</a>';
						}else{
						print_r($rows['descripcio']);
						$id=$rows['id'];
						echo '<a href="completar.php?Tasks='.$id.'">Completar tasca</a>';	
						}

						print_r('<br>');
						$Num ++;
						// $rows['descripcio']."<br>";
						//Nomes he aconseguit que es completi la taska numero 1, ja que sempre es queda la id numero 1 en els enllaços.
						} 
						
			}
		}?>

		<br>

		</div>
</body>
</html>
