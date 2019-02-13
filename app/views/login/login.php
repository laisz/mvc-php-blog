<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The Above 3 Meta Tag Must Come First -->
		<title>Login Page</title>
		<!-- FontAwesome File -->
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.min.css">
		<?php include 'css_folder2/ownlogin.css.php'; ?>
	</head>
	<body class="" style="background: url('<?php echo BASE_URL; ?>/images/sadat.jpg') no-repeat fixed 0 0; position:relative;">
		
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
			</div> <!--/ .container -->
		</header> <!-- /.header -->
		<!-- Header Area End -->		
		
		<!-- Content Area Start -->
		<section class="content">
			<div class="container">
				<div class="row">		
					<div class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 m-top-bottom">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2>	
									<b>Login Here</b>
								</h2>
							</div> <!-- /.panel-heading -->
							<div class="panel-body">
								<div class="maincontent">
									<form action="<?php echo BASE_URL; ?>/OurLogin/loginAuth" method="post">
										<div class="myform">
											<div class="form-group">
												<label for="username">Username:</label>
												<input type="text" id="username" name="username" autocomplete="off" maxlength="32" class="form-control" placeholder="Enter Username:">
											</div> <!-- /.form-group -->
											<div class="form-group">
												<label for="password">Password:</label>
												<input type="password" id="password" name="password" autocomplete="off" maxlength="32" class="form-control" placeholder="Enter Password:">
											</div> <!-- /.form-group -->
											<div class="form-group">
												<button type="submit" class="form-control bg-wh-color-yl" name="login">Log In</button> <!-- /.btn .btn-success -->
												<button type="reset" class="form-control bg-wh-color-yl">Clear</button> <!-- /.btn .btn-default -->
											</div> <!-- /.form-group -->
										</div> <!-- /.myform -->
									</form>
								</div> <!-- /.maincontent -->
							</div> <!-- /.panel-body -->
						</div> <!-- /.panel /.panel-default -->
					</div> <!-- /.col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 .m-top-bottom -->
				</div> <!-- /.row -->
			</div> <!--/ .container -->
		</section> <!-- /.content -->
		<!-- Content Area End -->
		<!-- Footer Area Start -->
		<footer class="footer">
			<div class="container">
				<div class="go-top">
					<i class="fa fa-angle-up"></i>
				</div> <!-- /.go-top -->
			</div> <!--/ .container -->
		</footer> <!--/ .footer -->
		<!-- Footer Area End -->
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo BASE_URL; ?>/js/jquery1.12.4.min.js" type="text/javascript"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo BASE_URL; ?>/js/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript">			

			$( document ).ready( function() {
				
				$( window ).scroll( function() {
					
					if( $( this ).scrollTop() > 500 ){
						$( ".go-top" ).fadeIn( 2000 );
					}else{
						$( ".go-top" ).fadeOut( 2000 );
					}
					
				} );


				$( ".go-top" ).click( function() {
					

					$( "html, body" ).animate( {
						//scrollTop : "+=300"
						scrollTop : 0
					}, 1500 );

				} );

			} );
			
			$( function() {
				
				$( "[data-toggle='tooltip']" ).tooltip();
				$( "[data-toggle='popover']" ).popover();
				
			} );

		</script>

	</body>
</html>