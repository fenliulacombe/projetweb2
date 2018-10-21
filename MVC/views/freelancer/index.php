<head>
    <title>Liste des prestataires / pigistes</title>
</head>
<h3>Liste des prestataires / pigistes</h3>
 <!--RECHERCHE-->
<div id="pigiste">
  <div id="recherche_pigiste">
    <h2>Pigistes sélectionnés - 73 316 trouvés</h2>
    <div>
      <form class="form-banniere">
        <div class="input-group">
          <input type="text" class="form-control input-banniere" placeholder="Appuyez ici pour rechercher un pigiste">
          <div class="input-group-btn">
            <button class="btn btn-turquoise" type="submit">Trouver</button>
          </div>
        </div>
      </form> 
    </div>
  </div>
  <h3>Membres en vedette PRO Plus</h3>
  <div class="row">
    <?php // utiliser le tableau associatif $topfreelancers pour faire afficher tous les tops freelancers
    foreach ($topfreelancers as $key => $topfreelancer) {
    ?>
    <!--Cette partie doit etre dans une boucle pour afficher les blocs-->
      <div class="card">
        <a href="<?= ROOT_URL ?>freelancer/<?= $topfreelancer['id_ut'] ?>">
          <div class="image">
            <img class="card-img-top" src="<?= ROOT_URL ?>assets/images/portrait<?= rand(4,23); ?>.jpg" alt="Card image">
            <div class="overlay">
            </div>      
          </div>
        </a>
        <div class="card-body">
          <h5 class="card-title"><?php echo $topfreelancer['prenom_ut'] ?></h5>
          <h6 class="card-title"><?php echo $topfreelancer['nom_secteur'] ?></h6>
          <p><?php echo 'competence' ?></p>
          <div>
            <span class="ville"><i class="fas fa-map-marker-alt"></i> <?php echo $topfreelancer['nom_ville'] ?></span>
            <span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> <?php echo $topfreelancer['note_eval'].'%'  ?></span>
            <br>
            <span class="taux"><i class="fas fa-dollar-sign"></i><?php echo $topfreelancer['taux_horaire_ut'].'/h' ?></span>
          </div>
        </div>
      </div>         
      <!--Fin de la boucle-->
    <?php
    }
    ?>
  </div>

  <!-- partie pour tous les pigites -->
  <div class="row" id="content-pigiste">

    <div class="col-sm-9" id="jar">
    <!-- utiliser le tableau associatif $freelancers pour faire afficher tous les tops freelancers -->
    <?php foreach ($freelancers as $key => $freelancer) { ?>
      <div class="card row mx-auto content">
        <a href="#">
          <div class="image">
            <img class="card-img-top" src="<?= ROOT_URL ?>assets/images/portrait<?= rand(4,23); ?>.jpg" alt="Card image">
            <div class="overlay">      
            </div>
          </div>
        </a>         
        <div class="card-body">
          <h5 class="card-title"><?php echo $freelancer['prenom_ut'] ?></h5>
          <h6 class="card-title"><?php echo $freelancer['nom_secteur'] ?></h6>
          <p><?php echo 'competence' ?></p>                   
          <div>
            <span class="ville"><i class="fas fa-map-marker-alt"></i><?php echo $freelancer['nom_ville'] ?></span>
            <span class="rate" title="Nombre de vote"><i class="fas fa-star"></i><?php echo $freelancer['note_eval'] . '%' ?></span><br>
            <span class="taux"><i class="fas fa-dollar-sign"></i><?php echo $freelancer['taux_horaire_ut'].'/h' ?></span>
          </div>
        </div>
      </div>
          <!--Fin de la boucle-->
    <?php
    }
    ?>
    <nav>
      <ul class="pagination justify-content-center pagination-sm"></ul>
    </nav>
  </div>
  <div class="col-sm-3">
    <div class="filtrer">
      <h4>Filtrer par :</h4>
        <form>
          <div class="form-group">
            <label for="nom_ville">Ville</label>
              <select class="form-control" name="nom_ville">
              <?php foreach ($cities as $key => $city) {?>
                <option value=<?= $city['id_ville'] ?>><?= $city['nom_ville'] ?></option>
              <?php } ?>
              </select>
          </div>
          <div class="form-group">
            <label for="taux_horaire_ut">Taux horaire</label>
              <select class="form-control" name="taux_horaire_ut">
                <option>20$-29$</option>
                <option>30$-39$</option>
                <option>40$-49$</option>
                <option>+50$</option>
              </select>
          </div>
          <div class="form-group">
            <label for="nom_secteur">Secteurs d’activités</label>
              <select multiple class="form-control" name="nom_secteur">
              <?php foreach ($sectors as $key => $sector) {?>
                <option value=<?= $sector['id_secteur'] ?>><?= $sector['nom_secteur']?></option>
              <?php } ?>
              </select>                    
          </div>
            <button type="submit" class="btn btn-warning">Filtrer</button>
        </form>
    </div>
  </div>  
</div>


   