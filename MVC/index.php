<?php
   require ('config.php');

   require ('classes/Main.php');
   require ('classes/Controller.php');
   require ('classes/Model.php');

   require ('controllers/home.php');
   require ('controllers/contract.php');
   require ('controllers/user.php');
   require ('controllers/freelancer.php');

   require ('models/home.php');
   require ('models/contract.php');
   require ('models/user.php');
   require ('models/freelancer.php');


   $main = new Main($_GET);// le Get est transmis par le fichier .htaccess
   $controller = $main->createController();
   if($controller){
       $controller->executeAction();
   }
