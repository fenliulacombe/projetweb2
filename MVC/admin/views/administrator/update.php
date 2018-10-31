


<!-- /////////////////////////////////////////////////////////// -->      
<!-- ///////////////////// SECTION CONTAIN ///////////////////// -->
<!-- /////////////////////////////////////////////////////////// -->  

<div id="page-wrapper" style="padding-top:20px;height:auto !important">
                     
 	<div class="row" style="padding-bottom:40px">
    
        <div class="col-sm-8">
        
        <h3>Modifier un Administrateur</h3>
        
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <div class="formulaire">
        
          <div class="form-group">
            <label for="exampleFormControlFile1">Image de profil (1MB max)</label>
            <div class="small-12 medium-2 large-2 columns" id="pic">
                 <div class="carre">
                   <!-- User Profile Image -->
                   <img class="profile-pic" src="/echange/view/images/profil.jpg" width="120">

                   <!-- Default Image -->
                   <i class="fa fa-user fa-5x"></i>
                 </div>
                 <div class="p-image">
                   <i class="fa fa-camera upload-button"></i>
                    <input class="file-upload" type="file" accept="image/*"/>
                 </div>
              </div>
          </div>
        
          <div class="form-group">
            <input type="hidden" class="form-control" id="id_role_ut" name="id_role_ut" >
          </div>
          <div class="form-group">
            <label for="nom_ut">Nom <span class="red">*</span></label>
            <input type="text" class="form-control" id="nom_ut" name="nom_ut" value=<?php echo $admin['nom_ut']; ?>>
          </div>
          <div class="form-group">
            <label for="prenom_ut">Prenom <span class="red">*</span></label>
            <input type="text" class="form-control" id="prenom_ut"  name="prenom_ut" value=<?php echo $admin['prenom_ut']; ?> >
          </div>
          <div class="form-group">
            <label for="courriel_ut">Courriel professionnel <span class="red">*</span></label>
            <input type="email" class="form-control" name="courriel_ut" placeholder="name@example.com" value=<?php echo $admin['courriel_ut']; ?>>
          </div>
          <div class="form-group">
            <label for="mdp_ut">Mot de passe <span class="red">*</span></label>
            <input type="password" class="form-control" id="mdp_ut" name="mdp_ut" value=<?php echo $admin['mdp_ut']; ?>>
          </div>
          <div class="form-group">
            <label for="confirmmdp">Confirmer le mot de passe</label>
            <input type="password" class="form-control" name="confirmmdp">
          </div>
        </div>
          
        <input type="submit" value="submit" name="submit_updateadmin" class="btn btn-primary">
        </form>

        </div>
        
  	</div>
     

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


</body>

</html>
