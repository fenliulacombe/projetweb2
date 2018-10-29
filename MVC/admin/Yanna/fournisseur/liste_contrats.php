<!doctype html>
<html lang="en">
<head>
    <?php include '../../view/includes/meta.php'; ?>
    <title>Liste des contrats/projets</title>
</head>

<body>  
    <!--Partie LOGO/MENU--> 
    <?php include '../../view/includes/header.php'; ?>
   
<!--========================================================
                            CONTAIN
=========================================================-->    

<div class="container" style="margin-top:50px;">   

<div class="row cont-titre-search">

<div class="col-xs-12 col-md-6 col-lg-6" style="margin:0">
	<h4>Contrats<p>Liste complète des fournisseurs</p></h4>
    
</div>
    <div class="col-xs-12 col-md-6 col-lg-6" style="margin:0">
         <div class="input-group search" style="margin:0">
              <input type="text" class="form-control input-banniere" placeholder="Rechercher un fournisseur..">
              <div class="input-group-btn" style="margin:0">
                  <button class="btn btn-turquoise" type="submit">Rechercher</button>
              </div>
         </div>
    </div>
</div>

    <!--Liste des projets / contrats-->
    <div class="row">
        <div class="col">
            <!--Boucle php-->
            <!--Cette partie doit etre dans une boucle pour afficher la liste-->
            <table class="table tab-index">
            <tbody>
              
              <tr style="border:none">
                <th class="tab-titre" style="border:none"><a href="detail_contrats.php">Programmation pour formulaire web</a></th>
                <th class="tab-date" style="border:none">Publié le 15 octobre 2018 à 12:34</th>
              </tr>
              <tr>
                <td>Soumissionnaires: <strong>12</strong>
                  <br>
                  Budget de <strong>XXXX $</strong> à <strong>XXXXX $</strong> </td>
                <td style="text-align:right">État du contrat : <span class="contrat-ouvert">OUVERT</span></td>
              </tr>
       
            </tbody>
            </table>
            <!--Fin de la boucle-->
   
            
            <!--Boucle php-->
            <!--Cette partie doit etre dans une boucle pour afficher la liste-->
            <table class="table tab-index">
            <tbody>
              
              <tr style="border:none">
                <th class="tab-titre" style="border:none"><a href="detail_contrats.php">Design Web pour le site de l'Université McGill</a></th>
                <th class="tab-date" style="border:none">Publié le 15 octobre 2018 à 16:34</th>
              </tr>
              <tr>
                <td>Soumissionnaires: <strong>12</strong>
                  <br>
                  Budget de <strong>XXXX $</strong> à <strong>XXXXX $</strong> </td>
                <td style="text-align:right">État du contrat : <span class="contrat-ferme">FERMÉ</span></td>
              </tr>
       
            </tbody>
            </table>
            <!--Fin de la boucle-->
            
                <nav>
                  <ul class="pagination justify-content-center pagination-sm"></ul>
                </nav>
            
        </div>
    </div>
    <!--========================================================
                                FOOTER
    =========================================================-->

     <?php include '../../view/includes/foot.php';?> 
     
</div><!--FIN DU CONTAINER-->  

</body>
</html>