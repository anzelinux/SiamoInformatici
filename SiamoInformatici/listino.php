<html>
 <head>
  <style>
   table {
    border: 3px solid blue;
    border-collapse: separate;
    border-spacing: 5px;
   }
   td {
    border: 1px solid #999;
    padding: 0.5rem;
   }
   th {
    background: lightblue;
    border-color: white;
   }
  </style>
 </head> 
 <body>
  <?php
  $conn = new mysqli("localhost","root","","negozio");
  if ($conn -> connect_errno)
  {
   printf("<h1>Connessione al server Mysql fallita</h1>");
   exit();
  }
  // Imposta la query
  $Query='SELECT * FROM PRODOTTO'; // Impostare la query
  // Formattare il risultato della query in formato html
  print("<table>");
  print("<tr ><th> Codice</th>");
  print("<th> Descrizione </th>");
  print("<th> Prezzo </th>");
  print("<th> Quantita restante </th></tr>");
  if ($result = $conn->query($Query))
  {
   /* fetch object array */
   while ($Dati = $result->fetch_object())
    print("<tr><td>". $Dati->CodProd . "</td><td>" . $Dati->DescrProd ."</td><td>" . $Dati->PrezzoProd . "</td><td>" . $Dati->QtaRes . "</td></tr>");
  }
  $conn->close(); // Chiude la connessione
  ?>
  </table>
 </body>
</html>