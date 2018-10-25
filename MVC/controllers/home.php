<?php
class Home extends Controller{
    protected function Index(){
        $viewmodel = new HomeModel();
        $user = new UserModel();
        $contracts = new ContractModel();
        $this->returnView(array('viewmodel'=>$viewmodel->index(), 'sectors'=>$user->getSectors(),'contracts'=>$contracts->getContracts(7)),true);
    }
}