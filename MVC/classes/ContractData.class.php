<?php
//require_once("./index.php");

class ContractData extends Entite
{

    private $titre_prj = '';
    private $type_prj = '';
    private $description_prj = '';
    private $lieu_realisation_prj = '';
    private $budget_indicatif_prj = '';
    private $date_debut_prj = '';
    private $date_fin_prj = '';
    private $id_ut_prj = '';
    private $id_secteur_prj = '';
    private $erreur = array();
    /*
     * Le constructeur de
     */
    public function __construct($titre_prj, $type_prj = '', $description_prj = '', $lieu_realisation_prj = '', $budget_indicatif_prj = '', $date_debut_prj = '', $date_fin_prj = '', $id_ut_prj = '', $id_secteur_prj = '')
    {
        // $this->setId($id);
        $this->setTitreContract($titre_prj);
        $this->setTypeContract($type_prj);
        $this->setDescriptionContract($description_prj);
        $this->setLieuRealisationContract($lieu_realisation_prj);
        $this->setBudgetIndicatifContract($budget_indicatif_prj);
        $this->setDateDebutContract($date_debut_prj);
        $this->setDateFinContract($date_fin_prj);
        $this->setIdUtContract($id_ut_prj);
        $this->setIdSecteurContract($id_secteur_prj);
    }

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

    public function getErreur()
    {
        return $this->erreur;
    }

    /**
     * Mutateur de la propriété titre_prj
     *
     * @return boolean
     */
    public function setTitreContract($titre_prj = '')
    {

        $this->titre_prj = $titre_prj;
    }

    /**
     * Mutateur de la propriété type_prj
     *
     * @return boolean
     */
    public function setTypeContract($type_prj = '')
    {

        $this->type_prj = $type_prj;

    }

/**
 * Mutateur de la propriété description_prj
 *
 * @return boolean
 */
    public function setDescriptionContract($description_prj = '')
    {

        $this->description_prj = $description_prj;

    }

/**
 * Mutateur de la propriété lieu_realisation_prj
 *
 * @return boolean
 */
    public function setLieuRealisationContract($lieu_realisation_prj = '')
    {

        $this->lieu_realisation_prj = $lieu_realisation_prj;
    }

/**
 * Mutateur de la propriété budget_indicatif_prj
 *
 * @return boolean
 */
    public function setBudgetIndicatifContract($budget_indicatif_prj = '')
    {

        $this->budget_indicatif_prj = $budget_indicatif_prj;

    }
/**
 * Mutateur de la propriété date_debut_prj
 *
 * @return boolean
 */
    public function setDateDebutContract($date_debut_prj = '')
    {

        $this->date_debut_prj = $date_debut_prj;
    }

/**
 * Mutateur de la propriété date_fin_prj
 *
 * @return boolean
 */
    public function setDateFinContract($date_fin_prj = '')
    {

        $this->date_fin_prj = $date_fin_prj;

    }

/**
 * Mutateur de la propriété id_ut_prj
 *
 * @return boolean
 */
    public function setIdUtContract($id_ut_prj = '')
    {

        $this->id_ut_prj = $id_ut_prj;

    }

/**
 * Mutateur de la propriété id_secteur_prj
 *
 * @return boolean
 */
    public function setIdSecteurContract($id_secteur_prj = '')
    {

        $this->id_secteur_prj = $id_secteur_prj;

    }

}
