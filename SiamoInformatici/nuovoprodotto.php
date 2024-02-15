<?php
 //crea un oggetto per la connessione
 $conn = new mysqli("localhost","root","","negozio");
 if ($conn -> connect_errno)
 {
  printf("<h1>Connessione al server Mysql fallita</h1>");
  exit();
 }
 // Imposta la query
 $Query="INSERT INTO PRODOTTO (CodProd, CodCat,DescrProd,PrezzoProd,Qtares) values ( '".$_POST['CodProd']."','08',' ".$_POST['DescrProd']."',".$_POST['PrezzoProd'].",".$_POST['QtaRes'].");";
 // Esecuzione della query e controllo degli eventuali errori
 if (!$conn->query($Query))
 {
  die($conn->error);
 }
 else
 {
  echo "<h1>Inserimento avvenuto con successo</h1>";
 }
 $conn->close(); // Chiude la connessione
?>