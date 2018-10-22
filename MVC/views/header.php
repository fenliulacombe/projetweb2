<header class="container-fluid cont-top">
  <div class="container" style="border:0;">
  
          <div class="row">
            <div class="col-xs-1 col-md-3 col-lg-3"><!--LOGO-->
            	<a href="<?= ROOT_URL ?>"><img src="<?= ROOT_URL ?>assets/images/logo.svg" alt="logo" width="180px"/></a>
            </div>
            
            <div class="col-xs-1 col-md-9 col-lg-9">
            	<ul class="nav"><!--MENU-->
               	  <li class="li-m"><a href="<?= ROOT_URL ?>freelancer">Voir les pigistes</a></li>
                  <li class="li-m"><a href="<?= ROOT_URL ?>contract">Voir les contrats</a></li>
                  <li class="li-m"><a class="dropdown-toggle" data-toggle="dropdown" href="#">S'inscrire</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?= ROOT_URL ?>freelancer/register">En tant que prestataire</a>
                          <a class="dropdown-item" href="<?= ROOT_URL ?>provider/register">En tant que fournisseur</a>
                        </div>
                  </li>
                  <li class="li-m" data-toggle="modal" data-target="#myModal"><a href="javascript:void(0)">login</a></li>
                  <!-- <li class="li-m"><a href="<?= ROOT_URL ?>user/login">login</a></li> -->
                </ul>
            </div>
       </div>
  </div>
</header>


<!--========================================================
                       MODAL LOGIN
=========================================================-->

<div class="container">

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
    
    <!-- Modal image background et bouton fermer -->
      <div class="modal-header" style="background-image:url(<?= ROOT_URL ?>assets/images/woman-laptop6b.jpg);height:200px;background-repeat:no-repeat;background-size:cover;">
          <button type="button" class="close" data-dismiss="modal" style="align-self:flex-start;">&times;</button>
      </div>
      <div class="modal-body">  
    
 <div class="container">    
 
  <!--Formulaire connexion DÉBUT-->
  <div class="row">
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Courriel ou nom d'utilisateur</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">Nous ne partagons pas votre courriel à d'autre.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
        </div>
        <button type="submit" class="btn btn-turquoise">Connexion</button>
      </form>
  </div>     
<!--Formulaire connexion FIN-->             
  
  </div>   
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>
</div>
