
							<div class="col-md-9">
								<div class="maincontent">
									<?php

										if( ! empty( $_GET['msg'] ) ) {
											$msg = unserialize( urldecode( $_GET['msg'] ) );
											foreach( $msg as $key => $val ) {
												echo "<p class='alert alert-danger'>" . $val . "</p>";
											}
										}


										if( isset( $caterrors ) ) {
											
											foreach( $caterrors as $errorkeys => $errorsvals ) {
												switch( $errorkeys ) {
													
													case 'name':
														foreach( $errorsvals as $error ) {
															echo "<p class='alert alert-danger'>name: " . $error . "</p>";
														}
													break;

													case 'title':
														foreach( $errorsvals as $error ) {
															echo "<p class='alert alert-danger'>title: " . $error . "</p>";
														}
													break;
												}
											}

										// if( isset( $posterrors ) ) End here..
										}

										

									?>


									<?php if( $catbyid ) { foreach( $catbyid as $cat ) { ?>
										<form action="<?php echo BASE_URL; ?>/Admin/updateCategory/<?php echo $cat['id']; ?>" method="post">
											<div class="row">		
												<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 m-top-bottom">
													<input type="hidden" name="id" value="<?php echo $cat['id']; ?>">
													<div class="form-group">
														<label for="name">Name:</label>
														<input type="text" id="name" name="name" autocomplete="off" maxlength="32" class="form-control" value="<?php echo $cat['name']; ?>">
													</div> <!-- /.form-group -->
													<div class="form-group">
														<label for="title">Title:</label>
														<input type="text" id="title" name="title" autocomplete="off" maxlength="32" class="form-control" value="<?php echo $cat['title']; ?>">
													</div> <!-- /.form-group -->
													<div class="form-group">
														<button type="submit" class="btn btn-info" name="updatecat">Update Category</button> <!-- /.btn .btn-info -->
														<button type="reset" class="btn btn-default">Clear</button> <!-- /.btn .btn-default -->
													</div> <!-- /.form-group -->
												</div> <!-- /.col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 .m-top-bottom -->
											</div> <!-- /.row -->
										</form>
									<?php } } ?>
								</div> <!-- /.maincontent -->	
							</div> <!-- /.col-md-9 -->
						</div> <!-- .row -->
					</div> <!-- /.panel-body -->
				</div> <!-- /.panel /.panel-default -->
			</div> <!--/ .container -->
		</section> <!-- /.content -->
		<!-- Content Area End -->