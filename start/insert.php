

<?php
echo "DB TEST";
$pdo = new PDO('mysql:host=localhost;dbname=hw_users', 'root', 'babba2');
echo "<br /> - after PDO";
if ($pdo) {
  echo "<br /> Connection succefully established";
}
else {
  echo "<br /> Connection error";
}



$sql = "INSERT INTO `users`(`id`, `name`, `pw`) VALUES (\"1\", \"Raschid\", \"babba\")";


$qry = $pdo->prepare($sql);
$qry->execute();
if ($qry->execute()) {
  echo "<br /> qry successful - DELETE";
}
else {
  echo "<br /> qry error";  echo $qry->errorInfo()[2];
}

?>


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
