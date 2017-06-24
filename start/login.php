<?php
echo "DB TEST";
$pdo = new PDO('mysql:host=localhost;dbname=hw_users', 'root', 'babba2');
echo "<br /> - after PDO";
if ($pdo) {
  echo "<br /> Connection succefully established <br />";
}
else {
  echo "<br /> Connection error <br />";
}
$sql = "SELECT * FROM users";
foreach($pdo->query($sql) as $row) {
      echo $row['id']."<br />";
      echo $row['name']."<br />";
      echo $row['pw']."<br /><br />";
}

?>


<?php
$pdo = new PDO('mysql:host=localhost;dbname=hw_users', 'root', 'babba2');

if(isset($_GET))
