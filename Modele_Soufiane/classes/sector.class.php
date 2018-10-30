<?php

class Sector {

   
    private $nom_secteur = NULL;
    private $photo_secteur = NULL;
    private $erreur = array();
    /*
     * Le constructeur de 
     */
    public function __construct($nom_secteur=null,$photo_secteur = null) {
       
         $this->setNomSecteur($nom_secteur);
         $this->setPhotoSecteur($photo_secteur);
      
    }
     public function __destruct() {

     }

    public function getNomSecteur(){
        return $this->nom_secteur;
    }

    public function getPhotoSecteur(){
        return $this->photo_secteur;
    }
   
    
    public function getErreur(){
        return $this->erreur;
    }
    
    
    /**
     * Mutateur de la propriété nom_secteur 
     *
     * @return boolean
     */    
    public function setNomSecteur($nom_secteur = null) {

        $this->nom_secteur= $nom_secteur;
    }

     /**
     * Mutateur de la propriété photo_secteur 
     *
     * @return boolean
     */    
    public function setPhotoSecteur($photo_secteur = null) {

        $this->photo_secteur= $photo_secteur;
    }
    

}