<?php
class submissionModel extends Model{
    public function index(){
        // $this->query('SELECT * FROM shares ORDER BY create_date DESC');
        // $rows = $this->resultSet();
        // return $rows;
        return;
    }

    public function getSubmission(){


       $this->query('SELECT *,COUNT(id_prj_soum)AS nombre_soum FROM projet
            LEFT JOIN `pw2`.`soumissioner` ON `projet`.`id_prj` = `soumissioner`.`id_prj_soum`
                GROUP BY id_prj_soum ');
            $this->execute();
            $row = resultSet();
    }

     public function addSubmission($contract){


       $this->query('INSERT INTO `pw2`.`projet` (`titre_prj`, `type_prj`, `description_prj`, `lieu_realisation_prj`, `budget_indicatif_prj`, `date_debut_prj`, `date_fin_prj`, `id_ut_prj`, `id_secteur_prj`) VALUES (:titre_prj,:type_prj,:description_prj,:lieu_realisation_prj,:budget_indicatif_prj, :date_debut_prj, :date_fin_prj, :id_ut_prj, :id_secteur_prj)');
            $this->bind(':titre_prj', $contract->titre_prj);
            $this->bind(':type_prj', $contract->type_prj);
            $this->bind(':description_prj', $contract->description_prj);
            $this->bind(':lieu_realisation_prj', $contract->lieu_realisation_prj);
            $this->bind(':budget_indicatif_prj', $contract->budget_indicatif_prj);
            $this->bind(':date_debut_prj', $contract->date_debut_prj);
            $this->bind(':date_fin_prj', $contract->date_fin_prj);
            $this->bind(':id_ut_prj', $contract->id_ut_prj);
            $this->bind(':id_secteur_prj', $contract->id_secteur_prj);
            $this->execute();
    }

    public function updateSubmission($contract,$id){

       $this->query('UPDATE `pw2`.`projet` 
        SET (`titre_prj`=:titre_prj,
         `type_prj`= :type_prj,
         `description_prj`= :description_prj,
         `lieu_realisation_prj`=:lieu_realisation_prj,
         `budget_indicatif_prj`=:budget_indicatif_prj,
         `date_debut_prj`=:date_debut_prj,
         `date_fin_prj`=:date_fin_prj,
         `id_ut_prj`=:id_ut_prj,
         `id_secteur_prj`=:id_secteur_prj,
         )
           WHERE id_ut = :id ');
            $this->bind(':id', $id);
            $this->bind(':titre_prj', $contract->titre_prj);
            $this->bind(':type_prj', $contract->type_prj);
            $this->bind(':description_prj', $contract->description_prj);
            $this->bind(':lieu_realisation_prj', $contract->lieu_realisation_prj);
            $this->bind(':budget_indicatif_prj', $contract->budget_indicatif_prj);
            $this->bind(':date_debut_prj', $contract->date_debut_prj);
            $this->bind(':date_fin_prj', $contract->date_fin_prj);
            $this->bind(':id_ut_prj', $contract->id_ut_prj);
            $this->bind(':id_secteur_prj', $contract->id_secteur_prj);
            $this->execute();
    }

}