<head>
    <title>Inscription pigiste | Echange</title>
</head>
<body>
<!--Formulaire inscription des prestataires--> 
<div class="container" id="publier">
<h3>Inscription pigiste</h3>
    <div class="row">
        <div class="col-sm-4">
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <div class="formulaire">
        <h5>Détails du compte</h5>
      
          <div class="form-group">
            <label for="courriel_ut">Courriel professionnel <span class="red">*</span></label>
            <input type="email" class="form-control" name="courriel_ut" placeholder="name@example.com" value=<?php echo isset($_POST['courriel_ut'])?$_POST['courriel_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="mdp_ut">Mot de passe <span class="red">*</span></label>
            <input type="password" class="form-control" id="mdp_ut" name="mdp_ut" value=<?php echo isset($_POST['mdp_ut'])?$_POST['mdp_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="confirmmdp">Confirmer le mot de passe</label>
            <input type="password" class="form-control" name="confirmmdp">
          </div>
        </div>
        </div>
        <div class="col-sm-8">
        <div class="formulaire">
        <h5>Détails du profil</h5>
          <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>
          <div class="form-group">
            <label for="photo_ut">Image de profil (1MB max)</label>
            <div class="small-12 medium-2 large-2 columns" id="pic">
                 <div class="carre">
                   <!-- User Profile Image -->
                   <img class="profile-pic" src="<?= ROOT_URL; ?>assets/images/profil.jpg" width="120">

                   <!-- Default Image -->
                   <!-- <i class="fa fa-user fa-5x"></i> -->
                 </div>
                 <div class="p-image">
                   <i class="fa fa-camera upload-button"></i>
                    <input class="file-upload" type="file" accept="image/*" name="photo_ut"/>
                 </div>
            </div>
          </div>
          <div class="form-group">
            <label for="nom_ut">Nom <span class="red">*</span></label>
            <input type="text" class="form-control" id="nom_ut" name="nom_ut" value=<?php echo isset($_POST['nom_ut'])?$_POST['nom_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="prenom_ut">Prenom <span class="red">*</span></label>
            <input type="text" class="form-control" id="prenom_ut"  name="prenom_ut" value=<?php echo isset($_POST['prenom_ut'])?$_POST['prenom_ut']:'' ?> >
          </div>
        
          <div class="form-group">
            <label for="adresse_ut">Adresse <span class="red">*</span></label>
            <input type="text" name="adresse_ut" class="form-control" id="adresse_ut" value=<?php echo isset($_POST['adresse_ut'])?$_POST['adresse_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="id_ville_ut">Ville <span class="red">*</span></label>
            <select class="form-control" name="id_ville_ut">
            <?php foreach ($cities as $key => $city) {?>
                <option value="<?= $city['id_ville'] ?>"><?= $city['nom_ville'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="telephone_ut">Téléphone <span class="red">*</span></label>
            <input type="text" class="form-control" name="telephone_ut" value=<?php echo isset($_POST['telephone_ut'])?$_POST['telephone_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="annee_experience_ut">Années d'expérience <span class="red">*</span></label>
            <input type="text" class="form-control" name="annee_experience_ut" value=<?php echo isset($_POST['annee_experience_ut'])?$_POST['annee_experience_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="id_secteur_ut">Secteurs d’activités <span class="red">*</span></label>
            <select class="form-control" name="id_secteur_ut">
              <?php foreach ($sectors as $key => $sector) {?>
                <option value="<?= $sector['id_secteur'] ?>"><?= $sector['nom_secteur']?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="competence_ut">Compétences <span class="red">*</span></label>
            <select class="multipleChosen form-control" multiple="true" data-placeholder="Cliquez pour sélectionner une option..." name="competence_ut[]" id="competence_ut">
              <?php foreach ($competences as $key => $competence) {?>
                <option value="<?= $competence['nom_comp'] ?>"><?= $competence['nom_comp'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="taux_horaire_ut">Taux horaire <span class="red">*</span></label>
            <input type="text" class="form-control" name="taux_horaire_ut" value=<?php echo isset($_POST['taux_horaire_ut'])?$_POST['taux_horaire_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="disponibilite_ut">Disponibilités <span class="red">*</span></label>
            <div class="form-check">
              <input class="form-check-input" name="disponibilite_ut" type="checkbox">
              <label class="form-check-label" for="defaultCheck1">
                Télétravail
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="disponibilite_ut" value="À vos bureaux">
              <label class="form-check-label" for="defaultCheck2">
                À vos bureaux
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="disponibilite_ut" value="Aucune disponibilité pour le moment">
              <label class="form-check-label" for="defaultCheck3">
                Aucune disponibilité pour le moment
              </label>
            </div>
          </div>
          <div class="form-group">
            <label for="situation_pro_ut">Situation professionnelle <span class="red">*</span></label>
            <input type="text" class="form-control" id="situation_pro_ut" name="situation_pro_ut" value=<?php echo isset($_POST['situation_pro_ut'])?$_POST['situation_pro_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="nom_type_etse">Type d’entreprise <span class="red">*</span></label>
            <select class="form-control" name="id_type_etse_ut" >
            <?php foreach ($companytypes as $key => $companytype) {?>
                <option value=<?= $companytype['id_type_etse'] ?>><?= $companytype['nom_type_etse']?></option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="apropos_ut">À propos</label>
            <textarea class="form-control" id="apropos_ut" name="apropos_ut" rows="3" value=<?php echo isset($_POST['apropos_ut'])?$_POST['apropos_ut']:'' ?>></textarea>
          </div>
          <div id="accordion" role="tablist">
            <div role="tab" id="headingOne">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <i class="fas fa-chevron-circle-right"></i> Site web et profils sociaux
                </a>
              </h5>
            </div>
            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="form-group">
                <label for="site_web_ut">Site web (URL)</label>
                <input type="text" class="form-control" id="site_web_ut" name="site_web_ut" value=<?php echo isset($_POST['site_web_ut'])?$_POST['site_web_ut']:'' ?>>
              </div>
              <div class="form-group">
                <label for="lien_linkedin_ut">LinkedIn</label>
                <input type="text" class="form-control" id="lien_linkedin_ut" name="lien_linkedin_ut" value=<?php echo isset($_POST['lien_linkedin_ut'])?$_POST['lien_linkedin_ut']:'' ?>>
              </div>
              <div class="form-group">
                <label for="lien_faceboo_ut">Facebook</label>
                <input type="text" class="form-control" id="lien_facebook_ut" name="lien_facebook_ut" value=<?php echo isset($_POST['lien_facebook_ut'])?$_POST['lien_facebook_ut']:'' ?>>
              </div>
            </div>
          </div>
          <div><span class="red">*</span> <span class="small">Champ obligatoire</span></div>
          <input type="submit" value="submit" name="submit" class="btn btn-primary">
        </form>
        </div>
        </div>
    </div>
</div>
</body>