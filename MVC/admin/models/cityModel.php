<?php
class SectorModel extends Model{
    /*liste complète des sectors*/
    public function Index(){
    	 $this->query('SELECT *  FROM `ville`');
            $this->execute();
            $row = resultSet(); 
        
    }


        /*ajouter une ville*/
    public function add(){ 
     $this->query('INSERT INTO `ville` (`nom_ville`) VALUES (:nom_ville)');
            $this->bind(':nom_ville', $city->getNomVille());
            $this->execute();     

    }

    /*modifier une ville*/
    public function update($id){ 
        $this->query('UPDATE `ville` 
        SET (`nom_ville`=:nom_ville)
           WHERE id_ville = :id ');
            $this->bind(':id', $id);
            $this->bind(':nom_ville', $city->getNomVille());
            $this->execute();      

    }

    /*supprimer une ville*/
    public function delete($id){
    $this->query("DELETE FROM ville WHERE id_ville = :id");
     $this->bind(":id", $id);
     $this->execute();    
      

    }


}