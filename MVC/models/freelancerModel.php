<?php
class FreelancerModel extends Model{
    /*afficher tous les prestataire*/
    public function getFreelancers(){      
       $this->query('SELECT *,COUNT(`id_ut`), avg(`evaluer`.`note_eval`) AS moyenne FROM utilisateur 
       LEFT JOIN `evaluer` ON `utilisateur`.`id_ut` = `evaluer`.`id_evaluer_eval`
       INNER JOIN `secteur` ON `utilisateur`.`id_secteur_ut` = `secteur`.`id_secteur`
       INNER JOIN `ville` ON `utilisateur`.`id_ville_ut` = `ville`.`id_ville` 
       GROUP BY `id_ut`');
       $rows =  $this->resultSet();
       return $rows;
    }

    public function getFreelancer($id){      
        $this->query('SELECT *, avg(`evaluer`.`note_eval`) AS moyenne FROM utilisateur
        LEFT JOIN `evaluer` ON `utilisateur`.`id_ut` = `evaluer`.`id_evaluer_eval` 
        INNER JOIN `secteur` ON `utilisateur`.`id_secteur_ut` = `secteur`.`id_secteur`
        INNER JOIN `ville` ON `utilisateur`.`id_ville_ut` = `ville`.`id_ville` 
        WHERE `id_ut` = '.$id);
        $row =  $this->getItem();
        return $row;
    }

    /*supprimer prestataire*/
    public function getTopFreelancer(){
        $this->query('SELECT * ,COUNT(`id_ut`)AS NBREVAL FROM utilisateur 
        INNER JOIN `secteur` ON `utilisateur`.`id_secteur_ut` = `secteur`.`id_secteur`
        INNER JOIN `ville` ON `utilisateur`.`id_ville_ut` = `ville`.`id_ville` 
        GROUP BY `id_ut` ORDER BY note_eval DESC
        LIMIT 4 ');
        $row =  $this->resultSet();
        return $row;
     }

    /*afficher les prestataire par filtre*/
    public function getFreelancersFiltre($ville,$taux_horaire,$secteur){      
        $this->query('SELECT *,COUNT(`id_ut`) FROM utilisateur 
        INNER JOIN `secteur` ON `utilisateur`.`id_secteur_ut` = `secteur`.`id_secteur`
        INNER JOIN `ville` ON `utilisateur`.`id_ville_ut` = `ville`.`id_ville` 
        GROUP BY `id_ut`');
        $rows =  $this->resultSet();
        return $rows;
     }

    /*supprimer prestataire*/
    public function deleteFreelancer($id){
        
    }

    /*afficher tous les prestataire*/
    public function addFreelancer(){
        return array(''=>'');
    }

    /*supprimer prestataire*/
    public function updateFreelancer($id){
        return array(''=>'');
    }
    
    /*rechercher un contrat dans le moteur de recherche*/
    public function researchFreelancer(){
        return;
    }

     /*afficher les commentaires et les evaluateurs*/
     public function getEvaluateurs($id_user){      
        $this->query('SELECT * FROM evaluer
        INNER JOIN `utilisateur` ON `utilisateur`.`id_ut` = `evaluer`.`id_evaluateur_eval`
        WHERE id_evaluer_eval = '.$id_user);
        $rows =  $this->resultSet();
        return $rows;
     }

  

   
}