

<pre>
  <?php print_r($_SERVER); ?>
</pre>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio-bdd";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

try {
  $conn->exec("INSERT INTO messagetable (id, nom, prenom, mail, message) 
  VALUES (NULL, 'coco', 'alexis', '@gmail.com', 'test')");

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


?>



