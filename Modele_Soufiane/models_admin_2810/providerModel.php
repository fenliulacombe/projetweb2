<?php
class ProviderModel extends Model{
  
    /*valider un fournisseur*/
    public function validate($id){ 
    $this->query('UPDATE `pw2`.`utilisateur` 
        SET (`validation_ut`=:validation_ut,)
           WHERE id_ut = :id ');
            $this->bind(':id', $id);
            $this->bind(':validation_ut', $user->getValidationUtilisateur());
            $this->execute();      

    }

    /*supprimer un fournisseur*/
    public function delete($id){
    $this->query("DELETE * FROM utilisateur WHERE id_ut = :id");
        $this->bind(":id", $id);
        $this->execute();      

    }
}