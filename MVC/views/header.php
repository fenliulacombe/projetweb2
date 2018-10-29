<header class="container-fluid cont-top">
  <div class="container" style="border:0;">
    <div class="row">
      <div class="col-xs-1 col-md-3 col-lg-3"><!--LOGO-->
        <a href="<?= ROOT_URL ?>"><img src="<?= ROOT_URL ?>assets/images/logo.svg" alt="logo" width="180px"/></a>
      </div>
      
      <div class="col-xs-1 col-md-9 col-lg-9">
        <ul class="nav"><!--MENU-->
            <li class="li-m"><a href="<?= ROOT_URL ?>freelancer">Voir les pigistes</a></li>
            <li class="li-m"><a href="<?= ROOT_URL ?>contract">Voir les contrats</a></li>

            <?php if (isset($_SESSION['is_logged_in'])) : ?>
            <!-- <li class="li-m">Bienvenue,<a href="<?= ROOT_URL ?>contract"><?php //echo $_SESSION['user_data']['name'] ?></a></li> -->
            
            <li class="li-m"><a href="<?php echo ROOT_URL; ?>user/profil">Mon Profil</a></li>
            <li class="li-m"><a href="<?php echo ROOT_URL; ?>user/logout">Logout</a></li>
            
            <?php else : ?>
            <li class="li-m"><a class="dropdown-toggle" data-toggle="dropdown" href="#">S'inscrire</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= ROOT_URL ?>freelancer/register">En tant que prestataire</a>
                    <a class="dropdown-item" href="<?= ROOT_URL ?>provider/register">En tant que fournisseur</a>
                  </div>
            </li>
            <li class="li-m" data-toggle="modal" data-target="#myModal"><a href="javascript:void(0)">login</a></li>
            <!-- <li class="li-m"><a href="<?= ROOT_URL ?>user/login">login</a></li> -->
            <?php endif; ?>
          </ul>
      </div>
    </div>
  </div>
</header>

<!--========================================================
                       MODAL LOGIN
=========================================================-->

<div class="container">
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
    
      <!-- Modal image background et bouton fermer -->
        <div class="modal-header" style="background-image:url(<?= ROOT_URL ?>assets/images/woman-laptop6b.jpg);height:200px;background-repeat:no-repeat;background-size:cover;">
          <button type="button" class="close" data-dismiss="modal" style="align-self:flex-start;">&times;</button>
        </div>
        <div class="modal-body">  
          <div class="container">    
<!--Formulaire connexion DÉBUT-->
            <div class="row">
              <!-- <form> -->
              <small style="color:red" id="msg_erreur"></small> 
                <div class="form-group">
                  <label for="email1">Courriel</label>
                  <input type="email" class="form-control" id="email_login" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">Nous ne partagons pas votre courriel à d'autre.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mot de passe</label>
                  <input type="password" class="form-control" id="password_login" placeholder="Password">
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="sesouvenir">Se souvenir de moi</label>
                </div><br>
                <button type="submit" value="submit" name ="login_button" id="login_button" class="btn btn-turquoise">Connexion</button>
                <br><!-- </form> -->
            </div>     
<!--Formulaire connexion FIN-->             
          </div>         
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div> 
  </div>
</div>
</div>

<script>
$(document).ready(function(){
  $("#login_button").click(function(){
    var username = $('#email_login').val();
    var password = $('#password_login').val();
    var login_button = $('#login_button').val();
    //console.log(+"user/login");
    if(username !='' && password !='')
    { 
      $.ajax({
        url:"http://127.0.0.1/projetweb2/MVC/user/login",
        type:"POST",
        data:{username:username, password:password, login_button:login_button},
        success:function(data)
        {
          //alert(data);
          if(data){
            //alert('le courriel ou le mot de passe est incorrect.');
            $("#msg_erreur").html(data);
          }else{
            $('#myModal').hide();
            //location.reload();
            location.replace('http://127.0.0.1/projetweb2/MVC/');
          }
        }
      });
    }else{
      $("#msg_erreur").html("Veuillez saisir votre mail et votre mot de passe.");
    }
  });

});
</script>
