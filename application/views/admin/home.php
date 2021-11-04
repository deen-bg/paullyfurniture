<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Paully Furniture">
	<meta name="author" content="Paully Furniture">

	<title>Home | Paully Furniture </title>

	<link rel="apple-touch-icon" sizes="57x57" href="<?=base_url('assets/img/logo/apple-icon-57x57.png');?>">
	<link rel="apple-touch-icon" sizes="60x60" href="<?=base_url('assets/img/logo/apple-icon-60x60.png');?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url('assets/img/logo/apple-icon-72x72.png');?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('assets/img/logo/apple-icon-76x76.png');?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url('assets/img/logo/apple-icon-114x114.png');?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?=base_url('assets/img/logo/apple-icon-120x120.png');?>">
	<link rel="apple-touch-icon" sizes="144x144" href="<?=base_url('assets/img/logo/apple-icon-144x144.png');?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?=base_url('assets/img/logo/apple-icon-152x152.png');?>">
	<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/img/logo/apple-icon-180x180.png');?>">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?=base_url('assets/img/logo/android-icon-192x192.png');?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?=base_url('assets/img/logo/favicon-32x32.png');?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=base_url('assets/img/logo/favicon-96x96.png');?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/img/logo/favicon-16x16.png');?>">
	<link rel="manifest" href="<?=base_url('assets/img/logo/manifest.json');?>">
	<meta name="msapplication-TileColor" content="#000000">
	<meta name="msapplication-TileImage" content="<?=base_url('assets/img/logo/ms-icon-144x144.png');?>">
	<meta name="theme-color" content="#000000">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/css/bootstrap.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/css/bootstrap-extend.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/css/site.css');?>">

	<!-- Plugins -->
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/animsition/animsition.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/asscrollable/asScrollable.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/switchery/switchery.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/intro-js/introjs.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/slidepanel/slidePanel.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/flag-icon-css/flag-icon.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/css/v2.css');?>">


	<!-- Fonts -->
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/fonts/web-icons/web-icons.min.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/fonts/font-awesome/font-awesome.min.css');?>">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

	<!-- Scripts -->
	<script src="<?=base_url('./assets/admin/vendor/breakpoints/breakpoints.js');?>"></script>
	<script>
		Breakpoints();
	</script>
</head>
<body class="">
	<!-- menu -->
	<?php $this->load->view('admin/menu'); ?>
	<!-- end -->

	<!-- content Page -->
	<div class="page">
		<div class="page-header h-300 mb-30">
      		<div class="text-center blue-grey-800 m-0 mt-50">
		        <div class="font-size-50 mb-30 blue-grey-800">- Paully Furniture -</div>
		        <ul class="list-inline font-size-14">
		          	<li class="list-inline-item">
			            <i class="icon wb-settings mr-5" aria-hidden="true"></i> Back Office Management system
			        </li>
		        </ul>
      		</div>
    	</div>	
		<div class="page-content container-fluid">
			<div class="row" data-plugin="matchHeight" data-by-row="true">
				<div class="col-xxl-12 col-lg-12">					
				</div>
			</div>
		</div>
	</div>
	<!-- End Page -->
	<!-- footer -->
	<?php
		$this->load->view('admin/footer');
	?>
	<!-- script -->
	<!-- Core-->
	<script src="<?=base_url('./assets/admin/vendor/babel-external-helpers/babel-external-helpers.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/jquery/jquery.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/popper-js/umd/popper.min.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/bootstrap/bootstrap.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/animsition/animsition.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/mousewheel/jquery.mousewheel.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/asscrollbar/jquery-asScrollbar.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/asscrollable/jquery-asScrollable.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/ashoverscroll/jquery-asHoverScroll.js');?>"></script>

	<!-- Plugins -->
	<script src="<?=base_url('./assets/admin/vendor/switchery/switchery.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/intro-js/intro.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/screenfull/screenfull.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/slidepanel/jquery-slidePanel.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/skycons/skycons.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/aspieprogress/jquery-asPieProgress.min.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/matchheight/jquery.matchHeight-min.js');?>"></script>

	<!-- Scripts -->
	<script src="<?=base_url('./assets/admin/assets/js/Component.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Base.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Config.js');?>"></script>

	<script src="<?=base_url('./assets/admin/assets/js/Section/Menubar.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Section/GridMenu.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Section/Sidebar.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Section/PageAside.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin/menu.js');?>"></script>

	<script src="<?=base_url('./assets/admin/assets/js/config/colors.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/config/tour.js');?>"></script>

	<!-- Page -->
	<script src="<?=base_url('./assets/admin/assets/js/Site.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin/asscrollable.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin/slidepanel.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin/switchery.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin/matchheight.js');?>"></script>

	<script src="<?=base_url('./assets/admin/assets/js/v1.js');?>"></script>
	<!-- end script -->
</body>
</html>
	

	
