<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=hw_users', 'root', 'babba2');

if(isset($_GET['login'])) {
 $name = $_POST['user'];
 $passwort = $_POST['passwort'];

 $statement = $pdo->prepare("SELECT * FROM users WHERE name = :user");
 $result = $statement->execute(array('user' => $name));
 $user = $statement->fetch();

 //Überprüfung des Passworts
 if ($user !== false && password_verify($passwort, $user['pw'])) {
    $_SESSION['userid'] = $user['id'];
    header("Location: http://hw3-qual.inf/hwV1_hugoDEV/hwV1/start/loginTest.php/geheim.php");
    die();
 } else {
 $errorMessage = "Nope. Wrong!<br>";
 }

}
?>
<<!DOCTYPE html>
<html>
<head>

<title> Template Test</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href= "start.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=brick-sign">
</head>
<body>
<div class="wrapper">


  <div class="header">
    <ul class="header-navi">
      <li class ="header-list">info</li>
      <li class ="header-list">faq</li>
      <li class ="header-list">impressum</li>
  <a href="register.php">sign up</a>

    </ul>
  </div>



  <!-- SIDEBAR WRAPPER -->
      <div class="outer-sidebar w3-round-xlarge">
                <!-- LOGIN  -->




                <div class="inner-login w3-round-xlarge">
                        <form action="?login=1" method="post" class="login-field">
                                  <p id="username">user</p>
                                  <input class="w3-input input-txt" type="user" name="user">
                                  <p id="password">password</p>
                                  <input class="w3-input input-txt" type="password" name="passwort">
                                  <div class="login-form">
                                            <input type="submit" value="Done" class="w3-btn w3-round-xxlarge w3-black w3-hover-white btn">
                                  </div>
                        </form>
                </div>
                <!-- NAVBAR  -->
                <div class="navbar w3-round-xlarge" >
                  <div class="navbar-top w3-round-xlarge">
                       <ul>
                        <li class="nav-list-top">Start</li>
                        <li class="nav-list-top">Toplist</li>
                        <li class="nav-list-top">Messages</li>
                      </ul>
                  </div>

                  <div class="navbar-mid w3-round-xlarge">
                      <ul>
                       <li class="nav-list">Cities</li>
                       <li class="nav-list">Statistics</li>
                       <li class="nav-list">Buildings</li>
                       <li class="nav-list">Statistics</li>
                       <li class="nav-list">Buildings</li>
                       <li class="nav-list">Statistics</li>
                       <li class="nav-list">Buildings</li>

                     </ul>
                  </div>
                </div>

          </div>

      <!-- HEADER-WRAPPER-->
      <div class="outer-header w3-round-xlarge">
         <div class="inner-header">
           <button class="w3-btn w3-round-xxlarge w3-black w3-hover-white"> PREV </button>
           <button class="w3-btn w3-round-xxlarge w3-black w3-hover-white"> FWD </button>
         </div>
      </div>

      <!-- CONTENT-WRAPPER-->
      <div class="outer-content  w3-round-xlarge">
         <div class="inner-content">
                <button class="w3-btn w3-round-xxlarge w3-black w3-hover-white"> PREV </button>
                <button class="w3-btn w3-round-xxlarge w3-black w3-hover-white"> FWD </button>
         </div>
      </div>
</div>
</body>
</html>
