<?php
 include "connetti.php";
 // Contiene le istruzioni per la connessione al database negozio
 // Impostare la query
 $Query="UPDATE PRODOTTO SET DescrProd= '".$_POST['DescrProd']."', PrezzoProd= ".$_POST['PrezzoProd'].", QtaRes=".$_POST['QtaRes']."WHERE CodProd= '".$_POST['Codice']."' ;";
 if (!$result = $conn->query($Query)) // Eseguire la query
  print("<h2> Modifica prodotto non avvenuta </h2>");
 else
  print("<h2> Modifica prodotto correttamente avvenuta </h2>");
 $conn->close(); // Chiude la connessione
/*prova */
?>
