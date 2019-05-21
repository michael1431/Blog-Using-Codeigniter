
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
<!--                        <a class="profile-pic" href="#"> <img class="rounded mx-auto d-block" src="<?php echo $admin_infos->a_pic; ?>"  width="35px" height="40px"/><b class="hidden-xs">Emon</b></a>-->
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
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
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
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                     </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                       
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Change Password</li>
                        </ol>
                    </div>
                </div>
                
                
                
                <div class="row">
                    
                    <div class="col-md-8 col-md-offset-2">
                        
                        <div class="white-box">
                             <?php echo form_open('Super_admin/paswrd_chng'); ?>
                            <?php echo form_hidden('a_password',$admin_info->a_password);?>
                            <?php //echo $admin_info->a_password;?>
              
                            <?php echo form_hidden('a_id',$this->session->userdata('a_id'));?>
                             <table class="table table-condensed table-striped">
                                            <thead>
                                                <tr class="btn-info text-center">
                                                    <td colspan="2"><h3 style="color: white;">Enter Your Information Below</h3></td>
                                                </tr>
                                                       <?php
                                    $messages = $this->session->flashdata('chng_msg');

                                    if($messages) {
                                      $msg_class = $this->session->flashdata('chng_msg_class');
                                           ?>
                                                <tr class="<?php echo $msg_class; ?> text-center text-white">
                                                    <td class="<?php echo $msg_class; ?> " colspan="2">
                                                        <b style="color: ">Message : <?php echo $messages; ?></b>
                                                    </td>
                                                </tr>

                                    <?php } else{ ?>
                                                <tr class="text-center">
                                                    <td colspan="2">
                                                        <b style="color: #0088cc;">Please input the current information.</b>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                                
                                                     

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-right"><h5><b>Old Password :</b></h5></td>
                                                    <td><b><input class="form-control" type="password" name="opass" placeholder="Enter Your Old Password" required="" /></b></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><h5><b>New Password :</b></h5></td>
                                                    <td><b><input class="form-control" type="password" name="npass" placeholder="Enter Your New Password" required="" /></b></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><h5><b>Confirm Password :</b></h5></td>
                                                    <td><b><input class="form-control" type="password" name="cpass" placeholder="Enter Your New Password Again" required="" /></b></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td colspan="2" class="text-right">
                                                        <a href="<?php echo base_url(); ?>Super_admin/homeAdmin" class="btn btn-danger pull-left"><b><i class="fa fa-reply-all"></i> Back</b></a>
                                                        <button type="submit" class="btn btn-primary"><b><i class="fa fa-check-circle"></i></b></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr class="btn-danger text-center">
                                                    <td colspan="2"><b></b></td>
                                                </tr>
                                            </tfoot>
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



