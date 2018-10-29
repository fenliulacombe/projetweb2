<?php
class Admin extends Controller{
    /*lister tous les admins*/
    protected function index(){
        $viewmodel = new AdminModel();
        $this->returnView(array('viewmodel'=>$viewmodel->index()),true);
    }

    /*ajouter un admin*/
    protected function add(){
        $viewmodel = new AdminModel();
        $this->returnView(array('viewmodel'=>$viewmodel->add()),true);
    }

    /*supprimer un admin*/
    protected function delete(){
        $viewmodel = new AdminModel();
        $this->returnView(array('viewmodel'=>$viewmodel->delete()),true);
    }

    /*modifier un admin*/
    protected function update(){
        $viewmodel = new AdminModel();
        $this->returnView(array('viewmodel'=>$viewmodel->update()),true);
    }
}