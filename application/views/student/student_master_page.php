<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>CSE PSTU Student Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- The styles -->
        <link  href="<?php echo base_url() ?>asset/css/bootstrap-cerulean.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>

        <link href="<?php echo base_url() ?>asset/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>asset/css/charisma-app.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>asset/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <link href='<?php echo base_url() ?>asset/css/fullcalendar.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
        <link href='<?php echo base_url() ?>asset/css/chosen.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/uniform.default.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/colorbox.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/jquery.cleditor.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/jquery.noty.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/noty_theme_default.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/elfinder.min.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/elfinder.theme.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/opa-icons.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/uploadify.css' rel='stylesheet'>

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The fav icon -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <script src="<?php echo base_url(); ?>js/country.js" type="text/javascript"></script>
        <script type="text/javascript">

            function check_delete() {
                var mes = confirm('You sure want to delete it?');
                if (mes) {
                    return true;
                } else {
                    return false;
                }

            }

        </script>
    </head>

    <body>
        <!-- topbar starts -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>


                    <!-- theme selector starts -->

                    <!-- theme selector ends -->

                    <!-- user dropdown starts -->
                    <div class="btn-group pull-right" >
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user"></i><span class="hidden-phone"> <?php echo $this->session->userdata('student_name') ?></span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url(); ?>super_student/logout">Logout</a></li>
                        </ul>
                    </div>
                    <!-- user dropdown ends -->

                    <div class="top-nav nav-collapse">
                        <ul class="nav">
                            <li><a href="<?php echo base_url(); ?>">Visit Site</a></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- topbar ends -->
        <div class="container-fluid">
            <div class="row-fluid">



                <!-- left menu starts -->
                <div class="span2 main-menu-span">
                    <div class="well nav-collapse sidebar-nav">
                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li class="nav-header hidden-tablet">Main</li>
                           

                            <li><a class="ajax-link" href="<?php echo base_url(); ?>super_student/change_password"><i class="icon-home"></i><span class="hidden-tablet"> Change Password</span></a></li>                        

                            <li><a class="ajax-link" href="<?php echo base_url(); ?>super_student/manage_student_self"><i class="icon-edit"></i><span class="hidden-tablet"> View Profile</span></a></li>
                            
                            
                            
                             <li><a class="ajax-link" href="<?php echo base_url(); ?>super_student/student_enrollment"><i class="icon-edit"></i><span class="hidden-tablet"> Enroll Courses </span></a></li>
                              <li><a class="ajax-link" href="<?php echo base_url(); ?>super_student/manage_student_self"><i class="icon-edit"></i><span class="hidden-tablet"> Get Result</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>super_student/update_image/<?php echo $this->session->userdata('student_id') ?>"><i class="icon-edit"></i><span class="hidden-tablet"> Update Profile Image</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>super_student/add_blog"><i class="icon-edit"></i><span class="hidden-tablet">Add Blog Post</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>super_student/view_blog"><i class="icon-edit"></i><span class="hidden-tablet">View Blog</span></a></li>

                            <li><a class="ajax-link" href="<?php echo base_url(); ?>super_student/manage_blog"><i class="icon-edit"></i><span class="hidden-tablet">Manage Blog Post</span></a></li>


                    </div><!--/.well -->
                </div><!--/span-->
                <!-- left menu ends -->

                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>

                <div id="content" class="span10">
                    <!-- content starts -->

                    <?php echo $student_main_content; ?>

                    <!-- content ends -->
                </div><!--/#content.span10-->
            </div><!--/fluid-row-->

            <hr>

            <div class="modal hide fade" id="myModal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">Ã—</button>
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

            <footer>

            </footer>

        </div><!--/.fluid-container-->

        <!-- external javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <!-- jQuery -->
        <script src="<?php echo base_url() ?>asset/js/jquery-1.7.2.min.js"></script>
        <!-- jQuery UI -->
        <script src="<?php echo base_url() ?>asset/js/jquery-ui-1.8.21.custom.min.js"></script>
        <!-- transition / effect library -->
        <script src="<?php echo base_url() ?>asset/js/bootstrap-transition.js"></script>
        <!-- alert enhancer library -->
        <script src="<?php echo base_url() ?>asset/js/bootstrap-alert.js"></script>
        <!-- modal / dialog library -->
        <script src="<?php echo base_url() ?>asset/js/bootstrap-modal.js"></script>
        <!-- custom dropdown library -->
        <script src="<?php echo base_url() ?>asset/js/bootstrap-dropdown.js"></script>
        <!-- scrolspy library -->
        <script src="<?php echo base_url() ?>asset/js/bootstrap-scrollspy.js"></script>
        <!-- library for creating tabs -->
        <script src="<?php echo base_url() ?>asset/js/bootstrap-tab.js"></script>
        <!-- library for advanced tooltip -->
        <script src="<?php echo base_url() ?>asset/js/bootstrap-tooltip.js"></script>
        <!-- popover effect library -->
        <script src="<?php echo base_url() ?>asset/js/bootstrap-popover.js"></script>
        <!-- button enhancer library -->
        <script src="<?php echo base_url() ?>asset/js/bootstrap-button.js"></script>
        <!-- accordion library (optional, not used in demo) -->
        <script src="<?php echo base_url() ?>asset/js/bootstrap-collapse.js"></script>
        <!-- carousel slideshow library (optional, not used in demo) -->
        <script src="<?php echo base_url() ?>asset/js/bootstrap-carousel.js"></script>
        <!-- autocomplete library -->
        <script src="<?php echo base_url() ?>asset/js/bootstrap-typeahead.js"></script>
        <!-- tour library -->
        <script src="<?php echo base_url() ?>asset/js/bootstrap-tour.js"></script>
        <!-- library for cookie management -->
        <script src="<?php echo base_url() ?>asset/js/jquery.cookie.js"></script>
        <!-- calander plugin -->
        <script src='<?php echo base_url() ?>asset/js/fullcalendar.min.js'></script>
        <!-- data table plugin -->
        <script src='<?php echo base_url() ?>asset/js/jquery.dataTables.min.js'></script>

        <!-- chart libraries start -->
        <script src="<?php echo base_url() ?>asset/js/excanvas.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery.flot.min.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery.flot.resize.min.js"></script>
        <!-- chart libraries end -->

        <!-- select or dropdown enhancer -->
        <script src="<?php echo base_url() ?>asset/js/jquery.chosen.min.js"></script>
        <!-- checkbox, radio, and file input styler -->
        <script src="<?php echo base_url() ?>asset/js/jquery.uniform.min.js"></script>
        <!-- plugin for gallery image view -->
        <script src="<?php echo base_url() ?>asset/js/jquery.colorbox.min.js"></script>
        <!-- rich text editor library -->
        <script src="<?php echo base_url() ?>asset/js/jquery.cleditor.min.js"></script>
        <!-- notification plugin -->
        <script src="<?php echo base_url() ?>asset/js/jquery.noty.js"></script>
        <!-- file manager library -->
        <script src="<?php echo base_url() ?>asset/js/jquery.elfinder.min.js"></script>
        <!-- star rating plugin -->
        <script src="<?php echo base_url() ?>asset/js/jquery.raty.min.js"></script>
        <!-- for iOS style toggle switch -->
        <script src="<?php echo base_url() ?>asset/js/jquery.iphone.toggle.js"></script>
        <!-- autogrowing textarea plugin -->
        <script src="<?php echo base_url() ?>asset/js/jquery.autogrow-textarea.js"></script>
        <!-- multiple file upload plugin -->
        <script src="<?php echo base_url() ?>asset/js/jquery.uploadify-3.1.min.js"></script>
        <!-- history.js for cross-browser state change on ajax -->
        <script src="<?php echo base_url() ?>asset/js/jquery.history.js"></script>
        <!-- application script for Charisma demo -->
        <script src="<?php echo base_url() ?>asset/js/charisma.js"></script>


    </body>
</html>
