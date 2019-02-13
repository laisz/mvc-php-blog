		<!-- Footer Area Start -->
		<footer class="footer">
			<div class="container">
				<div class="well well-color-border">
					<div class="row">
						<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">		
							<h3>
								MVC Project Developed by Lais Zaman (laisuzzaman@gmail.com)
							</h3>
						</div> <!-- /.col-md-6 col-lg-6 col-sm-12 col-xs-12 -->
						<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
							<h3>
								<span class="pull-right">Knock Me in: www.facebook.com/lzmnn </span> <!-- /.pull-right -->
							</h3>
						</div> <!-- /.col-md-6 col-lg-6 col-sm-12 col-xs-12 -->
					</div>
				</div> <!-- /.well .well-color-border -->
				<div class="go-top">
					<i class="fa fa-arrow-up"></i>
				</div> <!-- /.go-top -->
			</div> <!--/ .container -->
		</footer> <!--/ .footer -->
		<!-- Footer Area End -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo BASE_URL; ?>/js/jquery1.12.4.min.js" type="text/javascript"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo BASE_URL; ?>/js/bootstrap.min.js" type="text/javascript"></script>

		<!-- BEGIN: load jquery -->
	    <script src="<?php echo BASE_URL; ?>/js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
	    <script src="<?php echo BASE_URL; ?>/js/jquery-ui.min.js" type="text/javascript"></script>
	    <script src="<?php echo BASE_URL; ?>/js/table/jquery.dataTables.min.js" type="text/javascript"></script>
	    <!-- END: load jquery -->
		<script src="<?php echo BASE_URL; ?>/js/setup.js" type="text/javascript"></script>
		<script type="text/javascript">			

			$(document).ready(function () {
		        setupLeftMenu();
		        $('.datatable').dataTable();
				setSidebarHeight();
		    });

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

			$( document ).ready( function() {
					
					$( "#accor" ).accordion( {
						collapsible : true
						
							// this option is very helpful..
							// by using it, just by clicking on the title, you can open and close the tabs..
							// and by default which is off or false...and it's a bit painful..
							// so collapsible true is perfect for this..
					} );
					
			} );

		</script>

	</body>
</html>