<h3>Inscription fournisseur</h3>
    <div class="row">
        <div class="col-sm-4">
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
          <div class="form-group" >
            <label for="pseudo_ut">Pseudo *</label>
            <input type="text" name="pseudo_ut" class="form-control" id="pseudo_ut" value=<?php echo isset($_POST['pseudo_ut'])?$_POST['pseudo_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="courriel_ut">Courriel professionnel *</label>
            <input type="email" class="form-control" name="courriel_ut" placeholder="name@example.com" value=<?php echo isset($_POST['courriel_ut'])?$_POST['courriel_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="mdp_ut">Mot de passe *</label>
            <input type="password" class="form-control" id="mdp_ut" name="mdp_ut">
          </div>
          <div class="form-group">
            <label for="confirmmdp">Confirmer le mot de passe</label>
            <input type="password" class="form-control" name="confirmmdp">
          </div>
        </div>
        <div class="col-sm-8">
        <div class="form-group">
            <label for="nom_ut">Nom *</label>
            <input type="text" class="form-control" name="nom_ut" value=<?php echo isset($_POST['nom_ut'])?$_POST['nom_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="prenom_ut">Prenom *</label>
            <input type="text" class="form-control" name="prenom_ut" value=<?php echo isset($_POST['prenom_ut'])?$_POST['prenom_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="adresse_ut">Adresse *</label>
            <input type="text" class="form-control" name="adresse_ut" value=<?php echo isset($_POST['adresse_ut'])?$_POST['adresse_ut']:'' ?>>
          </div>
          <div class="form-group">
          <label for="nom_ville">Ville *</label>
            <select class="form-control" name="id_ville_ut">
            <?php foreach ($cities as $key => $city) {?>
                <option value=<?= $city['id_ville'] ?>><?= $city['nom_ville'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="nom_entreprise_ut">Nom de votre entreprise *</label>
            <input type="text" class="form-control" name="nom_entreprise_ut" id="nom_entreprise_ut" value=<?php echo isset($_POST['nom_entreprise_ut'])?$_POST['nom_entreprise_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="telephone_ut">Téléphone *</label>
            <input type="text" class="form-control" name="telephone_ut" value=<?php echo isset($_POST['nom_entreprise_ut'])?$_POST['nom_entreprise_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="neq_ut">Numéro d’entreprise du Québec (NEQ)</label>
            <input type="text" name="neq_ut" class="form-control" id="neq_ut" value=<?php echo isset($_POST['neq_ut'])?$_POST['neq_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="site_web_ut">Site web (URL)</label>
            <input type="text" class="form-control" name="site_web_ut" id="site_web_ut" value=<?php echo isset($_POST['site_web_ut'])?$_POST['site_web_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="lien_linkedin_ut">LinkedIn</label>
            <input type="text" class="form-control" id="lien_linkedin_ut" name="lien_linkedin_ut" value=<?php echo isset($_POST['lien_linkedin_ut'])?$_POST['lien_linkedin_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="lien_faceboo_ut">Facebook</label>
            <input type="text" class="form-control" id="lien_facebook_ut" name="lien_facebook_ut" value=<?php echo isset($_POST['lien_facebook_ut'])?$_POST['lien_facebook_ut']:'' ?>>
          </div>
          <input type="submit" name="submit" class="btn btn-primary" value="submit">
        </form>
        </div>
    </div>