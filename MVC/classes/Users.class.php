<?php
//require_once("./index.php");


class Users {

   
    private $nom_ut = '';
    private $prenom_ut = '';
    private $nom_entreprise_ut = '';
    private $numero_entreprise_ut = '';
    private $adresse_ut = '';
    private $telephone_ut = '';
    private $courriel_ut = '';
    private $site_web_ut = '';
    private $lien_facebook_ut = '';
    private $lien_linkedin_ut = '';
    private $validation_ut = '';
    private $suspension_ut = '';
    private $mdp_ut = '';
    private $competence_ut = '';
    private $taux_horaire_ut = '';
    private $annee_experience_ut = '';
    private $disponibilite_ut = '';
    private $situation_pro_ut = '';
    private $apropos_ut = '';
    private $neq_ut = '';
    private $photo_ut = '';
    private $id_role_ut = '';
    private $id_secteur_ut = '';
    private $id_type_etse_ut = '';
    private $id_ville_ut = '';
    private $erreur = array();
    /*
     * Le constructeur de 
     */
    public function __construct($nom_ut , $prenom_ut='', $nom_entreprise_ut='', $numero_entreprise_ut='', $adresse_ut='', $telephone_ut='', $courriel_ut='', $site_web_ut='', $lien_facebook_ut='', $lien_linkedin_ut='', $validation_ut='', $suspension_ut='', $mdp_ut='', $competence_ut='', $taux_horaire_ut='', $annee_experience_ut='', $disponibilite_ut='', $situation_pro_ut='', $apropos_ut='', $neq_ut='', $photo_ut='', $id_role_ut='', $id_secteur_ut='', $id_type_etse_ut='', $id_ville_ut='') {
       // $this->setId($id);
         $this->setNomUtilisateur($nom_ut);
         $this->setPrenomUtilisateur($prenom_ut);
         $this->setNomEntrepriseUtilisateur($nom_entreprise_ut);
         $this->setNumeroEntrepriseUtilisateur($numero_entreprise_ut);
         $this->setAdresseUtilisateur($adresse_ut);
         $this->setTelephoneUtilisateur($telephone_ut);
         $this->setCourrielUtilisateur($courriel_ut);
         $this->setSiteWebUtilisateur($site_web_ut);
         $this->setLienFacebookUtilisateur($lien_facebook_ut);
         $this->setLienLinkedinUtilisateur($lien_linkedin_ut);
         $this->setValidationUtilisateur($validation_ut);
         $this->setSuspensionUtilisateur($suspension_ut);
         $this->setMdpUtilisateur($mdp_ut);
         $this->setCompetenceUtilisateur($competence_ut);
         $this->setTauxHoraireUtilisateur($taux_horaire_ut);
         $this->setAnneeExperienceUtilisateur($annee_experience_ut);
         $this->setDisponibiliteUtilisateur($disponibilite_ut);
         $this->setSituationProUtilisateur($situation_pro_ut);
         $this->setAproposUtilisateur($apropos_ut);
         $this->setNeqUtilisateur($neq_ut);
         $this->setPhotoUtilisateur($photo_ut);
         $this->setIdRoleUtilisateur($id_role_ut);
         $this->setIdSecteurUtilisateur($id_secteur_ut);
         $this->setIdTypeEtseUtilisateur($id_type_etse_ut);
         $this->setIdVilleUtilisateur($id_ville_ut);

    }

    public function getNomUtilisateur(){
        return $this->nom_ut;
    }
    public function getPrenomUtilisateur(){
        return $this->prenom_ut;
    }
    public function getNomEntrepriseUtilisateur(){
        return $this->nom_entreprise_ut;
    }
    public function getNumeroEntrepriseUtilisateur(){
        return $this->numero_entreprise_ut;
    }
    public function getAdresseUtilisateur(){
        return $this->adresse_ut;
    }
    public function getTelephoneUtilisateur(){
        return $this->telephone_ut;
    }
    public function getCourrielUtilisateur(){
        return $this->courriel_ut;
    }
    public function getSiteWebUtilisateur(){
        return $this->site_web_ut;
    }
    public function getLienFacebookUtilisateur() {
        return $this->lien_facebook_ut;
    }
     public function getLienLinkedinUtilisateur() {
        return $this->lien_linkedin_ut;
    }
     public function getValidationUtilisateur() {
        return $this->validation_ut;
    }
     public function getSuspensionUtilisateur() {
        return $this->suspension_ut;
    }
     public function getMdpUtilisateur() {
        return $this->mdp_ut;
    }
     public function getCompetenceUtilisateur() {
        return $this->competence_ut;
    }
     public function getTauxHoraireUtilisateur() {
        return $this->taux_horaire_ut;
    }
     public function getAnneeExperienceUtilisateur() {
        return $this->annee_experience_ut;
    }
     public function getDisponibiliteUtilisateur() {
        return $this->disponibilite_ut;
    }
     public function getSituationProUtilisateur() {
        return $this->situation_pro_ut;
    }
     public function getAproposUtilisateur() {
        return $this->apropos_ut;
    }
     public function getNeqUtilisateur() {
        return $this->neq_ut;
    }
     public function getPhotoUtilisateur() {
        return $this->photo_ut;
    }
     public function getIdRoleUtilisateur() {
        return $this->id_role_ut;
    }
     public function getIdSecteurUtilisateur() {
        return $this->id_secteur_ut;
    }
     public function getIdTypeEtseUtilisateur() {
        return $this->id_type_etse_ut;
    }
     public function getIdVilleUtilisateur() {
        return $this->id_ville_ut;
    }
    public function getErreur(){
        return $this->erreur;
    }
    
    
  
    
    /**
     * Mutateur de la propriété nom_ut 
     *
     * @return boolean
     */    
    public function setNomUtilisateur($nom_ut = '') {

        $this->nom_ut= $nom_ut;
    }
    
    /**
     * Mutateur de la propriété prenom_ut 
     *
     * @return boolean
     */    
    public function setPrenomUtilisateur($prenom_ut = '') {

       $this->prenom_ut= $prenom_ut;

    }

/**
     * Mutateur de la propriété nom_entreprise_ut 
     *
     * @return boolean
     */    
    public function setNomEntrepriseUtilisateur($nom_entreprise_ut = '') {

        $this->nom_entreprise_ut= $nom_entreprise_ut;

    }

/**
     * Mutateur de la propriété numero_entreprise_ut 
     *
     * @return boolean
     */    
    public function setNumeroEntrepriseUtilisateur($numero_entreprise_ut = '') {

        $this->numero_entreprise_ut= $numero_entreprise_ut;
    }

/**
     * Mutateur de la propriété adresse_ut 
     *
     * @return boolean
     */    
    public function setAdresseUtilisateur($adresse_ut = '') {

        $this->adresse_ut = $adresse_ut;

    }
/**
     * Mutateur de la propriété telephone_ut 
     *
     * @return boolean
     */    
    public function setTelephoneUtilisateur($telephone_ut = '') {

        $this->telephone_ut = $telephone_ut;
    }

/**
     * Mutateur de la propriété courriel_ut 
     *
     * @return boolean
     */    
    public function setCourrielUtilisateur($courriel_ut = '') {

        $this->courriel_ut = $courriel_ut;

    }

/**
     * Mutateur de la propriété site_web_ut 
     *
     * @return boolean
     */    
    public function setSiteWebUtilisateur($site_web_ut = '') {

        $this->site_web_ut = $site_web_ut;

    }

/**
     * Mutateur de la propriété lien_facebook_ut 
     *
     * @return boolean
     */    
    public function setLienFacebookUtilisateur($lien_facebook_ut = '') {

       $this->lien_facebook_ut = $lien_facebook_ut;


    }

    /**
     * Mutateur de la propriété lien_linkedin_ut 
     *
     * @return boolean
     */    
    public function setLienLinkedinUtilisateur($lien_linkedin_ut = '') {

       $this->lien_linkedin_ut = $lien_linkedin_ut;


    }
    /**
     * Mutateur de la propriété validation_ut 
     *
     * @return boolean
     */    
    public function setValidationUtilisateur($validation_ut = '') {

       $this->validation_ut = $validation_ut;


    }
    /**
     * Mutateur de la propriété suspension_ut 
     *
     * @return boolean
     */    
    public function setSuspensionUtilisateur($suspension_ut = '') {

       $this->suspension_ut = $suspension_ut;


    }
    /**
     * Mutateur de la propriété mdp_ut 
     *
     * @return boolean
     */    
    public function setMdpUtilisateur($mdp_ut = '') {

       $this->mdp_ut = $mdp_ut;


    }
    /**
     * Mutateur de la propriété competence_ut 
     *
     * @return boolean
     */    
    public function setCompetenceUtilisateur($competence_ut = '') {

       $this->competence_ut = $competence_ut;


    }
    /**
     * Mutateur de la propriété taux_horaire_ut 
     *
     * @return boolean
     */    
    public function setTauxHoraireUtilisateur($taux_horaire_ut = '') {

       $this->taux_horaire_ut = $taux_horaire_ut;


    }
    /**
     * Mutateur de la propriété annee_experience_ut 
     *
     * @return boolean
     */    
    public function setAnneeExperienceUtilisateur($annee_experience_ut = '') {

       $this->annee_experience_ut = $annee_experience_ut;


    }
    /**
     * Mutateur de la propriété disponibilite_ut 
     *
     * @return boolean
     */    
    public function setDisponibiliteUtilisateur($disponibilite_ut = '') {

       $this->disponibilite_ut = $disponibilite_ut;


    }
    /**
     * Mutateur de la propriété situation_pro_ut 
     *
     * @return boolean
     */    
    public function setSituationProUtilisateur($situation_pro_ut = '') {

       $this->situation_pro_ut = $situation_pro_ut;


    }
    /**
     * Mutateur de la propriété apropos_ut 
     *
     * @return boolean
     */    
    public function setAproposUtilisateur($apropos_ut = '') {

       $this->apropos_ut = $apropos_ut;


    }
    /**
     * Mutateur de la propriété neq_ut 
     *
     * @return boolean
     */    
    public function setNeqUtilisateur($neq_ut = '') {

       $this->neq_ut = $neq_ut;


    }
    /**
     * Mutateur de la propriété photo_ut 
     *
     * @return boolean
     */    
    public function setPhotoUtilisateur($photo_ut = '') {

       $this->photo_ut = $photo_ut;


    }
    /**
     * Mutateur de la propriété id_role_ut 
     *
     * @return boolean
     */    
    public function setIdRoleUtilisateur($id_role_ut = '') {

       $this->id_role_ut = $id_role_ut;


    }
    /**
     * Mutateur de la propriété id_secteur_ut 
     *
     * @return boolean
     */    
    public function setIdSecteurUtilisateur($id_secteur_ut = '') {

       $this->id_secteur_ut = $id_secteur_ut;


    }
    /**
     * Mutateur de la propriété id_type_etse_ut 
     *
     * @return boolean
     */    
    public function setIdTypeEtseUtilisateur($id_type_etse_ut = '') {

       $this->id_type_etse_ut = $id_type_etse_ut;


    }
    /**
     * Mutateur de la propriété id_ville_ut 
     *
     * @return boolean
     */    
    public function setIdVilleUtilisateur($id_ville_ut = '') {

       $this->id_ville_ut = $id_ville_ut;


    }

}