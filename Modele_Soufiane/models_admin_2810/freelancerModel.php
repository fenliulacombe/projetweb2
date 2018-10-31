<?php
class FreelancerModel extends Model{
    /*afficher tous les prestataire*/
    public function getFreelancers(){      
       $this->query('SELECT *, COUNT(`id_ut`) AS NBREVAL, avg(`evaluer`.`note_eval`) AS moyenne FROM utilisateur 
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
    public function getTopFreelancers(){
        $this->query('SELECT * , COUNT(`id_ut`) AS NBREVAL FROM utilisateur
        LEFT JOIN `evaluer` ON `utilisateur`.`id_ut` = `evaluer`.`id_evaluer_eval`  
        INNER JOIN `secteur` ON `utilisateur`.`id_secteur_ut` = `secteur`.`id_secteur`
        INNER JOIN `ville` ON `utilisateur`.`id_ville_ut` = `ville`.`id_ville` 
        GROUP BY `id_ut` ORDER BY note_eval DESC
        LIMIT 4 ');
        $rows =  $this->resultSet();
        return $rows;
     }

    /*afficher les prestataire par filtre*/
    public function getFreelancersFiltre($ville,$taux_horaire,$secteur){      
        $this->query('SELECT *,COUNT(`id_ut`) FROM utilisateur 
        LEFT JOIN `evaluer` ON `utilisateur`.`id_ut` = `evaluer`.`id_evaluer_eval` 
        INNER JOIN `secteur` ON `utilisateur`.`id_secteur_ut` = `secteur`.`id_secteur`
        INNER JOIN `ville` ON `utilisateur`.`id_ville_ut` = `ville`.`id_ville` 
        GROUP BY `id_ut`');
        $rows =  $this->resultSet();
        return $rows;
     }
    
    /*calculer le nombre de projets soumissionnés*/
    public function getNbProjetsSoum($id){      
        $this->query('SELECT COUNT(`id_ut`) as nbProjetsSoum FROM utilisateur 
        LEFT JOIN `soumissioner` ON `utilisateur`.`id_ut` = `soumissioner`.`id_ut_soum` 
        INNER JOIN `projet` ON `projet`.`id_prj` = `soumissioner`.`id_prj_soum`
        WHERE `id_ut` = '.$id.'');
        $rows =  $this->getItem();
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
    public function researchFreelancer($research){

        
        $this->query('SELECT * ,COUNT(`id_ut`) AS nombreval ,AVG(note_eval) AS notegenerale
                    FROM utilisateur
                    INNER JOIN `pw2`.`evaluer` ON `utilisateur`.`id_ut` = `evaluer`.`id_evaluer_eval`
                    INNER JOIN `secteur` ON `utilisateur`.`id_secteur_ut` = `secteur`.`id_secteur`
                    INNER JOIN `ville` ON `utilisateur`.`id_ville_ut` = `ville`.`id_ville`
                    WHERE `nom_ut` LIKE :nom OR `prenom_ut` LIKE :prenom
                    GROUP BY `id_ut`
                    ORDER BY id_ut DESC ');
                      $this->bind(':nom', $research);
                      $this->bind(':prenom', $research);
                    $this->execute();
                    $row = resultSet();
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