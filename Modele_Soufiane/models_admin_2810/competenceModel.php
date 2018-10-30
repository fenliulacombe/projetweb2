<?php
class CompetenceModel extends Model{
    /*lister les compétences*/
    public function index(){ 
    $this->query('SELECT * 
              FROM `competence`');
            $this->execute();
            $row = resultSet();     

    }
    /*ajouter une compétence*/
    public function add(){ 
     $this->query('INSERT INTO `pw2`.`competence` (`nom_comp`) VALUES (:nom_comp)');
            $this->bind(':nom_comp', $skill->getNomComp());
            $this->execute();     

    }

    /*modifier une compétence*/
    public function update($id){ 
        $this->query('UPDATE `pw2`.`competence` 
        SET (`nom_comp`=:nom_comp,)
           WHERE id_ut = :id ');
            $this->bind(':id', $id);
            $this->bind(':nom_comp', $skill->getNomComp());
            $this->execute();      

    }

    /*supprimer une compétence*/
    public function delete($id){
    $this->query("DELETE * FROM competence WHERE id_comp = :id");
     $this->bind(":id", $id);
     $this->execute();    
      

    }
}