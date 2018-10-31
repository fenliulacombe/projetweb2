<?php
class SectorModel extends Model{
    /*liste complète des sectors*/
    public function Index(){
    	 $this->query('SELECT * 
              FROM `secteur`');
            $rows = $this->resultSet();
            return $rows;       
    }

    public function getSector($id){
        $this->query('SELECT * 
           FROM `secteur` WHERE id_secteur ='.$id);
           $row =  $this->getItem();
           return $row;       
   }

    /*ajouter une secteur*/
    public function addSector(){ 
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        // $password = $post['password'];
        
        if(isset($post['add_secteur'])){

            $this->query('INSERT INTO `secteur` (`nom_secteur`,`photo_secteur`) VALUES (:nom_secteur,:photo_secteur)');
            $this->bind(':nom_secteur', $post['nom_secteur']);
            $this->bind(':photo_secteur', $post['photo_secteur']);
            $this->execute();     
            if($this->lastInsertId()){
                //redirect
                header('location:'.ROOT_ADMIN.'sector/');
            }
        } 
        return;  
    }

    /*modifier une secteur*/
    public function updateSector($id){ 

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        // $password = $post['password'];
        if(isset($post['update_secteur'])){
            $this->query('UPDATE `secteur` 
            SET `nom_secteur`=:nom_secteur,
                 `photo_secteur`=:photo_secteur
               WHERE id_secteur = :id ');
                $this->bind(':id', $id);
                $this->bind(':nom_secteur', $post['nom_secteur']);
                $this->bind(':photo_secteur',$post['photo_secteur']);
                $this->execute();    
                header('location:'.ROOT_ADMIN.'sector/');   
        return;  
        }
    }


    /*supprimer une secteur*/
    public function delete($id){
        $this->query("DELETE FROM secteur WHERE id_secteur = :id");
        $this->bind(":id", $id);
        $this->execute();
    }
}