<!-- ///////////////////////////////////////////////////// -->      
<!-- ///////////////////// MENU TOP ///////////////////// -->
<!-- //////////////////////////////////////////////////// -->    

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <!-- LOGO -->
                <a class="navbar-brand" href="index.php"><img src="<?= ROOT_URL ?>assets/images/logo.svg" alt="logo" height="50px"/></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
            
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="inbox.php">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            
            
            
<!-- ///////////////////////////////////////////////////////// -->      
<!-- ///////////////////// MENU SIDE BAR ///////////////////// -->
<!-- ///////////////////////////////////////////////////////// -->  

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Rechercher..">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        
                        <li>
                            <a href="<?= ROOT_ADMIN ?>home"><i class="fa fa-dashboard fa-fw"></i>
                            <strong>Dashboard</strong></a>
                        </li>
                        
                        <li>
                            <a href="<?= ROOT_ADMIN ?>messagerie"><i class="fa fa-envelope-o fa-fw"></i> </i>
                            <strong>Messagerie<span class="fa arrow"></strong></a>
                            
                      <ul class="nav nav-second-level">
                      
                          <li class="active">
                              <a href="inbox.php"><i class="fa fa-inbox">
                              </i> Inbox <span class="label label-danger pull-right" style="background:#fc4d45">2</span></a>
                          </li>
                          
                          <li>
                              <a href="sent.php"><i class="fa fa-envelope-o"></i> Sent Mail</a>
                          </li>
                          
                      </ul>
                                  
                        </li>

                        <li>
                            <a  href="<?= ROOT_ADMIN ?>freelancer"><i class="fa fa-files-o fa-fw"></i>
                            <strong>Pigistes</strong></a>
                        </li>
                        
                         <li>
                            <a href="<?= ROOT_ADMIN ?>provider"><i class="fa fa-files-o fa-fw"></i>
                            <strong>Fournisseurs</strong></a>
                        </li>
                        
                        <li>
                            <a href="<?= ROOT_ADMIN ?>administrator"><i class="fa fa-files-o fa-fw"></i>
                            <strong>Administrateurs</strong></a>
                        </li>
                        
                        <li>
                            <a href="<?= ROOT_ADMIN ?>sector"><i class="fa fa-files-o fa-fw"></i>
                            <strong>Secteurs</strong></a>
                        </li>
                        
                        <li>
                            <a href="<?= ROOT_ADMIN ?>competence"><i class="fa fa-files-o fa-fw"></i>
                            <strong>Compétences</strong></a>
                        </li>
                        
                        <li>
                            <a href="<?= ROOT_ADMIN ?>contract"><i class="fa fa-files-o fa-fw"></i>
                            <strong>Contrats</strong></a>
                        </li>
  
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>