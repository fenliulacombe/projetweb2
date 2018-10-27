<?php
class UserModel extends Model{


 public function addUser($user){

       $this->query('INSERT INTO `pw2`.`utilisateur` (`nom_ut`, `prenom_ut`, `nom_entreprise_ut`, `numero_entreprise_ut`, `adresse_ut`, `telephone_ut`, `courriel_ut`, `site_web_ut`, `lien_facebook_ut`, `lien_linkedin_ut`,`mdp_ut`, `competence_ut`, `taux_horaire_ut`, `annee_experience_ut`, `disponibilite_ut`, `situation_pro_ut`, `apropos_ut`, `neq_ut`, `id_role_ut`, `id_secteur_ut`, `id_type_etse_ut`, `id_ville_ut`,`titre_profil_ut`,`pseudo_ut`) VALUES (:nom_ut,:prenom_ut,:nom_entreprise_ut,:numero_entreprise_ut,:adresse_ut, :telephone_ut, :courriel_ut, :site_web_ut, :lien_facebook_ut, :lien_linkedin_ut, :mdp_ut, :competence_ut, :taux_horaire_ut, :annee_experience_ut, :disponibilite_ut, :situation_pro_ut, :apropos_ut, :neq_ut, :id_role_ut, :id_secteur_ut, :id_type_etse_ut, :id_ville_ut, :titre_profil_ut, :pseudo_ut)');
            $this->bind(':nom_ut', $user->nom_ut);
            $this->bind(':prenom_ut', $user->prenom_ut);
            $this->bind(':nom_entreprise_ut', $user->nom_entreprise_ut);
            $this->bind(':numero_entreprise_ut', $user->numero_entreprise_ut);
            $this->bind(':adresse_ut', $user->adresse_ut);
            $this->bind(':telephone_ut', $user->telephone_ut);
            $this->bind(':courriel_ut', $user->courriel_ut);
            $this->bind(':site_web_ut', $user->site_web_ut);
            $this->bind(':lien_facebook_ut', $user->lien_facebook_ut);
            $this->bind(':lien_linkedin_ut', $user->lien_linkedin_ut);
            $this->bind(':competence_ut', $user->competence_ut);
            $this->bind(':taux_horaire_ut', $user->taux_horaire_ut);
            $this->bind(':annee_experience_ut', $user->annee_experience_ut);
            $this->bind(':disponibilite_ut', $user->disponibilite_ut);
            $this->bind(':situation_pro_ut', $user->situation_pro_ut);
            $this->bind(':apropos_ut', $user->apropos_ut);
            $this->bind(':neq_ut', $user->neq_ut);
            $this->bind(':id_role_ut', $user->id_role_ut);
            $this->bind(':id_secteur_ut', $user->id_secteur_ut);
            $this->bind(':id_type_etse_ut', $user->id_type_etse_ut);
            $this->bind(':id_ville_ut', $user->id_ville_ut);
            $this->bind(':titre_profil_ut', $user->titre_profil_ut);
            $this->bind(':pseudo_ut', $user->pseudo_ut);
            $this->execute();
    }

    public function updateUser($user,$id){

       $this->query('UPDATE `pw2`.`utilisateur` 
        SET (`nom_ut`=:nom_ut,
         `prenom_ut`= :prenom_ut,
         `nom_entreprise_ut`= :nom_entreprise_ut,
         `numero_entreprise_ut`=:numero_entreprise_ut,
         `adresse_ut`=:adresse_ut,
         `telephone_ut`=:telephone_ut,
         `courriel_ut`=:courriel_ut,
         `site_web_ut`=:site_web_ut,
         `lien_facebook_ut`=:lien_facebook_ut,
         `lien_linkedin_ut`=:lien_linkedin_ut,
         `mdp_ut`=:mdp_ut,
         `competence_ut`=:competence_ut,
         `taux_horaire_ut`=:taux_horaire_ut,
         `annee_experience_ut`=:annee_experience_ut,
         `disponibilite_ut`=:disponibilite_ut,
         `situation_pro_ut`=:situation_pro_ut,
         `apropos_ut`=:apropos_ut,
         `neq_ut`=:neq_ut,
         `id_role_ut`=:id_role_ut,
         `id_secteur_ut`=:id_secteur_ut,
         `id_type_etse_ut`=:id_type_etse_ut,
         `id_ville_ut`=:id_ville_ut,
         `titre_profil_ut`=:titre_profil_ut,
         `pseudo_ut`=:pseudo_ut)
           WHERE id_ut = :id ');
            $this->bind(':id', $id);
            $this->bind(':nom_ut', $user->nom_ut);
            $this->bind(':prenom_ut', $user->prenom_ut);
            $this->bind(':nom_entreprise_ut', $user->nom_entreprise_ut);
            $this->bind(':numero_entreprise_ut', $user->numero_entreprise_ut);
            $this->bind(':adresse_ut', $user->adresse_ut);
            $this->bind(':telephone_ut', $user->telephone_ut);
            $this->bind(':courriel_ut', $user->courriel_ut);
            $this->bind(':site_web_ut', $user->site_web_ut);
            $this->bind(':lien_facebook_ut', $user->lien_facebook_ut);
            $this->bind(':lien_linkedin_ut', $user->lien_linkedin_ut);
            $this->bind(':competence_ut', $user->competence_ut);
            $this->bind(':taux_horaire_ut', $user->taux_horaire_ut);
            $this->bind(':annee_experience_ut', $user->annee_experience_ut);
            $this->bind(':disponibilite_ut', $user->disponibilite_ut);
            $this->bind(':situation_pro_ut', $user->situation_pro_ut);
            $this->bind(':apropos_ut', $user->apropos_ut);
            $this->bind(':neq_ut', $user->neq_ut);
            $this->bind(':id_role_ut', $user->id_role_ut);
            $this->bind(':id_secteur_ut', $user->id_secteur_ut);
            $this->bind(':id_type_etse_ut', $user->id_type_etse_ut);
            $this->bind(':id_ville_ut', $user->id_ville_ut);
            $this->bind(':titre_profil_ut', $user->titre_profil_ut);
            $this->bind(':pseudo_ut', $user->pseudo_ut);
            $this->execute();
    }


    // un utilisateur ne peut pas supprimer j'ai mis en commentaire pour copier cette requete dans admin 

        // public function deleteuser($id){

        //       $this->query("DELETE * FROM utilisateur WHERE id_ut = :id");
        //       $this->bind(":id", $id);
        //       $this->execute();
        // }
}