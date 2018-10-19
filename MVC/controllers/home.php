<?php
class Home extends Controller{
    protected function Index(){
        $viewmodel = new HomeModel();
        $freelaners = new FreelancerModel();
        $contracts = new ContractModel();
        $this->returnView(array('viewmodel'=>$viewmodel->index(), 'sectors'=>$freelaners->getSectors(),'contracts'=>$contracts->getLastContracts()),true);
    }
}