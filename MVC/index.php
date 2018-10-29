<?php
   session_start();
   require ('config.php');
   
   require ('classes/Entite.class.php');
   require ('classes/Main.php');
   require ('classes/Controller.php');
   require ('classes/Model.php');
   require ('classes/ContractData.class.php');
   require ('classes/UserData.class.php');
   require ('classes/Messages.php');

   require ('controllers/home.php');
   require ('controllers/contract.php');
   require ('controllers/user.php');
   require ('controllers/freelancer.php');
   require ('controllers/provider.php');
 


   require ('models/homeModel.php');
   require ('models/contractModel.php');
   require ('models/userModel.php');
   require ('models/freelancerModel.php');
   require ('models/providerModel.php');
   


   $main = new Main($_GET);// le Get est transmis par le fichier .htaccess
   $controller = $main->createController();
   if($controller){
       $controller->executeAction();
   }
