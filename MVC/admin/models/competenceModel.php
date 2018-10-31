<?php
class CompetenceModel extends Model{
    /*lister les compétences*/
    public function index(){ 
    $this->query('SELECT * 
           FROM `competence`');
           $rows =  $this->resultSet();
           return $rows;    

    }

    public function getCompetence($id){ 
        $this->query('SELECT *
            FROM `competence` 
            WHERE `id_comp`='.$id);
            $row =  $this->getItem();
            return $row; 
    }

    /*ajouter une compétence*/
    public function add(){ 
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        // $password = $post['password'];
        
        if(isset($post['add_comp'])){
        $this->query('INSERT INTO `competence` (`nom_comp`) VALUES (:nom_comp)');
            $this->bind(':nom_comp', $post['nom_comp']);
            $this->execute();
            if($this->lastInsertId()){
                //redirect
                header('location:'.ROOT_ADMIN.'competence/');
                exit();
            }
        } 
        return;      
    }

    /*modifier une compétence*/
    public function update($id){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        // $password = $post['password'];
        if(isset($post['update_comp'])){ 
        $this->query('UPDATE `competence` 
        SET `nom_comp`=:nom_comp
           WHERE id_comp = :id ');
            $this->bind(':id', $id);
            $this->bind(':nom_comp', $post['nom_comp']);
            $this->execute();  
             //redirect
            header('location:'.ROOT_ADMIN.'competence/');    
            return;  
        }
    }

    /*supprimer une compétence*/
    public function delete($id){
    $this->query("DELETE FROM competence WHERE id_comp = :id");
     $this->bind(":id", $id);
     $this->execute();    
    }
}