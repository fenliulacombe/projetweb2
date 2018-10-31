


<!-- /////////////////////////////////////////////////////////// -->      
<!-- ///////////////////// SECTION CONTAIN ///////////////////// -->
<!-- /////////////////////////////////////////////////////////// -->  

<div id="page-wrapper">
    
      <div class="row" style="padding-top:20px;"><!--row début-->   
   
        <div class="panel panel-default widget">
                
			<!--panel heading début-->   
            <div class="panel-heading panel-heading-perso">
            
            <div class="row">
            
            	<div class="col-lg-6 col-xs-12 panel-title">
                	<h4><i class="glyphicon glyphicon-comment"></i> Messages reçus</h4>
				</div>     

               <div class"col-lg-6 col-xs-12" style="float:right;margin-right:20px">     
                     <!--BOUTON COMPOSE-->
                      <button type="submit" id="compose" class="btn btn-turquoise">
                      	<a href="#myModal" data-toggle="modal" title="Compose">
                            <i class="glyphicon glyphicon-pencil" style="padding-right:4px;"></i>
                            Compose
                        </a>
                      </button>
                </div>      
             </div>
             </div>
             <!--panel heading fin-->   
            
            
            
<!--ACCORDION-->
<script type="text/javascript">
  $(document).ready(function($) {
    $('#accordion').find('.accordion-toggle').click(function(){

      $(this).next().slideToggle('fast');

      $(".accordion-content").not($(this).next()).slideUp('fast');

    });
  });
</script>
     
       
 <div class="panel-body">
 
<!-- ************ LISTE MESSAGES DÉBUT ************-->
 <ul class="list-group" id="accordion">  
 
 
 <!--MESSAGES DÉBUT-->
<li class="list-group-item">
       
    <div class="row accordion-toggle">
        <div class="col-xs-2 col-md-2 thumbnails" style="margin-left:20px">
            <img src="../../images/portrait3.jpg" alt="id"></div>
        <div class="col-xs-10 col-md-10"><h4><a href="#">Congratulations</a></h4>
            <div class="mic-info">Par: <a href="#">Kevin Crud</a> le 12-04-2018 à 22:34</div>
        </div>
    </div>

    <div class="accordion-content default">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
        <!--bouton répondre-->
    <button type="submit" id="repondre" class="btn btn-turquoise-mini">
    <a href="#">
      <span class="glyphicon glyphicon-share-alt" style="padding-right:1px;"></span>
      Répondre
    </a>
    </button>
    
    <!--bouton supprimé-->
    <button type="submit" id="supprimer" class="btn btn-rouge-mini" onclick="maSuppression()">
    <a href="#">
        <span class="glyphicon glyphicon-remove" style="padding-right:1px;"></span>
        Supprimer
    </a>
    </button>
        
    </div>
  
</li>
  <!--MESSAGES FIN--> 
  




 <!--MESSAGES DÉBUT-->
<li class="list-group-item">
       
    <div class="row accordion-toggle">
        <div class="col-xs-2 col-md-2 thumbnails" style="margin-left:20px">
            <img src="../../images/portrait4.jpg" alt="id"></div>
        <div class="col-xs-10 col-md-10"><h4><a href="#">Great Job!</a></h4>
            <div class="mic-info">Par: <a href="#">Nathalie Quevillon</a> le 10-04-2018 à 04:12</div>
        </div>
    </div>

    <div class="accordion-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
        <!--bouton répondre-->
    <button type="submit" id="repondre" class="btn btn-turquoise-mini">
    <a href="#">
      <span class="glyphicon glyphicon-share-alt" style="padding-right:1px;"></span>
      Répondre
    </a>
    </button>
    
    <!--bouton supprimé-->
    <button type="submit" id="supprimer" class="btn btn-rouge-mini" onclick="maSuppression()">
    <a href="#">
        <span class="glyphicon glyphicon-remove" style="padding-right:1px;"></span>
        Supprimer
    </a>
    </button>
        
    </div>
  
</li>
  <!--MESSAGES FIN--> 




 <!--MESSAGES DÉBUT-->
<li class="list-group-item">
       
    <div class="row accordion-toggle">
        <div class="col-xs-2 col-md-2 thumbnails" style="margin-left:20px">
            <img src="../../images/portrait5.jpg" alt="id"></div>
        <div class="col-xs-10 col-md-10"><h4><a href="#">Contrat attribué</a></h4>
            <div class="mic-info">Par: <a href="#">Bob Tomate</a> le 07-04-2018 à 15:03</div>
        </div>
    </div>

    <div class="accordion-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
        <!--bouton répondre-->
    <button type="submit" id="repondre" class="btn btn-turquoise-mini">
    <a href="#">
      <span class="glyphicon glyphicon-share-alt" style="padding-right:1px;"></span>
      Répondre
    </a>
    </button>
    
    <!--bouton supprimé-->
    <button type="submit" id="supprimer" class="btn btn-rouge-mini" onclick="maSuppression()">
    <a href="#">
        <span class="glyphicon glyphicon-remove" style="padding-right:1px;"></span>
        Supprimer
    </a>
    </button>
        
    </div>
  
</li>
  <!--MESSAGES FIN--> 


 
  
</ul>
<!--************ LISTE MESSAGES FIN ************-->

</div>
       
    </div>
                      
</div><!--row fin-->     
                      
</div><!--page wrapper fin-->

</div><!--wrapper fin-->
            
            




				<!-- //////// MODAL COMPOSE //////// -->
 				 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                          <h4 class="modal-title">Compose</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form role="form" class="form-horizontal">
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">To</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Cc / Bcc</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" placeholder="" id="cc" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Subject</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" placeholder="" id="inputPassword1" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Message</label>
                                                  <div class="col-lg-10">
                                                      <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-lg-offset-2 col-lg-10">
                                                      <button class="btn btn-turquoise" type="submit">Send</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div><!-- /.MODAL FIN -->





   <!--ALERT SUPPRESSION  -->
<script>
function maSuppression() {
    confirm("Êtes-vous sûr de vouloir supprimer?");
}
</script>  


</body>

</html>
