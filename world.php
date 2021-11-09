<?php
  header('Access-Control-Allow-Origin:*');
  $country=$_GET["country"];
  $city=$_GET["context"];

  $host = 'localhost';
  $username = 'lab5_user';
  $password = 'password123';
  $dbname = 'world';

  $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
  $stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  if (!isset($_GET['lookup']) || empty($_GET['lookup']) &&  isset($_GET['cities'])=='cities') {
    if (isset($_GET['lookup']) == ""){
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

      }
      echo "</table>";
    }else{
      echo "Tester";
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
  if (!isset($_GET['cities']) || empty($_GET['cities'])) {
    echo "Test";
    if (isset($_GET['cities']) == ""){

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

  //}
}
    }else{
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
    
      //}
    }

    }
  }
}/*
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

/*
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


  */

  //SELECT cities.name, cities.district, cities.population FROM countries INNER JOIN cities ON countries.code=cities.country_code WHERE cities.name LIKE 'Kingston';
  //if  ($_GET['cities'] == "cities"){
  



/*    
?>
<?php foreach ($results as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
</ul>*/
