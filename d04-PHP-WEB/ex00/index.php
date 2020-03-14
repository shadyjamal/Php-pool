<?php
   session_start();
   $login = $_GET["login"];
   $passwd = $_GET["passwd"];
   $submit = $_GET["submit"];
   if ($login != NULL && $passwd != NULL && $submit == "OK")
   {
      $_SESSION["login"] = $login;
      $_SESSION["passwd"] = $passwd;
   }
?>
<html><body>
      <form name= "index.php" action = "<?php $_PHP_SELF ?>" method = "GET">
         Identifiant: <input type = "text" name = "login" value="<?= $_SESSION["login"]?>" />
         Mot de passe: <input type = "password" name = "passwd" value="<?= $_SESSION["passwd"]?>"/>
         <input type = "submit" name="submit" value="OK"/>
      </form>
   </body></html>
