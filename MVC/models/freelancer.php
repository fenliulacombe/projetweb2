<?php
class FreelancerModel extends Model{
    /*afficher tous les prestataire*/
    public function getFreelancers(){      

       $this->query('SELECT *,COUNT(`id_ut`) FROM utilisateur 
       LEFT JOIN `evaluer` ON `utilisateur`.`id_ut` = `evaluer`.`id_evaluer_eval`
       INNER JOIN `secteur` ON `utilisateur`.`id_secteur_ut` = `secteur`.`id_secteur`
       INNER JOIN `ville` ON `utilisateur`.`id_ville_ut` = `ville`.`id_ville` 
       GROUP BY `id_ut`');
       $rows =  $this->resultSet();
       return $rows;
    }

    /*supprimer prestataire*/
    public function getTopFreelancer(){
        $this->query('SELECT * ,COUNT(`id_ut`)AS NBREVAL FROM utilisateur 
        LEFT JOIN `evaluer` ON `utilisateur`.`id_ut` = `evaluer`.`id_evaluer_eval` 
        INNER JOIN `secteur` ON `utilisateur`.`id_secteur_ut` = `secteur`.`id_secteur`
        INNER JOIN `ville` ON `utilisateur`.`id_ville_ut` = `ville`.`id_ville` 
        GROUP BY `id_ut` ORDER BY note_eval DESC
        LIMIT 4 ');
        $row =  $this->resultSet();
        return $row;
 
     }

     /*afficher les prestataire par filtre*/
    public function getFreelancersFiltre(){      

        $this->query('SELECT *,COUNT(`id_ut`) FROM utilisateur 
        LEFT JOIN `evaluer` ON `utilisateur`.`id_ut` = `evaluer`.`id_evaluer_eval`
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

    public function getCities(){
        
       $this->query('SELECT * FROM `ville`');
       $rows =  $this->resultSet();
       return $rows;
    }

    public function GetSectors(){
       $this->query('SELECT * FROM `secteur`');
       $rows =  $this->resultSet();
       return $rows;
       
    }

   
}