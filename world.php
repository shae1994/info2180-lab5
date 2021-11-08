<?php
header('Access-Control-Allow-Origin:*');




$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$length_arr = sizeof($results);
$country=$_GET["country"];

$stmts = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
$res = $stmts->fetchAll(PDO::FETCH_ASSOC);
foreach ($res as $r){
  echo $r['name'], "\n";
}


    
?>


<?php foreach ($results as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
</ul>
