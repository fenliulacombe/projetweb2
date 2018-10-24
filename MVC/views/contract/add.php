<!--Formulaire pour publier un projet/contrat--> 
<h3>Publier un projet</h3>
    <div class="row">
        <div class="col">
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
          <div class="form-group">
            <label for="titre_prj">Titre du projet *</label>
            <input type="text" name="titre_prj" class="form-control" id="titre_prj">
          </div>
          <div class="form-group">
            <label for="type_prj">Type du projet *</label>
            <input type="text" name="type_prj" class="form-control" id="type_prj">
          </div>
          <div class="form-group">
            <label for="secteur_prj">Secteur *</label>
            <select class="form-control" id="id_secteur_prj" name="secteur_prj">
              <?php foreach ($sectors as $key => $sector) {?>
                <option value=<?= $sector['id_secteur'] ?>><?= $sector['nom_secteur']?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="description_prj">Description *</label>
            <textarea class="form-control" id="description_prj" name="description_prj" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="lieu-realisation_prj">Lieu de réalisation *</label>
            <select class="form-control" name ="lieu-realisation_prj" id="lieu-realisation_prj">
              <?php foreach ($cities as $key => $city) {?>
                <option value=<?= $city['id_ville'] ?>><?= $city['nom_ville'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="budget_indicatif_prj">Budget indicatif *</label>
            <input type="number" class="form-control" id="budget_indicatif_prj" name="budget_indicatif_prj">
          </div>
          <div class="form-group">
            <label for="date_debut_prj">Date début * </label>
            <input type="date" name="date_debut_prj" class="form-control" id="date_debut_prj">
          </div>
          <div class="form-group">
            <label for="date_fin_prj">Date fin * </label>
            <input type="date" name="date_fin_prj" class="form-control" id="date_fin_prj">
          </div>
          <input type="submit" value="publier" name="publier" class="btn btn-primary">
        </form>
        </div>
    </div>