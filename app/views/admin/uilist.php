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
											<th width="25%">Background Color</th>
											<th width="25%">Text Color</th>
											<th width="40%">Action</th>
										</tr>

									<?php
										
										if( $uilist ) {
											$i = 0;
											foreach( $uilist as $ui ) {
											$i++;
									?>
									
										<tr>
											<td><?php echo $i; ?></td>
											<td><?php echo $ui['bgcolor']; ?></td>
											<td><?php echo $ui['textcolor']; ?></td>
										
										<?php if( Session::get( 'level' ) == 1 ) { ?>	
											
											<td>
												<a class="btn btn-info" href="<?php echo BASE_URL; ?>/Admin/uiOption/<?php echo $ui['id']; ?>">Change UI</a> <!-- /.btn-btn-primary -->
												<a onclick="return confirm( 'Are You Sure To Delete..?' );" class="btn btn-danger" href="<?php echo BASE_URL; ?>/Admin/<?php echo $ui['id']; ?>">Delete</a> <!-- /.btn-btn-primary -->
											</td>

										<?php } else { ?>
												
												<td>
													<p>Not Permitted</p>
												</td>

										<?php } ?>

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