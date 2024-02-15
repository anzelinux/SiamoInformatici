<html>
 <body>
  <?php
   session_start();
   $_SESSION['user'] = 'Gabriel';
   $_SESSION['password'] = 'xyz';
   $_SESSION['anni'] = 21;
  ?>
  <a href="session2.php">vai</a>
 </body>
</html>