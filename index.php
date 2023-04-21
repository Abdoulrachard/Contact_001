<?php

$dsn = 'mysql:dbname=contacts;host:locahost' ;
$user_name = 'root' ;
$user_pwd = '' ;
try{
    $BD = new PDO($dsn ,$user_name ,$user_pwd) ;
}catch(PDOException  $e){
    echo "Connexion échouer" . " " . $e->getMessage() . "\n";

}
Autoloader::register();
require "Autoloader.php";

$cnet= new Carnet();
if(isset($_POST["nom"] , $_POST["prenom"] , $_POST["email"] , $_POST["telephone"])){
    $cont = new Contacts($_POST["nom"] , $_POST["prenom"] , $_POST["email"] , $_POST["telephone"]);

    $cnet->ajouterContacts($cont);
    $cnet->afficherContacts() ;
    $liste =$cnet->listContacts ;
    

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h2>INSCRIPTION</h2>
        <input type="text" name="nom" id="" placeholder="Nom :" required><br>
        <input type="text" name="prenom" id="" placeholder="Prenom :" required><br>
        <input type="email" name="email" id="" placeholder=" Email :" required><br>
        <input type="tel" name="telephone" id="" placeholder="Téléphones :"required><br>
        <button type="submit">Soumettre</button>
    </form>
    <ol>
       <li><?php 
        if (isset($liste)) {
            foreach ($liste as $contact) {
                echo $contact->nom . " "  . $contact->prenom . " " . $contact->email . " " . $contact->telephone ;
            }
        }
        ?></li>
    </ol>

</body>
</html>
