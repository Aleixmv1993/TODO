<?php
	if(!isset($_SESSION)){
		//session_start();

	}
	ini_set('display_errors', 1);
	/*$domain=$_SERVER['HTTP_HOST'];
		if($domain=="amalaret.cesnuria.com"){
			$conf = 'config.ser.ini';
		}else{
			$conf='config.php';
		}*/
	include 'login.php';
	require 'lib/bd.php';
	require 'lib/config.php';
