<?php
class Freelancer extends Controller{
    protected function index(){
        $viewmodel = new FreelancerModel();
        $tableau = array('freelancers' =>$viewmodel->getFreelancers(), 'topfreelancers'=>$viewmodel->getTopFreelancer(),'cities'=>$viewmodel->getCities(),'sectors'=>$viewmodel->getSectors());
        $this->returnView($tableau,true);
        //$this->returnView($viewmodel->getFreelancers(),true);
    }

    protected function add(){
        $viewmodel = new FreelancerModel();
        $this->returnView(array('viewmodel'=>$viewmodel->add()),true);
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