<!--Formulaire inscription des prestataires--> 
<h3>Inscription prestataire</h3>
    <div class="row">
        <div class="col-sm-4">
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
          <div class="form-group">
            <label for="pseudo_ut">Pseudo *</label>
            <input type="text" class="form-control" name="pseudo_ut" value=<?php echo isset($_POST['pseudo_ut'])?$_POST['pseudo_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="courriel_ut">Courriel professionnel *</label>
            <input type="email" class="form-control" name="courriel_ut" placeholder="name@example.com" value=<?php echo isset($_POST['courriel_ut'])?$_POST['courriel_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="mdp_ut">Mot de passe *</label>
            <input type="password" class="form-control" id="mdp_ut" name="mdp_ut" value=<?php echo isset($_POST['mdp_ut'])?$_POST['mdp_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="confirmmdp">Confirmer le mot de passe</label>
            <input type="password" class="form-control" name="confirmmdp">
          </div>
        </div>
        <div class="col-sm-8">
          <div class="form-group">
            <label for="photo_ut">Image de profil (500kb max)</label>
            <input type="file" class="form-control-file" name="photo_ut" >
          </div>
          <div class="form-group">
            <label for="nom_ut">Nom *</label>
            <input type="text" class="form-control" id="nom_ut" name="nom_ut" value=<?php echo isset($_POST['nom_ut'])?$_POST['nom_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="prenom_ut">Prenom *</label>
            <input type="text" class="form-control" id="prenom_ut"  name="prenom_ut" value=<?php echo isset($_POST['prenom_ut'])?$_POST['prenom_ut']:'' ?> >
          </div>
          <div class="form-group">
            <label for="titre_profil_ut">titre profil *</label>
            <input type="text" class="form-control" id="titre_profil_ut" name="titre_profil_ut" value=<?php echo isset($_POST['titre_profil_ut'])?$_POST['titre_profil_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="adresse_ut">Adresse *</label>
            <input type="text" name="adresse_ut" class="form-control" id="adresse_ut" value=<?php echo isset($_POST['adresse_ut'])?$_POST['adresse_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="id_ville_ut">Ville *</label>
            <select class="form-control" name="id_ville_ut">
            <?php foreach ($cities as $key => $city) {?>
                <option value="<?= $city['id_ville'] ?>"><?= $city['nom_ville'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="telephone_ut">Téléphone *</label>
            <input type="text" class="form-control" name="telephone_ut" value=<?php echo isset($_POST['telephone_ut'])?$_POST['telephone_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="annee_experience_ut">Années d'expérience *</label>
            <input type="text" class="form-control" name="annee_experience_ut" value=<?php echo isset($_POST['annee_experience_ut'])?$_POST['annee_experience_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="id_secteur_ut">Secteurs d’activités *</label>
            <select class="form-control" name="id_secteur_ut">
              <?php foreach ($sectors as $key => $sector) {?>
                <option value="<?= $sector['id_secteur'] ?>"><?= $sector['nom_secteur']?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="competence_ut">Compétences *</label>
            <textarea class="form-control" name="competence_ut" id="competence_ut" rows="3" ></textarea>
          </div>
          <div class="form-group">
            <label for="taux_horaire_ut">Taux horaire *</label>
            <input type="text" class="form-control" name="taux_horaire_ut" value=<?php echo isset($_POST['taux_horaire_ut'])?$_POST['taux_horaire_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="disponibilite_ut">Disponibilités *</label>
            <div class="form-check">
              <input class="form-check-input" name="disponibilite_ut" type="checkbox">
              <label class="form-check-label" for="defaultCheck1">
                Télétravail
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="disponibilite_ut" value="À vos bureaux">
              <label class="form-check-label" for="defaultCheck1">
                À vos bureaux
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="disponibilite_ut" value="Aucune disponibilité pour le moment">
              <label class="form-check-label" for="defaultCheck1">
                Aucune disponibilité pour le moment
              </label>
            </div>
          </div>
          <div class="form-group">
            <label for="situation_pro_ut">Situation professionnelle *</label>
            <input type="text" class="form-control" id="situation_pro_ut" name="situation_pro_ut" value=<?php echo isset($_POST['situation_pro_ut'])?$_POST['situation_pro_ut']:'' ?>>
          </div>
          <div class="form-group">
            <label for="nom_type_etse">Type d’entreprise *</label>
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
          <input type="submit" value="submit" name="submit" class="btn btn-primary">
        </form>
        </div>
    </div>