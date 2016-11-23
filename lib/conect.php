<?php
		//require 'lib/bd.php';
	require 'config.php';
	session_start();
	//comprobar si hi ha algo en el POST i no estigui buit, sino, no entra.
	if ($_POST) {
			if(!empty($_POST['email'])) {
			if(!empty($_POST['passwd']))			
			{
				//guardem les variables amb el contingut del POST, aixi es mes facil accedir a elles.
				//htmlspecialchars, es com es va comentar a clase, per no poder posar certes comandes per accedir a la base de dades. Nomes agafara el contingut quan no siguin comandes.
				$passwd=htmlspecialchars($_POST['passwd']);
				$email=htmlspecialchars($_POST['email']);


				$db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
				$sql= 'SELECT * FROM users WHERE email="'.$email.'" AND passwd="'.$passwd.'"';
				$result=$db->query($sql);

				if($result = mysqli_query($db, $sql)){
					
					if($row=mysqli_fetch_array($result)){
					//comprobacio de si hi ha algo al resultat per tal de guardar la variable en una Cookie i en una variable de Sessio.
					$_SESSION['email']=$email;
					$_SESSION['id']=$id;				
					setcookie("email",$email, time()+3600,"/TODO","",0);
					header('Location:../list.php');// list.php llista les tasques del usuari recollit.
					exit();
					}else{
					//  Si torna al index: ERROR: Has de introduir un email i password correcte.
					header('Location:../index.php');
					}}

			}else{

				header('Location:../index.php');
			}


	}
}