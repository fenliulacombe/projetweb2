<!doctype html>
<html lang="en">
<head>
    <?php include '../../view/includes/meta.php'; ?>
    <title>Inscription fournisseur</title>
</head>
<body>  
<!--Partie LOGO/MENU--> 
<?php include '../../view/includes/header.php'; ?>
<div class="container" id="publier">
    <!--Formulaire inscription des prestataires--> 
    <h3>Inscription fournisseur</h3>
    <div class="row">
        <div class="col-sm-4">
        <form>
        <div class="formulaire">
        <h5>Détails du compte</h5>
          <div class="form-group">
            <label for="exampleFormControlInput1">Nom d’utilisateur <span class="red">*</span></label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Courriel professionnel <span class="red">*</span></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Mot de passe <span class="red">*</span></label>
            <input type="password" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Confirmer le mot de passe</label>
            <input type="password" class="form-control" id="exampleFormControlInput1">
          </div>
        </div>
        </div>
        <div class="col-sm-8">
        <div class="formulaire">
        <h5>Détails du profil</h5>
          <div class="form-group">
            <label for="exampleFormControlInput1">Nom <span class="red">*</span></label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Prenom <span class="red">*</span></label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Adresse <span class="red">*</span></label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Ville <span class="red">*</span></label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Nom de votre entreprise <span class="red">*</span></label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Numéro de téléphone </label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Numéro d’entreprise du Québec (NEQ)</label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
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
                <label for="exampleFormControlInput1">Site web (URL)</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">LinkedIn</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Facebook</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
              </div>
            </div>
          </div>
          <div><span class="red">*</span> <span class="small">Champ obligatoire</span></div>
          <button type="submit" class="btn btn-primary">Soumettre</button>
        </div>
        </form>
        </div>
    </div>
    <!--Partie FOOTER--> 
    <?php include '../../view/includes/foot.php'; ?>
</div>


</body>
</html>