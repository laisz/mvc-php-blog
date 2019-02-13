<!-- Footer Area Start -->
		<footer class="footer">
			<div class="container">
				<div class="well">
					<div class="row">
						<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">		
							<h3>
								Project Coded and Filed by Lais Zaman
							</h3>
						</div> <!-- /.col-md-6 col-lg-6 col-sm-12 col-xs-12 -->
						<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
							<h3>
								<span class="pull-right">Knock Me in: www.facebook.com/laiso </span> <!-- /.pull-right -->
							</h3>
						</div> <!-- /.col-md-6 col-lg-6 col-sm-12 col-xs-12 -->
					</div>
				</div> <!-- /.well -->
				<div class="go-top">
					<i class="fa fa-angle-up"></i>
				</div> <!-- /.go-top -->
			</div> <!--/ .container -->
		</footer> <!--/ .footer -->
		<!-- Footer Area End -->
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo BASE_URL; ?>/js/jquery1.12.4.min.js" type="text/javascript"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo BASE_URL; ?>/js/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript">			

			$( document ).ready( function() {
				
				$( window ).scroll( function() {
					
					if( $( this ).scrollTop() > 500 ){
						$( ".go-top" ).fadeIn( 2000 );
					}else{
						$( ".go-top" ).fadeOut( 2000 );
					}
					
				} );


				$( ".go-top" ).click( function() {
					

					$( "html, body" ).animate( {
						//scrollTop : "+=300"
						scrollTop : 0
					}, 2000 );

				} );

			} );
			
			$( function() {
				
				$( "[data-toggle='tooltip']" ).tooltip();
				$( "[data-toggle='popover']" ).popover();
				
			} );

		</script>

	</body>
</html>