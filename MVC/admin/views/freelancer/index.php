<!-- /////////////////////////////////////////////////////////// -->      
<!-- ///////////////////// SECTION CONTAIN ///////////////////// -->
<!-- /////////////////////////////////////////////////////////// -->  

        <div id="page-wrapper" style="padding-top:20px;height:auto !important">
            
        <div class="row">

        	<div class="col-lg-12">

       		  <div class="panel panel-default">
                    
                    <div class="panel-heading panel-heading-perso">
                        
                        <div class="row">
                        
                        <div class="col-lg-6 col-xs-12"><h4>Liste des pigistes</h4></div>    
                        
                    </div>
                            
                </div>
                        
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Dernière mise à jour</th>
                                <th>Valider/Suspendre</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <?php foreach ($freelancers AS $freelancer): ?>
                        <tbody>
                            <tr class="odd gradeA">
                                <td><?php echo $freelancer['id_ut'] ?></td>
                                
                                <td><span id="modifer" class="btn-crud" data-toggle="modal" data-target="#<?= $freelancer['id_ut'] ?>" ><a href="javascript:void(0)"><?= $freelancer['nom_ut'].' '.$freelancer['prenom_ut'] ?></a></span></td>
                                
                                <td><?php //echo $freelancer['date_maj'] ?></td>
                                
                                <td class="center">
                                <a href="<?= ROOT_ADMIN ?>freelancer/suspension/<?= $sector['id_secteur'] ?>"><input type="checkbox" data-toggle="toggle" name="suspension_ut" data-on="Valider" data-off="Suspendre">
                                </a></td>
                                
                                <td class="center">
                                <button type="submit" id="supprimer" class="btn btn-rouge-mini" >
                                <a href="">
                                    <span class="glyphicon glyphicon-remove" style="padding-right:1px;"></span>
                                    Supprimer</a>
                                </button>
                                </td>
                            </tr>
                            <?php endforeach; ?>   
                            
                        </tbody>
                    </table>
                    
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel --> 

        </div>
  

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    
    <!-- ModalDetail Freelancer -->
    <?php foreach ($freelancers AS $freelancer): ?>
    <div class="container" id="pigiste">
    <div class="modal fade" id="<?= $freelancer['id_ut'] ?>" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header detail">
            <h4 class="modal-title" id="exampleModalLongTitle"><?= $freelancer['nom_ut'].' '.$freelancer['prenom_ut'] ?></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body detail-modal">

            <h5>A propos</h5>
            <div><?= $freelancer['apropos_ut']?></div>
            
            <div class="detail-modal">
                <h5>Compétences</h5>
                <ul>
                    <li><?= $freelancer['competence_ut']?></li>
                </ul>
            </div>
            
            <div class="detail-modal">
                <h5>Taux horaire</h5>
                <div><i class="fas fa-dollar-sign"></i> <?= $freelancer['taux_horaire_ut']?>/h</div>
            </div>
              
            <div class="detail-modal">
                <h5>Années d'experience</h5>
                <div><i class="fas fa-graduation-cap"></i> <?= $freelancer['annee_experience_ut']?> ans</div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div> 
    
</div>
    
<?php endforeach; ?>
    
    
 <!--ALERT SUPPRESSION  -->
<script>
function maSuppression() {
    confirm("Êtes-vous sûr de vouloir supprimer?");
}
</script>

 <!--SWITCH TOGGLE -->
<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Valider',
      off: 'Suspendre'
    });
  })
</script>
    

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
