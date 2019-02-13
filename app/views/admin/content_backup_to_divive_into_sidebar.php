		
		
		<!-- Content Area Start -->
		<section class="content">
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>	
							<b>Login Here</b>
							<span class="pull-right">
								Log In | <b>Page</b>
							</span> <!-- /.pull-right -->
						</h2>
					</div> <!-- /.panel-heading -->
					<div class="panel-body">
						<div class="row">		
							<div class="col-md-8 border-right">
								<div class="maincontent">	
									<form action="<?php echo BASE_URL; ?>/Category/insertCategory" method="post">
										<div class="row">		
											<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 m-top-bottom">
												<div class="form-group">
													<label for="username">Username:</label>
													<input type="text" id="username" name="username" autocomplete="off" maxlength="32" class="form-control" placeholder="Enter Username:">
												</div> <!-- /.form-group -->
												<div class="form-group">
													<label for="password">Password:</label>
													<input type="password" id="password" name="password" autocomplete="off" maxlength="32" class="form-control" placeholder="Enter Password:">
												</div> <!-- /.form-group -->
												<div class="form-group">
													<button type="submit" class="btn btn-success" name="login">Log In</button> <!-- /.btn .btn-success -->
													<button type="reset" class="btn btn-default">Clear</button> <!-- /.btn .btn-default -->
												</div> <!-- /.form-group -->
											</div> <!-- /.col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 .m-top-bottom -->
										</div> <!-- /.row -->
									</form>
								</div> <!-- /.maincontent -->
							</div> <!-- /.col-md-8 -->
							<div class="col-md-4">
								<div class="sidecontent">
								</div> <!-- /.sidecontent -->	
							</div> <!-- /.col-md-4 -->
						</div> <!-- /.row -->
					</div> <!-- /.panel-body -->
				</div> <!-- /.panel /.panel-default -->
			</div> <!--/ .container -->
		</section> <!-- /.content -->
		<!-- Content Area End -->