<?php
 session_start( );
 include "connetti.php"; // Contiene le istruzioni per la connessione al database negozio
 $Username=$_POST['username']; // (1)
 $Password=$_POST['password'];
 $Trovato = False;
 $Query = "SELECT * FROM utente WHERE user = '$Username';";
 if ($result = $conn->query($Query))  // Eseguire la query
 {
  while($Dati = $result->fetch_object())
   if($Dati->user==$Username)
    {
    echo "username valido, verifico password</br>";
    if($Dati->password==MD5($Password))
     {
      $Trovato = True;
      $_SESSION['User']=$Username; // (5)
      $_SESSION['Pass']=$Password;
     }
    } 
  }
 if (!$Trovato)
  echo "utente non corrispondente";
 else
  echo "Utente trovato in archivio";
?>