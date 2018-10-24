<?php

class Entite {

    protected $errorsHydrate = array();
        
    /*** Constructeur*/
    public function __construct() {}

    /**
     *   hydrater les propriétés de l'objet avec les variables correspondantes
     *   du tableau donnees
     */    
    
    public function hydrate(array $donnees, $encrypt = FALSE) {
        $this->errorsHydrate = [];
        foreach ($donnees as $key => $value) {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);
        
            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
                // On appelle le setter.
                $this->$method($value, $encrypt);
            }
        }
        return $this->errorsHydrate; 
        
    }
    
    /**
     *   get de toutes les propriétés dans un tableau
     */    
    public function getItem() {
        foreach (get_object_vars($this) as $key => $valeur) {
            $prop [$key] = $valeur;
        }
        unset($prop['errorsHydrate']);
        return $prop;
    }

}