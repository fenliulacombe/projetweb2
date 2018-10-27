<head>
    <title>Publier un projet | Echange</title>
</head>
<body>
<div class="container" id="publier">
<!--Formulaire pour publier un projet/contrat--> 
<h3>Publier un projet</h3>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <h5>Statistiques</h5>
                <div><strong>14</strong> contrats publiés</div>
                <div><a href="<?= ROOT_URL; ?>/contract">Voir la liste</a></div>
                <div><br></div>
                <div><strong>50</strong> soumissionnaires</div>
                <div><a href="<?= ROOT_URL; ?>/freelancer">Voir la liste</a></div>
            </div>
            <div class="card">
                <h5>Espace perso</h5>
                <div><a href="#">Afficher profil</a></div>
                <div><a href="#">Modifier profil</a></div>
                <div><a href="#">Déconnexion</a></div>
            </div>
        </div>
        <div class="col-sm-8">
        <form class="formulaire">
          <div class="form-group">
            <label for="titre_prj">Titre du projet <span class="red">*</span></label>
            <input type="text" name="titre_prj" class="form-control" id="titre_prj">
          </div>
          <div class="form-group">
            <label for="type_prj">Type du projet <span class="red">*</span></label>
            <input type="text" name="type_prj" class="form-control" id="type_prj">
          </div>
          <div class="form-group">
            <label for="secteur_prj">Secteur <span class="red">*</span></label>
            <select class="form-control" id="id_secteur_prj" name="secteur_prj">
              <?php foreach ($sectors as $key => $sector) {?>
                <option value=<?= $sector['id_secteur'] ?>><?= $sector['nom_secteur']?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="description_prj">Description <span class="red">*</span></label>
            <textarea class="form-control" id="description_prj" name="description_prj" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="lieu-realisation_prj">Lieu de réalisation <span class="red">*</span></label>
            <select class="form-control" name ="lieu-realisation_prj" id="lieu-realisation_prj">
              <?php foreach ($cities as $key => $city) {?>
                <option value=<?= $city['id_ville'] ?>><?= $city['nom_ville'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="budget_indicatif_prj">Budget indicatif <span class="red">*</span></label>
            <input type="number" class="form-control" id="budget_indicatif_prj" name="budget_indicatif_prj">
          </div>
          <div class="form-group">
            <label for="date_debut_prj">Date début <span class="red">*</span> </label>
            <input type="date" name="date_debut_prj" class="form-control" id="date_debut_prj">
          </div>
          <div class="form-group">
            <label for="date_fin_prj">Date fin <span class="red">*</span> </label>
            <input type="date" name="date_fin_prj" class="form-control" id="ndate_fin_prj">
          </div>
          <div><span class="red">*</span> <span class="small">Champ obligatoire</span></div>
          <button type="submit" class="btn btn-primary">Publier</button>
        </form>
        </div>
    </div>
</div>
</body>