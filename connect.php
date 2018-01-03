<?php 

	$dsn = 'mysql:host=localhost;dbname=nextgajax';
	$huser = 'root';
	$hpass = '';
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	);

	try {
		
		$con = new PDO($dsn,$huser,$hpass,$option);
		$con -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	} catch (Exception $e) {
		
	}

	