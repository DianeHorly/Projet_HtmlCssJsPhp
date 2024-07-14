function valform(){ 
	 
  //1.applicare il metodo test al contenuto emailAddr del form	
  if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailform.email.value))
  {
    alert("Indirizzo e-mail non valido!");
    return false;  
  }

  var nome=document.emailform.nome.value;  
  var cognome=document.emailform.cognome.value;
  var password=document.emailform.password.value;  
  
  if (nome===null || nome===""){  
      alert("Il nome non può essere lasciato bianco");  
      return false;  
  }
  if (cognome===null || cognome===""){  
      alert("Il cognome non può essere lasciato bianco");  
      return false;  
    }

  //2.calcolare il numero di caratteri applicando il metodo length a password 
  else if(password.length < 5){  
      alert("La password deve contenere almeno 5 caratteri");  
      return false;  
  }    

  return true;

}  
