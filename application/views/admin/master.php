<!DOCTYPE html>
<html lang="en">
    <head>

 
        <meta charset="utf-8">
        <title>Shop Admin Panel Dashboard</title>
        <meta name="description" content="Shop Admin Panel Dashboard">
        <meta name="author" content="Engr Rostom Ali">
        <meta name="keyword" content="Shop Admin Panel Dashboard">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link id="bootstrap-style" href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/admin/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="<?php echo base_url()?>assets/admin/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="<?php echo base_url()?>assets/admin/css/style-responsive.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/admin/img/favicon.jpg">
       
    </head>

    <body>
        
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="<?php echo base_url('dashboard')?>"><span>Ecommerce Admin Panel</span></a>

                    <div class="nav-no-collapse header-nav">
                        <ul class="nav pull-right">
                           
                            <li class="dropdown">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="halflings-icon white user"></i> <?php echo $this->session->userdata('user_name');?>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-menu-title">
                                        <span>Account Settings</span>
                                    </li>
                                    <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                    <li><a href="<?php echo base_url('logout')?>"><i class="halflings-icon off"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid-full">
            <div class="row-fluid">
                <div id="sidebar-left" class="span2">
                    <div class="nav-collapse sidebar-nav">
                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li><a href="<?php echo base_url('dashboard')?>"><i class="icon-dashboard"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                            <li class="<?php
                            if ($this->uri->uri_string() == 'customer/register') {echo "active";}?>"><a href="<?php echo base_url('/customer/register'); ?>"><i class="icon-th"></i><span class="hidden-tablet"> Add Customer</span></a> </li>	
                            <li class="<?php
                            if ($this->uri->uri_string() == 'manage/customer') {echo "active";}?>"><a href="<?php echo base_url('/manage/customer'); ?>"><i class="icon-th"></i><span class="hidden-tablet"> Manage Customer</span></a> </li>	
                            <li><a href="<?php echo base_url('add/category')?>"><i class="icon-th"></i><span class="hidden-tablet"> Add Category</span></a></li>
                            <li><a href="<?php echo base_url('manage/category')?>"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage Category</span></a></li>
                            <li><a href="<?php echo base_url('add/brand')?>"><i class="icon-edit"></i><span class="hidden-tablet"> Add Brand</span></a></li>
                            <li><a href="<?php echo base_url('manage/brand')?>"><i class="icon-list-alt"></i><span class="hidden-tablet"> Manage Brand</span></a></li>
                            <li><a href="<?php echo base_url('add/product')?>"><i class="icon-shopping-cart"></i><span class="hidden-tablet"> Add Product</span></a></li>
                            <li><a href="<?php echo base_url('manage/product')?>"><i class="icon-eye-open"></i><span class="hidden-tablet"> Manage Product</span></a></li>
                            <li><a href="<?php echo base_url('manage/order');?>"><i class="icon-calendar"></i><span class="hidden-tablet"> Manage Order</span></a></li>
                        </ul>
                    </div>
                </div>

                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>
                
                <?php echo $maincontent;?>
            </div>
        </div>
        <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>

        <div class="clearfix"></div>

        <footer>

            <p> <center>
                <span>&copy; <?php echo date("Y"); ?> Ecommerce CodeIgniter - Bootstrap Template By <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" style="color:white;" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>

            </p></center>

        </footer>

        <script src="<?php echo base_url()?>assets/admin/js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/jquery-migrate-1.0.0.min.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/jquery-ui-1.10.0.custom.min.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/jquery.ui.touch-punch.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/modernizr.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/bootstrap.min.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/jquery.cookie.js"></script>

        <script src='<?php echo base_url()?>assets/admin/js/fullcalendar.min.js'></script>

        <script src='<?php echo base_url()?>assets/admin/js/jquery.dataTables.min.js'></script>

        <script src="<?php echo base_url()?>assets/admin/js/excanvas.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/jquery.flot.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/jquery.flot.resize.min.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/jquery.chosen.min.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/jquery.uniform.min.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/jquery.cleditor.min.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/jquery.noty.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/jquery.elfinder.min.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/jquery.raty.min.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/jquery.iphone.toggle.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/jquery.uploadify-3.1.min.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/jquery.gritter.min.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/jquery.imagesloaded.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/jquery.masonry.min.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/jquery.knob.modified.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/counter.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/retina.js"></script>

        <script src="<?php echo base_url()?>assets/admin/js/custom.js"></script>

    </body>
</html>
