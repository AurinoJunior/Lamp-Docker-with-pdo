<?php

	$dsn = "mysql:dbname=database;host=localhost";
	$dbuser = "root";
	$dbpass = "root";

	try{
		$pdo = new PDO($dsn,$dbuser, $dbpass);
	}catch (PDOException $e){
		echo $e->getMessage();
	}