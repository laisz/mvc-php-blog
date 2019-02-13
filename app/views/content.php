
		<!-- Content Area Start -->
		<section class="content">
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>	
							<b>HomePage</b>
							<span class="pull-right">
								Welcome! <b>Admin/MVC</b>
							</span> <!-- /.pull-right -->
						</h2>
					</div> <!-- /.panel-heading -->
					<div class="panel-body">
						<div class="row">		
							<div class="col-md-8 border-right">
								<div class="maincontent">	
									<div class="row">
										<?php if( isset( $allpost ) ) { foreach( $allpost as $post ) { ?>
											<div class="col-md-12 m-top-bottom">
												<div class="post post-border-color">
													<div class="title">
														<h2><a href="<?php echo BASE_URL; ?>/Welcome/postDetails/<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
														<p class="post-cat">Category: <a href="<?php echo BASE_URL; ?>/Welcome/postByCat/<?php echo $post['cat']; ?>"><?php echo $post['name']; ?></a></p>
													</div> <!-- /.title -->
													<div class="description">	
														<p><?php

															$text = $post['content'];
															if( strlen( $text ) > 250 ) {
																$text = substr( $text, 0, 250 );
																echo $text;
															// if( strlen( $text ) > 200 ) End here...
															}

														?></p>
													</div> <!-- /.description -->
													<div class="text-right"><a href="<?php echo BASE_URL; ?>/Welcome/postDetails/<?php echo $post['id']; ?>" class="btn btn-default">read more</a></div>
												</div> <!-- /.post .post-border-color -->
											</div> <!-- /.col-md-12 m-top-bottom -->
										<?php } } ?>
									</div> <!-- /.row -->
								</div> <!-- /.maincontent -->
							</div> <!-- /.col-md-8 -->
							