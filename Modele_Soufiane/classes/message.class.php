<?php
//require_once("./index.php");


class Message {

   
    private $message_msg = NULL;
    private $titre_msg = NULL;
    private $date_msg = NULL;
    private $id_expediteur_msg = NULL;
    private $id_destinataire_msg = NULL;
    private $etat_lu_msg = NULL;
    private $date_lu_msg = NULL;
    private $erreur = array();
    /*
     * Le constructeur de 
     */
    public function __construct($message_msg=null , $titre_msg=null, $date_msg=null, $id_expediteur_msg=null, $id_destinataire_msg=null, $etat_lu_msg=null, $date_lu_msg=null) {
       // $this->setId($id);
         $this->setMessageMessage($message_msg);
         $this->setTitreMessage($titre_msg);
         $this->setDateMessage($date_msg);
         $this->setIdExpediteurMessage($id_expediteur_msg);
         $this->setIdDestinateurMessage($id_destinataire_msg);
         $this->setEtatLuMessage($etat_lu_msg);
         $this->setDateLuMessage($date_lu_msg);
    }
     public function __destruct() {

     }

    public function getMessageMessage(){
        return $this->message_msg;
    }
    public function getTitreMessage(){
        return $this->titre_msg;
    }
    public function getDateMessage(){
        return $this->date_msg;
    }
    public function getIdExpediteurMessage(){
        return $this->id_expediteur_msg;
    }
    public function getIdDestinateurMessage(){
        return $this->id_destinataire_msg;
    }
    public function getEtatLuMessage(){
        return $this->etat_lu_msg;
    }
    public function getDateLuMessage(){
        return $this->date_lu_msg;
    }
    
    public function getErreur(){
        return $this->erreur;
    }
    
    
    /**
     * Mutateur de la propriété message_msg 
     *
     * @return boolean
     */    
    public function setMessageMessage($message_msg = null) {

        $this->message_msg= $message_msg;
    }
    
    /**
     * Mutateur de la propriété titre_msg 
     *
     * @return boolean
     */    
    public function setTitreMessage($titre_msg = null) {

       $this->titre_msg= $titre_msg;

    }

/**
     * Mutateur de la propriété date_msg 
     *
     * @return boolean
     */    
    public function setDateMessage($date_msg = null) {

        $this->date_msg= $date_msg;

    }

/**
     * Mutateur de la propriété id_expediteur_msg 
     *
     * @return boolean
     */    
    public function setIdExpediteurMessage($id_expediteur_msg = null) {

        $this->id_expediteur_msg= $id_expediteur_msg;
    }

    /**
     * Mutateur de la propriété id_destinataire_msg 
     *
     * @return boolean
     */    
    public function setIdDestinateurMessage($id_destinataire_msg = null) {

        $this->id_destinataire_msg= $id_destinataire_msg;
    }

    /**
     * Mutateur de la propriété etat_lu_msg 
     *
     * @return boolean
     */    
    public function setEtatLuMessage($etat_lu_msg = null) {

        $this->etat_lu_msg= $etat_lu_msg;
    }

    /**
     * Mutateur de la propriété date_lu_msg 
     *
     * @return boolean
     */    
    public function setDateLuMessage($date_lu_msg = null) {

        $this->date_lu_msg= $date_lu_msg;
    }


}