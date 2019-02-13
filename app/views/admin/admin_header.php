<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The Above 3 Meta Tag Must Come First -->
		<title>33 - Bootsrtap Practice_JS - Slice Corner CSS</title>
		<!-- FontAwesome File -->
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/font-awesome.min.css">
		<!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>/js/jquery-ui.min.css"> -->
		
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/animate.min.css">
		<?php include 'css_folder2/ownadmin.css.php'; ?>
		<style>
			

			/* background: url('<?php //echo BASE_URL; ?>/images/amazed_pic2.jpeg') repeat fixed 0% 0%; */
		</style>
	</head>
	<body class="" style=" position:relative;">
		
		<!-- Header Area Start -->
		<header class="header">
			<div class="container">
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">	
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#twlp">
								<span class="icon-bar"></span> <!-- /.icon-bar -->
								<span class="icon-bar"></span> <!-- /.icon-bar -->
								<span class="icon-bar"></span> <!-- /.icon-bar -->
							</button> <!-- /.navbar-toggle .collapsed -->
							<a href="#" class="navbar-brand" style="color:#fff;">
								<b>AD<span style="color:deeppink;">M</span>IN</b>
							</a> <!-- /.navbar-brand -->
						</div> <!-- /.navbar-header -->
						<div class="navbar-collapse collapse navbar-right" id="twlp">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo BASE_URL; ?>/Welcome/home">HompPage</a></li>
								<li><a href="<?php echo BASE_URL; ?>/Category/categoryList">Category</a></li>
								<li><a href="<?php echo BASE_URL; ?>/Welcome/test">Test</a></li>
								<li><a href="<?php echo BASE_URL; ?>/Category/catById">catById</a></li>
								<li><a href="<?php echo BASE_URL; ?>/Admin/home">AdminPanel</a></li>
								<li><a href="<?php echo BASE_URL; ?>/OurLogin/login">Log-In</a></li>
								<li><a href="<?php echo BASE_URL; ?>/OurLogin/logout">LogOut</a></li>
								<li><a href="<?php echo BASE_URL; ?>/Category/updateCatPage">Update Category</a></li>
								<li><a href="<?php echo BASE_URL; ?>/Category/addCategory">Add Category</a></li>
							</ul> <!-- /.nav navbar-nav -->
						</div> <!-- /.navbar-collapse .collapse .navbar-right #twlp -->
					</div> <!-- /.container-fluid -->
				</nav> <!-- /.navbar navbar-default -->
				<div class="well well-color-border">
					<h3>
						<marquee>Advance PHP with MVC Pattern | Creating Your Own Framework | TWLP</marquee>
					</h3>
				</div> <!-- /.well .well-color-border -->
			</div> <!--/ .container -->
		</header> <!-- /.header -->
		<!-- Header Area End -->
		
		<!-- Content Area Start -->
		<section class="content">
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>	
							<div class="row">
								<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">		
									<b>Admin Panel</b>
								</div> <!-- /.col-md-4 /.col-lg-4 /.col-sm-4 /.col-xs-12 -->
								<div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">	
									<span class="pull-right">
										<?php if( isset( $mypage ) ) { ?>
											Admin's | <b><?php echo $mypage; ?></b>
										<?php } else { ?>
											Admin's | <b><?php echo "Home"; ?></b>
										<?php } ?>
									</span> <!-- /.pull-right -->
								</div> <!-- /.col-md-8 /.col-lg-8 /.col-sm-8 /.col-xs-12 -->
							</div> <!-- /.row -->
						</h2>
					</div> <!-- /.panel-heading -->