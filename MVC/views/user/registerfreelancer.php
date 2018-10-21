<!--Formulaire inscription des prestataires--> 
<h3>Inscription prestataire</h3>
    <div class="row">
        <div class="col-sm-4">
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
          <div class="form-group">
            <label for="pseudo_ut">Nom d’utilisateur *</label>
            <input type="text" class="form-control" name="pseudo_ut">
          </div>
          <div class="form-group">
            <label for="courriel_ut">Courriel professionnel *</label>
            <input type="email" class="form-control" name="courriel_ut" placeholder="name@example.com">
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
            <label for="photo_ut">Image de profil (500kb max)</label>
            <input type="file" class="form-control-file" name="photo_ut">
          </div>
          <div class="form-group">
            <label for="nom_ut">Nom *</label>
            <input type="text" class="form-control" id="nom_ut">
          </div>
          <div class="form-group">
            <label for="prenom_ut">Prenom *</label>
            <input type="text" class="form-control" id="prenom_ut">
          </div>
          <div class="form-group">
            <label for="titre_profil_ut">titre profil *</label>
            <input type="text" class="form-control" id="titre_profil_ut">
          </div>
          <div class="form-group">
            <label for="adresse_ut">Adresse *</label>
            <input type="text" class="form-control" id="adresse_ut">
          </div>
          <div class="form-group">
            <label for="nom_ville">Ville *</label>
            <select class="form-control" name="nom_ville">
            <?php foreach ($cities as $key => $city) {?>
                <option value=<?= $city['id_ville'] ?>><?= $city['nom_ville'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="telephone_ut">Téléphone *</label>
            <input type="text" class="form-control" name="telephone_ut">
          </div>
          <div class="form-group">
            <label for="telephone_ut">Années d'expérience *</label>
            <input type="text" class="form-control" name="annee_experience_ut">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Secteurs d’activités *</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <?php foreach ($sectors as $key => $sector) {?>
                <option value=<?= $sector['id_secteur'] ?>><?= $sector['nom_secteur']?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="competence_ut">Compétences *</label>
            <textarea class="form-control" name="competence_ut" id="competence_ut" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="taux_horaire_ut">Taux horaire *</label>
            <input type="text" class="form-control" name="taux_horaire_ut">
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
            <input type="text" class="form-control" id="situation_pro_ut" name="situation_pro_ut">
          </div>
          <div class="form-group">
            <label for="nom_type_etse">Type d’entreprise *</label>
            <select class="form-control" >
            <?php foreach ($companytypes as $key => $companytype) {?>
                <option value=<?= $companytype['id_type_etse'] ?>><?= $companytype['nom_type_etse']?></option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="apropos_ut">À propos</label>
            <textarea class="form-control" id="apropos_ut" name="apropos_ut" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="site_web_ut">Site web (URL)</label>
            <input type="text" class="form-control" id="site_web_ut" name="site_web_ut">
          </div>
          <div class="form-group">
            <label for="lien_linkedin_ut">LinkedIn</label>
            <input type="text" class="form-control" id="lien_linkedin_ut" name="lien_linkedin_ut">
          </div>
          <div class="form-group">
            <label for="lien_faceboo_ut">Facebook</label>
            <input type="text" class="form-control" id="lien_faceboo_ut" name="lien_faceboo_ut">
          </div>
          <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
        </div>
    </div>