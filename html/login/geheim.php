<?php
session_start();
if(!isset($_SESSION['userid'])) {
   header("Location: http://hw3-qual.inf/hwV1_hugoDEV/hwV1/start/loginTest.php/login.php");
 die();
}

//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid'];
$name= $_SESSION['name'];

echo "Hallo User: ".$userid;
echo "Hallo User: ".$name;
?>
