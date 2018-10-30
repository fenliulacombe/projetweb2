<?php
class adminModel extends Model{
    /*lister les admins*/
    public function index(){ 

        $this->query('SELECT `nom_ut`,`prenom_ut`,`courriel_ut`,`id_role_ut` 
              FROM `utilisateur` 
              WHERE `id_role_ut`= 1 ');
            $this->execute();
            $row = resultSet();

    }
    /*ajouter un admin*/
    public function add(){ 
    $this->query('INSERT INTO `pw2`.`utilisateur` (`nom_ut`, `prenom_ut`, `courriel_ut`,`mdp_ut`, `id_role_ut`) VALUES (:nom_ut,:prenom_ut, :courriel_ut,:mdp_ut, :id_role_ut)');
            $this->bind(':nom_ut', $user->getNomUtilisateur());
            $this->bind(':prenom_ut', $user->getPrenomUtilisateur());
            $this->bind(':courriel_ut', $user->getCourrielUtilisateur());
            $this->bind(':mdp_ut', $user->getMdpUtilisateur());
            $this->bind(':id_role_ut', $user->getIdRoleUtilisateur());
            $this->execute();     

    }

    /*modifier un admin*/
    public function update($id){  
    $this->query('UPDATE `pw2`.`utilisateur` 
        SET (`nom_ut`=:nom_ut,
         `prenom_ut`= :prenom_ut,
         `courriel_ut`=:courriel_ut,
         `mdp_ut`=:mdp_ut)
           WHERE id_ut = :id ');
            $this->bind(':id', $id);
            $this->bind(':nom_ut', $user->getNomUtilisateur());
            $this->bind(':prenom_ut', $user->getPrenomUtilisateur());
            $this->bind(':courriel_ut', $user->getCourrielUtilisateur());
            $this->bind(':mdp_ut', $user->getMdpUtilisateur());
            $this->execute();    
    }

    /*supprimer un admin*/
    public function delete($id){  
     $this->query("DELETE * FROM utilisateur WHERE id_ut = :id");
     $this->bind(":id", $id);
     $this->execute();    

    }
}