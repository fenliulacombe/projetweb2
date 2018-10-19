
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
        <div class="card" style="width:260px">
          <img class="card-img-top" src="<?= ROOT_URL ?>assets/images/portait1.jpg" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Designers/Artistes</h5>
          </div>
        </div>
        <div class="card" style="width:260px">
          <img class="card-img-top" src="<?= ROOT_URL ?>assets/images/portait1.jpg" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Programmeurs</h5>
          </div>
        </div>
        <div class="card" style="width:260px">
          <img class="card-img-top" src="<?= ROOT_URL ?>assets/images/portait1.jpg" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Redacteurs/Traducteurs</h5>
          </div>
        </div>
        <div class="card" style="width:260px">
          <img class="card-img-top" src="<?= ROOT_URL ?>assets/images/portait1.jpg" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Photographes</h5>
          </div>
        </div>
        <!--Fin de la boucle-->
    </div>
    <!--Partie liste des contrats / publier un contrat-->
    <div class="row">
        <div class="col-sm-8">
            <h3>Liste des contrats (boucle PHP)</h3>
            <p>exemple de contenu</p>  
            <!--Cette partie doit etre dans une boucle pour afficher la liste-->
            <table class="table" style="border: 1px solid;">
            <tbody>
              <tr>
                <th>Titre du contrat (exemple: Programmation formulaire web)</th>
                <th>Date (ex: 09 Octobre 2018)</th>
              </tr>
              <tr>
                <td>Soumissionnaires: (ex: 12)
                  <br>
                  Budget de ...$ à ...$ </td>
                <td>OUVERT ou FERMÉ</td>
              </tr>
            </tbody>
            </table>
            <!--Fin de la boucle-->
        </div>
        <div class="col-sm-4">
            <a href="/echange/view/fournisseur/publier.php" class="btn btn-success">Publier un contrat</a>
        </div>
    </div>