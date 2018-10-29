<!doctype html>
<html lang="en">
<head>
    <?php include '../../view/includes/meta.php'; ?>
    <title>Page connexion</title>
</head>
<body>  
<div class="container">
    <!--Partie LOGO/MENU--> 
    <?php include '../../view/includes/header.php'; ?>
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