<?php
class Contract extends Controller{
    protected function index(){
        $viewmodel = new ContractModel();
        $this->returnView(array('viewmodel'=>$viewmodel->getContracts()),true);
    }

    protected function add(){
        $viewmodel = new ContractModel();
        $usermodel = new UserModel();
        $viewmodel->addContract();
        $this->returnView(array('sectors'=>$usermodel->getSectors()),true);
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
    
    protected function detail(){
        $viewmodel = new ContractModel();
        $this->returnView(array('contract' =>$viewmodel->getContract($_GET['id']),'soumis'=>$viewmodel->getContractsByProject($_GET['id']),'usercontract'=>$viewmodel->getUserContract($_GET['id'])),true); 
    }
}