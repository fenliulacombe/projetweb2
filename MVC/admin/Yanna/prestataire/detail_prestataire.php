<!doctype html>
<html lang="en">
<head>
    <?php include '../../view/includes/meta.php'; ?>
    <title>Profil</title>
</head>
<body>
<!--Partie LOGO/MENU--> 
<?php include '../../view/includes/header.php'; ?>
<div class="container" id="detail">
    <!--A PROPOS PIGISTE-->
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
              <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image"></div>
              <div class="card-body">
                <div><i class="fas fa-tags"></i> Conception graphique, Design Web</div>
                <div class="ville"><i class="fas fa-map-marker-alt"></i> Montréal</div>
                <div class="rate" title="Nombre de vote"><i class="fas fa-star"></i> 98% (1240) </div>
                <div class="rate" title="Nombre de vote"><i class="far fa-calendar-check"></i> Télétravail </div>
                <div class="taux"><i class="fas fa-dollar-sign"></i> 45/h</div>
              </div>
            </div>
            <div id="vote-msg">
            <div class="card">
                <h5>Feedback</h5>
                <form>
                  <div class="row">
                    <div class="col-sm-4"><label for="exampleFormControlSelect1">Note :</label></div>
                    <div class="col-sm-8">
                    <div class="starrating risingstar d-flex  flex-row-reverse">
                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="mr-sm-2">Commentaire :</label>
                    <textarea class="form-control" id="comment"></textarea>
                  </div>
                  <button type="submit" class="btn btn-warning">Envoyer</button>
                </form>
            </div>
            <div class="card">
            <h5>Contacter Anna</h5>
                <form>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Sujet</label>
                    <input type="text" class="form-control" id="sujet">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Message</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                  </div>
                  <div class="form-group">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Je ne suis pas un robot
                    </label>
                  </div>
                  <button type="submit" class="btn btn-warning">Envoyer</button>
                </form>
            </div>
        </div>
        </div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-9">
                    <div class="detail">
                        <h4>Anna</h4>
                        <h5>Designers/Artistes</h5>
                        <div class="dispo"><i class="fas fa-circle"></i> Disponible</div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="best-rate">Top Vote<i class="fas fa-star"></i></div>
                </div>
            </div>
            <div class="detail">
                <h5>A propos</h5>
                <div>Depuis 2010, je travaille en tant que web designer et graphiste indépendant pour certaines entreprises. Pendant ce temps, j'ai acquis beaucoup de connaissances et d'expériences sur les graphiques, l'interface utilisateur / UX, la conception de logo et la stratégie de marque.<br> Je suis spécialiste de l'interface utilisateur de l'application Web et mobile, et de l'identité de la marque.<br> Certains clients et amis ont déclaré: «Mon design est caractéristique car je travaille toujours avec originalité et sans plagiat.</div>
            </div>
            <div class="detail">
                <h5>Compétences</h5>
                <ul>
                    <li>Photoshop</li>
                    <li>Ullustrator</li>
                    <li>PSD2HTML</li>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Responsive Web Design</li>
                </ul>
            </div>
            <div class="detail">
                <h5>Projets terminés</h5>
                <div><i class="fas fa-check"></i> 365</div>
            </div>
            <div id="evaluations">
            <h5>Evaluations</h5>
            <table class="table">
            <tbody>
              <tr>
                <th><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></th>
                <th style="text-align:right;">09 Janvier 2018</th>
              </tr>
              <tr>
                <td colspan="2"><p>"Le design était simple et symbolique. Il capturait l'image d'une femme sans s'appuyer sur des cheveux longs stéréotypés et des accessoires girly. Anna m'a donné beaucoup de variations, y compris en noir et blanc."</p></td>
                
              </tr>
              <tr><td colspan="2" class="name">Emilie</td></tr>
            </tbody>
            <tbody>
              <tr>
                <th><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></th>
                <th style="text-align:right;">09 Octobre 2018</th>
              </tr>
              <tr>
                <td colspan="2"><p>"Excellent to work with, submitting several different but interesting designs that looked clean, crisp, and professional." </p></td>
                
              </tr>
              <tr><td colspan="2" class="name">Bob</td></tr>
            </tbody>
            </table>
        </div>
        </div>
    </div>
    <!--Partie FOOTER--> 
    <?php include '../../view/includes/foot.php'; ?>
</div>
</body>
</html>
