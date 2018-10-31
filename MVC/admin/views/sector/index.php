


<!-- /////////////////////////////////////////////////////////// -->      
<!-- ///////////////////// SECTION CONTAIN ///////////////////// -->
<!-- /////////////////////////////////////////////////////////// -->  

        <div id="page-wrapper" style="padding-top:20px;height:auto !important">
    
        <div class="row">

        	<div class="col-lg-12">

       		  <div class="panel panel-default">
                    
                    <div class="panel-heading panel-heading-perso">
                        
                        <div class="row">
                        
                        <div class="col-lg-6 col-xs-12"><h4>Liste des secteurs</h4></div>                            
                        
                        <div class="col-lg-6 col-xs-12">
                        
                            <button type="submit" id="ajouter" class="btn btn-turquoise" style="float:right">
                            <a href="<?= ROOT_ADMIN ?>sector/add">
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
                        
                        
                        <?php foreach ($sectors as $sector): ?><tbody>
                            <tr class="odd gradeA">
                                <td>1</td>
                                <td><a href="#"><?= $sector['nom_secteur'] ?></a></td>

                                <td class="center">
                                <button type="submit" id="modifer" class="btn btn-turquoise-mini">
                                <a href="<?= ROOT_ADMIN ?>sector/update/<?= $sector['id_secteur'] ?>">Modifier</a>
                                </button>
                                </td>
                                
                                <td class="center">
                                <button type="submit" id="supprimer" class="btn btn-rouge-mini">
                                <a href="<?= ROOT_ADMIN ?>sector/delete/<?= $sector['id_secteur'] ?>">
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
  


