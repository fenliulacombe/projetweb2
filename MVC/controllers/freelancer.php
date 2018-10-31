<?php
class Freelancer extends Controller{
    protected function index(){
        $viewmodel = new FreelancerModel();
        $usermodel = new UserModel();
        $tableau = array('freelancers' =>$viewmodel->getFreelancers(), 'topfreelancers'=>$viewmodel->getTopFreelancers(),'cities'=>$usermodel->getCities(),'sectors'=>$usermodel->getSectors(),'countfreelancer'=>$usermodel->getTotalFreelancer());
        $this->returnView($tableau,true);
        //$this->returnView($viewmodel->getFreelancers(),true);
    }

    protected function update(){
        $viewmodel = new FreelancerModel();
        $this->returnView(array('viewmodel' =>$viewmodel->update()),true);
    }

    protected function register()
    {
        $viewmodel = new UserModel();
        $viewmodel->register(3);
        $tableau = array('cities'=>$viewmodel->getCities(),'sectors'=>$viewmodel->getSectors(),'companytypes'=>$viewmodel->getCompanytypes(), 'competences'=>$viewmodel->getCompetences());
        $this->returnView($tableau,true);
    }

    protected function detail(){
        $viewmodel = new FreelancerModel();
        $this->returnView(array('freelancer' =>$viewmodel->getFreelancer($_GET['id']),'evaluateur'=>$viewmodel->getEvaluateurs($_GET['id'])),true);
    }
}