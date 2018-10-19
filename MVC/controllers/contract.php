<?php
class Contract extends Controller{
    protected function index(){
        $viewmodel = new ContractModel();
        $this->returnView(array('viewmodel'=>$viewmodel->getContracts()),true);
    }

    protected function add(){
        $viewmodel = new ContractModel();
        $this->returnView(array('viewmodel'=>$viewmodel->addContracts()),true);
    }

    protected function delete(){
        $viewmodel = new ContractModel();
        $viewmodel->delete();
        //$this->returnView($viewmodel->Index(),true);
    }

    protected function update(){
        $viewmodel = new ContractModel();
        $this->returnView(array('viewmodel'=>$viewmodel->updateContracts()),true); 
    }
}