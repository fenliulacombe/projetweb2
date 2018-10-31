<head>
    <title>Profil</title>
</head>
<body>
<div class="bandeau"></div>
<div class="container" id="detail">
    <!--A PROPOS PIGISTE-->
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <div class="image"><img class="card-img-top" src="<?= ROOT_URL ?>assets/images/portrait<?= rand(4,23); ?>.jpg" alt="Card image">
          </div>
          <div class="card-body">
            <div><i class="fas fa-tags"></i><?= '&nbsp'.$freelancer['titre_profil_ut'] ?>
            </div>
            <div class="ville"><i class="fas fa-map-marker-alt"></i><?= '&nbsp'.$freelancer['nom_ville'] ?></div>
              <div class="rate" title="Nombre de vote"><i class="far fa-calendar-check"></i><?= '&nbsp'.$freelancer['disponibilite_ut'] ?></div>
                <div class="taux"><i class="fas fa-dollar-sign"></i><?= '&nbsp'.$freelancer['taux_horaire_ut'] ?>/h</div>
              </div>
            </div>
            <div id="vote-msg">
              <div class="card">
                <h5>Feedback</h5>
                <form>
                  <div class="row">
                    <div class="col-sm-4"><label for="notes_evaluation">Note : </label></div>
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
                      <textarea class="form-control" name="commentaire_eval" id="comment"></textarea>
                    </div>
                    <button type="submit" name="submit_commentaire" class="btn btn-primary">Envoyer</button>
                </form>
              </div>
              <div class="card">
              <h5>Contacter <?= $freelancer['prenom_ut'] ?></h5>
              <form>
                <input type="hidden" name="id_msg" class="form-control" id="id_msg">
                <div class="form-group">
                  <label for="sujet">Titre</label>
                  <input type="text" name="titre_msg" class="form-control" id="titre_msg">
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" name="message_msg" rows="5" id="comment"></textarea>
                </div>
                <div class="form-group">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Je ne suis pas un robot
                  </label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
              </form>
            </div>
          </div> 
        </div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-9">
                    <div class="detail">
                        <h4><?= $freelancer['prenom_ut'] ?> <?= $freelancer['nom_ut'] ?></h4>
                        <h5><?= $freelancer['nom_ville'] ?></h5>
                        <?php if(isset($_SESSION['user_data']['id'])): ?>
                        <div class="dispo"><i class="fas fa-circle"></i> Disponible</div>
                        <?php else: ?>
                        <div class="dispo"><i class="fas fa-circle" style="color:red"></i> Indisponible</div>
                        <?php endif ?>
                    </div><br>
                </div>
                <div class="col-sm-3">
                    <div class="best-rate">Top Vote<i class="fas fa-star"></i></div>
                </div><br>
            </div>
            <div class="detail">
                <h5>A propos</h5>
                <div><?= $freelancer['apropos_ut'] ?></div><br>
            </div>
            <div class="detail">
                <h5>Compétences</h5>
                <ul>
                <?php $competences = preg_split("/[,]+/", $freelancer['competence_ut']);
                  foreach($competences as $competence):
                ?>
                    <li><?= $competence ?></li>
                  <?php endforeach ?>
                </ul>
            </div>
            <div class="detail">
                <h5>Nombre de projets soummissionés</h5>
                <div><i class="fas fa-check"></i> x Projets</div>
            </div><br>
            <div class="detail">
                <h5>Années d'experience</h5>
                <div><i class="fas fa-graduation-cap"></i> <?= $freelancer['annee_experience_ut'] ?> ans</div>
            </div>
            <div id="evaluations">
              <h5>Evaluations <i class="fas fa-star"></i> <?= $freelancer['moyenne'] ?></h5>
              <table class="table">
                
                <?php foreach($evaluateur as $single):  ?>
                <tbody>
                <tr><th>
                    <?php for($i=1;$i<=$single['note_eval'];$i++): ?>
                    <i class="fas fa-star"></i>
                    <?php endfor; ?></th>
                    <th style="text-align:right;"><?= $single['date_eval'] ?></th>
                  
                  <tr>
                    <td colspan="2"><p><?= $single['commentaire_eval'] ?></p></td>
                  </tr>
                  <tr><td colspan="2" class="name"><?= $single['nom_ut'] ?></td></tr>
                </tbody>
                <?php endforeach;  ?>
              </table>
            </div>
        </div>
    </div>
</div>   

</body>