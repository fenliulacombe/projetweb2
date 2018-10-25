<?php
//require_once("./index.php");

class ContractData extends Entite
{
    private $titre_prj = NULL;
    private $type_prj = NULL;
    private $description_prj = NULL;
    private $lieu_realisation_prj = NULL;
    private $budget_indicatif_prj = NULL;
    private $date_debut_prj = NULL;
    private $date_fin_prj = NULL;
    private $id_ut_prj = NULL;
    private $id_secteur_prj = NULL;
    /*
     * Le constructeur de
    //  */
    // public function __construct($titre_prj, $type_prj = NULL, $description_prj = NULL, $lieu_realisation_prj = NULL, $budget_indicatif_prj = NULL, $date_debut_prj = NULL, $date_fin_prj = NULL, $id_ut_prj = NULL, $id_secteur_prj = NULL)
    // {
    //     // $this->setId($id);
    //     // $this->setTitreContract($titre_prj);
    //     // $this->setTypeContract($type_prj);
    //     // $this->setDescriptionContract($description_prj);
    //     // $this->setLieuRealisationContract($lieu_realisation_prj);
    //     // $this->setBudgetIndicatifContract($budget_indicatif_prj);
    //     // $this->setDateDebutContract($date_debut_prj);
    //     // $this->setDateFinContract($date_fin_prj);
    //     // $this->setIdUtContract($id_ut_prj);
    //     // $this->setIdSecteurContract($id_secteur_prj);
    // }

    public function getTitreContract()
    {
        return $this->titre_prj;
    }
    public function getTypeContract()
    {
        return $this->type_prj;
    }
    public function getDescriptionContract()
    {
        return $this->description_prj;
    }
    public function getLieuRealisationContract()
    {
        return $this->lieu_realisation_prj;
    }
    public function getBudgetIndicatifContract()
    {
        return $this->budget_indicatif_prj;
    }
    public function getDateDebutContract()
    {
        return $this->date_debut_prj;
    }
    public function getDateFinContract()
    {
        return $this->date_fin_prj;
    }
    public function getIdUtContract()
    {
        return $this->id_ut_prj;
    }
    public function getIdSecteurContract()
    {
        return $this->id_secteur_prj;
    }

    /**
     * Mutateur de la propriété titre_prj
     *
     * @return boolean
     */
    public function setTitre_prj($titre_prj = NULL)
    {
        if(empty($titre_prj)){
            $this->errorsHydrate['Titre du projet'] = "Veuillez saisir votre titre du projet";            
        }
        $this->titre_prj = $titre_prj;
    }

    /**
     * Mutateur de la propriété type_prj
     *
     * @return boolean
     */
    public function setType_prj($type_prj = NULL)
    {
        if(empty($type_prj)){
            $this->errorsHydrate['Type du projet'] = "Veuillez saisir votre type du projet";            
        }
        $this->type_prj = $type_prj;
    }

/**
 * Mutateur de la propriété id_secteur_prj
 *
 * @return boolean
 */
public function setId_secteur_prj($id_secteur_prj = NULL)
{
    if(empty($id_secteur_prj)){
        $this->errorsHydrate['id_secteur_prj'] = "Veuillez saisir votre secteur du projet";            
    }
    $this->id_secteur_prj = $id_secteur_prj;
}

/**
 * Mutateur de la propriété description_prj
 *
 * @return boolean
 */
    public function setDescription_prj($description_prj = NULL)
    {
        if(empty($description_prj)){
            $this->errorsHydrate['Description'] = "Veuillez saisir votre description du projet";            
        }
        $this->description_prj = $description_prj;
    }

/**
 * Mutateur de la propriété lieu_realisation_prj
 *
 * @return boolean
 */
    public function setLieu_realisation_prj($lieu_realisation_prj = NULL)
    {
        if(empty($lieu_realisation_prj)){
            $this->errorsHydrate['lieu_realisation_prj'] = "Veuillez saisir votre lieu du projet";            
        }
        $this->lieu_realisation_prj = $lieu_realisation_prj;
    }

/**
 * Mutateur de la propriété budget_indicatif_prj
 *
 * @return boolean
 */
    public function setBudget_indicatif_prj($budget_indicatif_prj = NULL)
    {
        if(empty($budget_indicatif_prj)){
            $this->errorsHydrate['budget_indicatif_prj'] = "Veuillez saisir votre budget du projet";            
        }
        $this->budget_indicatif_prj = $budget_indicatif_prj;
    }
/**
 * Mutateur de la propriété date_debut_prj
 *
 * @return boolean
 */
    public function setDate_debut_prj($date_debut_prj = NULL)
    {   
        if(empty($date_debut_prj)){
            $this->errorsHydrate['date_debut_prj'] = "Veuillez saisir votre date début du projet";            
        }
        $this->date_debut_prj = $date_debut_prj;
    }

/**
 * Mutateur de la propriété date_fin_prj
 *
 * @return boolean
 */
    public function setDate_fin_prj($date_fin_prj = NULL)
    {
        if(empty($date_fin_prj)){
            $this->errorsHydrate['date_fin_prj'] = "Veuillez saisir votre date fin du projet";            
        }
        $this->date_fin_prj = $date_fin_prj;
    }

/**
 * Mutateur de la propriété id_ut_prj
 *
 * @return boolean
 */
    public function setId_ut_prj($id_ut_prj = NULL)
    {
        $this->id_ut_prj = $id_ut_prj;
    }

}
