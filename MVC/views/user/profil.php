
<div id="profil">
    <!--A PROPOS PIGISTE-->
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-sm-6">
                    <div class="detail-ese">
                        <h4><?=$userprofil['nom_entreprise_ut'];?></h4>
                        <h5><?=$userprofil['prenom_ut'] . ' ' . $userprofil['nom_ut'];?></h5>
                        <div></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="detail-ese">
                        <div class="ville"><i class="fas fa-map-marker-alt"></i><?='Adresse: ' . $userprofil['adresse_ut'] . ', ' . $userprofil['nom_ville'];?></div>
                        <div class="rate" title="Nombre de vote"><i class="fas fa-phone"></i><?='Téléphone: ' . $userprofil['telephone_ut'];?> </div>
                        <div class="taux"><i class="fas fa-briefcase"></i><?='NEQ: ' . $userprofil['neq_ut'];?></div>
                    </div>
                    <!-- modifier son profile -->
                    <div class="icon-update"><a href="#"><i class="fas fa-pen-square"></i></a></div>
                </div>
            </div>
            <div class="info-plus">
                <h5>A propos</h5>
                <div><?=$userprofil['apropos_ut'];?></div>
            <div class="info-plus">
            <div id="accordion" role="tablist">
                <div role="tab" id="headingOne">
                  <h5 class="mb-0">
                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      <i class="fas fa-chevron-circle-right"></i> Vos Contrat publiés
                    </a>
                  </h5>
                </div>

                  <!--LA BOUCLE COMMENCE PAR ICI-->
                  <?php $old_id_soumission = '';
foreach ($projects as $soumission): ?>
                    <?php if ($soumission['id_prj'] != $old_id_soumission): ?>
                    <?php if ($old_id_soumission != ''): ?>
                                    </tbody>
                                  </table> <!-- soumissionnaires -->
                                </div> <!-- id="collapseTwo" -->
                            </div> <!-- id="accordion2" -->
                        </td> <!-- colspan="2" -->
                      </tr>
                    </tbody>
                  </table> <!-- contrats -->
                  </div>
                  <?php endif;?>
                  <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                  <table class="table tab-index">
                    <tbody>
                      <tr style="border:none">
                        <th class="tab-titre" style="border:none"><a href="view/fournisseur/detail_contrats.php"><?=$soumission['titre_prj']?></a></th>
                        <th style="text-align:right">
                            <button type="submit" id="modifer_prj" class="btn-crud">
                                <a href="<?php echo ROOT_URL; ?>contract/update/"<?=$soumission['id_prj']?>>Modifier</a>
                            </button>
                            <button type="submit" id="supprimer_prj" class="btn-crud-delete">
                                <a href="<?php echo ROOT_URL; ?>contract/delete/"<?=$soumission['id_prj']?>>Supprimer</a>
                            </button>
                        </th>
                      </tr>
                      <tr>
                        <td>Soumissionnaires: <strong><?=!empty($soumission['comptage']) ? $soumission['comptage'] : 0;?></strong>
                          <br>
                          Budget de <strong><?=$soumission['budget_indicatif_prj'];?> $</strong></td>
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
                                <?php
// $soum = new SoumissionModel()
// $soumissions = $soum->getSoumissionsParProjet($soumission['id_prj']);
// foreach(){};
?>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTWO" data-parent="#accordion2">
                                  <table class="table tab-index">
                                    <tbody>
                                    <?php endif;?>
                                      <tr style="border:none">
                                        <th class="tab-titre" style="border:none"><a href="#"><?=$soumission['prenom_ut'] . ' ' . $soumission['nom_ut'];?></a></th>
                                          <td><?=$soumission['titre_profil_ut'];?></td>
                                          <td style="text-align:right">
                                              <button type="submit" id="detail" class="btn-crud" data-toggle="modal" data-target="#ModalDetail<?=$soumission['id_ut']?>">
                                                  <a href="javascript:void(0)">detail</a>
                                              </button>
                                              <button type="submit" id="choisir" class="btn-crud-add">
                                                  <a href="#">Choisir ce candidat</a>
                                              </button>
                                          </td>
                                      </tr>
                  <?php $old_id_soumission = $soumission['id_prj'];?>
                 <?php endforeach;?>
                                    </tbody>
                                  </table>
                                </div>
                            </div>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>

            </div>

            </div>
       
    </div>




<!-- ModalDetail Freelancer -->
<div class="container" id="pigiste">
<?php foreach ($projects as $soumission): ?>
  <?php if (!empty($soumission['id_soum'])): ?>
    <div class="modal fade" id="ModalDetail<?=$soumission['id_ut']?>" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header detail">
            <h4 class="modal-title" id="exampleModalLongTitle"><?=$soumission['prenom_ut'] . ' ' . $soumission['nom_ut'];?></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body detail-modal">

            <h5>A propos</h5>
            <div><?=$soumission['apropos_ut'];?></div>

            <div class="detail-modal">
                <h5>Compétences</h5>
                <ul>
                    <li><?=$soumission['competence_ut'];?></li>
                </ul>
            </div>

            <div class="detail-modal">
                <h5>Taux horaire</h5>
                <div><i class="fas fa-dollar-sign"></i><?=$soumission['taux_horaire_ut'];?>/h</div>
            </div>

            <div class="detail-modal">
                <h5>Années d'experience</h5>
                <div><i class="fas fa-graduation-cap"></i><?=$soumission['annee_experience_ut'];?> ans</div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
      </div>
      <?php endif;?>
      <?php endforeach;?>
</div>
</div>
</div>
