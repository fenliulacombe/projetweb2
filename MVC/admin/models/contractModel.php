<?php
class ContractModel extends Model
{
    public function index(){
        $this->query('SELECT * FROM projet 
        INNER JOIN utilisateur
        ON `projet`.`id_ut_prj` = `utilisateur`.`id_ut`
        ');
             $rows = $this->resultSet();
             return $rows;
     }

    /*supprimer un prestataire*/
    public function delete($id){      
        $this->query("DELETE FROM projet WHERE id_prj = :id");
        $this->bind(":id", $id);
        $this->execute();
    }
}
