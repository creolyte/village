<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<head>
	<title><?php echo (empty($layoutTitle))?CREO_PAGE_TITLE:$layoutTitle; ?></title>
	<meta name="description" content="<?php echo (empty($layoutDesc))?CREO_PAGE_DESCRIPTION:$layoutDesc; ?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!--Favicon-->
	<!-- <link rel="icon" href="<?php echo base_url('image/logo/favicon.ico') ?>" type="image/x-icon"> -->

	<!-- Fonts -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

	<!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('plugin/bootstrap/css/bootstrap.min.css'); ?>">
	<script src="<?php echo base_url('plugin/fontawesome-free-5.0.8/js/fontawesome-all.min.js'); ?>"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('plugin/devicons/css/devicons.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('plugin/simple-line-icons/css/simple-line-icons.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/general.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/'.CREO_TEMPLATE_PATH.'/main.css'); ?>">
	<?php if( !empty($layoutCss) ){ ?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($layoutCss); ?>">
	<?php } ?>

	<!-- jQuery -->
	<script src="<?php echo base_url('plugin/jquery/jquery-2.1.4.min.js'); ?>"></script>
	<script src="<?php echo base_url('plugin/jquery/jquery-ui.min.js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
