<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1 Sherin</title>

	<link href="<?php echo get_template_directory_uri().'/css/font-awesome.css';?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri().'/css/bootstrap.css';?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/style.css';?>">
    <script src="<?php echo get_template_directory_uri().'/js/jquery.js';?>"></script>

<?php
wp_head();
?>
</head>
<body>

<div id="wrap">

<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-xs-8 col-sm-6">
				<a class="logo" href="index.html">Labb 1</a>
			</div>
			<div class="col-sm-6 hidden-xs">
				<?php 
				get_search_form();
				?>
			</div>
			<div class="col-xs-4 text-right visible-xs">
				<div class="mobile-menu-wrap">
					<i class="fa fa-search"></i>
					<i class="fa fa-bars menu-icon"></i>
				</div>
			</div>
		</div>
	</div>
</header>
