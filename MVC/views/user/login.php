
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    
      <!-- Modal content-->
    <div class="modal-content"> 
      
      <!-- Modal image background et bouton fermer -->
      <div class="modal-header" style="background-image:url(images/woman-laptop6b.jpg);height:200px;background-repeat:no-repeat;background-size:cover;">
        <button type="button" class="close" data-dismiss="modal" style="align-self:flex-start;">&times;</button>
      </div>
      
      <div class="modal-body">      
        <div class="container">      
          <!--Formulaire connexion DÉBUT-->
          <div class="row">
              <form>
                <div class="form-group">
                  <label for="courriel_ut">Courriel ou nom d'utilisateur</label>
                  <input type="email" class="form-control" name="courriel_ut" id="courriel_ut" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">Nous ne partagons pas votre courriel à d'autre.</small>
                </div>
                <div class="form-group">
                  <label for="mdp_ut">Mot de passe</label>
                  <input type="password" class="form-control" name="mdp_ut" id="mdp_ut" placeholder="Password">
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="sesouvenir" id="sesouvenir">
                  <label class="form-check-label" for="sesouvenir">Se souvenir de moi</label>
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