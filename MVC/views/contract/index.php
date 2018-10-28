<head>
    <title>Liste des contrats/projets</title>
</head>
<body>
<div class="container" style="margin-top:50px;">

<div class="row cont-titre-search">
    <div class="col-xs-12 col-md-6 col-lg-6" style="margin:0">
        <h4>Contrats<p>Liste complète des contrats</p></h4>
        
    </div>
    <div class="col-xs-12 col-md-6 col-lg-6" style="margin:0">
         <div class="input-group search" style="margin:0">
              <input type="text" class="form-control input-banniere" placeholder="Rechercher un contrat...">
              <div class="input-group-btn" style="margin:0">
                  <button class="btn btn-turquoise" type="submit">Rechercher</button>
              </div>
         </div>
    </div>
</div>

<!--Liste des projets / contrats-->
<div class="row">
<div class="col-sm-9" id="jar">
        <!--Boucle php-->
        <!--Cette partie doit etre dans une boucle pour afficher la liste-->
        <?php foreach ($viewmodel as $value) { ?>
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
            <?php if ($value['etat_soumis'] == 0) { ?>
            <td style="text-align:right">État du contrat : <span class="contrat-ouvert">OUVERT</span></td>
            <?php } elseif ($value['etat_soumis'] == 1) { ?>
            <td style="text-align:right">État du contrat : <span class="contrat-ferme">FERME</span></td>
            <?php } ?> 
        </tr>
        
        </tbody>
        </table>
        
        <?php } ?>
        <!--Fin de la boucle-->
        
        <nav>
        <ul class="pagination justify-content-center pagination-sm"></ul>
        </nav>
        
    </div>
    <div class="col-sm-3" id="contrats">
        <div class="filtrer">
            <h4>Filtrer par :</h4>
            <form>
              <div class="form-group">
                <label for="exampleFormControlSelect1">date</label>
                <input type="date" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Budget</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Choisissez un budget</option>
                  <?php foreach ($viewmodel as $value) { ?>
                  <option><?php echo $value['budget_indicatif_prj'] ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">État</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>État du contrat</option>
                  <option>Ouvert</option>
                  <option>Fermé</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Filtrer</button>
            </form>
        </div>
    </div>
</div>
    
</div>
</body>