<?php
   session_start();
   require ('config.php');
   
   require ('../classes/Entite.class.php');
   require ('../classes/Main.php');
   require ('../classes/MainAdmin.php');
   require ('../classes/Controller.php');
   require ('../classes/Model.php');
   require ('../classes/ContractData.class.php');
   require ('../classes/UserData.class.php');
   require ('../classes/Messages.php');

   require ('controllers/home.php');
   require ('controllers/administrator.php');
   require ('controllers/contract.php');
   require ('controllers/sector.php');
   require ('controllers/competence.php');
   require ('controllers/messagerie.php');
   require ('controllers/freelancer.php');
   require ('controllers/provider.php');


   require ('models/administratorModel.php');
   require ('models/contractModel.php');
   require ('models/sectorModel.php');
   require ('models/competenceModel.php');
   require ('models/messagerieModel.php');
   require ('models/freelancerModel.php');
   require ('models/providerModel.php');
   require ('models/homeModel.php');


   $main = new MainAdmin($_GET);// le Get est transmis par le fichier .htaccess
   $controller = $main->createController();
   if($controller){
       $controller->executeAction();
   }
