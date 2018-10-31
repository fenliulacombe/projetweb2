<?php
class Administrator extends Controller{
    /*lister tous les admins*/
    protected function index(){
        $viewmodel = new AdminModel();
        $this->returnView(array('admins'=>$viewmodel->index()),true);
    }

    /*ajouter un admin*/
    protected function add(){
        $viewmodel = new AdminModel(); 
        $viewmodel->addAdmin(1);
        //$this->returnView(array(),true);
    }

    /*supprimer un admin*/
    protected function delete(){
        $viewmodel = new AdminModel();
        $viewmodel->delete($_GET['id']);
        header("Location: ". ROOT_ADMIN ."administrator/");
        exit();
    }

    /*modifier un admin*/
    protected function update(){
        $viewmodel = new AdminModel();
        $viewmodel->update($_GET['id']);
        $this->returnView(array('admin'=>$viewmodel->getAdmin($_GET['id'])),true);
    }
}