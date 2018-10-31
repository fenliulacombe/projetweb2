<?php
class Provider extends Controller{
    protected function index(){
        $viewmodel = new FreelancerModel();
        $this->returnView(array('providers'=>$viewmodel->index()),true);
    }

    protected function validate(){
        $viewmodel = new ProviderModel();
        $viewmodel->validate($_GET['id'], $_POST['valeur_validation']);
    }

    protected function delete(){
        $viewmodel = new ProviderModel();
        $viewmodel->delete($_GET['id']);
        header("Location: ". ROOT_ADMIN ."provider/");
        exit();
    }

    protected function suspension(){
        $viewmodel = new ProviderModel();
        $viewmodel->suspension($_GET['id'], $_POST['valeur_suspension']);
    }
}