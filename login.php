<?php
	ini_set('display_error','1');
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Login app TODO</title>
</head>
<body>
<div class="container-fluid">
	
	<header class="jumbotron">
		<h2>LLIST TASK</h2>
	</header>
	<div class="navbar">
	<a href="registre.php">REGISTRAT!!</a>
	</div>	
	<form method="POST" action="lib/conect.php">
		<p><label for="email">
			Email:<input type="text" name="email" value="<?php
			if(isset($_COOKIE['email'])){
				echo $_COOKIE['email'];
			}//Aixo el que realitza es guardar colocar la cookie si esta guardada.
			?>" class="form-control">
		</label></p>
		<p><label for="passwd">
			Passwd:<input type="password" name="passwd" class="form-control">
		</label></p>
		<p>
			<input type="submit" value="Entra">
		</p>
	</form>

	

</div>
</body>
</html>