


<!-- /////////////////////////////////////////////////////////// -->      
<!-- ///////////////////// SECTION CONTAIN ///////////////////// -->
<!-- /////////////////////////////////////////////////////////// -->  

<div id="page-wrapper" style="padding-top:20px;height:auto !important">
                     
 	<div class="row" style="padding-bottom:40px">
    
        <div class="col-sm-8">
        
        <h3>Modifier le Secteur</h3>
        
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">

        <div class="formulaire">

          <div class="form-group">
            <input type="hidden" class="form-control" id="id_secteur" name="id_secteur" >
          </div>

           <div class=" p-image">
              <label for="p-image">Remplacer l'image</label>
              <input class="file-upload" type="file" name="photo_secteur" accept="image/*"/>
           </div>
           <br>
              
          <div class="form-group">
            <label for="nom_secteur">Nom du secteur <span class="red">*</span></label>
            <input type="text" class="form-control" id="nom_secteur" name="nom_secteur" value=<?php echo $sector['nom_secteur']; ?>>
          </div>

        </div>
          
          <button type="submit" name="update_secteur" class="btn btn-primary">Modifier</button>
        </form>

        </div>
        
  	</div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


</body>

</html>
