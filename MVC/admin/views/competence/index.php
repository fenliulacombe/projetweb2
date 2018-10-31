


<!-- /////////////////////////////////////////////////////////// -->      
<!-- ///////////////////// SECTION CONTAIN ///////////////////// -->
<!-- /////////////////////////////////////////////////////////// -->  

        <div id="page-wrapper" style="padding-top:20px;height:auto !important">

            
        <div class="row">

        	<div class="col-lg-12">

       		  <div class="panel panel-default">
                    
                        <div class="panel-heading panel-heading-perso">
                            
                            <div class="row">
							
                            <div class="col-lg-6 col-xs-12"><h4>Liste des compétences</h4></div>                            
                            
                            <div class="col-lg-6 col-xs-12">
                              <button type="submit" id="ajouter" class="btn btn-turquoise" style="float:right">
                              <a href="<?= ROOT_ADMIN ?>competence/add/">
                                    AJOUTER
                                </a>
                               </button>
                            </div>      
                            
							</div>
                            
                </div>
                        
                <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nom</th>
                              
                                        <th>Modifier</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                
                                <?php foreach($competences as $competence): ?>
                                <tbody>
                                    <tr class="odd gradeA">
                                        <td><?php echo $competence['id_comp'] ?></td>
                                        <td><a href="#"><?php echo $competence['nom_comp'] ?></a></td>
                           

                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-turquoise-mini">
                                        <a href="<?= ROOT_ADMIN ?>competence/update/<?= $competence['id_comp'] ?>">Modifier</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="supprimer" class="btn btn-rouge-mini" onclick="maSuppression()">
                                        <a href="<?= ROOT_ADMIN ?>competence/delete/<?= $competence['id_comp'] ?>">
                                            <span class="glyphicon glyphicon-remove" style="padding-right:1px;"></span>
                                            Supprimer</a>
                                        </button>
                                        </td>
                                    </tr>
                              </tbody>
                            <?php endforeach;?>
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
    

</body>

</html>
