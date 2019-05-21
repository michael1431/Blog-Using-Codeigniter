
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>html/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>Assets/js/jquery.js"></script> 
    <script src="<?php echo base_url();?>Assets/js/bootstrap.js"></script>
     <script src="<?php echo base_url(); ?>Assets/js/jquery.js"></script> 
    <!-- Menu CSS -->
    <link href="<?php echo base_url(); ?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo base_url(); ?>plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url(); ?>plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo base_url(); ?>plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url(); ?>html/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>html/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url(); ?>html/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="<?php echo base_url(); ?>html/index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="<?php echo base_url(); ?>plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="<?php echo base_url(); ?>plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="<?php echo base_url(); ?>plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="<?php echo base_url(); ?>plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"><b class="hidden-xs"><?php echo $this->session->userdata('a_name'); ?></b></a>
                    </li>
                    <li>
                        <a class="btn btn-info " href="<?php echo base_url(); ?>admin_login_controller/admin_user_logout">Logout</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar navbar-side" role="navigation">
            <div class="sidebar-nav slimscrollsidebar sidebar-collapse">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="<?php echo base_url(); ?>Super_admin/homeAdmin" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                  
                        <li class="sidebar-item">
                            <a class="waves-effect" href="javascript:void(0)" aria-expanded="false">
                                <i class="fa fa-user fa-fw"></i>
                                <span class="hide-menu">Profile</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul aria-expanded="false" id="side-menu" class="nav collapse nav-second-level">
                                <li class="sidebar-item">
                                    <a href="<?php echo base_url(); ?>Super_admin/profile" class="sidebar-link">
                                           <i class="fa fa-user fa-fw"></i>
                                           <span class="hide-menu">View Profile</span>
                                    </a>
                                </li>
                               <li class="sidebar-item">
                                   <a href="<?php echo base_url() ?>Super_admin/chng_password" class="sidebar-link">
                                         <i class="fa fa-sign-out fa-fw"></i>
                                         <span class="hide-menu">Change Password</span>
                                    </a>
                                </li>

                            </ul>
                        </li>


                    
                </ul>
                
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<!--                        <span class="page-title" style="font-weight: bold; font-size: 15px;">Dashboard</span> -->
                      
                      <ul class="">
<!--                          <li>Admin: <span style="font-weight: bold;"><?php echo $this->session->userdata('a_name'); ?></span></li>
                          <li>Email: <span style="font-weight: bold;"><?php echo $this->session->userdata('a_email'); ?></span></li>
                          -->
                          
                        </ul>
                    </div>
                    <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
<!--                        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>-->
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Users</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success"><?php echo count($all_user_info)  ; ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Active Users</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">
                                    <?php
                                       $cnt=0;
                           
                                     foreach($all_user_info as $info){
                                                if($info->user_status=='1'){
                                                    $cnt++;
                                                }
                                        }
                                        echo $cnt;
                                    
                                    ?>
                                    </span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Articles</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-danger"></i> <span class="counter text-danger"><?php echo count($all_articles_by_user); ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                                                  
                        <div class="white-box">
                             <?php
                $messages = $this->session->flashdata('updt_msg');

               if($messages) {
                  $msg_class = $this->session->flashdata('updt_msg_class');
                       ?>
                        <div class="alert <?php echo $msg_class; ?> alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Message : </strong><?= $messages; ?>

                        </div>

            <?php } ?>
            
  
                            <table class="table table-striped text-center">
                        <thead>
                            <tr class="btn-danger">
                                <td colspan="7"><b style="font-family: cursive;"><i class=""></i>All User Information</b></td>
                                
                            </tr>
                            <tr class="bg-inverse">
                                <td><b style="color: white;">SL</b></td>
                                <td><b style="color: white;">User Name</b></td>
                                <td><b style="color: white;">Email</b></td>
                                <td><b style="color: white;">First Name</b></td>
                                <td><b style="color: white;">Last Name</b></td>
                                
                                <td><b style="color: white;">Status</b></td>
                                <td><b style="color: white;">Action</b></td>
                             
                                
                               
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php
                            if(count($all_user_info)){
                            $i=1;
                          
                            foreach($all_user_info as $info){
                                
                                 
                                
                            ?>
                            <tr >
                                <td><span style="font-weight: bold; font-family: cursive;"><?php echo $i.'.'; ?></span></td>
                                <td><span style="font-weight: bold; font-family: cursive;"><?php echo $info->user_name; ?></span></td>
                                <td><span style="font-weight: bold; font-family: cursive;"><?php echo $info->email; ?></span></td>
                            
                                <td><span style="font-weight: bold; font-family: cursive;"><?php echo $info->first_name; ?></span></td>
                                <td><span style="font-weight: bold; font-family: cursive;"><?php echo $info->last_name; ?></span></td>
                               
                                <td><b>
                                   <?php
                                    if($info->user_status==1)
                                    {
                                         echo form_open("Super_admin/UserDecative/{$info->id}"),
                                              form_submit(['name' => 'submit', 'value' => 'Active', 'class' => 'btn btn-success']),
                                              form_close();
                                         
                                         ?>
                                       <?php
                                    }else if($info->user_status==0)
                                    {
                                        echo form_open("Super_admin/UserActive/{$info->id}"),
                                             form_submit(['name' => 'submit', 'value' => 'Deactive', 'class' => 'btn btn-danger']),
                                              form_close();
                                     ?>
                                        
                                       <?php
                                    }
                                        ?>
  
                                                
                                </b></td>
                                
                                    <td><b>
                                    <?=
                                form_open("Super_admin/editusers/{$info->id}"),
                                //form_hidden('id', $info->id),
                                form_submit(['name' => 'submit', 'value' => 'Edit', 'class' => 'btn btn-primary']),
                                form_close();
                                ?>
                                    
                                    </b></td>
                                
                            </tr>
                            <?php $i++; } }
                              else {?>
                            <tr>
                                <td colspan="7">OOP's No Records Yet</td>
                            </tr> 
                            <?php  }?>
                        </tbody>
                        <tfoot></tfoot>
                    </table>
          
                            
                        </div>
                   
                        
                    </div>
                </div>
                     <hr class="bg-danger">
                     
                     <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            
                            <table class="table table-striped text-center">
                        <thead>
                            <tr class="btn-info">
                                <td colspan="6"><b style="font-family: cursive;"><i class=""></i>All Article Information</b></td>
                                
                            </tr>
                            <tr class="bg-inverse">
                                <td><b style="color: white;">SL</b></td>
                                <td><b style="color: white;">Article Title</b></td>
                                <td><b style="color: white;">User Name</b></td>
                                <td><b style="color: white;">Image</b></td>
                                <td><b style="color: white;">Created</b></td>
                                
                                <td><b style="color: white;">Action</b></td>
                             
                                
                               
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php
                               if(count($all_articles_by_user)){
                                   
                                   $i=1;
                           
                            foreach($all_articles_by_user as $post_info){
                              
                            ?>
                            <tr>
                                
                                <td><span style="font-weight: bold;"><?php echo $i.'.'; ?></span></td>
                                <td><span style="font-weight: bold;"><?php echo $post_info->article_title; ?></span></td>
                                <td><span style="font-weight: bold;"><?php echo $post_info->first_name.' ' .$post_info->last_name ; ?></span></td>                              
                                <td><b><img class="rounded mx-auto d-block" src="<?php echo $post_info->image_path; ?>" height="100" width="150"/></b></td>
                                <td><span style="font-weight: bold;"><?php echo $post_info->created_at; ?></span></td>
                                
                                <td><a class="btn btn-danger" href="<?php echo base_url(); ?>Super_admin/delete_art_info/<?php echo $post_info->article_id; ?>"><i class=""></i> Delete</a></td>
                          
                             
                            </tr>
                            <?php $i++; } }
                              else {?>
                            <tr>
                                <td colspan="6">OOP's No Articles Yet</td>
                            </tr> 
                            <?php  }?>
                            
                        </tbody>
                        <tfoot></tfoot>
                    </table>
          
                            
                        </div>
                   
                        
                    </div>
                </div>
                     
                     
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> &copy; 2017-2018</footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>html/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url(); ?>html/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>html/js/waves.js"></script>
    <!--Counter js -->
    <script src="<?php echo base_url(); ?>plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?php echo base_url(); ?>plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="<?php echo base_url(); ?>plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo base_url(); ?>plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>html/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>html/js/dashboard1.js"></script>
    <script src="<?php echo base_url(); ?>plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>



