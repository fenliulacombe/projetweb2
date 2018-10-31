
<!-- /////////////////////////////////////////////////////////// -->      
<!-- ///////////////////// SECTION CONTAIN ///////////////////// -->
<!-- /////////////////////////////////////////////////////////// -->  

<div id="page-wrapper" style="padding-top:20px;height:auto !important">

<div class="row">

<div class="col-lg-12">

    <div class="panel panel-default">
        
            <div class="panel-heading panel-heading-perso">
                
                <div class="row">
                
                <div class="col-lg-6 col-xs-12"><h4>Liste des administrateurs</h4></div>    
                
                    <div class="col-lg-6 col-xs-12">
                    <button type="submit" id="ajouter" class="btn btn-turquoise" style="float:right">
                    <a href="<?= ROOT_ADMIN ?>administrator/add">
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
                            <th>Dernière mise à jour</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <?php foreach ($admins AS $admin): ?>
                    <tbody>
                        <tr class="odd gradeA">
                            <td>3</td>
                            <td><a href="#"><?= $admin['nom_ut'].' '.$admin['prenom_ut'] ?></a></td>
                            <td>2018-04-25</td>
                            
                            <td class="center">
                            <button type="submit" id="modifer" class="btn btn-turquoise-mini">
                            <a href="<?= ROOT_ADMIN ?>administrator/update/<?= $admin['id_ut'] ?>">Modifier</a>
                            </button>
                            </td>
                            
                            <td class="center">
                            <button type="submit" id="supprimer" name="delete_admin" class="btn btn-rouge-mini" onclick="maSuppression()">
                            <a href="<?= ROOT_ADMIN ?>administrator/delete/<?= $admin['id_ut'] ?>">
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


</body>

</html>
