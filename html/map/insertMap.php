<?php
echo "DB TEST";
$pdo = new PDO('mysql:host=localhost;dbname=hw_users', 'root', 'babba2');
$row = 1;
if (($handle = fopen("map.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $num = count($data);
    echo "<p> $num fields in line $row: <br /></p>\n";
    $row++;
    for ($c=0; $c < $num; $c++) {
        echo $data[$c] . "<br />\n";
        $sql = "INSERT INTO map(type) VALUES ($data[$c]);
        $statement = $pdo->prepare($sql);
        $result = $statement->execute();
    }
  }
  fclose($handle);
}



?>
