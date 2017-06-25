<?php
session_start();
if(!isset($_SESSION['userid'])) {
 die('Bitte zuerst <a href="/login.php">einloggen</a>');
}

//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid'];
$name= $_SESSION['name'];

echo "Hallo User: ".$userid;
echo "Hallo User: ".$name;
?>


<!DOCTYPE html>
<html>
<head>

<title> Template Test</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href= "home.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=brick-sign">
  <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src = "map.js"></script>
</head>
<body>
<div class="wrapper">


  <div class="header">
    <ul class="header-navi">
      <li class ="header-list">info</li>
      <li class ="header-list">faq</li>
      <li class ="header-list">impressum</li>
    </ul>
  </div>



  <!-- SIDEBAR WRAPPER -->
      <div class="outer-sidebar w3-round-xlarge">
                <!-- LOGIN  -->
                <div class="user-info w3-round-xlarge">
                      <div class="avatar">
                          <img class="w3-circle" src="avatar.jpg" alt="avatar">
                      </div>
                      <div class="info">
                         <p> <?php echo "".$name; ?>  </p>
                         <p> <?php echo "ID:".$userid; ?>  </p>
                      </div>
                </div>
                <!-- NAVBAR  -->
                <div class="navbar w3-round-xlarge" >
                  <div class="navbar-top w3-round-xlarge">
                       <ul>
                        <li class="nav-list-top">Start</li>
                        <li class="nav-list-top">Map</li>
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
         <div class="map-content">
              <button class="w3-btn w3-round-xxlarge w3-black w3-hover-white" onclick="getMapData"> Show MAP </button>
              <button class="w3-btn w3-round-xxlarge w3-black w3-hover-white"> Hide MAP </button>
                 <div class="map">
                   <script language="JavaScript">
                                           $(document).ready(getMapData());
                                   </script>
                           </div>
                 </div>
         </div>
      </div>
</div>
</body>
</html>
