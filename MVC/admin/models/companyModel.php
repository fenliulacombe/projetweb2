<?php
class SectorModel extends Model{
    /*liste complète des sectors*/
    public function Index(){
    	 $this->query('SELECT * FROM `secteur`');
            $this->execute();
            $row = resultSet(); 
        
    }


        /*ajouter une secteur*/
    public function add(){ 
     $this->query('INSERT INTO `secteur` (`nom_secteur`,`photo_secteur`) VALUES (:nom_secteur,:photo_secteur)');
            $this->bind(':nom_secteur', $sector->getNomSecteur());
            $this->bind(':photo_secteur', $sector->getPhotoSecteur());
            $this->execute();     

    }

    /*modifier une secteur*/
    public function update($id){ 
        $this->query('UPDATE `secteur` 
        SET (`nom_secteur`=:nom_secteur,
             `photo_secteur`=:photo_secteur)
           WHERE id_secteur = :id ');
            $this->bind(':id', $id);
            $this->bind(':nom_secteur', $sector->getNomComp());
            $this->bind(':photo_secteur', $sector->setPhotoSecteur());
            $this->execute();      

    }

    /*supprimer une secteur*/
    public function delete($id){
    $this->query("DELETE FROM secteur WHERE id_secteur = :id");
     $this->bind(":id", $id);
     $this->execute();    
      

    }


}