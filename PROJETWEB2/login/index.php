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

    <title>Page connexion</title>
</head>
<body>  
<div class="container">
    <!--Partie LOGO/MENU--> 
    <div class="row">
    <div class="col-sm-6">
      <p><a href="../index.php">logo</a></p>
    </div>
    <div class="col-sm-6">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../prestataire/liste_prestataires.php">Voir les pigistes</a>
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
          <!--<li class="nav-item">
            <a class="nav-link" href="index.php">Login</a>
          </li>-->
        </ul> 
    </div>
    </div>
    <!--Partie prestataires-->
    <h3>Connexion</h3> 
    <!--Formulaire connexion-->
    <div class="row">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Courriel ou nom d'utilisateur</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Se souvenir de moi </label>
          </div>
          <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
    </div>
</div>


</body>
</html>