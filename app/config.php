<?php

	$dsn = "mysql:dbname=teste;host=localhost";
	$dbuser = "root";
	$dbpass = "root";

	try{
		$pdo = new PDO($dsn,$dbuser, $dbpass);
		echo "Conectado";
	}catch (PDOException $e){
		echo "Nao foi possivel conectar.<br>";
		echo $e->getMessage();
	}
