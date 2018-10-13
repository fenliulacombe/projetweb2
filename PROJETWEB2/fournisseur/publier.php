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

    <title>Publier un projet</title>
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
            <a class="nav-link" href="../login/">Login</a>
          </li>
        </ul> 
    </div>
    </div>
    <!--Formulaire pour publier un projet/contrat--> 
    <h3>Publier un projet</h3>
    <div class="row">
        <div class="col">
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput1">Titre du projet *</label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Type du projet *</label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Secteur *</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Description *</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Lieu de réalisation *</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Budget indicatif *</label>
            <input type="number" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Date début * </label>
            <input type="date" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Date fin * </label>
            <input type="date" class="form-control" id="exampleFormControlInput1">
          </div>
          <button type="submit" class="btn btn-primary">Publier</button>
        </form>
        </div>
    </div>
</div>


</body>
</html>