<?php
class Contract extends Controller{
    protected function index(){
        $viewmodel = new ContractModel();
        $this->returnView(array('contracts'=>$viewmodel->index()),true);
    }

    protected function validate(){
        $viewmodel = new ContractModel();
        $viewmodel->validate();
        //$this->returnView(),true);
    }

    protected function delete(){
        $viewmodel = new ContractModel();
        $viewmodel->delete($_GET['id']);
        header("Location: ". ROOT_ADMIN ."contract/");
        exit();
    }
}