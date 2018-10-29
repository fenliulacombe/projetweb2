<?php
class Competence extends Controller{
    /*lister tous les competences*/
    protected function index(){
        $viewmodel = new CompetenceModel();
        $this->returnView(array('viewmodel'=>$viewmodel->index()),true);
    }

    /*ajouter une compétence*/
    protected function add(){
        $viewmodel = new CompetenceModel();
        $this->returnView(array('viewmodel'=>$viewmodel->add()),true);
    }

    /*supprimer une compétence*/
    protected function delete(){
        $viewmodel = new CompetenceModel();
        $this->returnView(array('viewmodel'=>$viewmodel->delete()),true);
    }

    /*modifier une compétence*/
    protected function update(){
        $viewmodel = new CompetenceModel();
        $this->returnView(array('viewmodel'=>$viewmodel->update()),true);
    }
}