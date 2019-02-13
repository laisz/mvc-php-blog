
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

										// if( isset( $caterrors ) ) End here..
										}

									?>
									<?php if( $getcolor ) { foreach( $getcolor as $color ) { ?>
									<form action="<?php echo BASE_URL; ?>/Admin/changeUI/<?php echo $color['id'] ?>" method="post">
										<div class="row">		
											<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 m-top-bottom">
												<div class="form-group">
													<label for="bgcolor">Change Background Color:</label>
													<input type="color" id="bgcolor" name="bgcolor">
												</div> <!-- /.form-group -->
												<div class="form-group">
													<label for="textcolor">Change Text Color:</label>
													<input type="color" id="textcolor" name="textcolor">
												</div> <!-- /.form-group -->
												<div class="form-group">
													<button type="submit" class="btn btn-info" name="changeui">Change UI</button> <!-- /.btn .btn-info -->
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