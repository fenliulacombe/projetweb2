

<!-- /////////////////////////////////////////////////////////// -->      
<!-- ///////////////////// SECTION CONTAIN ///////////////////// -->
<!-- /////////////////////////////////////////////////////////// -->  

<div id="page-wrapper" style="padding-top:20px;height:auto !important">
                     
 	<div class="row" style="padding-bottom:40px">
    
        <div class="col-sm-8">
        
        <h3>Modifier la compétence</h3>
        
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <div class="form-group">
          <input type="hidden" class="form-control" id="id_comp" name="id_comp" >
        </div>

        <div class="formulaire">
      
          <div class="form-group">
            <label for="nom_comp">Nom de la compétence<span class="red">*</span></label>
            <input type="text" class="form-control" name="nom_comp" value=<?php echo $competence['nom_comp']; ?>>
          </div>

        </div>
          
          <button type="submit" name="update_comp" class="btn btn-primary">Modifier</button>
        </form>

        </div>
        
  	</div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
