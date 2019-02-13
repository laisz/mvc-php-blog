							<div class="col-md-4">
								<div class="sidecontent">
									<div class="category">	
										<h4><b>Category</b></h4>
										<ul class="list-group list-unstyled">
											<?php if( $catlist ) { foreach( $catlist as $cat ) { ?>	
												<li><a class="list-group-item list-group-item-default" href="<?php echo BASE_URL; ?>/Welcome/postByCat/<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></a></li>
											<?php } } ?>	
										</ul> <!-- /.list-unstyled -->
									</div> <!-- /.category -->
									<div class="latest-post">	
										<h4><b>Latest Post</b></h4>
										<ul class="list-group list-unstyled">
											<?php if( $latestposts ) { foreach( $latestposts as $latestpost ) { ?>
												<li><a class="list-group-item list-group-item-default" href="<?php echo BASE_URL; ?>/Welcome/postDetails/<?php echo $latestpost['id']; ?>"><?php echo $latestpost['title']; ?></a></li>
											<?php } } ?>
										</ul> <!-- /.list-unstyled -->
									</div> <!-- /.latest-post -->
								</div> <!-- /.sidecontent -->	
							</div> <!-- /.col-md-4 -->
						</div> <!-- /.row -->
					</div> <!-- /.panel-body -->
				</div> <!-- /.panel /.panel-default -->
			</div> <!--/ .container -->
		</section> <!-- /.content -->
		<!-- Content Area End -->