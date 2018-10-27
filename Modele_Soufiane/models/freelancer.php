<?php
class FreelancerModel extends Model{
    public function index(){
        return array(''=>'');
    }


    public function getFreelancer(){


       $this->query('SELECT * ,COUNT(`id_ut`) AS nombreval ,AVG(note_eval) AS notegenerale
					FROM utilisateur 
					INNER JOIN `pw2`.`evaluer` ON `utilisateur`.`id_ut` = `evaluer`.`id_evaluer_eval` 
					INNER JOIN `secteur` ON `utilisateur`.`id_secteur_ut` = `secteur`.`id_secteur`
					INNER JOIN `ville` ON `utilisateur`.`id_ville_ut` = `ville`.`id_ville`
					GROUP BY `id_ut`
					ORDER BY id_ut DESC ');
            $this->execute();
            $row = resultSet();
    }

	public function getTopFreelancer(){

       $this->query('SELECT * ,COUNT(`id_ut`) AS nombreval ,AVG(note_eval) AS notegenerale
			FROM utilisateur
			INNER JOIN `pw2`.`evaluer` ON `utilisateur`.`id_ut` = `evaluer`.`id_evaluer_eval`
			INNER JOIN `secteur` ON `utilisateur`.`id_secteur_ut` = `secteur`.`id_secteur`
			INNER JOIN `ville` ON `utilisateur`.`id_ville_ut` = `ville`.`id_ville`
			GROUP BY `id_ut`
			ORDER BY notegenerale DESC
			LIMIT 4 ');
            $this->execute();
           $row = resultSet();

    }

   


}