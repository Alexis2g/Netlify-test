<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firstdb";

    $nom = $_POST['Nom'];

    $prenom = $_POST['Prénom'];

    $message = $_POST['Message'];


// Create connection
$conn = new mysqli(localhost, root,'' ,firstdb);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "INSERT INTO firstdb (Nom, Prénom, Message)
VALUES ($nom, $prenom, $message)":


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>
