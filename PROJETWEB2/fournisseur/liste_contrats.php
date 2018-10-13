<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <title>Liste des contrats/projets</title>
</head>
<body>  
<div class="container">
    <!--Partie LOGO/MENU--> 
    <div class="row">
    <div class="col-sm-6">
      <p><a href="index.php">logo</a></p>
    </div>
    <div class="col-sm-6">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../prestataire/liste_prestataires.php">Voir les pigistes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="liste_contrats.php">Voir les contrats</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">S'inscrire</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="../inscription/prestataire.php">En tant que prestataire</a>
              <a class="dropdown-item" href="../inscription/fournisseur.php">En tant que fournisseur</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login/index.php">Login</a>
          </li>
        </ul> 
    </div>
    </div>
    <!--Liste des projets / contrats-->
    <div class="row">
        <div class="col">
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
    </div>
</div>


</body>
</html>