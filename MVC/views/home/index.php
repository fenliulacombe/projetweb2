<head>
    <title>Echange | Collaborer avec des pigistes</title>
</head>

<!--========================================================
                            CONTAIN
=========================================================-->
<body>
<div class="container">
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
    <!--Partie prestataires--> 



    <div id="mixedSlider">
        <div class="MS-content">
        <!--<div class="row cont-carroussel">-->

            <!--Cette partie doit etre dans une boucle pour afficher les blocs-->
            <?php foreach ($sectors as $sector){ ?>
            <div class="item row cont-carroussel">
            <div class="card card-index">
              <img class="card-img-top card-img-top-index" src="<?= ROOT_URL ?>assets/images/secteur<?= rand(1,3); ?>.jpg" alt="Card image">
              <div class="card-body card-body-index">
                <h6 class="card-title card-title-index"><?= $sector['nom_secteur'] ?></h6>
              </div>
            </div>
            </div>
            <?php } ?>
            <!--Fin de la boucle-->

        <!--</div>-->
        </div>
        <div class="MS-controls">
            <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
            <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
        </div>
    </div>

        


    <!--Partie liste des contrats / publier un contrat-->
    <div class="row">
        <!--Liste des projets / contrats-->
      <div class="col-xs-12 col-sm-9">
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
                Budget de: <strong><?php echo $value['budget_indicatif_prj'] ?> $CAN</strong></td>
                <?php if ($value['etat_soum'] == 0) { ?>
                <td style="text-align:right">État du contrat : <span class="contrat-ouvert">OUVERT</span></td>
                <?php } elseif ($value['etat_soum'] == 1) { ?>
                <td style="text-align:right">État du contrat : <span class="contrat-ferme">FERME</span></td>
                <?php } ?> 
            </tr>
          </tbody>
        </table> 
        <?php } ?>
        <!--Fin de la boucle-->  
    </div>
        <aside class="col-xs-12 col-sm-3" style="margin:0">
            <button id="btn_publier" class="btn btn-gros-jaune" onclick="publier()"><strong>PUBLIER UN CONTRAT</strong></button>   
                
            <a href="#"><img src="<?= ROOT_URL ?>assets/images/aside-pub.jpg" class="aside-pub" width="260"alt=""/></a>
        </aside>
    </div>
</div><!--FIN DU CONTAINER-->
<!--CAROUSSEL-->
<!--SOURCE: https://www.jqueryscript.net/slider/Responsive-Multi-slide-Carousel-Plugin-jQuery-Multislider.html-->
<script>
$('#mixedSlider').multislider({
    duration: 750,
    interval: 3000
});

/*function qui vérifie si la session id est présent pour savoir si la page retourne vers la publication*/
function publier(){

    var userDatas = '<?= isset($_SESSION['is_logged_in']) ? JSON.encode($_SESSION['user_data']) : ''; ?>';
    if (isConnected !== '')
    {
        location.href = '<?= ROOT_URL ?>contract/add';
    }
    else{
        alert("Veuillez vous connecter en tant que fournisseur pour publier un contrat.");
    }
}
</script>
</body>