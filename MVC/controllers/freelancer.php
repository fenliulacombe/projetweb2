<?php
class Freelancer extends Controller{
    protected function index(){
        $viewmodel = new FreelancerModel();
        $usermodel = new UserModel();
        $tableau = array('freelancers' =>$viewmodel->getFreelancers(), 'topfreelancers'=>$viewmodel->getTopFreelancer(),'cities'=>$usermodel->getCities(),'sectors'=>$usermodel->getSectors());
        $this->returnView($tableau,true);
        //$this->returnView($viewmodel->getFreelancers(),true);
    }

    protected function add(){
      
    }

    protected function delete(){
        $viewmodel = new FreelancerModel();
        $this->returnView(array('viewmodel'=> $viewmodel->delete()),true);
    }

    protected function update(){
        $viewmodel = new FreelancerModel();
        $this->returnView(array('viewmodel' =>$viewmodel->update()),true);
    }
}