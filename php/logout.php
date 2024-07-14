<?php
   // rimuove tutte le variabili di sessione
   session_unset();
   // per distruggere una sesione o uscire dal sito
   session_destroy();
   // per indirizzare la paggina ad un altro indirizzo
   header("Location: ../login.php ");
   //via di uscita
   exit;
?>