<?php
class Main{
    private $controller;
    private $action;
    private $request;// ce sera toujours GET ici

    public function __construct($request)
    {
        $this->request = $request;
        
        if($this->request['controller'] == '')
        {
           $this->controller ='home';
        }else{
           $this->controller = $this->request['controller']; 
        }

        if($this->request['action'] == '')
        {
            $this->action = 'index';
        }else{
            $this->action = $this->request['action'];
        }
    }

    public function createController()
    {
        //check class
        if(class_exists($this->controller)){
            $parents = class_parents($this->controller);
            // check extend
            if(in_array("Controller", $parents))
            {
                //check si methode exists comme si ajouter exists dans class utilisateur
                if(method_exists($this->controller,$this->action)){
                    return new $this->controller($this->action,$this->request);
                } else {
                    //methode does not exist
                    echo '<h1>Methode n\'exist pas</h1>';
                }
            } else {
                //base controller is not found
                echo '<h1>Base controlleur n\'est pas trouvé</h1>';
            }
        } else {
            //controller class is not found
            echo '<h1>controlleur Class n\'existe pas</h1>';
        }
    }


}

