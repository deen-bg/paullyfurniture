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

	<title>Category | Paully Furniture </title>
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
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?=base_url('assets/img/logo/ms-icon-144x144.png');?>">
	<meta name="theme-color" content="#ffffff">

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

	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/bootstrap-table/bootstrap-table.css?v4.0.2');?>">

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
	<!-- Page -->
	<div class="page">
		<div class="page-content container-fluid">
	      	<!-- Panel Other -->
	      	<div class="panel">
		        <div class="panel-heading">
		          	<h3 class="panel-title">Category</h3>
		        </div>
		        <div class="panel-body">
		          	<div class="row row-lg">
			            <div class="col-md-12">
			              	<!-- Example Toolbar -->
			              	<div class="example-wrap">			                  
			                  	<div class="bootstrap-table">
			                  		<div class="fixed-table-toolbar">
			                  			<div class="bs-bars pull-left">
			                  				<div class="btn-group hidden-sm-down" id="exampleToolbar" role="group">
							                    <button type="button" class="btn btn-success btn-outline btn-sm" onclick="window.location.href = '<?=base_url('Admin/form_category');?>';">
							                      	<i class="icon wb-plus" aria-hidden="true"></i> Add 
							                    </button>
			                  				</div>
			                  			</div>
			                  		</div>
			                  		<div class="" style="padding-bottom: 0px;">
			                  			<div class="fixed-table-body">
										  <ul>
												  	<ol>
													  	<span class="badge badge-success">
														  <i class="icon wb-check" aria-hidden="true"></i> 
														</span> เปิด
													</ol>
													<ol>
														<span class="badge badge-danger">
															<i class="icon wb-close" aria-hidden="true"></i>
														</span> ปิด
													</ol>
											  </ul>
			                  				<table id="exampleTableToolbar" data-mobile-responsive="true" class="table table-hover" data-pagination="true" data-search="true" style="margin-top: 0px;">
			                    				<thead style="">
			                    					<tr>
			                    						<th style="" data-field="id" data-align="center">
			                    							<div class="th-inner ">#</div>
			                    							<div class="fht-cell"></div>
			                    						</th>
			                    						<th style="" data-field="name">
			                    							<div class="th-inner ">Name</div>
			                    							<div class="fht-cell"></div>
			                    						</th>
														<th style="" data-field="recommend" data-align="center">
			                    							<div class="th-inner ">Recommend</div>
			                    							<div class="fht-cell"></div>
			                    						</th>
														<th style="" data-field="Status" data-align="center">
			                    							<div class="th-inner ">Status</div>
			                    							<div class="fht-cell"></div>
			                    						</th>
			                    						<th style="" data-field="edit" data-align="center" data-width="120px">
			                    							<div class="th-inner "></div>
			                    							<div class="fht-cell"></div>
			                    						</th>
			                    					</tr>
			                    				</thead>
			                    				<?php if(!empty($categories)) : ?>
			                  					<tbody>
			                  						<?php 
													$i = 0;
													foreach($categories as $val_item) : 
													?>
			                  						<tr> 
			                  							<td class=""><?=$i+1; ?></td> 
			                  							<td style=""><?=$val_item['name']; ?></td>
														<td style="">
															<?php if ($val_item['is_recommend'] == '1') : ?>
			                  									<button class="btn btn-sm btn-success btn-icon btn-floating" type="button" onclick="sChange(<?=$val_item['id']; ?>, 0)"  data-toggle="tooltip" data-placement="top" title="YES"><i class="icon wb-check" aria-hidden="true"></i></button>
			                  								<?php else : ?>
			                  									<button class="btn btn-sm btn-danger btn-icon btn-floating" type="button" onclick="sChange(<?=$val_item['id']; ?>, 1)" data-toggle="tooltip" data-placement="top" title="NO"><i class="icon wb-close" aria-hidden="true"></i></button>
			                  								<?php endif; ?>
			                  							</td>
			                  							<td style="">
															<?php if ($val_item['is_active'] == '1') : ?>
																<span class="badge badge-success"><i class="icon wb-check" aria-hidden="true"></i></span>
			                  								<?php else : ?>
																<span class="badge badge-danger"><i class="icon wb-close" aria-hidden="true"></i></span>
			                  								<?php endif; ?>
			                  							</td>
														<td>
			                  								<button type="button" class="btn btn-round btn-warning btn-sm" onclick="window.location.href = '<?=base_url('Admin/edit_category/'.$val_item['id']);?>';"><i class="icon wb-pencil" aria-hidden="true"></i></button>
			                  								<button type="button" class="btn btn-round btn-danger btn-sm" onclick="delCategory(<?=$val_item['id'];?>, <?=$val_item['is_active'];?>)"><i class="icon wb-close" aria-hidden="true"></i></button>
			                  							</td> 
			                  						</tr>
			                  						<?php
			                  							$i++;
			                  						endforeach; 
			                  						?>
			                  					</tbody>
			                  					<?php endif; ?>
			                  				</table>
			                  			</div>
			                  			<div class="fixed-table-pagination" style="display: none;"></div>
			                  		</div>
				                  	<div class="clearfix"></div>
				                </div>
			              	</div>
			            </div>	         
		          	</div>
		        </div>
	      </div>
    </div>
	</div>
	<!-- End Page -->
	
	<!-- footer -->
	<?php
		$this->load->view('admin/footer');
	?>
	<div class="modal fade bs-example-modal-sm" id="modaldelete" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title" id="myModalLabel2">Cahange</h4>
				</div>
				<div class="modal-body">
					<h4>คุณต้องการลบสิ่งนี้หรือไม่ ?</h4>
				</div>
				<div class="modal-footer">
					<input type="hidden" id="cate_id" name="cate_id">
					<input type="hidden" id="cate_st" name="cate_st">
					<button type="button" class="btn btn-success" onclick="deleteAbout()"><i class="fa fa-check"></i> Confirm</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /modals -->
	<!-- modal change reccommed -->
	<div class="modal fade bs-example-modal-sm" id="modalIsRecommed" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title" id="myModalLabel2">สินค้าแนะนำ</h4>
				</div>
				<div class="modal-body">
					<h4>คุณต้องการเปลี่ยนสถานะ ใช่หรือไม่ ?</h4>
					<h6>สามารถ เปิด/ปิด รายการสินค้าแนะนำได้ทุกเมื่อ</h6>
				</div>
				<div class="modal-footer">
					<input type="hidden" id="p_id" name="p_id">
                    <input type="hidden" id="p_st" name="p_st">
					<button type="button" class="btn btn-success" onclick="changeIsRecommend()"><i class="fa fa-check"></i> Confirm</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

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

	<script src="<?=base_url('./assets/admin/vendor/bootstrap-table/bootstrap-table.js?v4.0.2');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/bootstrap-table/extensions/mobile/bootstrap-table-mobile.min.js?v4.0.2');?>"></script>

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
	<script src="<?=base_url('./assets/admin/assets/js/tables/bootstrap.js?v4.0.2');?>"></script>

	<script type="text/javascript">
		function delCategory(id, status)
		{
            var st = status;
            if(st == 1){
                var state = 0;
            } else {
                var state = 1;
            }
            console.log('state=' + state);
			$('#cate_id').val(id);
			$('#cate_st').val(state);
			$('#modaldelete').modal('show');
		}

		function deleteAbout()
		{
			$.ajax({
				type 	: 'POST',
				url 	: '<?=base_url("Admin/delCategory"); ?>',
				data 	: {id:$('#cate_id').val(),st:$('#cate_st').val(), action:'delCategory', '<?=$this->security->get_csrf_token_name(); ?>':'<?=$this->security->get_csrf_hash(); ?>'},
				success: function(data) {
					if (data = 'true') {
						alert("Success, to OK");
						location.reload();
					} else {
						alert("Error, to OK");
						location.reload();
					}      	
				}
			});
		}

		// change recommed
		function sChange(pid, state)
		{
			$('#p_id').val(pid);
            $('#p_st').val(state);
			$('#modalIsRecommed').modal('show');
		}
		function changeIsRecommend() {
            $.ajax({
				type 	: 'POST',
				url 	: '<?=base_url("Admin/category_isrecommend"); ?>',
				data 	: {id:$('#p_id').val(),st:$('#p_st').val(), action:'change', '<?=$this->security->get_csrf_token_name(); ?>':'<?=$this->security->get_csrf_hash(); ?>'},
				success: function(data) {
					if (data = 'true') {
						alert("Success, to OK");
						location.reload();
					} else {
						alert("Error, to OK");
						location.reload();
					}      	
				}
			});
        }
	</script>
</body>
</html>
