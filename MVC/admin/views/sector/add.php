


<!-- /////////////////////////////////////////////////////////// -->      
<!-- ///////////////////// SECTION CONTAIN ///////////////////// -->
<!-- /////////////////////////////////////////////////////////// -->  

<div id="page-wrapper" style="padding-top:20px;height:auto !important">
                     
 	<div class="row" style="padding-bottom:40px">
    
        <div class="col-sm-8">
        
        <h3>Ajouter un Secteur</h3>
        
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <div class="formulaire">
        
           <div class="p-image">
              <label for="p-image">Ajouter une image</label>
              <input class="file-upload" type="file" name="photo_secteur" accept="image/*"/>
           </div>
           <br>
              
          <div class="form-group">
            <label for="exampleFormControlInput1">Nom du secteur<span class="red">*</span></label>
            <input type="text" class="form-control" name="nom_secteur" id="nom_secteur">
          </div>

        </div>
          
          <button type="submit" class="btn btn-primary" name="add_secteur">Ajouter</button>
        </form>

        </div>
        
  	</div>
        

  

            

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
