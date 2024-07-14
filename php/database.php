<?php
//dati di connessione al  database
$dsn="mysql:dbname=progetto; host=localhost";
$username="root";
$password="";
   //connessione al  database usando PDO
	try{
		$pdo=new PDO($dsn,$username,$password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	
	#verifica su eventuale errore di connessione
	catch(PDOException $e){
		echo "connessione non avvenuta".$e->getMessage();
	}
  ?>