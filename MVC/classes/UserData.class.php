<?php

class UserData extends Entite {
    private $nom_ut = null;
    private $prenom_ut = null;
    private $nom_entreprise_ut = null;
    private $numero_entreprise_ut = null;
    private $adresse_ut = null;
    private $telephone_ut = null;
    private $courriel_ut = null;
    private $site_web_ut = null;
    private $lien_facebook_ut = null;
    private $lien_linkedin_ut = null;
    private $validation_ut = 0;
    private $suspension_ut = 0;
    private $mdp_ut = null;
    private $competence_ut = null;
    private $taux_horaire_ut = null;
    private $annee_experience_ut = null;
    private $disponibilite_ut = null;
    private $situation_pro_ut = null;
    private $apropos_ut = null;
    private $neq_ut = null;
    private $photo_ut = null;
    private $id_role_ut = null;
    private $id_secteur_ut = null;
    private $id_type_etse_ut = null;
    private $id_ville_ut = null;
    private $titre_profil_ut = null;
    /*
     * Le constructeur de 
     */
 
    
    public function getProfil(){
        return $this->titre_profil_ut;
    }

    public function getNom(){
        return $this->nom_ut;
    }
    public function getPrenom(){
        return $this->prenom_ut;
    }
    public function getNomEntreprise(){
        return $this->nom_entreprise_ut;
    }
    public function getNumeroEntreprise(){
        return $this->numero_entreprise_ut;
    }
    public function getAdresse(){
        return $this->adresse_ut;
    }
    public function getTelephone(){
        return $this->telephone_ut;
    }
    public function getCourriel(){
        return $this->courriel_ut;
    }
    public function getSiteWeb(){
        return $this->site_web_ut;
    }
    public function getLienFacebook() {
        return $this->lien_facebook_ut;
    }
     public function getLienLinkedin() {
        return $this->lien_linkedin_ut;
    }
     public function getValidation() {
        return $this->validation_ut;
    }
     public function getSuspension() {
        return $this->suspension_ut;
    }
     public function getMdp() {
        return $this->mdp_ut;
    }
     public function getCompetence() {
        return $this->competence_ut;
    }
     public function getTauxHoraire() {
        return $this->taux_horaire_ut;
    }
     public function getAnneeExperience() {
        return $this->annee_experience_ut;
    }
     public function getDisponibilites() {
        return $this->disponibilite_ut;
    }
     public function getSituationPro() {
        return $this->situation_pro_ut;
    }
     public function getApropos() {
        return $this->apropos_ut;
    }
     public function getNeq() {
        return $this->neq_ut;
    }
     public function getPhoto() {
        return $this->photo_ut;
    }
     public function getIdRole() {
        return $this->id_role_ut;
    }
     public function getIdSecteur() {
        return $this->id_secteur_ut;
    }
     public function getIdTypeEtse() {
        return $this->id_type_etse_ut;
    }
     public function getIdVille() {
        return $this->id_ville_ut;
    }
   
      /**
     * Mutateur de la propriété pseudo_ut 
     * @return 
     */    
    public function setTitre_profil_ut($titre_profil_ut= null) {
        if(empty($titre_profil_ut)){
            $this->errorsHydrate['Titre Profil'] = "Veuillez saisir votre titre profil.";
        }
        $this->titre_profil_ut=trim($titre_profil_ut);
    }
    
    /**
     * Mutateur de la propriété nom_ut 
     * @return 
     */    
    public function setNom_ut($nom_ut = null) {
        if(empty($nom_ut) ){
            $this->errorsHydrate['Nom'] = "Veuillez saisir votre nom.";    
        }
        $this->nom_ut= $nom_ut;
    }
    
    /**
     * Mutateur de la propriété prenom_ut 
     * @return 
     */    
    public function setPrenom_ut($prenom_ut = null) {
        if(empty($prenom_ut)){
            $this->errorsHydrate['prenom'] = "Veuillez remplir votre prenom.";            
        }
       $this->prenom_ut= $prenom_ut;
    }

/**
     * Mutateur de la propriété nom_entreprise_ut 
     * @return 
     */    
    public function setNom_entreprise_ut($nom_entreprise_ut = null) {
        if(empty($nom_entreprise_ut)){
            $this->errorsHydrate['nom entreprise'] = "Veuillez saisir votre nom d'entreprise";            
        }
        $this->nom_entreprise_ut= $nom_entreprise_ut;

    }

/**
     * Mutateur de la propriété numero_entreprise_ut 
     * @return 
     */    
    public function setNumero_entreprise_ut($numero_entreprise_ut = null) {
        $this->numero_entreprise_ut= $numero_entreprise_ut;
    }

/**
     * Mutateur de la propriété adresse_ut 
     * @return 
     */    
    public function setAdresse_ut($adresse_ut = null) {
        if(empty($adresse_ut)){
            $this->errorsHydrate['adresse'] = "Veuillez choisir vos disponibilités";            
        }
        $this->adresse_ut = $adresse_ut;
    }
/**
     * Mutateur de la propriété telephone_ut 
     * @return 
     */    
    public function setTelephone_ut($telephone_ut = null) {
        $regExp = "/^[\(\)\.\- ]{0,}[0-9]{3}[\(\)\.\- ]{0,}[0-9]{3}[\(\)\.\- ]{0,}[0-9]{4}[\(\)\.\- ]{0,}$/";
        if (empty($telephone_ut) || !preg_match($regExp, trim($telephone_ut))) {
            $this->errorsHydrate['telephone'] = "Le numéro saisi doit être au format de numéro téléphone de l'Amérique du Nord.";
        } 
        $this->telephone_ut = $telephone_ut;
    }

/**
     * Mutateur de la propriété courriel_ut 
     *
     * @return
     */    
    public function setCourriel_ut($courriel_ut = null) {
        $regExp = "/^(\w[-._+\w]*\w@\w[-._\w]*\w\.\w{2,3})$/";
        if (empty($courriel_ut) || !preg_match($regExp, trim($courriel_ut))) {
            $this->errorsHydrate['courriel'] = "Le mail doit être au format standard : name@example.com";
        } 
        $this->courriel_ut = $courriel_ut;
    }

/**
     * Mutateur de la propriété site_web_ut 
     * @return 
     */    
    public function setSite_web_ut($site_web_ut = null) {
        $this->site_web_ut = $site_web_ut;
    }

/**
     * Mutateur de la propriété lien_facebook_ut 
     * @return 
     */    
    public function setLien_facebook_ut($lien_facebook_ut = null) {
       $this->lien_facebook_ut = $lien_facebook_ut;
    }

    /**
     * Mutateur de la propriété lien_linkedin_ut 
     * @return 
     */    
    public function setLien_linkedin_ut($lien_linkedin_ut = null) {
       $this->lien_linkedin_ut = $lien_linkedin_ut;
    }
    /**
     * Mutateur de la propriété validation_ut 
     * @return 
     */    
    public function setValidation_ut($validation_ut = 0) {
       $this->validation_ut = $validation_ut;
    }
    /**
     * Mutateur de la propriété suspension_ut 
     * @return 
     */    
    public function setSuspension_ut($suspension_ut = 0) {
       $this->suspension_ut = $suspension_ut;
    }
    /**
     * Mutateur de la propriété mdp_ut 
     * @return 
     */    
    public function setMdp_ut($mdp_ut = null) {
        $regExp = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,20})$/";
        if (empty($mdp_ut) || !preg_match($regExp, trim($mdp_ut))) 
        {
            $this->errorsHydrate['Mot de passe'] = "Un mot de passe valide doit avoir de 8 à 20 caractères, une lettre minuscule, une lettre majuscule, un chiffre et un de ces caractères spéciaux: $ @ % * + - _ ! ";
        } 
       $this->mdp_ut = $mdp_ut;
    }
    /**
     * Mutateur de la propriété competence_ut 
     * @return 
     */    
    public function setCompetence_ut($competence_ut = null) {
        if(empty($competence_ut)){
            $this->errorsHydrate['Competences'] = "Veuillez choisir vos compétences";            
        }
       $this->competence_ut = $competence_ut;
    }
    /**
     * Mutateur de la propriété taux_horaire_ut 
     * @return 
     */    
    public function setTaux_horaire_ut($taux_horaire_ut = null) {
        $regExp = "/^[0-9]{0,3}$/";
        if (empty($taux_horaire_ut) || !preg_match($regExp, trim($taux_horaire_ut))) {
            $this->errorsHydrate['Taux d\'horaire'] = "Le taux horaire doit être un chiffre entre 0 et 1000";
        } 
       $this->taux_horaire_ut = $taux_horaire_ut;
    }
    /**
     * Mutateur de la propriété annee_experience_ut 
     *
     * @return 
     */    
    public function setAnnee_experience_ut($annee_experience_ut = null) {
        $regExp = "/^[0-9]{0,2}$/";
        if (empty($annee_experience_ut) || !preg_match($regExp, trim($annee_experience_ut))) {
            $this->errorsHydrate['Annees d\'experiences'] = "Les années d'expérience doivent être un chiffre entre 0 et 100";
        } 
       $this->annee_experience_ut = $annee_experience_ut;
    }
    /**
     * Mutateur de la propriété disponibilite_ut 
     * @return 
     */    
    public function setDisponibilite_ut($disponibilite_ut = null) {
        if(empty($disponibilite_ut)){
            $this->errorsHydrate['Disponibilites'] = "Veuillez choisir vos disponibilités";            
        }
       $this->disponibilite_ut = $disponibilite_ut;
    }
    /**
     * Mutateur de la propriété situation_pro_ut 
     *
     * @return 
     */    
    public function setSituation_pro_ut($situation_pro_ut = null) {
        if(empty($situation_pro_ut)){
            $this->errorsHydrate['Situation professionnel'] = "Veuillez choisir votre situation profesionnelle";            
        }
        $this->situation_pro_ut = $situation_pro_ut;
    }
    /**
     * Mutateur de la propriété apropos_ut 
     *
     * @return
     */    
    public function setApropos_ut($apropos_ut = null) {
       $this->apropos_ut = $apropos_ut;
    }
    /**
     * Mutateur de la propriété neq_ut 
     *
     * @return 
     */    
    public function setNeq_ut($neq_ut = null) {
       $this->neq_ut = $neq_ut;
    }
    /**
     * Mutateur de la propriété photo_ut 
     * @return 
     */    
    public function setPhoto_ut($photo_ut = null) {
       $this->photo_ut = $photo_ut;
    }
    /**
     * Mutateur de la propriété id_role_ut 
     * @return 
     */    
    public function setId_role_ut($id_role_ut = null) {
       $this->id_role_ut = $id_role_ut;
    }
    /**
     * Mutateur de la propriété id_secteur_ut 
     *
     * @return 
     */    
    public function setId_secteur_ut($id_secteur_ut = null) {
       $this->id_secteur_ut = $id_secteur_ut;
    }
    /**
     * Mutateur de la propriété id_type_etse_ut 
     * @return 
     */    
    public function setId_type_etse_ut($id_type_etse_ut = null) {
       $this->id_type_etse_ut = $id_type_etse_ut;
    }
    /**
     * Mutateur de la propriété id_ville_ut 
     *
     * @return 
     */    
    public function setId_ville_ut($id_ville_ut = null) {
       
        $this->id_ville_ut = $id_ville_ut;
    }

}