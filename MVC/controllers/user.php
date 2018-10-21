<?php
class User extends Controller{
    // protected function Index(){
    //     $viewmodel = new UserModel();
    //     $this->returnView($viewmodel->Index(),true);
    // }

    protected function register()
    {
        $viewmodel = new UserModel();
        $this->returnView(array('viewmodel'=>$viewmodel->register()),true);
    }

    protected function login(){
        $viewmodel = new UserModel();
        $this->returnView(array('viewmodel'=>$viewmodel->login()),true);
    }

    protected function logout(){
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();
        //redirect          
        header('location:'.ROOT_URL);
    }

    protected function registerfreelancer()
    {
        $viewmodel = new UserModel();
        $viewmodel->register();
        $tableau = array('cities'=>$viewmodel->getCities(),'sectors'=>$viewmodel->getSectors(),'companytypes'=>$viewmodel->getCompanytypes());
        $this->returnView($tableau,true);
    }
    
    protected function registerprovider()
    {
        $viewmodel = new UserModel();
        $this->returnView(array('viewmodel'=>$viewmodel->registerprovider()),true);
    }
}