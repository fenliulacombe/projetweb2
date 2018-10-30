<?php

class skill {

   
    private $nom_comp = NULL;
    private $erreur = array();
    /*
     * Le constructeur de 
     */
    public function __construct($nom_comp=null) {
       
         $this->setNomComp($nom_comp);
      
    }
     public function __destruct() {

     }

    public function getNomComp(){
        return $this->nom_comp;
    }
   
    
    public function getErreur(){
        return $this->erreur;
    }
    
    
    /**
     * Mutateur de la propriété nom_comp 
     *
     * @return boolean
     */    
    public function setNomComp($nom_comp = null) {

        $this->nom_comp= $nom_comp;
    }
    

}