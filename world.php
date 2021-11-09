
<?php
header('Access-Control-Allow-Origin:*');
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$context = $_SERVER['QUERY_STRING'];
$country = filter_input(INPUT_GET, "country", FILTER_SANITIZE_STRING);


$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$lookupcities = $conn->query("SELECT * FROM countries JOIN cities ON countries.code = cities.country_code where countries.name LIKE '%$country%'");
$cities = $lookupcities->fetchAll(PDO::FETCH_ASSOC);

$connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$lookupcountries = $connection->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
$countries = $lookupcountries->fetchAll(PDO::FETCH_ASSOC);

$string= "country=".$country;
$determinant = $string;

if($context == $determinant){
  echo "<table>";
  echo "<tr>";
  echo "<th> Name  </th>";
  echo "<th> Continent </th>";
  echo "<th> Year of Independence  </th>";
  echo "<th> Head of State </th>";
  echo "</tr>"; 
  foreach ($countries as $row){
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['continent']."</td>";
    echo "<td>". $row['independence_year']."</td>";
    echo "<td>".$row['head_of_state']."</td>";
    echo "</tr>"; 
  }

}else{
  echo "<table>";
  echo "<tr>";
  echo "<th> Name  </th>";
  echo "<th> District </th>";
  echo "<th> Population </th>";
  echo "</tr>";
  foreach ($cities as $row){
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['district']."</td>";
    echo "<td>".$row['population']."</td>";
    echo "</tr>";
  }
  echo"</table>";


}
  


/*
COUNTRY
}elseif (isset($_GET['lookup'])) {
 
    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Continent</th>";
    echo "<th>Independence Year</th>";
    echo "<th>Head of State</th>";
    echo "</tr>";
    foreach ($results as $row){
      echo "<tr>";
      echo "<td>" . $row['name']."</td>";
      echo "<td>" . $row['continent']."</td>";
      echo "<td>" . $row['independence_year']."</td>";
      echo "<td>" . $row['head_of_state']."</td>"; 
      echo "</tr>";
    }
    echo "</table>";
  
}
*/

/* CITIES
      $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
      $stmt = $conn->query("SELECT cities.name, cities.district, cities.population FROM countries INNER JOIN cities ON countries.code=cities.country_code WHERE countries.name LIKE  '%$country%'");
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 
      echo "<table>";
      echo "<tr>";
      echo "<th>Name</th>";
      echo "<th>District</th>";
      echo "<th>Population</th>";
      echo "</tr>";
      foreach ($results as $row){
        echo "<tr>";
        echo "<td>" . $row['name']."</td>";
        echo "<td>" . $row['district']."</td>";
        echo "<td>" . $row['population']."</td>"; 
        echo "</tr>";
  echo "</table>";


  */

  //SELECT cities.name, cities.district, cities.population FROM countries INNER JOIN cities ON countries.code=cities.country_code WHERE cities.name LIKE 'Kingston';
  //if  ($_GET['cities'] == "cities"){
  



/*    
?>
<?php foreach ($results as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
</ul>*/
