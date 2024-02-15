<?php
 include "connetti.php";
 // Impostare la query
 $Query='SELECT * FROM PRODOTTO WHERE CodProd="'. $_POST['Codice'] .'";' ;
 if ($result = $conn->query($Query)) // Eseguire la query
 {
  while ($Dati = $result->fetch_object())
  {
   // Formattare il risultato della query in formato html
   print("<h1>Modifica dati prodotto</h1>");
   print("<form action=aggiornaprodotto.php method=Post>");
   print(" Codice Prodotto: $Dati->CodProd <br /> ");
   print(" <input name= \"Codice\" type=\"hidden\" value=$Dati->CodProd>");
   if($Dati->CodCat=="C") $categoria=" CPU";
   if($Dati->CodCat=="H") $categoria=" Hard Disk";
   if($Dati->CodCat=="S") $categoria=" Schede ";
   print(" Categoria: $categoria <br /> ");
   print("Descrizione: <input type=\"text\" size=\"50\" name=\"DescrProd\"value=\"" . $Dati->DescrProd . "\"><br /> ");
   print("Prezzo: <input type=\"text\" size=\"5\" name=\"PrezzoProd\" value=\"" . $Dati->PrezzoProd . "\"><br /> ");
   print("Quantita residua: <input type=\"text\" size=\"3\" name=\"QtaRes\"value=\"" . $Dati->QtaRes . "\"><br /> ");
  }
  print("<input type=\"submit\" value=\"Inserisci_prodotto_modificato\"> ");
  print("<input type=\"reset\" value=\"Annulla\"> ");
  print("</form> ");
  $conn->close(); // Chiude la connessione
 }
 else
  print("Query fallita.");
 ?>
