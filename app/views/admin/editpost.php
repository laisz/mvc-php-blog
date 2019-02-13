
							<div class="col-md-9">
								<div class="maincontent">
									<?php

										if( ! empty( $_GET['msg'] ) ) {
											$msg = unserialize( urldecode( $_GET['msg'] ) );
											foreach( $msg as $key => $val ) {
												echo "<p class='alert alert-danger'>" . $val . "</p>";
											}
										}

										if( isset( $posterrors ) ) {
											
											foreach( $posterrors as $errorkeys => $errorsvals ) {
												switch( $errorkeys ) {
													
													case 'title':
														foreach( $errorsvals as $error ) {
															echo "<p class='alert alert-danger'>title: " . $error . "</p>";
														}
													break;

													case 'content':
														foreach( $errorsvals as $error ) {
															echo "<p class='alert alert-danger'>content: " . $error . "</p>";
														}
													break;

													case 'cat':
														foreach( $errorsvals as $error ) {
															echo "<p class='alert alert-danger'>cat: " . $error . "</p>";
														}
													break;
												}
											}

										// if( isset( $posterrors ) ) End here..
										}

									?>

									<?php
										if( $singlepostbyid ) {
											foreach( $singlepostbyid as $post ) {
									?>
									<form action="<?php echo BASE_URL; ?>/Admin/updateArticle/<?php echo $post['id']; ?>" method="post">
										<div class="row">		
											<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 m-top-bottom">
												<div class="form-group">
													<label for="title">Title:</label>
													<input type="text" id="title" name="title" autocomplete="off" maxlength="128" class="form-control" value="<?php echo $post['title']; ?>">
												</div> <!-- /.form-group -->
												<div class="form-group">
													<label for="content">Content:</label>
													<textarea type="text" id="content" name="content" class="form-control input-lg" rows="15" >
														<?php echo $post['content']; ?>
													</textarea>
												</div> <!-- /.form-group -->
												<div class="form-group">
													<select name="cat" class="form-control">
															<option>Select One</option>
														<?php if( $catlist ) { foreach( $catlist as $cat ) { ?>
															<option <?php if( $cat['id'] == $post['cat'] ) { echo 'selected="selected"'; }?> value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
														<?php } } ?>
													</select>
												</div> <!-- /.form-group -->
												<div class="form-group">
													<button type="submit" class="btn btn-info" name="updatepost">Update Post</button> <!-- /.btn .btn-info -->
													<button type="reset" class="btn btn-default">Clear</button> <!-- /.btn .btn-default -->
												</div> <!-- /.form-group -->
											</div> <!-- /.col-md-12 .col-lg-12 .col-sm-12 .col-xs-12 .m-top-bottom -->
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