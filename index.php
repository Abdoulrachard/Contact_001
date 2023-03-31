<?php
class Contacts {
    public $nom ;
    public $prenom ;
    public $email ;
    public $telephone ;
    
    public function __construct($nom , $prenom ,$email ,$telephone){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
    }



    public function afficherInfoContact()
    {
        echo $this->nom . " " . $this->prenom . " " . $this->email . " " . $this->telephone ;
    }


}


class Carnet {

    public $listContacts = [] ;


    public function ajouterContacts(Contacts $contact)
    {
        $this->listContacts[] = $contact ;
    }
    public function afficherContacts()
    {

        foreach($this->listContacts as $contacts){
            $contacts -> afficherInfoContact();
        }
    }
}
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
