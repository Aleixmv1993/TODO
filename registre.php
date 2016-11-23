<?php
include 'lib/config.php';

	$db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	if($db->connect_errno){
		die('Error de connexió');
	}
	else{
		if($_POST){
		if($_POST['email'] && !empty($_POST['email']) 
			&& $_POST['passwd'] && !empty($_POST['passwd']))
			{
				
				$SQL="INSERT INTO users(email, passwd) VALUES('$_REQUEST[email]','$_REQUEST[passwd]')";
				//echo $SQL;
				//$result=$db->query($SQL);
				if(!$result=$db->query($SQL))
				{
					die("Error en insert");
				}
				$db->close();
				header('Location:../index.php');

			}
			
		}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>REGISTRE app TODO</title>
</head>
<body>
	<div class="container-fluid">
	
	<header class="jumbotron">
		<h2>LLIST TASK Registre</h2>
	</header>
	<div class="navbar">
	<a href="index.php">Torna al login!!</a>
	</div>
	<form method="POST" action="<?= $_SERVER['PHP_SELF'];?>">
		<p><label for="email">
			Email:<input type="text" name="email">
		</label></p>
		<p><label for="passwd">
			Passwd:<input type="password" name="passwd">
		</label></p>
		<p>
			<input type="submit" value="Registrat">
		</p>
	</form>

</div>


</body>
</html>