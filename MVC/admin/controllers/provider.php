<?php
class Provider extends Controller{
    protected function validate(){
        $viewmodel = new ProviderModel();
        $this->returnView(array('viewmodel'=>$viewmodel->index()),true);
    }

    protected function delete(){
        $viewmodel = new ProviderModel();
        $this->returnView(array('viewmodel'=>$viewmodel->delete()),true);
    }

    protected function suspend(){
        $viewmodel = new ProviderModel();
        $this->returnView(array('viewmodel'=>$viewmodel->suspend()),true);
    }
}