<?php
class Freelancer extends Controller{
    protected function validate(){
        $viewmodel = new FreelancerModel();
        $this->returnView(array('viewmodel'=>$viewmodel->index()),true);
    }

    protected function delete(){
        $viewmodel = new FreelancerModel();
        $this->returnView(array('viewmodel'=>$viewmodel->delete()),true);
    }

    protected function suspend(){
        $viewmodel = new FreelancerModel();
        $this->returnView(array('viewmodel'=>$viewmodel->suspend()),true);
    }
}