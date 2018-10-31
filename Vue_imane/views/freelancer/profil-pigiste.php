<!doctype html>
<html lang="en">
<head>
    <?php include '../../view/includes/meta.php'; ?>
    <title>Profil</title>
</head>
<body>
<!--Partie LOGO/MENU--> 
<?php include '../../view/includes/header.php'; ?>
<div class="bandeau"></div>
<div class="container" id="profil">
    <!--A PROPOS PIGISTE-->
    <div class="row">
        <div class="col-sm-3">
            <div class="pic-profil .card">
              <div class="image"><img class="card-img-top" src="/echange/view/images/profil.jpg" alt="Card image"><div class="icon-update"><a href="#"><i class="fas fa-pen-square"></i></a></div></div>
              
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-9">
                    <div class="detail">
                        <h4>Anna</h4>
                        <h5>Designers/Artistes</h5>
                        <div>Conception graphique, Design Web</div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="detail-infos">
                        <div class="ville"><i class="fas fa-map-marker-alt"></i> Montréal</div>
                        <div class="rate" title="Nombre de vote"><i class="far fa-calendar-check"></i> Télétravail </div>
                        <div class="taux"><i class="fas fa-dollar-sign"></i> 45/h</div>
                    </div>
                    <div class="icon-update"><a href="#"><i class="fas fa-pen-square"></i></a></div>
                </div>
            </div>
            <div class="info-plus">
                <h5>A propos</h5>
                <div>Depuis 2010, je travaille en tant que web designer et graphiste indépendant pour certaines entreprises. Pendant ce temps, j'ai acquis beaucoup de connaissances et d'expériences sur les graphiques, l'interface utilisateur / UX, la conception de logo et la stratégie de marque.<br> Je suis spécialiste de l'interface utilisateur de l'application Web et mobile, et de l'identité de la marque.<br> Certains clients et amis ont déclaré: «Mon design est caractéristique car je travaille toujours avec originalité et sans plagiat.</div>
            </div>
            <div class="info-plus">
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

            <div id="accordion" role="tablist">
                <div role="tab" id="headingOne">
                  <h5 class="mb-0">
                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      <i class="fas fa-chevron-circle-right"></i> Vos Contrat soumissionnés
                    </a>
                  </h5>
                </div>
                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                  <table class="table tab-index">
                    <tbody>
                      <tr style="border:none">
                        <th class="tab-titre" style="border:none"><a href="view/fournisseur/detail_contrats.php">Programmation pour formulaire web</a></th>
                        <th style="text-align:right"><span class="btn-etat">En attente de validation</span></th>
                      </tr>
                      <tr>
                        <td>Soumissionnaires: <strong>12</strong>
                          <br>
                          Budget de <strong>XXXX $</strong> à <strong>XXXXX $</strong> </td>
                        <td style="text-align:right">État du contrat : <span class="contrat-ouvert">OUVERT</span></td>
                      </tr>
                    </tbody>
                    </table>
                    <table class="table tab-index">
                    <tbody>
                      <tr style="border:none">
                        <th class="tab-titre" style="border:none"><a href="view/fournisseur/detail_contrats.php">Programmation pour formulaire web</a></th>
                        <th style="text-align:right"><span class="btn-etat">Validé</span></th>
                      </tr>
                      <tr>
                        <td>Soumissionnaires: <strong>12</strong>
                          <br>
                          Budget de <strong>XXXX $</strong> à <strong>XXXXX $</strong> </td>
                        <td style="text-align:right">État du contrat : <span class="contrat-ouvert">OUVERT</span></td>
                      </tr>
                    </tbody>
                    </table>
                </div>
            </div>
            <div id="accordion" role="tablist">
                <div role="tab" id="headingOne">
                  <h5 class="mb-0">
                    <a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
                      <i class="fas fa-chevron-circle-right"></i> Evaluations <i class="fas fa-star"></i> 98%
                    </a>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
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
    </div>
    <!--Partie FOOTER--> 
    <?php include '../../view/includes/foot.php'; ?>
</div>
</body>
</html>
