<?php
class User extends Controller{

    protected function login(){
        $viewmodel = new UserModel();
        $viewmodel->login();      
        //$this->returnView(array('viewmodel'=>$viewmodel->login()),true);
    }

    protected function logout(){
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();
        //redirect          
        header('location:'.ROOT_URL);
    }

    protected function profil(){
        $viewmodel = new UserModel();
        $projects = new ContractModel();
        $this->returnView(array('userprofil'=> $viewmodel->getUser($_SESSION['user_data']['id']),'projects'=>$projects->getContractsByProvider($_SESSION['user_data']['id'])),true);
    }
    

    protected function delete(){
        $viewmodel = new UserModel();
        $this->returnView(array('viewmodel'=> $viewmodel->delete()),true);
    }
}