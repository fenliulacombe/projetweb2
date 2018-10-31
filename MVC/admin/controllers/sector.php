<?php
class Sector extends Controller{
    /*lister tous les secteurs*/
    protected function index(){
        $viewmodel = new SectorModel();
        $this->returnView(array('sectors'=>$viewmodel->index()),true);
    }

    /*ajouter un secteur*/
    protected function add(){
        $viewmodel = new SectorModel();
        $viewmodel->addSector();
        $this->returnView(array('sector'=>$viewmodel->getSector($_GET['id'])),true);
    }

    /*supprimer un secteur*/
    protected function delete(){
        $viewmodel = new SectorModel();
        $viewmodel->delete($_GET['id']);
        header("Location: ". ROOT_ADMIN ."sector/");
        exit();
    }

    /*modifier un secteur*/
    protected function update(){
        $viewmodel = new SectorModel();
        $viewmodel->updateSector($_GET['id']);
        $this->returnView(array('sector'=>$viewmodel->getSector($_GET['id'])),true);
    }
}