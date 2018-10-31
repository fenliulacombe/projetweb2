<?php
class ProviderModel extends Model{
    
    public function index(){ 
        $this->query('SELECT * 
        FROM `utilisateur` 
        WHERE `id_role_ut`= 2 ');
        $rows =  $this->resultSet();
        return $rows;     
        }
    
    /*valider un fournisseur*/
    public function validate($id, $valeur){ 
        $this->query('UPDATE `utilisateur` 
            SET `validation_ut`=:validation_ut,
            WHERE id_ut = :id ');
        $this->bind(':id', $id);
        $this->bind(':validation_ut', $valeur);
        $this->execute();
    }

    public function suspension($id, $valeur){ 
        $this->query('UPDATE `utilisateur` 
            SET `suspension_ut`=:suspension_ut,
            WHERE id_ut = :id ');
        $this->bind(':id', $id);
        $this->bind(':suspension_ut', $valeur);
        $this->execute();
    }

    /*supprimer un fournisseur*/
    public function delete($id){
    $this->query("DELETE FROM utilisateur WHERE id_ut = :id");
        $this->bind(":id", $id);
        $this->execute();      

    }
}