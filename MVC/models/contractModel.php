<?php
class ContractModel extends Model
{
    /*afficher les contrats*/
    public function getContracts()
    {
        $this->query('SELECT *,COUNT(id_prj_soum) AS nombre_soum FROM projet
            LEFT JOIN `soumissioner` ON `projet`.`id_prj` = `soumissioner`.`id_prj_soum`
                GROUP BY id_prj_soum ');
        $rows = $this->resultSet();
        return $rows;
    }

    public function getLastContracts()
    {
        $this->query('SELECT *,COUNT(id_prj_soum) AS nombre_soum FROM projet
            LEFT JOIN `soumissioner` ON `projet`.`id_prj` = `soumissioner`.`id_prj_soum`
                GROUP BY id_prj_soum LIMIT 7');
        $rows = $this->resultSet();
        return $rows;
    }

    /*afficher un contrat par l'id reçu*/
    public function getContract()
    {
        $this->query('SELECT *,COUNT(id_prj_soum) AS nombre_soum FROM projet
            LEFT JOIN `soumissioner` ON `projet`.`id_prj` = `soumissioner`.`id_prj_soum`
                GROUP BY id_prj_soum ');
        $rows = $this->resultSet();
        return $rows;
    }

    public function getContractsFiltre($date, $budget, $etat)
    {
        $this->query('SELECT *,COUNT(`id_ut`) FROM utilisateur
        LEFT JOIN `evaluer` ON `utilisateur`.`id_ut` = `evaluer`.`id_evaluer_eval`
        INNER JOIN `secteur` ON `utilisateur`.`id_secteur_ut` = `secteur`.`id_secteur`
        INNER JOIN `ville` ON `utilisateur`.`id_ville_ut` = `ville`.`id_ville`
        GROUP BY `id_ut`');
        $rows = $this->resultSet();
        return $rows;
    }

    /*ajouter un contrat*/
    public function addContract()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($post['publier'])){
            //insert into Mysql
            $contract = new ContractData();
            $erreurs = $contract->hydrate($post);
            if (count($erreurs) > 0)
            {
                $msg = '';
                foreach ($erreurs as $key => $value) {
                    $msg .= 'Champ '. $key . ' : '. $value .'<br>';
                }
                Messages::setMsg($msg, 'error');
                return;
            }

            $this->query('INSERT INTO `projet` (`titre_prj`, `type_prj`, `description_prj`, `lieu_realisation_prj`, `budget_indicatif_prj`, `date_debut_prj`, `date_fin_prj`, `id_ut_prj`, `id_secteur_prj`) VALUES (:titre_prj,:type_prj,:description_prj,:lieu_realisation_prj,:budget_indicatif_prj, :date_debut_prj, :date_fin_prj, :id_ut_prj, :id_secteur_prj)');
                
            $this->bind(':titre_prj', $contract->getTitreContract());
            $this->bind(':type_prj', $contract->getTypeContract());
            $this->bind(':description_prj', $contract->getDescriptionContract());
            $this->bind(':lieu_realisation_prj', $contract->getLieuRealisationContract());
            $this->bind(':budget_indicatif_prj', $contract->getBudgetIndicatifContract());
            $this->bind(':date_debut_prj', $contract->getDateDebutContract());
            $this->bind(':date_fin_prj', $contract->getDateFinContract());
            $this->bind(':id_ut_prj', $contract->getIdUtContract());
            $this->bind(':id_secteur_prj', $contract->getIdSecteurContract());
            $this->execute();

            // verify
            if ($this->lastInsertId()) {
                //redirect
                header('location:' . ROOT_URL . 'contract');
            }
        }
        return;
    }

    /*modifier un contrat par id reçu*/
    public function updateContract()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if ($post['submit']) {
            //insert into Mysql
            $this->query('');
            $this->bind('', $post['']);

            $this->execute();

            // verify
            if ($this->lastInsertId()) {
                //redirect
                header('location:' . ROOT_URL . 'contract');
            }
        }
        return;
    }

    /*supprimer un contrat*/
    public function deleteContract()
    {
        $get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
        if (isset($get['id'])) {
            $delete_id = $get['id'];
            $this->query("DELETE FROM projet WHERE id = :id");
            $this->bind(":id", $delete_id);
            $this->execute();
            header('location:' . ROOT_URL . 'contract');
        }
        return;
    }

    /*valider un contrat*/
    public function validateContract()
    {
        $get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
        if (isset($get['id'])) {
            $delete_id = $get['id'];
            $this->query("DELETE FROM contract WHERE id = :id");
            $this->bind(":id", $delete_id);
            $this->execute();
            header('location:' . ROOT_URL . 'contract');
        }
        return;
    }

    /*rechercher un contrat dans le moteur de recherche*/
    public function researchContract()
    {
        return;
    }
}
