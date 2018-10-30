<?php
class FreelancerModel extends Model{
    /*afficher tous les prestataire*/
      /*valider un prestataire*/
    
    public function validate($id){ 
    $this->query('UPDATE `pw2`.`utilisateur` 
        SET (`validation_ut`=:validation_ut,)
           WHERE id_ut = :id ');
            $this->bind(':id', $id);
            $this->bind(':validation_ut', $user->getValidationUtilisateur());
            $this->execute();      
    }

    /*supprimer un prestataire*/
    public function delete($id){
    $this->query("DELETE * FROM utilisateur WHERE id_ut = :id");
        $this->bind(":id", $id);
        $this->execute();      

    }     

    

    
   
}