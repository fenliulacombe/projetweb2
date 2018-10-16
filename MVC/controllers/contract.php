<?php
class Contract extends Controller{
    protected function index(){
        $viewmodel = new ContractModel();
        $this->returnView($viewmodel->index(),true);
    }

    protected function add(){
        $viewmodel = new ContractModel();
        $this->returnView($viewmodel->add(),true);
    }

    protected function delete(){
        $viewmodel = new ContractModel();
        $viewmodel->delete();
        //$this->returnView($viewmodel->Index(),true);
    }

    protected function update(){
        $viewmodel = new ContractModel();
        $this->returnView($viewmodel->update(),true); 
    }
}