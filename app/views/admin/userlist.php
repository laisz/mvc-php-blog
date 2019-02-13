							<div class="col-md-9">
								<div class="maincontent">
									<?php

										if( ! empty( $_GET['msg'] ) ) {
											$msg = unserialize( urldecode( $_GET['msg'] ) );
											if( isset( $msg['msg'] ) ) {
												foreach( $msg as $key => $val ) {
													echo "<p class='alert alert-success'>" . $val . "</p>";
												}
											}

											if( isset( $msg['error'] ) ) {
												foreach( $msg as $key => $val ) {
													echo "<p class='alert alert-danger'>" . $val . "</p>";
												}
											}
										}

									?>
									<table class="table table-striped table-responsive">
										<tr>
											<th width="10%">Serial</th>
											<th width="30%">User Name</th>
											<th width="20%">Level</th>
											<th width="40%">Action</th>
										</tr>

											<?php
												if( $users ) {
													$i = 0;
													foreach( $users as $user ) {
													$i++;
											?>
									
										<tr>
											<td><?php echo $i; ?></td>
											<td><?php echo $user['username']; ?></td>
											<td>
												<?php

													if( $user['level'] == 1 ) {
														echo "Admin";
													} elseif( $user['level'] == 2 ) {
														echo "Author";
													} elseif( $user['level'] == 3 ) {
														echo "Contrubutor";
													} else {
														echo "Moderator";
													}
													
												?>
												
											</td>
											<td>
												<a class="btn btn-info" href="<?php echo BASE_URL; ?>/Admin/EditUser/<?php echo $user['id']; ?>">Edit</a> <!-- /.btn-btn-primary -->
												<a onclick="return confirm( 'Are You Sure To Delete..?' );" class="btn btn-danger" href="<?php echo BASE_URL; ?>/User/deleteUser/<?php echo $user['id']; ?>">Delete</a> <!-- /.btn-btn-primary -->
											</td>
										</tr>
											<?php } } ?>
									</table> <!-- /.table .table-striped -->
								</div> <!-- /.maincontent -->	
							</div> <!-- /.col-md-9 -->
						</div> <!-- .row -->
					</div> <!-- /.panel-body -->
				</div> <!-- /.panel /.panel-default -->
			</div> <!--/ .container -->
		</section> <!-- /.content -->
		<!-- Content Area End -->