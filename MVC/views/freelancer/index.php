<h3>Liste des prestataires / pigistes</h3>
    <p>exemple de contenu</p> 
    <div class="row">
    <?php // utiliser le tableau associatif $viewmodel
    foreach ($viewmodel as $key => $value) {
    ?>
        <!--Cette partie doit etre dans une boucle pour afficher les blocs-->
        <div class="card" style="width:260px">
          <img class="card-img-top" src="img_avatar1.png" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Designers/Artistes</h5>
            <h6 class="card-title">Nom/Prenom</h6>
            <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
            </div>
          </div>
        </div>
        <div class="card" style="width:260px">
          <img class="card-img-top" src="img_avatar1.png" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Programmeurs</h5>
            <h6 class="card-title">Nom/Prenom</h6>
          </div>
        </div>
        <div class="card" style="width:260px">
          <img class="card-img-top" src="img_avatar1.png" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Redacteurs/Traducteurs</h5>
            <h6 class="card-title">Nom/Prenom</h6>
          </div>
        </div>
        <div class="card" style="width:260px">
          <img class="card-img-top" src="img_avatar1.png" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Photographes</h5>
            <h6 class="card-title">Nom/Prenom</h6>
          </div>
        </div>
        <!--Fin de la boucle-->
        <?php
      }
    ?>
    </div>