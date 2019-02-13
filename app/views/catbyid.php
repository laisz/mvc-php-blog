		
		
		<!-- Content Area Start -->
		<section class="content">
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>	
							<b>Category ( By Id )</b>
							<span class="pull-right">
								Welcome! to <b>Category By Id</b>
							</span> <!-- /.pull-right -->
						</h2>
					</div> <!-- /.panel-heading -->
					<div class="panel-body">
						<div class="row">		
							<div class="col-md-8 border-right">
								<div class="maincontent">	
									<h3><b>Our Main Content Goes Here</b></h3>
									<hr> 
									<h4>This is Main Content Area Ontest. <i>On TEST !!</i></h4>
									<hr>
									<?php
										foreach( $catbyid as $val ) {
											echo $val['name'] . "<br>";
										}

									?>
								</div> <!-- /.maincontent -->
							</div> <!-- /.col-md-8 -->