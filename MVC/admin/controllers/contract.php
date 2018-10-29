<?php
class Contract extends Controller{
    protected function validate(){
        $viewmodel = new ContractModel();
        $this->returnView(array('viewmodel'=>$viewmodel->index()),true);
    }

    protected function delete(){
        $viewmodel = new ContractModel();
        $this->returnView(array('viewmodel'=>$viewmodel->delete()),true);
    }
}