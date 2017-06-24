<?php
echo "DB TEST";
$pdo = new PDO('mysql:host=localhost;dbname=hw_users', 'root', 'babba2');
include 'password.php';
echo "<br /> - after PDO";


?>
