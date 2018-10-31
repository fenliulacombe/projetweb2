<?php
class FreelancerModel extends Model{
    /*afficher tous les prestataire*/
      /*valider un prestataire*/
      public function index(){ 
        $this->query('SELECT * 
        FROM `utilisateur` 
        WHERE `id_role_ut`= 3 ');
        $rows =  $this->resultSet();
        return $rows;     
        }
        
    public function validate($id){ 
    $this->query('UPDATE `utilisateur` 
        SET `validation_ut`=:validation_ut,
           WHERE id_ut = :id ');
            $this->bind(':id', $id);
            $this->bind(':validation_ut', 1);
            $this->execute();      
    }

    public function suspension($id){ 
        $this->query('UPDATE `utilisateur` 
            SET `suspension_ut`=:suspension_ut,
               WHERE id_ut = :id ');
                $this->bind(':id', $id);
                $this->bind(':suspension_ut', 1);
                $this->execute();      
    }

    /*supprimer un prestataire*/
    public function delete($id){
    $this->query("DELETE FROM utilisateur WHERE id_ut = :id");
        $this->bind(":id", $id);
        $this->execute();      
    }     

    

    
   
}