<!doctype html>
<html>
<head>
<?php include 'views/meta.php'; ?> 
</head>
<body>
    <!--Partie LOGO/MENU--> 
    <main role="main" class="container">
      <?php Messages::display(); ?>
      <?php require($view); ?>
    </main><!-- /.container -->
    
</body>
</html>