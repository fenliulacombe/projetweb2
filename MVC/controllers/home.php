<?php
class Home extends Controller{
    protected function Index(){
        $viewmodel = new HomeModel();
        $this->returnView($viewmodel->index(),true);
    }
}