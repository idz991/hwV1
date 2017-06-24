<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=hw_users', 'root', 'babba2');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registrierung</title>
</head>
<body>

<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll

if(isset($_GET['register'])) {
 $error = false;
 $name = $_POST['user'];
 $passwort = $_POST['passwort'];
 $passwort2 = $_POST['passwort2'];


 if(strlen($passwort) == 0) {
 echo 'Enter password<br>';
 $error = true;
 }
 if($passwort != $passwort2) {
 echo 'Password incorrect<br>';
 $error = true;
 }

 //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
 if(!$error) {
 $statement = $pdo->prepare("SELECT * FROM users WHERE name = :user");
 $result = $statement->execute(array('user' => $name));
 $user = $statement->fetch();

 if($user !== false) {
 echo 'Username already exists - please chose a new one.<br>';
 $error = true;
 }
 }

 //Keine Fehler, wir können den Nutzer registrieren
 if(!$error) {
 $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);

 $statement = $pdo->prepare("INSERT INTO users (name, pw) VALUES (:user, :passwort)");
 $result = $statement->execute(array('user' => $name, 'passwort' => $passwort_hash));

 if($result) {
   header("Location: http://hw3-qual.inf/hwV1_hugoDEV/hwV1/start/loginTest.php/login.php");
   die();
 $showFormular = false;
 } else {
 echo 'Something somewhere went terribly wrong<br>';
 }
 }
}

if($showFormular) {
?>

<form action="?register=1" method="post">
Username:<br>
<input type="user" size="40" maxlength="250" name="user"><br><br>

Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>

Passwort wiederholen:<br>
<input type="password" size="40" maxlength="250" name="passwort2"><br><br>

<input type="submit" value="Abschicken">
</form>

<?php
} //Ende von if($showFormular)
?>

</body>
</html>
