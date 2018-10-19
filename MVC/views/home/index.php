
<!--========================================================
                            CONTAIN
=========================================================-->

    <section>
        <div class="banniere">
         <h1>Collaborer avec des pigistes</h1>
         <div>Échanger vos contrats avec des milliers de pigistes compétants </div>
            
             <form class="form-banniere">
                  <div class="input-group">
                     <input type="text" class="form-control input-banniere" placeholder="Quelle sorte de service voulez-vous?">
                     <div class="input-group-btn">
                       <button class="btn btn-turquoise" type="submit">Débuter</button>
                     </div>
                   </div>
             </form> 
        </div>
<!--      <div class="row">
          <div class="col-xs-1 col-md-3 col-lg-3 box-categorie">Content for New Div Tag Goes Here</div>
          <div class="col-xs-1 col-md-3 col-lg-3 box-categorie">Content for New Div Tag Goes Here</div>
          <div class="col-xs-1 col-md-3 col-lg-3 box-categorie">Content for New Div Tag Goes Here</div>
          <div class="col-xs-1 col-md-3 col-lg-3 box-categorie">Content for New Div Tag Goes Here</div>
      </div>-->
    </section>
    <!--Partie prestataires-->
    <h3>Carroussel des prestataires / categorie</h3>
    <p>exemple de contenu</p> 
    <div class="row">
        <!--Cette partie doit etre dans une boucle pour afficher les blocs-->
        <?php foreach ($sectors as $sector){ ?>
        <div class="card " style="width:260px">
          <a href="#"><img class="card-img-top" src="<?= ROOT_URL ?>assets/images/secteur<?= rand(1,3); ?>.jpg" alt="Card image">
          <div class="card-body"></a>
            <h5 class="card-title"><?= $sector['nom_secteur'] ?></h5>
          </div>
          
        </div>
        <?php } ?>
        <!--Fin de la boucle-->
    </div>

    <!--Partie liste des contrats / publier un contrat-->
    <div class="row" style="margin:0">
        <!--Liste des projets / contrats-->
      <div class="col">
        <!--Boucle php-->
        <!--Cette partie doit etre dans une boucle pour afficher la liste-->
        <?php foreach ($contracts as $value) { ?>
        <table class="table tab-index">
          <tbody>     
            <tr style="border:none">
                <th class="tab-titre" style="border:none"><?php echo $value['titre_prj'] ?></th>
                <th class="tab-date" style="border:none">De <?php echo $value['date_debut_prj'] ?> jusqu'à <?php echo $value['date_fin_prj'] ?></th>
            </tr>
            <tr>
                <td>Nombre de soumissionnaires pour ce projet: <strong><?php echo $value['nombre_soum'] ?></strong>
                <br>
                Budget de <strong><?php echo $value['titre_prj'] ?></strong></td>
                <?php if ($value['etat_soum'] == 0) { ?>
                <td style="text-align:right">État du contrat : <span class="contrat-ouvert">OUVERT</span></td>
                <?php } elseif ($value['etat_soum'] == 1) { ?>
                <td style="text-align:right">État du contrat : <span class="contrat-ferme">Fermé</span></td>
                <?php } ?> 
            </tr>
          </tbody>
        </table> 
        <?php } ?>
        <!--Fin de la boucle-->  
    </div>

        <div class="col-sm-4">
            <a href="<?= ROOT_URL ?>contract/add" class="btn btn-success">Publier un contrat</a>
        </div>
</div>