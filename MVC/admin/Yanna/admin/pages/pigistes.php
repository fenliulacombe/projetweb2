<!DOCTYPE html>
<html lang="fr">

<head>

<?php include 'meta.php';?>
    
</head>

<body>

    <div id="wrapper">

	<?php include 'nav.php';?>

<!-- /////////////////////////////////////////////////////////// -->      
<!-- ///////////////////// SECTION CONTAIN ///////////////////// -->
<!-- /////////////////////////////////////////////////////////// -->  

        <div id="page-wrapper" style="padding-top:20px;height:auto !important">
        


			<!--<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Dashboard</h3>
                </div>
            </div>-->

            
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
                                        <th>Valider</th>
                                        <th>Suspendre</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <tr class="odd gradeA">
                                        <td>1</td>
                                        <td><a href="#">Pénélope Guiness</a></td>
                                        <td>2018-04-25</td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-jaune-mini">
                                        <a href="#">Valider</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-turquoise-mini">
                                        <a href="#">Suspendre</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="supprimer" class="btn btn-rouge-mini">
                                        <a href="#">
                                            <span class="glyphicon glyphicon-remove" style="padding-right:1px;"></span>
                                            Supprimer</a>
                                        </button>
                                        </td>
                                    </tr>
                                    
                                    <tr class="odd gradeA">
                                        <td>2</td>
                                        <td><a href="#">Pénélope Guiness</a></td>
                                        <td>2018-04-25</td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-jaune-mini">
                                        <a href="#">Valider</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-turquoise-mini">
                                        <a href="#">Suspendre</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="supprimer" class="btn btn-rouge-mini">
                                        <a href="#">
                                            <span class="glyphicon glyphicon-remove" style="padding-right:1px;"></span>
                                            Supprimer</a>
                                        </button>
                                        </td>
                                    </tr>
                                    
                                    <tr class="odd gradeA">
                                        <td>3</td>
                                        <td><a href="#">Pénélope Guiness</a></td>
                                        <td>2018-04-25</td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-jaune-mini">
                                        <a href="#">Valider</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-turquoise-mini">
                                        <a href="#">Suspendre</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="supprimer" class="btn btn-rouge-mini">
                                        <a href="#">
                                            <span class="glyphicon glyphicon-remove" style="padding-right:1px;"></span>
                                            Supprimer</a>
                                        </button>
                                        </td>
                                    </tr>
                                    
                                    <tr class="odd gradeA">
                                        <td>4</td>
                                        <td><a href="#">Pénélope Guiness</a></td>
                                        <td>2018-04-25</td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-jaune-mini">
                                        <a href="#">Valider</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-turquoise-mini">
                                        <a href="#">Suspendre</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="supprimer" class="btn btn-rouge-mini">
                                        <a href="#">
                                            <span class="glyphicon glyphicon-remove" style="padding-right:1px;"></span>
                                            Supprimer</a>
                                        </button>
                                        </td>
                                    </tr>
                                    
                                    <tr class="odd gradeA">
                                        <td>5</td>
                                        <td><a href="#">Pénélope Guiness</a></td>
                                        <td>2018-04-25</td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-jaune-mini">
                                        <a href="#">Valider</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-turquoise-mini">
                                        <a href="#">Suspendre</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="supprimer" class="btn btn-rouge-mini">
                                        <a href="#">
                                            <span class="glyphicon glyphicon-remove" style="padding-right:1px;"></span>
                                            Supprimer</a>
                                        </button>
                                        </td>
                                    </tr>
                                    
                                    <tr class="odd gradeA">
                                        <td>6</td>
                                        <td><a href="#">Pénélope Guiness</a></td>
                                        <td>2018-04-25</td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-jaune-mini">
                                        <a href="#">Valider</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-turquoise-mini">
                                        <a href="#">Suspendre</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="supprimer" class="btn btn-rouge-mini">
                                        <a href="#">
                                            <span class="glyphicon glyphicon-remove" style="padding-right:1px;"></span>
                                            Supprimer</a>
                                        </button>
                                        </td>
                                    </tr>
                                    
                                    <tr class="odd gradeA">
                                        <td>7</td>
                                        <td><a href="#">Pénélope Guiness</a></td>
                                        <td>2018-04-25</td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-jaune-mini">
                                        <a href="#">Valider</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-turquoise-mini">
                                        <a href="#">Suspendre</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="supprimer" class="btn btn-rouge-mini">
                                        <a href="#">
                                            <span class="glyphicon glyphicon-remove" style="padding-right:1px;"></span>
                                            Supprimer</a>
                                        </button>
                                        </td>
                                    </tr>
                                    
                                    <tr class="odd gradeA">
                                        <td>8</td>
                                        <td><a href="#">Pénélope Guiness</a></td>
                                        <td>2018-04-25</td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-jaune-mini">
                                        <a href="#">Valider</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-turquoise-mini">
                                        <a href="#">Suspendre</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="supprimer" class="btn btn-rouge-mini">
                                        <a href="#">
                                            <span class="glyphicon glyphicon-remove" style="padding-right:1px;"></span>
                                            Supprimer</a>
                                        </button>
                                        </td>
                                    </tr>
                                    
                                    <tr class="odd gradeA">
                                        <td>9</td>
                                        <td><a href="#">Pénélope Guiness</a></td>
                                        <td>2018-04-25</td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-jaune-mini">
                                        <a href="#">Valider</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-turquoise-mini">
                                        <a href="#">Suspendre</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="supprimer" class="btn btn-rouge-mini">
                                        <a href="#">
                                            <span class="glyphicon glyphicon-remove" style="padding-right:1px;"></span>
                                            Supprimer</a>
                                        </button>
                                        </td>
                                    </tr>
                                    
                                    <tr class="odd gradeA">
                                        <td>10</td>
                                        <td><a href="#">Pénélope Guiness</a></td>
                                        <td>2018-04-25</td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-jaune-mini">
                                        <a href="#">Valider</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="modifer" class="btn btn-turquoise-mini">
                                        <a href="#">Suspendre</a>
                                        </button>
                                        </td>
                                        
                                        <td class="center">
                                        <button type="submit" id="supprimer" class="btn btn-rouge-mini">
                                        <a href="#">
                                            <span class="glyphicon glyphicon-remove" style="padding-right:1px;"></span>
                                            Supprimer</a>
                                        </button>
                                        </td>
                                    </tr>


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
    
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

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
