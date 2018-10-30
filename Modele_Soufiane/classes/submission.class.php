<?php
//require_once("./index.php");


class Submission {

   
    private $id_prj_soum = NULL;
    private $id_ut_soum = NULL;
    private $tarif_soum = NULL;
    private $etat_soum = NULL;
    private $erreur = array();
    /*
     * Le constructeur de 
     */
    public function __construct($id_prj_soum , $id_ut_soum=null, $tarif_soum=null, $etat_soum=null) {
       // $this->setId($id);
         $this->setIdPrjSubmission($id_prj_soum);
         $this->setIdUtSubmission($id_ut_soum);
         $this->setTarifSubmission($tarif_soum);
         $this->setEtatSubmission($etat_soum);
    }
     public function __destruct() {

     }

    public function getIdPrjSubmission(){
        return $this->id_prj_soum;
    }
    public function getIdUtSubmission(){
        return $this->id_ut_soum;
    }
    public function getTarifSubmission(){
        return $this->tarif_soum;
    }
    public function getEtatSubmission(){
        return $this->etat_soum;
    }
    
    public function getErreur(){
        return $this->erreur;
    }
    
    
    /**
     * Mutateur de la propriété id_prj_soum 
     *
     * @return boolean
     */    
    public function setIdPrjSubmission($id_prj_soum = null) {

        $this->id_prj_soum= $id_prj_soum;
    }
    
    /**
     * Mutateur de la propriété id_ut_soum 
     *
     * @return boolean
     */    
    public function setIdUtSubmission($id_ut_soum = null) {

       $this->id_ut_soum= $id_ut_soum;

    }

/**
     * Mutateur de la propriété tarif_soum 
     *
     * @return boolean
     */    
    public function setTarifSubmission($tarif_soum = null) {

        $this->tarif_soum= $tarif_soum;

    }

/**
     * Mutateur de la propriété etat_soum 
     *
     * @return boolean
     */    
    public function setEtatSubmission($etat_soum = null) {

        $this->etat_soum= $etat_soum;
    }


}