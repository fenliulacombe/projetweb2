<?php

class Company {

    private $nom_type_etse = NULL;
    private $erreur = array();
    /*
     * Le constructeur de 
     */
    public function __construct($nom_type_etse=null) {
       
         $this->setNomTypeEntreprise($nom_type_etse);
      
    }
     public function __destruct() {

     }

    public function getNomTypeEntreprise(){
        return $this->nom_type_etse;
    }
   
    
    public function getErreur(){
        return $this->erreur;
    }
    
    
    /**
     * Mutateur de la propriété nom_type_etse 
     *
     * @return boolean
     */    
    public function setNomTypeEntreprise($nom_type_etse = null) {

        $this->nom_type_etse= $nom_type_etse;
    }
    

}