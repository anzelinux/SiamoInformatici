<?php
$conn = new mysqli("localhost","root","","negozio");
 if ($conn -> connect_errno)
  {
   printf("<h1>Connessione al server Mysql fallita</h1>");
   exit();
  }
?>