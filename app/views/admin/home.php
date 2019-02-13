
							<div class="col-md-9">
								<div class="maincontent">
									<div class="title ">
										<h1 class="animated infinite slideInDown">
											<?php 
												
												if( $getusername ) {
													foreach( $getusername as $value ) {
														echo "Welcome <b>" . $value . "</b>";
													}
												}

												// without going to these complex things you can directly get the Session::get() Here.. 
												// but fetching this from method, looks a little bit safer.
											?>
										</h1>
									</div> <!-- /.title -->
								</div> <!-- /.maincontent -->	
							</div> <!-- /.col-md-9 -->
						</div> <!-- .row -->
					</div> <!-- /.panel-body -->
				</div> <!-- /.panel /.panel-default -->
			</div> <!--/ .container -->
		</section> <!-- /.content -->
		<!-- Content Area End -->