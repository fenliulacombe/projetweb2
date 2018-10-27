
<div id="profil">
    <!--A PROPOS PIGISTE-->
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-sm-6">
                    <div class="detail-ese">
                        <h4><?= $userprofil['nom_entreprise_ut']; ?></h4>
                        <h5><?= $userprofil['prenom_ut'].' '.$userprofil['nom_ut']; ?></h5>
                        <div></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="detail-ese">
                        <div class="ville"><i class="fas fa-map-marker-alt"></i><?= 'Adresse: '. $userprofil['adresse_ut'].', '.$userprofil['nom_ville']; ?></div>
                        <div class="rate" title="Nombre de vote"><i class="fas fa-phone"></i><?= 'Téléphone: '.$userprofil['telephone_ut']; ?> </div>
                        <div class="taux"><i class="fas fa-briefcase"></i><?= 'NEQ: '.$userprofil['neq_ut']; ?></div>
                    </div>
                    <!-- modifier son profile -->
                    <div class="icon-update"><a href="#"><i class="fas fa-pen-square"></i></a></div>
                </div>
            </div>
            <div class="info-plus">
                <h5>A propos</h5>
                <div><?= $userprofil['apropos_ut']; ?></div>
            <div class="info-plus">
            <div id="accordion" role="tablist">
                <div role="tab" id="headingOne">
                  <h5 class="mb-0">
                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      <i class="fas fa-chevron-circle-right"></i> Vos Contrat publiés
                    </a>
                  </h5>
                </div>
                
                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                  <!--LA BOUCLE COMMENCE PAR ICI-->
                  <?php foreach($projects as $project): ?>
                  <table class="table tab-index">
                    <tbody>
                      <tr style="border:none"> 
                        <th class="tab-titre" style="border:none"><a href="view/fournisseur/detail_contrats.php">Programmation pour formulaire web</a></th>
                        <th style="text-align:right">
                            <button type="submit" id="modifer_prj" class="btn-crud">
                                <a href="<?php echo ROOT_URL; ?>contract/update/"<?= $projets['id_prj'] ?>>Modifier</a>
                            </button>
                            <button type="submit" id="supprimer_prj" class="btn-crud-delete">
                                <a href="<?php echo ROOT_URL; ?>contract/delete/"<?= $projets['id_prj'] ?>>Supprimer</a>
                            </button>
                        </th>
                          
                      </tr>
                      <tr>
                        <td>Soumissionnaires: <strong><?= $projets['nb_pigistes']; ?></strong>
                          <br>
                          Budget de <strong><?= $projets['budget_indicatif_prj']; ?> $</strong></td>
                        <td style="text-align:right">État du contrat : <span class="contrat-ouvert">OUVERT</span></td>
                      </tr>
                      <tr>
                        <td colspan="2">
                            <div id="accordion2" role="tablist">
                                <div role="tab" id="headingOne">
                                  <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      <i class="fas fa-chevron-circle-right"></i> Les soumissionnaires
                                    </a>
                                  </h5>
                                </div>
                                
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTWO" data-parent="#accordion2">
                                  <!--LA BOUCLE COMMENCE PAR ICI (bouclez les tables)-->
                                  <?php foreach($pigistes as $pigiste): ?>
                                  <table class="table tab-index">
                                    <tbody>
                                      <tr style="border:none">
                                        <th class="tab-titre" style="border:none"><a href="#"><?= $pigiste['prenom_ut'].' '.$pigiste['nom_ut']; ?></a></th>
                                          <td><?= $pigiste['titre_profil_ut']; ?></td>
                                          <td style="text-align:right">
                                              <button type="submit" id="detail" class="btn-crud" data-toggle="modal" data-target="#ModalDetail">
                                                  <a href="<?php echo ROOT_URL; ?>user/profil/"<?=$pigiste['id_ut'] ?>>detail</a>
                                              </button>
                                              <button type="submit" id="choisir" class="btn-crud-add">
                                                  <a href="#">Choisir ce candidat</a>
                                              </button>
                                          </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                
                                  <!--LA BOUCLE SE TERMINE ICI-->
                                    <?php endforeach; ?>
                                </div>
                                
                            </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <!--LA BOUCLE SE TERMINE ICI-->
                 <?php endforeach; ?>
                </div>
                
            </div>
            
            </div>
        </div>
    </div>  

    
</div>
   
