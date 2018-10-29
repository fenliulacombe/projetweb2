<?php
class Sector extends Controller{
    /*lister tous les secteurs*/
    protected function index(){
        $viewmodel = new SectorModel();
        $this->returnView(array('viewmodel'=>$viewmodel->index()),true);
    }

    /*ajouter un secteur*/
    protected function add(){
        $viewmodel = new SectorModel();
        $this->returnView(array('viewmodel'=>$viewmodel->add()),true);
    }

    /*supprimer un secteur*/
    protected function delete(){
        $viewmodel = new SectorModel();
        $this->returnView(array('viewmodel'=>$viewmodel->delete()),true);
    }

    /*modifier un secteur*/
    protected function update(){
        $viewmodel = new SectorModel();
        $this->returnView(array('viewmodel'=>$viewmodel->update()),true);
    }
}