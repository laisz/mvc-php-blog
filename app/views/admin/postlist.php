							
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

									<table class="table table-striped table-responsive datatable">
										<thead>	
											<tr>
												<th width="5%">Serial</th>
												<th width="20%">Title</th>
												<th width="30%">Content</th>
												<th width="15%">Category</th>
												<th width="30%">Action</th>
											</tr>
										</thead>
										<tbody>

									<?php
										if( $allpost ) {
											$i = 0;
											foreach( $allpost as $post ) {
											$i++;
									?>
									
											<tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $post['title']; ?></td>
												<td><?php if( strlen( $post['content'] ) > 50 ) { echo substr( $post['content'], 0, 50 ); } ?></td>
												<td><?php echo $post['name']; ?></td>
											<?php if( Session::get( 'level' ) == 1 ) { ?>	
												<td>
													<a class="btn btn-info" href="<?php echo BASE_URL; ?>/Admin/editArticle/<?php echo $post['id']; ?>">Edit</a> <!-- /.btn-btn-primary -->
													<a onclick="return confirm( 'Are You Sure To Delete..?' );" class="btn btn-danger" href="<?php echo BASE_URL; ?>/Admin/deleteArticle/<?php echo $post['id']; ?>">Delete</a> <!-- /.btn-btn-primary -->
												</td>
											<?php } else { ?>
												<td>
													<p>Not Permitted</p>
												</td>
											<?php }?>
											</tr>
									<?php } } ?>
										</tbody>
									</table> <!-- /.table .table-striped -->
								</div> <!-- /.maincontent -->	
							</div> <!-- /.col-md-9 -->
						</div> <!-- .row -->
					</div> <!-- /.panel-body -->
				</div> <!-- /.panel /.panel-default -->
			</div> <!--/ .container -->
		</section> <!-- /.content -->
		<!-- Content Area End -->