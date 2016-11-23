<?php
	
	function conecta($dbhost,$dbuser,$dbpass,$dbname){
	try{
	$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	$connected = true;
	return $mysqli;

	}catch(mysqli_sql_exception $e){
	throw $e;
		}
	}