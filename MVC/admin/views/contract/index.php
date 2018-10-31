
<!-- /////////////////////////////////////////////////////////// -->      
<!-- ///////////////////// SECTION CONTAIN ///////////////////// -->
<!-- /////////////////////////////////////////////////////////// -->  

        <div id="page-wrapper" style="padding-top:20px;height:auto !important">
    
        <div class="row">

        	<div class="col-lg-12">

       		  <div class="panel panel-default">
                    
                        <div class="panel-heading panel-heading-perso">
                            
                            <div class="row">
							
                            <div class="col-lg-12 col-xs-12"><h4>Liste des contrats</h4></div>
							</div>
   
                </div>
                        
                <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nom</th>
                                        <th>Fournisseur</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <?php foreach ($contracts as $contract): ?>
                                <tbody>
                                    <tr class="odd gradeA">
                                        <td><?= $contract['id_prj'] ?></td>
                                        <td><span id="modifer" class="btn-crud" data-toggle="modal" data-target="#<?= $contract['id_prj'] ?>"><a href="#"><?= $contract['titre_prj'] ?></a></span></td>
                                       
                                        <td class="center">
                                        <a href="#"><?= $contract['nom_ut'] ?></a>
                                        </td>
                                      
                                        
                                        <td class="center">
                                        <button type="submit" id="supprimer" class="btn btn-rouge-mini">
                                        <a href="<?= ROOT_ADMIN ?>contract/delete/<?= $contract['id_prj'] ?>">
                                            <span class="glyphicon glyphicon-remove" style="padding-right:1px;"></span>
                                            Supprimer</a>
                                        </button>
                                        </td>
                                    </tr>                                     
                              </tbody>
                            <?php endforeach; ?>
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
       <?php foreach ($contracts as $contract): ?>
<div class="container" id="pigiste">
    <div class="modal fade" id="<?= $contract['id_prj'] ?>" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header detail">
            <h4 class="modal-title" id="exampleModalLongTitle"><?= $contract['titre_prj'] ?></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-body detail-modal">
                <h5>Description du contrat </h5>
            <div><?= $contract['description_prj'] ?></div>      
            
            <div class="detail-modal">
                <h5>Lieu de réalisation</h5>
                <div><?= $contract['lieu_realisation_prj'] ?></div>
            </div>
              
            <div class="detail-modal">
                <h5>Date début</h5>
                <div><?= $contract['date_debut_prj'] ?></div>
            </div>

            <div class="detail-modal">
                <h5>Date fin</h5>
                <div><?= $contract['date_fin_prj'] ?></div>
            </div>
         
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div> 
    
</div>
   
<?php endforeach; ?>
