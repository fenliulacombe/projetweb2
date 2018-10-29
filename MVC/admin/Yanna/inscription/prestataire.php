<!doctype html>
<html lang="en">
<head>
    <?php include '../../view/includes/meta.php'; ?>
    <title>Inscription prestataire</title>
</head>
<body>
<!--Partie LOGO/MENU--> 
<?php include '../../view/includes/header.php'; ?>
<div class="container" id="publier">
    <!--Formulaire inscription des prestataires--> 	 
    <h3>Inscription pigiste</h3>
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
          <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Image de profil (1MB max)</label>
            <div class="small-12 medium-2 large-2 columns" id="pic">
                 <div class="carre">
                   <!-- User Profile Image -->
                   <img class="profile-pic" src="/echange/view/images/profil.jpg" width="120">

                   <!-- Default Image -->
                   <!-- <i class="fa fa-user fa-5x"></i> -->
                 </div>
                 <div class="p-image">
                   <i class="fa fa-camera upload-button"></i>
                    <input class="file-upload" type="file" accept="image/*"/>
                 </div>
              </div>
          </div>
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
            <label for="exampleFormControlInput1">Téléphone <span class="red">*</span></label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Titre de votre profil <span class="red">*</span></label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Compétences <span class="red">*</span></label>
            <select class="multipleChosen form-control" multiple="true" data-placeholder="Cliquez pour sélectionner une option..." id="exampleFormControlSelect1">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Taux horaire <span class="red">*</span></label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Disponibilités <span class="red">*</span></label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Télétravail" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Télétravail
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="À vos bureaux" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                À vos bureaux
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Aucune disponibilité pour le moment" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Aucune disponibilité pour le moment
              </label>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Années d'experience <span class="red">*</span></label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Situation professionnelle <span class="red">*</span></label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Type d’entreprise <span class="red">*</span></label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
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
            <label for="exampleFormControlTextarea1">À propos</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
        </form>
        </div>
        </div>
    </div>
    <!--Partie FOOTER--> 
    <?php include '../../view/includes/foot.php'; ?>
</div>


</body>
</html>