<?php
class Provider extends Controller{
    protected function index(){
        $viewmodel = new FreelancerModel();
        $usermodel = new UserModel();
        $tableau = array('freelancers' =>$viewmodel->getFreelancers(), 'topfreelancers'=>$viewmodel->getTopFreelancer(),'cities'=>$usermodel->getCities(),'sectors'=>$usermodel->getSectors());
        $this->returnView($tableau,true);
    }

    protected function update(){
        $viewmodel = new FreelancerModel();
        $this->returnView(array('viewmodel' =>$viewmodel->update()),true);
    }

    protected function register()
    {
        $viewmodel = new UserModel();
        $viewmodel->register(2);
        $tableau = array('cities'=>$viewmodel->getCities());
        $this->returnView($tableau,true);
    }
}