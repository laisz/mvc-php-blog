		<?php include 'inc_header_footer/header.php'; ?>
		
		<!-- Content Area Start -->
		<section class="content">
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>	
							Just For Test | View All Page with MVC
							<span class="pull-right">
								Welcome! <b>MVC</b>
							</span> <!-- /.pull-right -->
						</h2>
					</div> <!-- /.panel-heading -->
					<div class="panel-body">
						<table class="table table-striped table-responsive">
							<tr>
								<th width="20%">Serial</th>
								<th width="20%">Name</th>
								<th width="20%">Username</th>
								<th width="20%">Email-Address</th>
								<th width="20%">Action</th>
							</tr>
							<tr>
								<td>01</td>
								<td>Kamal Hassan</td>
								<td>kamal</td>
								<td>khassan@gmail.com</td>
								<td>
									<a class="btn btn-primary" href="profile.php?id=1">View</a> <!-- /.btn-btn-primary -->
								</td>
							</tr>
							<tr>
								<td>02</td>
								<td>Babar Azam</td>
								<td>babar</td>
								<td>bazam@gmail.com</td>
								<td>
									<a class="btn btn-primary" href="profile.php?id=2">View</a> <!-- /.btn-btn-primary -->
								</td>
							</tr>
							<tr>
								<td>03</td>
								<td>Umar Amin</td>
								<td>umar</td>
								<td>uamin@gmail.com</td>
								<td>
									<a class="btn btn-primary" href="profile.php?id=3">View</a> <!-- /.btn-btn-primary -->
								</td>
							</tr>
						</table> <!-- /.table .table-striped -->
					</div> <!-- /.panel-body -->
				</div> 
				
			</div> <!--/ .container -->
		</section> <!-- /.content -->
		<!-- Content Area End -->
		
		<?php include 'inc_header_footer/footer.php'; ?>