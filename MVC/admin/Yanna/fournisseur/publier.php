<!doctype html>
<html lang="en">
<head>
    <?php include '../../view/includes/meta.php'; ?>
    <title>Publier un projet</title>
</head>
<body>
<!--Partie LOGO/MENU--> 
<?php include '../../view/includes/header.php'; ?>
<div class="container" id="publier">
    <!--Formulaire pour publier un projet/contrat--> 
    <h3>Publier un contrat</h3>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <h5>Statistiques</h5>
                <div><strong>14</strong> contrats publiés</div>
                <div><a href="/echange/view/fournisseur/liste_contrats.php">Voir la liste</a></div>
                <div><br></div>
                <div><strong>50</strong> soumissionnaires</div>
                <div><a href="/echange/view/prestataire/liste_prestataires.php">Voir la liste</a></div>
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
            <label for="exampleFormControlInput1">Titre du projet <span class="red">*</span></label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Type du projet <span class="red">*</span></label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Secteur <span class="red">*</span></label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Description <span class="red">*</span></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Lieu de réalisation <span class="red">*</span></label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option value="">Choisissez un lieu</option>
              <option value="Télétravail">Télétravail</option>
              <option value="À vos bureaux">À nos bureaux</option>
              <option value="Indéterminé">Indéterminé</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Budget indicatif <span class="red">*</span></label>
            <input type="number" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Date début <span class="red">*</span> </label>
            <input type="date" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Date fin <span class="red">*</span> </label>
            <input type="date" class="form-control" id="exampleFormControlInput1">
          </div>
          <div><span class="red">*</span> <span class="small">Champ obligatoire</span></div>
          <button type="submit" class="btn btn-primary">Publier</button>
        </form>
        </div>
    </div>
    <!--Partie FOOTER--> 
    <?php include '../../view/includes/foot.php'; ?>
</div>


</body>
</html>