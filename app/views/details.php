
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
										<?php if( $postbyid ) { foreach( $postbyid as $post ) { ?>
											<div class="col-md-12">
												<div class="post post-border-color">
													<div class="title">	
														<h2><?php echo $post['title']; ?></h2>
														<p class="post-cat">Category: <a href="<?php echo BASE_URL; ?>/Welcome/postByCat/<?php echo $post['cat']; ?>"><?php echo $post['name']; ?></a></p>
													</div> <!-- /.title -->
													<div class="description">
														<p><?php echo $post['content']; ?></p>
													</div> <!-- /.description -->
												</div> <!-- /.post .post-border-color -->
											</div> <!-- /.col-md-12 -->
										<?php } } ?>
									</div> <!-- /.row -->
								</div> <!-- /.maincontent -->
							</div> <!-- /.col-md-8 -->
							