<?php

class City {

   
    private $nom_ville = NULL;
    private $erreur = array();
    /*
     * Le constructeur de 
     */
    public function __construct($nom_ville=null) {
       
         $this->setNomVille($nom_ville);
      
    }
     public function __destruct() {

     }

    public function getNomVille(){
        return $this->nom_ville;
    }
   
    
    public function getErreur(){
        return $this->erreur;
    }
    
    
    /**
     * Mutateur de la propriété nom_ville 
     *
     * @return boolean
     */    
    public function setNomVille($nom_ville = null) {

        $this->nom_ville= $nom_ville;
    }
    

}