<!doctype html>
<html lang="en">
<head>
    <?php include '../../view/includes/meta.php'; ?>
    <title>Liste des prestataires</title>
</head>
<body>
<!--Partie LOGO/MENU--> 
<?php include '../../view/includes/header.php'; ?>
<div class="container" id="pigiste">
    <!--RECHERCHE-->
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
    <!--Liste prestataires-->
    <h3>Membres en vedette PRO Plus</h3>
    <div class="row">
        <!--Cette partie doit etre dans une boucle pour afficher les blocs-->
        <div class="card">
          <a href="/echange/view/prestataire/detail_prestataire.php"><div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
          <div class="overlay"></div></div></a>
          <div class="card-body">
            <h5 class="card-title">Anna</h5>
            <h6 class="card-title">Secteur</h6>
            <p>Competences</p>
            <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Montréal</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 98% (1240) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>45/h</span></div>
            <!--<div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
            </div>-->
          </div>
        </div>
        <div class="card">
          <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
          <div class="overlay"></div></div>
          <div class="card-body">
            <h5 class="card-title">Soufiane Enn</h5>
            <h6 class="card-title">Programmeurs</h6>
            <p>Programmation Web, E-commerce</p>
            <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Laval</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 97% (965) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>30/h</span></div>
          </div>
        </div>
        <div class="card">
          <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
          <div class="overlay"></div></div>
          <div class="card-body">
            <h5 class="card-title">Fen Liu</h5>
            <h6 class="card-title">Redacteurs/Traducteurs</h6>
            <p>Rédaction, Traduction, Transcription de textes</p>
            <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Montréal</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 99% (1030) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>43/h</span></div>
          </div>
        </div>
        <div class="card">
          <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
          <div class="overlay"></div></div>
          <div class="card-body">
            <h5 class="card-title">Imane Rm</h5>
            <h6 class="card-title">Photographes</h6>
            <p>Photographie, Production vidéo, Réalisation</p>
            <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Quebec</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 95% (66) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>35/h</span></div>
          </div>
        </div>
        <!--Fin de la boucle-->
    </div>
    <div class="row" id="content-pigiste">
            <div class="col-sm-9" id="jar">
                <div class="card row mx-auto content">
                  <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
                  <div class="overlay"></div></div>
                  <div class="card-body">
                    <h5 class="card-title">Nom/prenom</h5>
                    <h6 class="card-title">Titre profession</h6>
                    <p>Secteurs d’activités</p>
                    <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Ville</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 66% (1030) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>15/h</span></div>
                  </div>
                </div>
                <div class="card row mx-auto content">
                  <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
                  <div class="overlay"></div></div>
                  <div class="card-body">
                    <h5 class="card-title">Nom/prenom</h5>
                    <h6 class="card-title">Titre profession</h6>
                    <p>Secteurs d’activités</p>
                    <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Ville</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 50% (1030) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>22/h</span></div>
                  </div>
                </div>
                <div class="card row mx-auto content">
                  <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
                  <div class="overlay"></div></div>
                  <div class="card-body">
                    <h5 class="card-title">Nom/prenom</h5>
                    <h6 class="card-title">Titre profession</h6>
                    <p>Secteurs d’activités</p>
                    <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Ville</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 74% (1030) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>18/h</span></div>
                  </div>
                </div>
                <div class="card row mx-auto content">
                  <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
                  <div class="overlay"></div></div>
                  <div class="card-body">
                    <h5 class="card-title">Nom/prenom</h5>
                    <h6 class="card-title">Titre profession</h6>
                    <p>Secteurs d’activités</p>
                    <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Ville</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 60% (1030) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>16/h</span></div>
                  </div>
                </div>
                <div class="card row mx-auto content">
                  <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
                  <div class="overlay"></div></div>
                  <div class="card-body">
                    <h5 class="card-title">Nom/prenom</h5>
                    <h6 class="card-title">Titre profession</h6>
                    <p>Secteurs d’activités</p>
                    <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Ville</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 40% (1030) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>14/h</span></div>
                  </div>
                </div>
                <div class="card row mx-auto content">
                  <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
                  <div class="overlay"></div></div>
                  <div class="card-body">
                    <h5 class="card-title">Nom/prenom</h5>
                    <h6 class="card-title">Titre profession</h6>
                    <p>Secteurs d’activités</p>
                    <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Ville</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 68% (1030) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>30/h</span></div>
                  </div>
                </div>
                <div class="card row mx-auto content">
                  <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
                  <div class="overlay"></div></div>
                  <div class="card-body">
                    <h5 class="card-title">Nom/prenom</h5>
                    <h6 class="card-title">Titre profession</h6>
                    <p>Secteurs d’activités</p>
                    <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Ville</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 74% (1030) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>35/h</span></div>
                  </div>
                </div>
                <div class="card row mx-auto content">
                  <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
                  <div class="overlay"></div></div>
                  <div class="card-body">
                    <h5 class="card-title">Nom/prenom</h5>
                    <h6 class="card-title">Titre profession</h6>
                    <p>Secteurs d’activités</p>
                    <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Ville</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 60% (1030) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>21/h</span></div>
                  </div>
                </div>
                <div class="card row mx-auto content">
                  <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
                  <div class="overlay"></div></div>
                  <div class="card-body">
                    <h5 class="card-title">Nom/prenom</h5>
                    <h6 class="card-title">Titre profession</h6>
                    <p>Secteurs d’activités</p>
                    <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Ville</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 66% (1030) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>19/h</span></div>
                  </div>
                </div>
                <div class="card row mx-auto content">
                  <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
                  <div class="overlay"></div></div>
                  <div class="card-body">
                    <h5 class="card-title">Nom/prenom</h5>
                    <h6 class="card-title">Titre profession</h6>
                    <p>Secteurs d’activités</p>
                    <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Ville</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 50% (1030) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>16/h</span></div>
                  </div>
                </div>
                <div class="card row mx-auto content">
                  <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
                  <div class="overlay"></div></div>
                  <div class="card-body">
                    <h5 class="card-title">Nom/prenom</h5>
                    <h6 class="card-title">Titre profession</h6>
                    <p>Secteurs d’activités</p>
                    <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Ville</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 74% (1030) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>33/h</span></div>
                  </div>
                </div>
                <div class="card row mx-auto content">
                  <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
                  <div class="overlay"></div></div>
                  <div class="card-body">
                    <h5 class="card-title">Nom/prenom</h5>
                    <h6 class="card-title">Titre profession</h6>
                    <p>Secteurs d’activités</p>
                    <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Ville</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 60% (1030) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>40/h</span></div>
                  </div>
                </div>
                <div class="card row mx-auto content">
                  <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
                  <div class="overlay"></div></div>
                  <div class="card-body">
                    <h5 class="card-title">Nom/prenom</h5>
                    <h6 class="card-title">Titre profession</h6>
                    <p>Secteurs d’activités</p>
                    <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Ville</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 66% (1030) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>15/h</span></div>
                  </div>
                </div>
                <div class="card row mx-auto content">
                  <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
                  <div class="overlay"></div></div>
                  <div class="card-body">
                    <h5 class="card-title">Nom/prenom</h5>
                    <h6 class="card-title">Titre profession</h6>
                    <p>Secteurs d’activités</p>
                    <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Ville</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 50% (1030) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>22/h</span></div>
                  </div>
                </div>
                <div class="card row mx-auto content">
                  <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
                  <div class="overlay"></div></div>
                  <div class="card-body">
                    <h5 class="card-title">Nom/prenom</h5>
                    <h6 class="card-title">Titre profession</h6>
                    <p>Secteurs d’activités</p>
                    <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Ville</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 74% (1030) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>18/h</span></div>
                  </div>
                </div>
                <div class="card row mx-auto content">
                  <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image">
                  <div class="overlay"></div></div>
                  <div class="card-body">
                    <h5 class="card-title">Nom/prenom</h5>
                    <h6 class="card-title">Titre profession</h6>
                    <p>Secteurs d’activités</p>
                    <div><span class="ville"><i class="fas fa-map-marker-alt"></i> Ville</span><span class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 60% (1030) </span><br><span class="taux"><i class="fas fa-dollar-sign"></i>16/h</span></div>
                  </div>
                </div>
                <nav>
                  <ul class="pagination justify-content-center pagination-sm">
                  </ul>
                </nav>
            </div>
            <div class="col-sm-3">
                <div class="filtrer">
                    <h4>Filtrer par :</h4>
                    <form>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Ville</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Taux horaire</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>20$-29$</option>
                          <option>30$-39$</option>
                          <option>40$-49$</option>
                          <option>+50$</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Secteurs d’activités</label>
                        <select class="multipleChosen form-control" multiple="true" data-placeholder="Cliquez pour sélectionner une option..." id="exampleFormControlSelect1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Filtrer</button>
                    </form>
                </div>
            </div>
    </div>
    <!--Partie FOOTER--> 
    <?php include '../../view/includes/foot.php'; ?>
</div>
</body>
</html>
