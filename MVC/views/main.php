<!doctype html>
<html lang="en">
<head>
    <?php include 'views/meta.php'; ?>
    <title>Projet Web 2</title>
</head>
<body>
    
    <!--Partie LOGO/MENU--> 
    <?php include 'views/header.php'; ?>

    <main role="main" class="container">
      <?php require($view); ?>
      <?php include 'views/footer.php';?> 
    </main><!-- /.container -->
    

</body>
</html>