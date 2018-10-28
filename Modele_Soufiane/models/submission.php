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



    public function addSubmission($submission){
        
       $this->query('INSERT INTO `pw2`.`projet` (`id_prj_soum`, `id_ut_soum`, `tarif_soum`) VALUES (:id_prj_soum,:id_ut_soum,:tarif_soum)');
            $this->bind(':id_prj_soum', $contract->id_prj_soum);
            $this->bind(':id_ut_soum', $contract->id_ut_soum);
            $this->bind(':tarif_soum', $contract->tarif_soum);
            $this->execute();
    }

    public function updateSubmission($submission,$id){

       $this->query('UPDATE `pw2`.`projet` 
        SET (`id_prj_soum`=:id_prj_soum,
         `id_ut_soum`= :id_ut_soum,
         `tarif_soum`= :tarif_soum)
           WHERE id_ut = :id ');
            $this->bind(':id', $id);
            $this->bind(':id_prj_soum', $contract->id_prj_soum);
            $this->bind(':id_ut_soum', $contract->id_ut_soum);
            $this->bind(':tarif_soum', $contract->tarif_soum);
            $this->execute();
    }

}