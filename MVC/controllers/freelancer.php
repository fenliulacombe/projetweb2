<?php
class Freelancer extends Controller{
    protected function index(){
        $viewmodel = new FreelancerModel();
        $this->returnView($viewmodel->index(),true);
    }
}