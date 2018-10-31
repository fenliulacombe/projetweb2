<?php
class Competence extends Controller{
    /*lister tous les competences*/
    protected function index(){
        $viewmodel = new CompetenceModel();
        $this->returnView(array('competences'=>$viewmodel->index()),true);
    }

    /*ajouter une compétence*/
    protected function add(){
        $viewmodel = new CompetenceModel();
        $this->returnView(array('competence'=>$viewmodel->add()),true);
    }

    /*supprimer une compétence*/
    protected function delete(){
        $viewmodel = new CompetenceModel();
        $viewmodel->delete($_GET['id']);
        header("Location: ". ROOT_ADMIN ."competence/");
        exit();
    }

    /*modifier une compétence*/
    protected function update(){
        $viewmodel = new CompetenceModel();
        $viewmodel->update($_GET['id']);
        $this->returnView(array('competence'=>$viewmodel->getCompetence($_GET['id'])),true);
    }
}