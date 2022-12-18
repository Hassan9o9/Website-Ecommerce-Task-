<!DOCTYPE html>
<html lang="en">
    <head>

       
        <meta charset="utf-8">
        <title>Ecommerce Website Login Panel</title>
        <meta name="description" content="Ecommerce Website Login Panel">
        <meta name="author" content="Hassan">
        <meta name="keyword" content="Ecommerce Website Login Panel">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     
        <link id="bootstrap-style" href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/admin/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="<?php echo base_url()?>assets/admin/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="<?php echo base_url()?>assets/admin/css/style-responsive.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/admin/img/favicon.jpg">
        <style type="text/css">
            body { background: url(<?php echo base_url()?>assets/admin/img/bg-login.jpg) !important; }
        </style>

    </head>

    <body>
        <div class="container-fluid-full">
            <div class="row-fluid">

                <div class="row-fluid">
                    <div class="login-box">
                        <div class="icons">
                            <a href="<?php echo base_url('dashboard');?>"><i class="halflings-icon home"></i></a>
                            <a href="#"><i class="halflings-icon cog"></i></a>
                        </div>
                        <h1 class="text-center">Admin Panel</h1>
                        <style type="text/css">
                            #result{color:red}
                            #result p{color:red}
                        </style>
                        <div id="result">
                            <p><?php echo $this->session->flashdata('message');?></p>
                        </div>
                        <form id="adminlogincheck" class="form-horizontal" action="<?php echo base_url()?>admin_login_check" method="post">
                            <fieldset>

                                <div class="input-prepend" title="User Email">
                                    <span class="add-on"><i class="halflings-icon user"></i></span>
                                    <input class="input-large span10" value="<?php set_value('user_name');?>" name="user_email" id="user_email" type="text" placeholder="Email"/>
                                </div>
                                <div class="clearfix"></div>

                                <div class="input-prepend" title="User Password">
                                    <span class="add-on"><i class="halflings-icon lock"></i></span>
                                    <input class="input-large span10" name="user_password" id="user_password" type="password" placeholder="Password"/>
                                </div>

                                <div class="button-login">	
                                    <button type="submit" class="btn btn-primary adminlogincheck">Admin Login</button>
                                </div>
                                <div class="clearfix"></div>
                                                          </fieldset>
  
                        </form>
                        
                       	
                    </div>
                </div>


            </div>

        </div>
       
       <script src="<?php echo base_url()?>assets/admin/js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/jquery-migrate-1.0.0.min.js"></script>

    </body>
</html>

