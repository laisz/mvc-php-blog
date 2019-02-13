<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The Above 3 Meta Tag Must Come First -->
		<title>PHP With MVC Framework</title>
		<!-- FontAwesome File -->
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/font-awesome.min.css" type="text/css">
		<!-- Bootstrap File -->
		<!-- This Bootsrtap File Must be before of Above Main CSS file -->
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.min.css" type="text/css">
		<!-- Main CSS file -->
		<?php include 'css_folder2/own.css.php'; ?>
	</head>
	<body class="" style="background: url('<?php echo BASE_URL; ?>/images/amazed_pic2.jpeg') repeat fixed 0% 0%; position:relative;">
		
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
							<a href="#" class="navbar-brand">
								<b>LO<span style="color:deeppink;">G</span>O</b>
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
						Advance PHP with MVC Pattern | Creating Your Own Framework | TWLP
					</h3>
				</div> <!-- /.well .well-color-border -->
			</div> <!--/ .container -->
		</header> <!-- /.header -->
		<!-- Header Area End -->