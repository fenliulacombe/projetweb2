<!doctype html>
<html lang="en">
<head>
    <?php include '../../view/includes/meta.php'; ?>
    <title>Contact</title>
</head>

<body>  
    <!--Partie LOGO/MENU--> 
    <?php include '../../view/includes/header.php'; ?>
   
<!--========================================================
                            CONTAIN
=========================================================-->    

<div class="container">
    
    <!--Formulaire de contact--> 
    <br><br><br>
    <h3>Nous contacter</h3>
    <div class="row">
        <div class="col">
                     
        <form action="mail.php" method="POST">
        
          <div class="form-group">
            <label for="exampleFormControlInput1">Nom</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
          </div>
          
          <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="text" name="email" class="form-control" id="exampleFormControlInput1">
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <button type="submit" value="Send" class="btn btn-turquoise">Envoyer</button>
        </form>
 
        </div>
                
    </div>
    
    
    <!--========================================================
                                FOOTER
    =========================================================-->

     <?php include '../../view/includes/foot.php';?> 
     
</div><!--FIN DU CONTAINER-->  

</body>
</html>