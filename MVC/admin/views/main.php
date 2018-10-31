<!doctype html>
<html>
<head>
<?php include 'views/meta.php'; ?> 
<?php include 'views/nav.php'; ?> 
</head>
<body>
    <!--Partie LOGO/MENU--> 
    <main role="main">
      <?php Messages::display(); ?>
      <?php require($view); ?>
    </main><!-- /.container -->
    
</body>
</html>