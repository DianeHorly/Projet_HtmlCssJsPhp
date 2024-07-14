<?php
if(isset($_POST['nome']))
{
	$nome=addslashes($_POST['nome']);
	$cognome=addslashes($_POST['cognome']);
	$telefono=addslashes($_POST['telefono']);
	$email=addslashes($_POST['email']);
	$password=addslashes($_POST['password']);
    // verifica se i dati sono inseriti
	if(!empty($nome) && !empty($cognome) && !empty($telefono) && !empty($email) && !empty($password))
	{
		//per fare lo script della password o password illeggebile
		$hash=sha1($password);
		include("database.php");
		global $pdo;

		$v = $pdo->prepare(" SELECT id from register where email='".$email."'");
		$v->execute();

		$resulta=$v->rowCount();

		if($resulta == 0)//se tutto è ok 
		{
			//inserimento dei dati nella tabella register
           $sq=$pdo->prepare("INSERT INTO register(nome,cognome,telefono,email,password) VALUES("."'".$nome."',"."'".$cognome."',"."'".$telefono."',"."'".$email."',"."'".$hash."')");
           $sq->execute();
           //per accedere alla home dopo la registrazione
           header("Location: home.html");
		}
		else{
			?>
			<div class="errore">
			non si può registrare email già esistente
			</div>
			<?php 
		}
	}
	else{ ?>
		<div class="errore">
		completa tutti i campi.
		</div> 
        <?php
	}
}

?>