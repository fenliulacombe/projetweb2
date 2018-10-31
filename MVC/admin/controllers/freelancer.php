<?php
class Freelancer extends Controller{

    protected function index(){
        $viewmodel = new FreelancerModel();
        $this->returnView(array('freelancers'=>$viewmodel->index()),true);
    }

    protected function validate(){
        $viewmodel = new FreelancerModel();
        $this->returnView(array('viewmodel'=>$viewmodel->validate()),true);
    }

    protected function delete(){
        $viewmodel = new FreelancerModel();
        $viewmodel->delete($_GET['id']);
        header("Location: ". ROOT_ADMIN ."freelancer/");
        exit();
    }

    protected function suspension(){
        $viewmodel = new FreelancerModel();
        $viewmodel->suspension($_GET['id']);
        header("Location: ". ROOT_ADMIN ."freelancer/");
        exit();
    }
}