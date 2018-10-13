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

    <title>Liste des prestataires</title>
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
            <a class="nav-link" href="liste_prestataires.php">Voir les pigistes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../fournisseur/liste_contrats.php">Voir les contrats</a>
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
    <!--Liste prestataires-->
    <h3>Liste des prestataires / pigistes</h3>
    <p>exemple de contenu</p> 
    <div class="row">
        <!--Cette partie doit etre dans une boucle pour afficher les blocs-->
        <div class="card" style="width:260px">
          <img class="card-img-top" src="img_avatar1.png" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Designers/Artistes</h5>
            <h6 class="card-title">Nom/Prenom</h6>
            <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
            </div>
          </div>
        </div>
        <div class="card" style="width:260px">
          <img class="card-img-top" src="img_avatar1.png" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Programmeurs</h5>
            <h6 class="card-title">Nom/Prenom</h6>
          </div>
        </div>
        <div class="card" style="width:260px">
          <img class="card-img-top" src="img_avatar1.png" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Redacteurs/Traducteurs</h5>
            <h6 class="card-title">Nom/Prenom</h6>
          </div>
        </div>
        <div class="card" style="width:260px">
          <img class="card-img-top" src="img_avatar1.png" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Photographes</h5>
            <h6 class="card-title">Nom/Prenom</h6>
          </div>
        </div>
        <!--Fin de la boucle-->
    </div>
</div>


</body>
</html>