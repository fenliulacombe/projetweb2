<?php
class adminModel extends Model{
    /*lister les admins*/
    public function index(){ 
        $this->query('SELECT *
            FROM `utilisateur` 
            WHERE `id_role_ut`= 1');
            $rows =  $this->resultSet();
            return $rows; 

    }

    public function getAdmin($id){ 
        $this->query('SELECT `id_ut`,`nom_ut`,`prenom_ut`,`mdp_ut`,`courriel_ut` 
            FROM `utilisateur` 
            WHERE `id_role_ut`= 1 AND `id_ut`= '.$id);
            $row =  $this->getItem();
            return $row; 
    }

    /*ajouter un admin*/
    public function addAdmin($id){ 
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        // $password = $post['password'];
        
        if(isset($post['submit_addadmin'])){
            $user = new UserData();
            $erreurs = $user->hydrate($post);
            var_dump($user);
            if (count($erreurs) > 0)
            {
                $msg = '';
                foreach ($erreurs as $key => $value) {
                    $msg .= 'Champ '. $key . ' : '. $value .'<br>';
                }
                Messages::setMsg($msg, 'error');
                return;
            }
            
            $this->query('INSERT INTO `utilisateur` (`nom_ut`, `prenom_ut`, `courriel_ut`,`mdp_ut`, `id_role_ut`) VALUES (:nom_ut,:prenom_ut, :courriel_ut,:mdp_ut, :id_role_ut)');
                $this->bind(':nom_ut', $user->getNom());
                $this->bind(':prenom_ut', $user->getPrenom());
                $this->bind(':courriel_ut', $user->getCourriel());
                $this->bind(':mdp_ut', $user->getMdp());
                $this->bind(':id_role_ut', $id);
                $this->execute();  
                //var_dump($this->lastInsertId());
                if($this->lastInsertId()){
                    //redirect
                    header('location:'.ROOT_ADMIN);
                }
            } 
            return;  
    }

    /*modifier un admin*/
    public function update($id){ 
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        // $password = $post['password'];
        var_dump($id);
        if(isset($post['submit_updateadmin'])){
            $user = new UserData();
            $erreurs = $user->hydrate($post);
            var_dump($user);
            if (count($erreurs) > 0)
            {
                $msg = '';
                foreach ($erreurs as $key => $value) {
                    $msg .= 'Champ '. $key . ' : '. $value .'<br>';
                }
                Messages::setMsg($msg, 'error');
                return;
            }

        $this->query('UPDATE `utilisateur` 
        SET `nom_ut`=:nom_ut,
         `prenom_ut`= :prenom_ut,
         `courriel_ut`=:courriel_ut,
         `mdp_ut`=:mdp_ut
           WHERE id_ut = :id');
            $this->bind(':id', $id);
            $this->bind(':nom_ut', $user->getNom());
            $this->bind(':prenom_ut', $user->getPrenom());
            $this->bind(':courriel_ut', $user->getCourriel());
            $this->bind(':mdp_ut', $user->getMdp());
            $this->execute();     
        } 
        return;  
    }

    /*supprimer un admin*/
    public function delete($id){
        if(isset($post['submit_delete'])){
            $this->query("DELETE * FROM utilisateur WHERE id_ut = :id");
            $this->bind(":id", $id);
            $this->execute();  
            header('location:'.ROOT_ADMIN);   
        } 
    }
}