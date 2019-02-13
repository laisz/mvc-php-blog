		
		
		<!-- Content Area Start -->
		<section class="content">
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>	
							Add Category !
						</h2>
					</div> <!-- /.panel-heading -->
					<div class="panel-body">
		
					</div> <!-- /.panel-body -->
					<div class="panel-body">
						<div class="row">		
							<div class="col-md-8 border-right">
								<div class="maincontent">	
									<?php

										if( isset( $msg ) ) {
											echo "<p class='alert alert-success'>" . $msg . "</p>";
										}

										if( isset( $error ) ) {
											echo "<p class='alert alert-danger'>" . $error . "</p>";
										}

									?>
									<form action="<?php echo BASE_URL; ?>/Category/insertCategory" method="post">
										<div class="row">		
											<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 m-top-bottom">
												<div class="form-group">
													<label for="name">Name:</label>
													<input type="text" id="name" name="name" autocomplete="off" maxlength="32" class="form-control" placeholder="Enter Category Name:">
												</div> <!-- /.form-group -->
												<div class="form-group">
													<label for="title">Title:</label>
													<input type="text" id="title" name="title" autocomplete="off" maxlength="32" class="form-control" placeholder="Enter Category Title:">
												</div> <!-- /.form-group -->
												<div class="form-group">
													<button type="submit" class="btn btn-success" name="submit">Add Category</button> <!-- /.btn .btn-success -->
													<button type="reset" class="btn btn-default">Clear</button> <!-- /.btn .btn-default -->
												</div> <!-- /.form-group -->
											</div> <!-- /.col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 .m-top-bottom -->
										</div> <!-- /.row -->
									</form>
								</div> <!-- /.maincontent -->
							</div> <!-- /.col-md-8 -->