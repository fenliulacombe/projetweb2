<?php
class User extends Controller{
    // protected function Index(){
    //     $viewmodel = new UserModel();
    //     $this->returnView($viewmodel->Index(),true);
    // }

    protected function register()
    {
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->register(),true);
    }

    protected function login(){
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->login(),true);
    }


    protected function registerfreelancer()
    {
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->registerfreelancer(),true);
    }
    
    protected function registerprovider()
    {
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->registerprovider(),true);
    }
}