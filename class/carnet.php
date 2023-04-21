<?php
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
?>