<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Admin Panel</title>
            <script src='<?php echo base_url()?>tinymce/tinymce.min.js'></script>
        <script>tinymce.init({
            selector: '#myTextarea',
    height: 500,
    theme: 'modern',
    plugins: [
      'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen',
      'insertdatetime media nonbreaking save table contextmenu directionality',
      'emoticons template paste textcolor colorpicker textpattern imagetools'
    ],
    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    toolbar2: 'print preview media | forecolor backcolor emoticons',
    image_advtab: true
        });</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<!-- The styles -->
	<link  href="<?php echo base_url()?>asset/css/bootstrap-cerulean.css" rel="stylesheet">
	<link  href="<?php echo base_url()?>asset/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="<?php echo base_url()?>asset/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url()?>asset/css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url()?>asset/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo base_url()?>asset/css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo base_url()?>asset/css/chosen.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo base_url()?>asset/css/uploadify.css' rel='stylesheet'>
     
                    
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
        <script src="<?php echo base_url();?>js/country.js" type="text/javascript"></script>
        <script type="text/javascript">
            
           function check_delete(){
                var mes=confirm('You sure want to delete it?');
                if(mes){
                    return true;
                }else{
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
						<i class="icon-user"></i><span class="hidden-phone"> <?php echo $this->session->userdata('full_name')?></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
                                                <li><a href="<?php echo base_url();?>super_admin/logout">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="<?php echo base_url();?>">Visit Site</a></li>
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
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
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin"><i class="icon-home"></i><span class="hidden-tablet"> Dashbord</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/see_sender_message"><i class="icon-edit"></i><span class="hidden-tablet"> View Messages</span></a></li>
						
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/change_password"><i class="icon-eye-open"></i><span class="hidden-tablet"> Change Password</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_banner"><i class="icon-eye-open"></i><span class="hidden-tablet"> Update Banner</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_slider"><i class="icon-eye-open"></i><span class="hidden-tablet"> Update Slider Image </span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_tab"><i class="icon-eye-open"></i><span class="hidden-tablet"> Update Tab Menu </span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_department"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Department</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/manage_department"><i class="icon-edit"></i><span class="hidden-tablet"> Manage Department</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_session"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add session</span></a></li>
			         <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/manage_session"><i class="icon-edit"></i><span class="hidden-tablet"> Manage session</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_teacher"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Teacher</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/manage_teacher"><i class="icon-edit"></i><span class="hidden-tablet"> Manage Teacher</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_student"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Student</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/manage_student"><i class="icon-edit"></i><span class="hidden-tablet"> Manage Student</span></a></li>
                                          <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_file"><i class="icon-picture"></i><span class="hidden-tablet"> Add Notice</span></a></li>                           
                                                
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/manage_notice"><i class="icon-align-justify"></i><span class="hidden-tablet">Manage notice</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_files"><i class="icon-picture"></i><span class="hidden-tablet"> Add News and Events</span></a></li>   
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_semester"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Semester</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/manage_semester"><i class="icon-edit"></i><span class="hidden-tablet"> Manage Semester</span></a></li>
                                               <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_result"><i class="icon-edit"></i><span class="hidden-tablet"> Upload Result</span></a></li>
                                                 <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_gallery_category"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Gallery Category</span></a></li>
                                                 <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_gallery_image"><i class="icon-edit"></i><span class="hidden-tablet"> Upload Gallery Image</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/manage_gallery_category"><i class="icon-edit"></i><span class="hidden-tablet"> Manage Gallery Category</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_course"><i class="icon-edit"></i><span class="hidden-tablet"> Add course</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/manage_course"><i class="icon-edit"></i><span class="hidden-tablet"> Manage course</span></a></li>
                                                 <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_blog"><i class="icon-edit"></i><span class="hidden-tablet">Add Blog</span></a></li>
                                                 <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/view_blog"><i class="icon-edit"></i><span class="hidden-tablet">View Blog</span></a></li>
                                                
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/manage_teacher_files"><i class="icon-edit"></i><span class="hidden-tablet"> Manage Course Materials</span></a></li>
                                                      <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_download_file"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Form</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/manage_download_file"><i class="icon-edit"></i><span class="hidden-tablet"> Manage Form</span></a></li>
                                                
                                                                          <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_staff"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Staff</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/manage_staff"><i class="icon-edit"></i><span class="hidden-tablet"> Manage Staff</span></a></li>
                                                
                                                                          <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_dean_office_staff"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Dean Office Staff</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/manage_dean_office_staff"><i class="icon-edit"></i><span class="hidden-tablet"> Manage Dean Office Staff</span></a></li>
                                                
                                                
                                                       <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/add_emba_office_staff"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add EMBA Office Staff</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/manage_emba_office_staff"><i class="icon-edit"></i><span class="hidden-tablet"> Manage EMBA Office Staff</span></a></li>
                                                
                                                
                                                
                                                <li><a class="ajax-link" href="<?php echo base_url();?>super_admin/manage_about"><i class="icon-edit"></i><span class="hidden-tablet"> Manage CSE About</span></a></li>
						
						
					</ul>
					
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
                       
                            
                                                       <?php echo $admin_main_content;?>
                        
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
	<script src="<?php echo base_url()?>asset/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo base_url()?>asset/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo base_url()?>asset/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo base_url()?>asset/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?php echo base_url()?>asset/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo base_url()?>asset/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="<?php echo base_url()?>asset/js/excanvas.js"></script>
	<script src="<?php echo base_url()?>asset/js/jquery.flot.min.js"></script>
	<script src="<?php echo base_url()?>asset/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url()?>asset/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url()?>asset/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo base_url()?>asset/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo base_url()?>asset/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo base_url()?>asset/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo base_url()?>asset/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo base_url()?>asset/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo base_url()?>asset/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo base_url()?>asset/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo base_url()?>asset/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo base_url()?>asset/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo base_url()?>asset/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo base_url()?>asset/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url()?>asset/js/charisma.js"></script>
	
		
</body>
</html>
