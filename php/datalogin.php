<?php

if(isset($_POST['email']))
{
	$email=addslashes($_POST['email']);
	$password=addslashes($_POST['password']);
    
    // verifica se i dati sono inseriti.
	if(!empty($email) && !empty($password))
	{
		//per scriptare o cifrare la password e renderla password illeggibile.
		$hash=sha1($password);
		include("database.php");
		global $pdo;

		$v=$pdo->prepare(" SELECT * from register where email='".$email."'");
		$v->execute();

		$resulta=$v->fetch();

		if($resulta==true)//verifica se tutto è ok 
		{
			$hash2=$resulta['password'];
			
			if($hash==$hash2)
			{
				session_start();
				//per accedere alla home dopo la registrazione
                header("Location: home.html");
			}
			else{
				?>
				<div class="errore">
				email o password non valido. 
			    </div>
			    <?php
			}
		}
		else{
		    ?>
				<div class="errore">
				il conto non esistente. 
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