<html>
 <head>
  <title>PHP-Test</title>
 </head>
 <body>
 <?php echo '<p>Hallo Welt</p>'; ?>
 <? $pdo = new PDO('mysql:host=localhost;dbname=hw_users', 'root', 'babba2');
 include 'password.php';
$showFormular = true;

 ?>


 <form action="?register=1" method="post">
 E-Mail:<br>
 <input type="mail" size="40" maxlength="250" name="mail"><br><br>

 Dein Passwort:<br>
 <input type="password" size="40"  maxlength="250" name="passwort"><br>

 Passwort wiederholen:<br>
 <input type="password" size="40" maxlength="250" name="passwort2"><br><br>

 <input type="submit" value="Abschicken">
 </form>

 </body>
</html>
