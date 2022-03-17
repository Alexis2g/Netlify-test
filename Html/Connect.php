<html>
    <head>  
        <title> Contact</title>
        <meta charset="UTF-8">
        <meta name="description" content="Technos" >
        <link href="Style.css" rel="stylesheet" >
    </head>

    <body>
        



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
/*
<pre>
  <?php print_r($_SERVER); ?>
</pre>
*/
?>

<header>
            Me contacter
        </header>
        <article> 
            <p>Le formulaire pour me contacter par mail</p>
        </article>
        <form action="Connect.php">
            <fieldset>
                <legend>Le formulaire</legend>
                <div>
                    <label for="nominput">Nom</label>
                    <input type="text" name="nom" id="nominput" placeholder="CHIRAC">
                </div>
                <br>
                <div>
                    <label for="prenominput">Prénom</label>
                    <input type="text" name="prenom" id="prenominput" placeholder="Jacques">
                </div>
                <br>
                <div>
                    <label for="prenominput">Mail</label>
                    <input type="text" name="mail" id="mailinput" placeholder="mail@azerty.com">
                </div>
                <br>
                <div>
                    <label for="messageinput">Message</label>
                    <textarea type="text" cols="30" rows="10" name="message" id="messageinput" placeholder="Wow ce site est incroyable ..."></textarea>
                </div>
                <br>
                <input type="submit" value="Envoyer">                   
            </fieldset>
           </form>
    </body>
    <footer>
        <a href="Landing.html">&#8592; Retour à l'accueil</a>
    </footer>
</html>


