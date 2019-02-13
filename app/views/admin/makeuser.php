
							<div class="col-md-9">
								<div class="maincontent">
									<?php

										if( ! empty( $_GET['msg'] ) ) {
											$msg = unserialize( urldecode( $_GET['msg'] ) );
											foreach( $msg as $key => $val ) {
												echo "<p class='alert alert-danger'>" . $val . "</p>";
											}
										}

										if( isset( $usererrors ) ) {
											
											foreach( $usererrors as $errorkeys => $errorsvals ) {
												switch( $errorkeys ) {
													
													case 'username':
														foreach( $errorsvals as $error ) {
															echo "<p class='alert alert-danger'>username: " . $error . "</p>";
														}
													break;

													case 'password':
														foreach( $errorsvals as $error ) {
															echo "<p class='alert alert-danger'>password: " . $error . "</p>";
														}
													break;

													case 'level':
														foreach( $errorsvals as $error ) {
															echo "<p class='alert alert-danger'>level: " . $error . "</p>";
														}
													break;
												}
											}

										// if( isset( $usererrors ) ) End here..
										}

									?>
									<form action="<?php echo BASE_URL; ?>/User/addNewUser" method="post">
										<div class="row">		
											<div class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 m-top-bottom">
												<div class="form-group">
													<label for="username">Userame:</label>
													<input type="text" id="username" name="username" autocomplete="off" maxlength="32" class="form-control" placeholder="Enter Username:">
												</div> <!-- /.form-group -->
												<div class="form-group">
													<label for="password">Password:</label>
													<input type="text" id="password" name="password" autocomplete="off" maxlength="32" class="form-control" placeholder="Enter Password:">
												</div> <!-- /.form-group -->
												<div class="form-group">
													<label for="level">User Roles:</label>
													<select name="level" id="level" class="form-control">
														<option>Select User Role</option>
														<option value="2">Author</option>
														<option value="3">Contributor</option>
														<option value="4">Moderator</option>
													</select>
												</div> <!-- /.form-group -->
												<div class="form-group">
													<button type="submit" class="btn btn-info" name="adduser">Add User</button> <!-- /.btn .btn-info -->
													<button type="reset" class="btn btn-default">Clear</button> <!-- /.btn .btn-default -->
												</div> <!-- /.form-group -->
											</div> <!-- /.col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 .m-top-bottom -->
										</div> <!-- /.row -->
									</form>
								</div> <!-- /.maincontent -->	
							</div> <!-- /.col-md-9 -->
						</div> <!-- .row -->
					</div> <!-- /.panel-body -->
				</div> <!-- /.panel /.panel-default -->
			</div> <!--/ .container -->
		</section> <!-- /.content -->
		<!-- Content Area End -->