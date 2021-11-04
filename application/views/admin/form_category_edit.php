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

	<title>Edit About | Paully Furniture </title>
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
    <link type="text/css" rel="stylesheet" href="<?=base_url('./assets/admin/vendor/summernote/summernote-bs4.css');?>">
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

	<!-- Upload -->
	<link href="<?=base_url('./assets/admin/vendor/upload/css/jquery.fileuploader.css');?>" media="all" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/dropify/dropify.css');?>">

	<!-- Fonts -->
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/fonts/web-icons/web-icons.min.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/fonts/font-awesome/font-awesome.min.css');?>">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

	<!-- Scripts -->
	<script src="<?=base_url('./assets/admin/vendor/breakpoints/breakpoints.js');?>"></script>
	<script>
		Breakpoints();
	</script>
<style>
	optgroup{
		font-weight: 700;
	}
</style>
</head>

<body class="">
	<!-- menu -->
	<?php $this->load->view('admin/menu'); ?>
	<!-- end -->
		<!-- Page -->
		<div class="page">
		<div class="page-content container-fluid">
			<div class="row" data-plugin="matchHeight" data-by-row="true">
				<div class="col-xxl-12 col-lg-12">		
					<!-- Panel Static Labels -->
		          	<div class="panel">
			            <div class="panel-heading">
			              <h3 class="panel-title">Edit Category</h3>
			            </div>
			            <div class="panel-body container-fluid">
			              	<form action="<?=base_url('Admin/update_category');?>" id="aboutusAdd" name="aboutusAdd" class="form-horizontal" method="post" enctype="multipart/form-data">
							  
								<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >   
							  	<div class="form-group form-material" data-plugin="formMaterial">
				                	<label class="form-control-label" for="title">Name</label>
									<input type="text" class="form-control" id="name" name="name" value="<?=$cate_descs[0]['name']; ?>" required>
				                </div>
								<div class="form-group form-material form-material-file" data-plugin="formMaterial">
				                  	<label class="form-control-label" for="image">ภาพปก</label>
									<div id="width"></div>
			                      	<input type="file" id="covImg" name="covImg" data-plugin="dropify" 
									  data-default-file="<?=base_url('./assets/images/category/'. $cate_descs[0]['img_cover']);?>" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"/>
									<p class="help-block"><i>
									รองรับไฟล์ภาพ <br>
									ขนาดภาพ 920X720px <br> 
									ชื่อไฟล์เป็นภาษาอังกฤษเท่านั้น <br>
									ไฟล์นามสกุล .png .jpg .jpeg</i>
									</p>
				                </div>

				                <div class="text-right">
				                	<input type="hidden" name="category_id" value="<?=$cate_descs[0]['id']; ?>">
						            <button type="submit" id="btnsave" class="btn btn-animate btn-animate-side btn-success">
						              	<span><i class="icon wb-check" aria-hidden="true"></i> Save</span>
						            </button>
						            <button type="button" class="btn btn-animate btn-animate-side btn-default btn-outline" onclick="window.location.href = '<?=base_url('Admin/category');?>';">
						              	<span><i class="icon wb-close" aria-hidden="true"></i> Close</span>
						            </button>
          						</div>
			              	</form>
			            </div>
		          	</div>
		          	<!-- End Panel Static Labels -->			
				</div>
			</div>
		</div>
	</div>
	<!-- End Page -->
	
	<!-- footer -->
	<?php
		$this->load->view('admin/footer');
	?>
	
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
    <script type="text/javascript" src="<?=base_url('./assets/admin/vendor/summernote/summernote-bs4.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/switchery/switchery.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/intro-js/intro.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/screenfull/screenfull.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/slidepanel/jquery-slidePanel.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/skycons/skycons.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/aspieprogress/jquery-asPieProgress.min.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/matchheight/jquery.matchHeight-min.js');?>"></script>

	<script type="text/javascript">
        var uploadUrl = '<?=base_url('File_upload/upfile/');?>';
    </script>
	<script type="text/javascript">
		
		

		function progressHandlingFunction(e)
		{
			if(e.lengthComputable)
			{
				$('progress').attr({value:e.loaded, max:e.total});
				if (e.loaded == e.total) {
					$('progress').attr('value','0.0');
				}
			}
		}
		// validate main image size
		// $(document).ready(function(){
		// 	// $('#btn_submit').prop('disabled', true);
		// 	var _URL = window.URL || window.webkitURL;

		// 	$('#covImg').change(function () {
		// 		var file = $(this)[0].files[0];

		// 		img = new Image();
		// 		var imgwidth = 0;
		// 		var imgheight = 0;
		// 		var maxwidth = 773;
		// 		var maxheight = 621;
		// 		// 773X7621px
				

		// 		img.src = _URL.createObjectURL(file);
		// 		img.onload = function() {
		// 			imgwidth = this.width;
		// 			imgheight = this.height;
		// 			console.log('imgwidth=' + imgwidth);
		// 			console.log('imgheight=' + imgheight);
					
		// 			if(imgwidth == maxwidth && imgheight == maxheight){
		// 				$("#width").html("<label class='form-control-label' for='width' stlye='color:green;'>width: "+imgwidth+"X"+imgheight+ " <i class='fa fa-check-circle' aria-hidden='true' style='color:green'></i></label>");
		// 				$('#btnsave').prop('disabled', false);
		// 			}else{
		// 				$("#width").html("<label class='form-control-label' for='width' style='color:red'>Image size must be "+maxwidth+"X"+maxheight+ " <i class='fa fa-times-circle' aria-hidden='true' style='color:red'></i></label>");
		// 				$('#btnsave').prop('disabled', true);
		// 				$("#covImg").val(null);
		// 				return false;	
		// 			}
		// 		};
		// 		img.onerror = function() {

		// 			$("#response").text("not a valid file: " + file.type);
		// 		}
		// 	});
		// });
	</script>

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

	<!-- Upload -->
	<script src="<?=base_url('./assets/admin/vendor/upload/js/jquery.fileuploader.js');?>" type="text/javascript"></script>
	<script src="<?=base_url('./assets/admin/vendor/upload/js/custom.js');?>" type="text/javascript"></script>
	<script src="<?=base_url('./assets/admin/vendor/dropify/dropify.min.js');?>"></script>
</body>
</html>
