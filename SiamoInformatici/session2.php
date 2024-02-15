<html>
 <body>
  <?php
   session_start();
   echo "user:".$_SESSION['user']."</br>" ;
   echo "Password:".$_SESSION['password']."</br>" ;
   echo "Anni:".$_SESSION['anni'] ."</br>" ;
  ?>
 </body>
</html>