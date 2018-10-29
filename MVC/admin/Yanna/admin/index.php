<!doctype html>
<html lang="fr">
<head>

    <?php include '../../view/includes/meta.php'; ?>
    <title>Echange | Admin</title>
        
<style>

html, body {
   bottom:0;
   min-height:100%;
   overflow:auto;
}
body{
	font-family: helvetica;
	margin-bottom:0;
	border-bottom:0;
	color:gray;
}
</style>
 
</head>

<body> 


<div class="container cont-log">

 <div class="row">

  
 
 
 <div class="box-log">
  <div style="text-align:center"><img src="../images/logo.svg" alt="logo" width="160px"/></div>
  
    <form action="/action_page.php">    
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd">
      </div>
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
      <button type="submit" class="btn btn-turquoise">Se connecter</button>
</form>
  
 </div> 
  
 </div> 
  
  
  
  
  
  
  
  
  
</div><!--FIN DU CONTAINER-->   

</body>
</html>