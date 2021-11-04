<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login | Paully Furniture </title>
	
	<link rel="icon" type="image/png" href="<?=base_url('assets/img/logo/logo.png');?>" />
    <link rel="shortcut icon" type="image/ico" href="<?=base_url('assets/img/logo/logo.png');?>">
    <link rel="apple-touch-icon-precomposed" type="image/ico" sizes="114×114" href="<?=base_url('assets/img/logo/logo.png');?>">
    <link rel="apple-touch-icon-precomposed" type="image/ico" sizes="72×72" href="<?=base_url('assets/img/logo/logo.png');?>">


  	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/css/bootstrap.css?v4.0.2');?>">
  	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/css/bootstrap-extend.css?v4.0.2');?>">
  	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/css/site.css?v4.0.2');?>">


  	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/css/skintools.min.css?v4.0.2');?>">
	<script src="<?=base_url('./assets/admin/assets/js/Plugin/skintools.js?v4.0.2');?> "></script>
  	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/animsition/animsition.min.css?v4.0.2');?>">
  	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/asscrollable/asScrollable.min.css?v4.0.2');?> ">
  	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/switchery/switchery.min.css?v4.0.2');?>">
  	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/intro-js/introjs.min.css?v4.0.2');?>">
  	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/slidepanel/slidePanel.min.css?v4.0.2');?>">
  	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/flag-icon-css/flag-icon.min.css?v4.0.2');?>">
  	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/css/login.css?v4.0.2');?>">
  	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/fonts/web-icons/web-icons.css?v4.0.2');?>">
  	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/fonts/brand-icons/brand-icons.css?v4.0.2');?>">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
</head>

<body class="animsition page-login layout-full page-dark" style="animation-duration: 800ms; opacity: 1;">
	<div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
		<div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
			<div class="brand">
				<img class="brand-img" src="<?=base_url('assets/img/logo/logo.png');?>">
				<h2 class="brand-text">Paullyfurniture</h2>
			</div>

			<div class="text-center">
				<form action="<?=base_url('Auth/isLogedIn');?>" method="post">
					<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" 
                    value="<?=$this->security->get_csrf_hash();?>" >
					<div class="form-group">
						<label class="sr-only" for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label class="sr-only" for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					</div>
					<input type="hidden" id="is_login" name="is_login" value="1" />
					<button type="submit" class="btn btn-primary btn-block">Sign in</button>
				</form>
			</div>			

			<footer class="page-copyright page-copyright-inverse">
				<p>Copyright © 2021 - All Rights Reserved.</p>
			</footer>
		</div>
	</div>
</body>
</html>
 
 
