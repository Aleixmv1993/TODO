<?php
	session_start();
	include 'lib/config.php';


	$id_task=$_GET['Tasks'];

	$db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	if($db->connect_errno){
		die('Error de connexió');
	}else{
		//en la primera linia preparo la sentencia sql, on la meva connexio es diu $db creada anteriorment.
		//Despres executo la sentencia. Tot el seguent esta correcte, ja que cada una de les tasques la donaria a traves el metode get. Encara que no es cambia la ID pasada per el metode Get.
		$SQL=$db->prepare("UPDATE `Tasks` SET completed=1 WHERE `id`="."'$id_task'");
		$SQL->execute();
		$SQL->close();
		header('Location:list.php');
		exit();


	}