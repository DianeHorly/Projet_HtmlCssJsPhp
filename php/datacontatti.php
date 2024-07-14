<?php

// verifica degli elementi del form 
if(isset($_POST['nome']))
{
	$nome=addslashes($_POST['nome']);
	$cognome=addslashes($_POST['cognome']);
	$gender=addslashes($_POST['gender']);
	$email=addslashes($_POST['email']);
	$commento=addslashes($_POST['commento']);

    //controla se gli elementi sono inserito 
	if(!empty($nome) && !empty($cognome) && !empty($gender) && !empty($email) && !empty($commento))
	{
		$testo = "Nome: ".$nome."\n"."Cognome: ".$cognome."\n"."Gender: ".$gender."\n"."Email: ".$email."\n"."Commento: ".$commento."\n" ;

       // funzione che invia un messaggio all'indirizzo email qui sotto 
		mail("modjomdiane@yahoo.com", "messaggio ricevuto dal mio sito", $testo);

		echo "grazie per averci conttato!";

	}
		
}

?>