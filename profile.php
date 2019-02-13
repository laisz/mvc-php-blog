		<?php include 'inc_header_footer/header.php'; ?>
		
		<!-- Content Area Start -->
		<section class="content">
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>	
							Your Profile | Edit Your Profile Info
							<span class="pull-right">
								<a href="index.php" class="btn btn-primary">Back</a>
							</span> <!-- /.pull-right -->
						</h2>
					</div> <!-- /.panel-heading -->
					<div class="panel-body">
						<form action="" method="post">
							<div class="row">		
								<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
									<div class="form-group">
										<label for="username">Update Name:</label>
										<input type="text" id="name" name="name" class="form-control" placeholder="Enter Username:" required>
									</div> <!-- /.form-group -->
									<div class="form-group">
										<label for="username">Update Username:</label>
										<input type="text" id="username" name="username" class="form-control" placeholder="Enter Username:" required>
									</div> <!-- /.form-group -->
									<div class="form-group">
										<label for="mail">Update E-Mail:</label>
										<input type="text" id="email" name="email" class="form-control" placeholder="Enter E-Mail:" required>
									</div> <!-- /.form-group -->
									<div class="form-group">
										<label for="pass">Update Password:</label>
										<input type="password" id="password" name="password" class="form-control" placeholder="Enter Password:" required>
									</div> <!-- /.form-group -->
									<div class="form-group">
										<label for="pass">Confirm Password:</label>
										<input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Enter Password:" required>
									</div> <!-- /.form-group -->
									<div class="form-group">
										<label for="upld">Edit Profile Picture:</label>
										<input type="file" id="upload" name="upload" class="form-control">
										<p class="help-block">Upload a Photo here</p> <!-- /.help-block -->
									</div> <!-- /.form-group -->
									<div class="form-group">
										<button type="submit" class="btn btn-success" name="update">Update</button> <!-- /.btn .btn-success -->
									</div> <!-- /.checkbox -->
								</div> <!-- /.col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 -->
							</div> <!-- /.row -->
						</form>
					</div> <!-- /.panel-body -->
				</div> 
				
			</div> <!--/ .container -->
		</section> <!-- /.content -->
		<!-- Content Area End -->
		
		<?php include 'inc_header_footer/footer.php'; ?>