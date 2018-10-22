<?php
class UserModel extends Model{
    public function Index(){
        $this->query('SELECT * FROM users');
        $rows = $this->resultSet();
        return $rows;
    }

    public function register($role){
        // sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        // $password = $post['password'];
        
        if(isset($post['submit'])){
            $user = new UserData();
            
            $erreurs = $user->hydrate($post);
            //var_dump($user);
            //var_dump($erreurs);
            if (count($erreurs) > 0)
            {
                $msg = '';
                foreach ($erreurs as $key => $value) {
                    $msg .= 'Champ '. $key . ' : '. $value .'<br>';
                }
                Messages::setMsg($msg, 'error');
                return;
            }
            // try{
                // var_dump( $user);
            //die('SUBMITED'); //Print a message and exit the current script:
            //insert into Mysql 
                $this->query("INSERT INTO `utilisateur` (`nom_ut`, `prenom_ut`, `nom_entreprise_ut`, `numero_entreprise_ut`, `adresse_ut`, `telephone_ut`, `courriel_ut`, `site_web_ut`, `lien_facebook_ut`, `lien_linkedin_ut`,`mdp_ut`, `competence_ut`, `taux_horaire_ut`, `annee_experience_ut`, `disponibilite_ut`, `situation_pro_ut`, `apropos_ut`, `neq_ut`, `id_role_ut`, `id_secteur_ut`, `id_type_etse_ut`, `id_ville_ut`) VALUES (:nom_ut,:prenom_ut,:nom_entreprise_ut,:numero_entreprise_ut,:adresse_ut, :telephone_ut, :courriel_ut, :site_web_ut, :lien_facebook_ut, :lien_linkedin_ut, :mdp_ut, :competence_ut, :taux_horaire_ut, :annee_experience_ut, :disponibilite_ut, :situation_pro_ut, :apropos_ut, :neq_ut, :id_role_ut, :id_secteur_ut, :id_type_etse_ut, :id_ville_ut)");
                $this->bind(':nom_ut', $user->getNom());
                $this->bind(':prenom_ut', $user->getPrenom());
                $this->bind(':nom_entreprise_ut', $user->getNomEntreprise());
                $this->bind(':numero_entreprise_ut', $user->getNumeroEntreprise());
                $this->bind(':adresse_ut', $user->getAdresse());
                $this->bind(':telephone_ut', $user->getTelephone());
                $this->bind(':courriel_ut', $user->getCourriel());
                $this->bind(':site_web_ut', $user->getSiteWeb());
                $this->bind(':lien_facebook_ut', $user->getLienFacebook());
                $this->bind(':lien_linkedin_ut', $user->getLienLinkedIn());
                $this->bind(':mdp_ut', $user->getMdp());
                $this->bind(':competence_ut', $user->getCompetence());
                $this->bind(':taux_horaire_ut', $user->getTauxHoraire());
                $this->bind(':annee_experience_ut', $user->getAnneeExperience());
                $this->bind(':disponibilite_ut', $user->getDisponibilites());
                $this->bind(':situation_pro_ut', $user->getSituationPro());
                $this->bind(':apropos_ut', $user->getApropos());
                $this->bind(':neq_ut', $user->getNeq());
                $this->bind(':id_role_ut', $role, PDO::PARAM_INT);
                $this->bind(':id_secteur_ut', $user->getIdSecteur(), PDO::PARAM_INT);
                $this->bind(':id_type_etse_ut', $user->getIdTypeEtse(), PDO::PARAM_INT);
                $this->bind(':id_ville_ut',$user->getIdVille(), PDO::PARAM_INT);
                $res = $this->execute();
                var_dump($res);
            // }
            // catch(Exception $e){
            //     Messages::setMsg('Exception reçue : '.$e->getMessage()."\n");
            //     return;
            // }
                // verify 
            if($this->lastInsertId()){
                //redirect
                header('location:'.ROOT_URL);
            }
        }
        //Messages::setMsg('test', 'error');
        return;
    }

    public function login(){
        // sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        //$password = md5($post['password']);
       // var_dump($post);
        if(isset($post['login_button'])){
            //die('SUBMITED'); //Print a message and exit the current script:
            //compare login
            $this->query('SELECT * FROM utilisateur WHERE courriel_ut = :courriel_ut AND mdp_ut = :mdp_ut');
            $this->bind(':courriel_ut', $post['username']);
            $this->bind(':mdp_ut',  $post['password']);

            $row = $this->getItem();
            // verify 
            if($row){
                echo 'Logged In';
                $_SESSION['is_logged_in'] = true; 
                $_SESSION['user_data'] = array(
                    "id"    =>$row['id_ut'],
                    "name"  =>$row['nom_ut'],
                    "email" =>$row['courriel_ut']
                ); 
                //redirect          
                //header('location:'.ROOT_URL.'freelancer/register');
            }
            else{echo 'La connexion est incorrect. Veuillez resaisir le nom et le mot de passe.';
            }
        }
    }

    public function registerFreelancer(){
        return;
    }

    public function registerProvider(){
        return;
    }

    public function getCities(){
        
        $this->query('SELECT * FROM `ville`');
        $rows =  $this->resultSet();
        return $rows;
     }
 
     public function GetSectors(){
        $this->query('SELECT * FROM `secteur`');
        $rows =  $this->resultSet();
        return $rows;   
     }
 
     public function GetCompanytypes(){
         $this->query('SELECT * FROM `type_entreprise`');
         $rows =  $this->resultSet();
         return $rows;   
      }
}