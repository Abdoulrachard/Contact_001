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
    
?>