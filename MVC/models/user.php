<?php
class UserModel extends Model{
    public function Index(){
        $this->query('SELECT * FROM users');
        $rows = $this->resultSet();
        return $rows;
    }

    public function register(){
        // sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        // $password = $post['password'];
        $user = new users;
        if($post['submit']){
            //die('SUBMITED'); //Print a message and exit the current script:
            //insert into Mysql 
            $this->query('INSERT INTO `utizlisateur` (`nom_ut`, `prenom_ut`, `nom_entreprise_ut`, `numero_entreprise_ut`, `adresse_ut`, `telephone_ut`, `courriel_ut`, `site_web_ut`, `lien_facebook_ut`, `lien_linkedin_ut`,`mdp_ut`, `competence_ut`, `taux_horaire_ut`, `annee_experience_ut`, `disponibilite_ut`, `situation_pro_ut`, `apropos_ut`, `neq_ut`, `id_role_ut`, `id_secteur_ut`, `id_type_etse_ut`, `id_ville_ut`) VALUES (:nom_ut,:prenom_ut,:nom_entreprise_ut,:numero_entreprise_ut,:adresse_ut, :telephone_ut, :courriel_ut, :site_web_ut, :lien_facebook_ut, :lien_linkedin_ut, :mdp_ut, :competence_ut, :taux_horaire_ut, :annee_experience_ut, :disponibilite_ut, :situation_pro_ut, :apropos_ut, :neq_ut, :id_role_ut, :id_secteur_ut, :id_type_etse_ut, :id_ville_ut)');
            $this->bind(':nom_ut', $user->nom_ut);
            $this->bind(':prenom_ut', $user->prenom_ut);
            $this->bind(':nom_entreprise_ut', $user->nom_entreprise_ut);
            $this->bind(':numero_entreprise_ut', $user->numero_entreprise_ut);
            $this->bind(':adresse_ut', $user->adresse_ut);
            $this->bind(':telephone_ut', $user->telephone_ut);
            $this->bind(':courriel_ut', $user->courriel_ut);
            $this->bind(':site_web_ut', $user->site_web_ut);
            $this->bind(':lien_facebook_ut', $user->lien_facebook_ut);
            $this->bind(':lien_linkedin_ut', $user->lien_linkedin_ut);
            $this->bind(':competence_ut', $user->competence_ut);
            $this->bind(':taux_horaire_ut', $user->taux_horaire_ut);
            $this->bind(':annee_experience_ut', $user->annee_experience_ut);
            $this->bind(':disponibilite_ut', $user->disponibilite_ut);
            $this->bind(':situation_pro_ut', $user->situation_pro_ut);
            $this->bind(':apropos_ut', $user->apropos_ut);
            $this->bind(':neq_ut', $user->neq_ut);
            $this->bind(':id_role_ut', $user->id_role_ut);
            $this->bind(':id_secteur_ut', $user->id_secteur_ut);
            $this->bind(':id_type_etse_ut', $user->id_type_etse_ut);
            $this->bind(':id_ville_ut', $user->id_ville_ut);
            $this->execute();

            // verify 
            if($this->lastInsertId()){
                //redirect
                header('location:'.ROOT_URL);
            }
        }
        return;
    }

    public function login(){
        // sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        //$password = md5($post['password']);

        if($post['submit']){
            // die('SUBMITED'); //Print a message and exit the current script:
            //compare login
            $this->query('SELECT * FROM users WHERE email = :email AND password = :password');
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);

            $row = $this->single();

            // verify 
            if($row){
                echo 'Logged In';
                $_SESSION['is_logged_in'] = true; 
                $_SESSION['user_data'] = array(
                    "id"    =>$row['id'],
                    "name"  =>$row['name'],
                    "email" =>$row['email']
                ); 
                //redirect          
                header('location:'.ROOT_URL.'share');
            }else{
                echo 'Incorrect Login';
            }
        }
    }

    public function registerFreelancer(){
        return;
    }

    public function registerProvider(){
        return;
    }
}